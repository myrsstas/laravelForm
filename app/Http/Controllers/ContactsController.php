<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class ContactsController extends Controller
{
    public function exportData(): BinaryFileResponse
    {
        $allContacts = Contacts::all()->all();
        $content = "";
        foreach ($allContacts as &$contact) {
            $content .= $contact->__toString() . "\n";
        }

        $filename = $this->writeContentToFile($content);
        return response()->download($filename);

    }

    private function writeContentToFile(string $content): string
    {
        $filename = "./../storage/app/ExportedContacts.txt";
        $file = fopen($filename, "w");
        fwrite($file, $content);
        fclose($file);
        return $filename;
    }

    public function upload(Request $request): RedirectResponse
    {
        // TODO: clear all records from database,
        $this->clearAllRecords();

        // TODO: Handle uploaded file,
        try {
            $content = $request->file('previousContactsFile')->get();
            // TODO: save all records from file to database
            $records_original = explode("\n", $content);
            $records = array_slice($records_original, 0, sizeof($records_original) - 1);

            foreach ($records as $record) {
                $this->createRecord($record);
            }

        } catch (FileNotFoundException $e) {
        }

        // TODO: redirect browser to "/contacts"
        return $this->redirectToContacts();
    }

    private function createRecord(string $record): void {
        $partsOfRecord_original = explode(";", $record);
        $partsOfRecord = array_slice($partsOfRecord_original, 1, sizeof($partsOfRecord_original) - 1);

        $contactToStore = new Contacts();
        $contactToStore->name = $partsOfRecord[0];
        $contactToStore->surname = $partsOfRecord[1];
        $contactToStore->date_of_birth = $partsOfRecord[2];
        $contactToStore->phone_number = $partsOfRecord[3];
        $contactToStore->email =$partsOfRecord[4];
        $contactToStore->address = $partsOfRecord[5];
        $contactToStore->city = $partsOfRecord[6];
        $contactToStore->notes = $partsOfRecord[7];

        $contactToStore->save();
    }

    public function startFromZero(): RedirectResponse
    {
        // TODO: Clear all records from data
        $this->clearAllRecords();
        // TODO: and redirect browser to "/contacts"
        return $this->redirectToContacts();
    }

    public function contacts(): View
    {
        // TODO: Get all contacts from database and pass them to the view
        $allContacts = Contacts::all()->all();
        return view('contacts')->with('contacts', $allContacts);
    }

    public function addContact(): View
    {
        return view('addContactForm');
    }

    public function storeContact(Request $request): View
    {
        //save contacts to DB
        $postData = $request->post();

        $name = $postData['name'];
        $surname = $postData['surname'];
        $date_of_birth = $postData['dateOfBirth'];
        $phone_number = $postData['phoneNumber'];
        $email = $postData['email'];
        $address = $postData['address'];
        $city = $postData['city'];
        $notes = $postData['notes'];


        $contactToStore = new Contacts();
        $contactToStore->name = $name;
        $contactToStore->surname = $surname ?: " - ";
        $contactToStore->date_of_birth = $date_of_birth ?: "0000-00-00";
        $contactToStore->phone_number = $phone_number;
        $contactToStore->email = $email;
        $contactToStore->address = $address ?: " - ";
        $contactToStore->city = $city ?: " - ";
        $contactToStore->notes = $notes ?: " - ";

        $contactToStore->save();

        return view('addContactForm');
    }

    private function clearAllRecords()
    {
        // TODO: Clear all records
        Contacts::truncate();
    }

    private function redirectToContacts(): RedirectResponse
    {
        // TODO: and redirect browser to "/contacts"
        return redirect('/contacts');
    }
}

