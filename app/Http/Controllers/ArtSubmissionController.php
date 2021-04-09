<?php

namespace App\Http\Controllers;

use App\Models\ArtSubmission;
use Illuminate\Http\Request;

class ArtSubmissionController extends Controller
{
    public function show()
    {
        return view('submission');
    }

    public function store(Request $request)
    {
        ArtSubmission::create([
           'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'country' => request('country'),
            'address' => request('address'),
            'email' => request('email'),
            'art_title' => request('art_title'),
            'art_keywords' => request('art_keywords'),
            'art_description' => request('art_description'),
        ]);
        return redirect()->route('submission');
    }
}
