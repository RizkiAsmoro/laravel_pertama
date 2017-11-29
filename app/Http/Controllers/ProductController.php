<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller {
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
