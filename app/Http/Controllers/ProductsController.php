<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    function index(){
        $title = 'test my products passing view value';
        $desc = 'created by Maskoul';

        // return view('products.index', compact('title', 'desc'));

        $data = [
            "productOne" => 'iPhone',
            "productTwo" => 'Noika'
        ];

        // return view('products.index')->with('data', $data);

        return view('products.index', [
            'data' => $data
        ]);
    }

    function show($name){
        $data = [
            "iPhone" => 'iPhone',
            "Nokia" => 'Noika'
        ];

        return view('products.index', [
            'products'=> $data[$name] ?? "Product " .$name . ' does not exist'
        ]);
    }
}
