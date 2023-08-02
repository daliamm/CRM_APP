<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ContactsController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $contacts = $user->contacts()->paginate(10);

        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(StoreContactRequest $request)
    {
        $validatedData = $request->validated();
        $Data = $validatedData;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('contacts', 'public');
            $Data['image'] = $imagePath;
        }

        auth()->user()->contacts()->create($Data);

        return redirect()->route('contacts.index')->with('success', 'Contact has been created successfully!');
    }

    public function show($id)
    {
        $contact = Contact::find($id);
        return view('contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('contacts.edit', compact('contact'));
    }

    public function update(UpdateContactRequest $request, Contact $contact)
    {
        $validatedData = $request->validated();
        $Data = $validatedData;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('contacts', 'public');
            if ($contact->image) {
                \Storage::delete('public/' . $contact->image);
            }
            $Data['image'] = $imagePath;
        }

        $contact->update($Data);

        return redirect()->route('contacts.index')
        ->with('success', 'Contact has been updated successfully!');
    }

    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();
        return redirect()->route('contacts.index')
        ->with('success', 'Contact has been deleted successfully!');
    }

    public function approveStatus(Contact $contact)
    {
        $contact->update(['is_approved' => true]);

        return response()->json(['is_approved' => true]);
    }
}
