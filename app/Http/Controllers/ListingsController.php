<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\startups;

class ListingsController extends Controller
{
    //
    public function search_startups(Request $request)
    {
        $category_id = $request->categories;
        $location_id = $request->location;
        $category= category::findorfail($category_id);
        $startups = startups::query()->where('category_id', $category_id)->Where('state_id', $location_id)->paginate(6);
        //dd($search);
        $startups->appends(['categories' => $category_id, 'location' => $location_id]);
        return view('search', compact('startups','category'));

    }
    public function startups()
    {
        //dd($search);
        return view('search');

    }
}
