<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function shop(Request $request)
    {
        $products = Product::get();
        $catgories = Category::get();
        return view('site.product.shop',compact('products','catgories'));
    }

//    function action(Request $request)
//    {
//        if($request->ajax())
//        {
//            $output = '';
//            $query = $request->get('query');
//            if($query != '')
//            {
//                $data = Product::where('name', 'like', '%'.$query.'%')
//                    ->orderBy('id', 'desc')->get();
//
//            }
//            else
//            {
//                $data = DB::table('products')
//                    ->orderBy('CustomerID', 'desc')
//                    ->get();
//            }
//            $total_row = $data->count();
//            if($total_row > 0)
//            {
//                foreach($data as $row)
//                {
//                    $output .= '
//        <tr>
//         <td>'.$row->CustomerName.'</td>
//         <td>'.$row->Address.'</td>
//         <td>'.$row->City.'</td>
//         <td>'.$row->PostalCode.'</td>
//         <td>'.$row->Country.'</td>
//        </tr>
//        ';
//                }
//            }
//            else
//            {
//                $output = '
//       <tr>
//        <td align="center" colspan="5">No Data Found</td>
//       </tr>
//       ';
//            }
//            $data = array(
//                'table_data'  => $output,
//                'total_data'  => $total_row
//            );
//
//            echo json_encode($data);
//        }
//    }



public function category(Request $request,$id)
    {
       $products = Product::where('category_id',$id)->get();
       $categories = Category::where('id',$id)->first();
//       dd($categories);
       return view('site.product.product_category',compact('products','id','categories'));

    }
}
