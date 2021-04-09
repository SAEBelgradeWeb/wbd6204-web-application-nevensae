<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function show()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        Contact::create([
           'message' => request('message'),
           'name' => request('name'),
           'email' => request('email')
        ]);

        return redirect('contact');
    }
}
