<?php

namespace App\Http\Controllers\Guests;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index(){

        $trains = Train::all();

        return view('home', compact('trains'));

    }

    public function details($id){
        $train = Train::findOrFail($id);
        return view('details', compact('train'));
    }
}
