<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{

    public $name = 'unkown';

    public function render()
    {
        return view('livewire.post');
    }

    public function myName()
    {
        return $this->name = 'ebenezer';
    }
}
