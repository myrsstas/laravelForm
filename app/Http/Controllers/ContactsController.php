<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Date;
use Illuminate\View\View;

class ContactsController extends Controller
{
    public function upload(): RedirectResponse {
        // TODO: Handle uploaded file,

        // TODO: clear all records from database,
        $this->clearAllRecords();
        // TODO: save all records from file to database

        // TODO: redirect browser to "/contacts"
        return $this->redirectToContacts();
    }

    public function startFromZero(): RedirectResponse {
        // TODO: Clear all records from data
        $this->clearAllRecords();
        // TODO: and redirect browser to "/contacts"
        return $this->redirectToContacts();
    }

    public function contacts(): View {
        // TODO: Get all contacts from database and pass them to the view
        $allContacts = Contacts::all()->all();
        return view('contacts')-> with('contacts', $allContacts) ;
    }

    public function addContact(): View {
        return view('addContactForm');
    }

    public function storeContact(Request $request): View {
        //save contacts to DB
        $postData = $request->post();

        $name = $postData['name'];
        $surname = $postData['surname'];
        $date_of_birth =  $postData['dateOfBirth'];
        $phone_number = $postData['phoneNumber'];
        $email = $postData['email'];
        $address = $postData['address'];
        $city = $postData['city'];
        $notes = $postData['notes'];


        $contactToStore = new Contacts();
        $contactToStore->name = $name;
        $contactToStore->surname = $surname;
        $contactToStore->date_of_birth = $date_of_birth;
        $contactToStore->phone_number = $phone_number;
        $contactToStore->email = $email;
        $contactToStore->address = $address;
        $contactToStore->city = $city;
        $contactToStore->notes = $notes;

        $contactToStore->save();

        return view('addContactForm');
    }

    private function clearAllRecords() {
        // TODO: Clear all records
        Contacts::truncate();
    }

    private function redirectToContacts(): RedirectResponse
    {
        // TODO: and redirect browser to "/contacts"
        return redirect('/contacts');
    }
}
