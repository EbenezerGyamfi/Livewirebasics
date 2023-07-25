<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Http\Request;
use Livewire\Component;

class ContactForm extends Component
{

    public $title;
    public $email;

    protected $rules = [
        'title' => 'required',
        'email' => 'required'
    ];


    public function updated($propertyName)

    {

        $this->validateOnly($propertyName);
    }


    public function storecontact()
    {

        $validatedData = $this->validate();



        Contact::create($validatedData);

        session()->flash('message', 'Post successfully updated.');

        $this->title = '';
        $this->email = '';

        return back();
    }


    public function render()
    {
        return view('livewire.contact-form');
    }
}
