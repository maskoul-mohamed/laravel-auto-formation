<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    function index(){
        // normal query
        // $posts = DB::select('select * from posts where id = :id', ['id' => 3]);
        $posts = DB::select('select * from posts');

        // query builder
        // $id = 4;
        // $posts = DB::table('posts')
        //     ->where('id', $id)
        //     ->update([
        //         'title' => 'Updated post'
        //     ]);
        dd($posts);
    }
}
