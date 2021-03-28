<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\state;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = category::all();
        $states = state::all();
        return view('welcome', compact('states', 'categories'));
    }
}
