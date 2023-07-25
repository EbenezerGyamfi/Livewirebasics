<?php

namespace Tests\Feature;

use App\Http\Livewire\ContactForm;
use App\Models\Contact;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function post_creation_page_contains_livewire_component()
    {
        $response = $this->get('/home');

        $response->AssertSeeLivewire(ContactForm::class);
    }

    public function test_contact_form_store_into_datatbase()
    {
        Livewire::test(ContactForm::class)
            ->set('title', 'stanley title')
            ->set('email', 'email@example.com')
            ->call('storecontact')
            ->assertStatus(200);
    }


    public function test_contact_form_validation_reques()
    {
        Livewire::test(ContactForm::class)
            ->set('title', 'this is the second title')
            ->call('storecontact')
            ->assertHasNoErrors(['title' => 'required'])
            ->assertStatus(200);
    }
}
