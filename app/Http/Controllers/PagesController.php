<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index()
    {
        return \view('index');
    }

    public function about()
    {
        $names = ['Frank','Rey','Miguel','José'];
        return \view('about')->with('names', $names);
    }
}
