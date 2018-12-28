<?php

namespace App\Http\Controllers\Store;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    //index
    public function index()
    {
        return view('store.index');
    }


    //about
    public function about()
    {
        return view('store.about');
    }

    //hotels
    public function hotels()
    {
        return view('store.hotels');
    }


    //tours
    public function tours()
    {
        return view('store.tours');
    }


    //flight
    public function flight()
    {
        return view('store.flight');
    }

    //contact
    public function contact()
    {
        return view('store.contact');
    }



}
