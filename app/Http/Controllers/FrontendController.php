<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.frontend.home');
    }

    public function submitForm(Request $request)
    {
        // Validate form data
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Send email
        Mail::to('sameerthakuri912@icloud.com')->send(new ContactFormMail($request->all()));

        // Check if the response is "OK"
        $data = "OK"; // You can replace this with your actual data

        if (trim($data) == "OK") {
            return response("OK", 200); // Sending "OK" with a 200 OK status code
        } else {
            return response("Not OK", 400); // Sending "Not OK" with a 400 Bad Request status code
        }
    }
}
