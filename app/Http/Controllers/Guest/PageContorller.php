<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;

class PageContorller extends Controller
{
    public function index()
    {
        $trains = Train::all();
        return view('trains', compact('trains'));
    }
}
