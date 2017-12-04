<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller {
    function index() {
        $products = DB::select("select * from products");
        ($products);
        $data = [
            'products' => $products
        ];
        return view ('product/index', $data);
    }
    
    function add(Request $request){
        $data = [
            'success' => false
        ];
        if ($request->isMethod('post')){
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');
        $productRating = $request->input('product_rating');
        
        $returnValue = DB::insert('insert into products(name,price,rating) values(?,?,?)',
        [$productName,$productPrice,$productRating]);
        
        if($returnValue){
            $data =[
                'success' => 1
            ];
        }
    }


        return view('product/add',$data);
        }

    function discount(Request $request){
        
        $productName = $request->input('product_name');
        $productPrice = $request->input('product_price');
        $productDiscount = $request->input('product_discount');

        $payment = $productPrice - (($productDiscount * $productPrice)/100);

        $data =[
            'productName'=>$productName,
            'productPrice'=>number_format($productPrice,0,',',','),
            'productDiscount'=>$productDiscount,
            'payment'=>number_format($payment,0,',',',')

        ];

        return view('product/discount', $data);
    }
}
