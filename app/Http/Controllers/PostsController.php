<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index()
    {
//        $posts = DB::table('posts')
//            ->get();

//        $posts = DB::table('posts')
//            ->select('body')
//            ->distinct()
//            ->orderBy('body', 'DESC')
//            ->get();
//            ->where('id', 7);

//        $posts = DB::table('posts')
//            ->select('body')
//            ->find(100);

//        $posts = DB::table('posts')
//            ->select('body')
//            ->min('id');

//        $posts = DB::table('posts')
//            ->select('body')
//            ->sum('id');

        // Perform an insert
//        $posts = DB::table('posts')
//            ->insert([
//                'title'=>'lol',
//                'body'=>'lalaalalala'
//            ]);

        // Perform an update
//        $posts = DB::table('posts')
//            ->where('id','=',4)
//            ->update([
//                'title'=>'cambio',
//                'body'=>'oh yeah'
//            ]);

        // Perform a delete
//        $posts = DB::table('posts')
//            ->where('id','=',4)
//            ->delete();

        $posts = DB::table('posts')
            ->get();

        dd($posts);
    }
}
