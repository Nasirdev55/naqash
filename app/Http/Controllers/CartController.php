<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\ProductColor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CartController extends Controller
{
    public function cartDelete(Request $request)
    {
        $session_id = Session::get('session_id');
        $pro = Cart::where('product_id',$request->product_id)->where('session_id',$session_id)->first();
       $pro->delete();
        return response(['response' => "Delete Successfully"]);
    }
    public function cartUpdate(Request $request)
    {
        $pro = Cart::where('product_id',$request->product_id)->first();
        $pro->quantity = $request->quantity;
        $pro->total_price = $request->quantity * $pro->price;
        $pro->save();
        return response(['message' => 'cart update successfully']);
    }
    public function showCarts(Request $request)
    {
        $session_id = Session::get('session_id');
        $carts = Cart::where('session_id',$session_id)->with('products','products.images')->get();
//        $carts = Cart::where('session_id',$session_id)->with('products','products.images')->get();
        return view('site.cart',compact('carts'));
    }
    public function cart(Request $request,$product)
    {
        Session::forget('total_price');


        $data = $request->validate([
            'product_id' => '',
            'category_id' => '',
            'brand_id' => '',
            'color' => '',
            'size' => '',
            'price' => '',
            'total_price' => '',
            'quantity' => '',
            'email' => '',
            'session_id' => '',
        ]);

        if (Auth::user() == false) {
            $data['email'] = null;
        } else {
            $data['email'] = Auth::user()->email;
        }


        $session_id = Session::get('session_id');
        if (empty($session_id)) {
            $session_id = Str::random(40);
            Session::put('session_id', $session_id);
        }

        $total_price = $data['price'] * $data['quantity'];

        $countData = Cart::where([

            'product_id' => $data['product_id'],
            'category_id' => $data['category_id'],
            'brand_id' => $data['brand_id'],
//            'color' => $data['color'],
//            'size' => $data['size'],
//            'quantity' => $data['quantity'],
//            'price' => $data['price'],
//            'total_price' => $total_price,
            'email' => $data['email'],
            'session_id' => $session_id,
        ])->count();


        if (Auth::user() && $countData < 1) {


            Cart::create([
                'product_id' => $data['product_id'],
                'category_id' => $data['category_id'],
                'brand_id' => $data['brand_id'],
                'color' => $data['color'],
                'size' => $data['size'],
                'quantity' => $data['quantity'],
                'price' => $data['price'],
                'total_price' => $total_price,
                'session_id' => $session_id,
                'email' => auth()->user()->email,
            ]);

//            return j;
            return response()->json(['status' => 1, 'message' => "Add To Cart Successfully!"], 200);


        }

        elseif ($countData < 1) {

            Cart::create([
                'product_id' => $data['product_id'],
                'category_id' => $data['category_id'],
                'brand_id' => $data['brand_id'],
                'color' => $data['color'],
                'size' => $data['size'],
                'quantity' => $data['quantity'],
                'price' => $data['price'],
                'total_price' => $total_price,
                'session_id' => $session_id,
                'email' => null,
            ]);



            return response()->json(['status'=> '1', "message" =>'Add to cart successfully - Please Login for order']);
        } else {
            return response()->json(['status'=> '0', "message" =>'Cart Already Exist']);

        }

    }
}
