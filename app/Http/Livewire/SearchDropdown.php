<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{


    public $search;
    public $searchResults = [];

    public function updatedSearch($value)
    {

        if (strlen($this->search) < 3) {

            return $this->searchResults = [];
        }
        $response = Http::get('https://itunes.apple.com/search?term=' . $this->search . '&limit=10');

        $this->searchResults = $response->json()['results'];
    }

    public function render()
    {
        // dd($response->json()['results']);
        return view('livewire.search-dropdown');
    }
}
