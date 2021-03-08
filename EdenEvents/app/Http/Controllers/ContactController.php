<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'youtube' => 'required|url',
            'twitter' => 'required|url',
            'facebook' => 'required|url',
            'instagram' => 'required|url',
            'email' => 'required|email',
            'whatsapp' => 'required'
        ]);

        if(strlen($request->youtube) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->youtube, $match))
            {
                $data = $match[1];
            }
            else
                return false;
        }

        Contact::create([
            'youtube' => $data,
            'twitter' => $request->twitter,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'email' => $request->email,
            'whatsapp' => $request->whatsapp

        ]);

        return redirect()->route('contacts')->with('message', 'data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact, $id)
    {
        $contact = Contact::findorFail($id);
        return view('admin.contacts.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact, $id)
    {
        $contact = Contact::findorFail($id);
        $contact->update($request->all());

        return redirect()->route('contacts')->with('message', 'data Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact, $id)
    {
        $contact = Contact::findorFail($id);
        $contact->delete();

        return redirect()->route('contacts')->with('message', 'data deleted successfully');
    }
}
