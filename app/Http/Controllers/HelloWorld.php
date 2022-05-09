<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorld extends Controller
{
    public function show(){
        $posts = "number of data";
        return view("pages/hello-world",compact("posts"));
    }

    public function getUser($id){
        $data = "user profile " . $id;
        return view("pages/profile",compact("data"));
    }
    
}
