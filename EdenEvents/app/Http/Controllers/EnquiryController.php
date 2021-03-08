<?php

namespace App\Http\Controllers;

use App\Mail\Enquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'event' => 'required',
            'email' => 'required',
            'message' => 'required',
            'numberofguests' => 'required',
            'date' => 'required',
            'phone' => 'required'
        ]);

        $details = [
            'name' => $request->name,
            'event' => $request->event,
            'email' => $request->email,
            'message' => $request->message,
            'numberofguests' => $request->numberofguests,
            'date' => $request->date,
            'phone' => $request->phone
        ];

        Mail::to('h.abdullahi1995@gmail.com')->send(new Enquiry($details));
        return redirect()->back();
    }
}
