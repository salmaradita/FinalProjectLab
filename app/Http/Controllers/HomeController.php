<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $homes = Home::all();
        return view('Home', compact('homes'));
    }

    public function detailproduct($id)
    {
        $home = Home::where('id', $id)->first();
        return view('detail_product', compact('home'));
    }

}

