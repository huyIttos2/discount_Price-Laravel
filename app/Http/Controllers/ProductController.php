<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function cal(Request $request)
    {
        $productName = $request->productName;
        $listPrice = $request->listPrice;
        $percent = $request->percent;
        $discountAmount = $listPrice*$percent/100;
        $discountPrice = $listPrice-$discountAmount;
        return view('show',compact('productName','listPrice','percent','discountAmount','discountPrice'));
    }
}
