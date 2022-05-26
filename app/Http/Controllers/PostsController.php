<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    function index(){
        $id = 4;
        $posts = DB::table('posts')
            ->oldest()
            ->get();
        dd($posts);
    }
}
