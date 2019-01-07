<?php

namespace App\Http\Controllers\Store;

use App\CompanyRoom;
use App\Post;
use App\Room;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StoreController extends Controller
{

    //Post details
    public function pSingle($slug){

        $product = Post::where('slug', $slug)->first();

        return view('store.p-single', compact('product'));


    }

    //Post details
    public function roomDetails($slug){

        $product = Room::where('slug', $slug)->first();

        return view('store.room_details', compact('product'));


    }



    //index
    public function index()
    {

        $featured_destination = Post::where('status_id', 'LIKE', '1')
            ->latest()
            ->take(10)
            ->get();
        $tour_packages = Post::where('status_id', 'LIKE', '1')
            ->where('category_id', 'LIKE', '1')
            ->take(5)
            ->get();
        $hotel_rooms = CompanyRoom::latest()
            ->take(5)
            ->get();

        return view('store.index', compact('featured_destination', 'tour_packages', 'hotel_rooms'));
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
