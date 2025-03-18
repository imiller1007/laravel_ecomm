<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        ContactMessage::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ]);

        Mail::raw("Message from {$request->name} ({$request->email}):\n\n{$request->message}", function($mail) use ($request) {
            $mail->to('imiller1007@yahoo.com')
                ->subject("New Contact Message");
        });

        return redirect()->route('contact.show')->with('success', 'Your message has been sent!');
    }
}
