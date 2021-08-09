<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detailsProduct(Product $product_id)
    {
        $products = Product::get();
        return view('site.product.productDetails',compact('product_id','products'));

    }

    public function aboutUs(Request $request)
    {
        return view('site.about');
    }

    public function contact(Request $request)
    {
        return view('site.contact');
    }

    public function faq(Request $request)
    {
        return view('site.faq');
    }
}
