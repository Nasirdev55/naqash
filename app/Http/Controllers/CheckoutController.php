<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use MongoDB\Driver\Session;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request,$user)
    {
      return view('site.checkout');
    }

    public function order(Request $request)
    {
        $validator = Validator::make($request->all(), [
//            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
//            'zip' => 'required',
            'phone' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['status'=> 0,'message'=>$validator->messages()->first(), 200]);
        }

        $session_id = \Illuminate\Support\Facades\Session::get('session_id');
        $carts = Cart::where('session_id',$session_id)->get();
       $orders =  Order::create([
            'session_id' => $session_id,
            'email' => Auth::user()->email,
            'address' => $request->address,
            'order_date' => Carbon::now(),
            'city' => $request->city,
            'phone' => $request->phone,
//            'zip' => $request->zip,
        ]);


        foreach ($orders as $order){

            foreach ($carts as $cart){

            OrderProduct::create([
                'order_id' => $order,
                'product_id' => $cart->product_id,
                'quantity' => $cart->quantity,
            ]);

            }
        }

        return response()->json(['status' => '1', 'message' => 'Order Place Successfully']);
    }
}
