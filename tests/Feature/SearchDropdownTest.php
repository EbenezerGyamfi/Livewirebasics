<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchDropdown;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class SearchDropdownTest extends TestCase
{
   

    public function test_search_input_exist(){

        Livewire::test(SearchDropdown::class)
        ->assertDontSee('Amos Lee')
        ->set('search', 'Amos Lee')
        ->assertSee('Amos Lee');
    }

    public function test_search_input_does_not_exist()
    {

        Livewire::test(SearchDropdown::class)
        ->set('search', 'A++++0-4769jnwe')
        ->assertSee('no result for');
    }

}
