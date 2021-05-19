<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {

        $title = "Welcome from the controler";
        $description = "A brief description";

        $data = [
            'productOne' => 'iphone',
            'productTwo' => 'samsung'
        ];


        //Compact method
//        return view('products/index', \compact('title','description'));

        //With method
//        return view('products.index')
//            ->with('title', $title)
//            ->with('description', $description)
//            ->with('data', $data);

        //Directly in the view
        return view('products.index', [
            'data' => $data,
            'title' => $title,
            'description' => $description
        ]);
    }

    public function about()
    {
        return 'About page';
    }
}
