<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\JsonResponse;


class AuthenticationController extends Controller
{
    public function view(Request $request)
    {

        $products = Product::with('images')->inRandomOrder()
            ->limit(8) // here is yours limit
            ->get();
        return view('site.layouts.slider',compact('products'));
    }


    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => ['required','email'],
            'password' => 'required',
        ]);


        if ($validator->fails()) {
            return response()->json(['status'=> 0,'message'=>$validator->messages()->first(), 200]);
        }

        $credentials = $request->only('email', 'password');
        $remember = ($request->remember) ? true : false;
        if (Auth::attempt($credentials, $remember))
        {
            return response()->json(['status' => 1 , 'message' => 'WELCOME']);

        }

        return response()->json(['status' => 0 , 'message' => 'Invalid Credentials']);
    }

    public function register(Request $request)
    {



        $customMsgs = [
            'fname.required' => 'Please provide First Name',
            'lname.required' => 'Please provide Last Name',
            'email.required' => 'Please provide Email',
            'password.required' => 'Please provide Password',
//            'name.required' => 'Please provide Full Name',
        ];
        $validator = Validator::make($request->all(),
            [
                'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email|unique:users',
                "password" => "required",
            ], $customMsgs
        );

        if ($validator->fails()) {
            return response()->json(['status' => 0, 'message' => $validator->messages()->first()], 200);
        }

        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return response()->json(['status' => 1, 'message' => "Registered Successfully!"], 200);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/site');
    }
    protected function guard()
    {
        return Auth::guard();
    }
    protected function loggedOut(Request $request)
    {
        $request->session()->forget('session_id');
    }
}
