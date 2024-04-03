<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    // Display a listing of the contacts.
    public function index()
    {
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    // Store a newly created contact in storage.
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts|email',
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'nullable|size:2',
            'zip_code' => 'required',
        ]);

        $contact = Contact::create($request->all());
        return response()->json($contact, 201);
    }

    // Display the specified contact.
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return response()->json($contact);
    }

    // Update the specified contact in storage.
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email,' . $id,
            'phone' => 'required',
            'country' => 'required',
            'city' => 'required',
            'state' => 'nullable|size:2',
            'zip_code' => 'required',
        ]);

        $contact = Contact::findOrFail($id);
        $contact->update($request->all());

        return response()->json($contact, 200);
    }

    // Remove the specified contact from storage.
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return response()->json(null, 204);
    }
}
