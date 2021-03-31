<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\state;
use App\Models\startups;

class StartupsPagination extends Component
{
    use WithPagination;

    public $searchCompanyName;
    public $categories_id;
    public $states_id;

    public function render()
    {   
        $categories = category::all();
        $states = state::all();
        $searchCompanyName = '%'.$this->searchCompanyName.'%'; 
        $startups = startups::where('name', 'LIKE', $searchCompanyName)->orderBy('id', 'DESC')->paginate(6);
        return view('livewire.startups-pagination', compact('startups','states','categories'));
    }
}
