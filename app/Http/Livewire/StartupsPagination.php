<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\startups;

class StartupsPagination extends Component
{
    use WithPagination;
    public function render()
    {
        $startups = startups::paginate(6);
        return view('livewire.startups-pagination', compact('startups'));
    }
}
