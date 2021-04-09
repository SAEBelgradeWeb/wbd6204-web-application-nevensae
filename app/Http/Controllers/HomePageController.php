<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomePageController extends Controller
{
    public function index()
    {
        $contests = DB::table('contests')->get();

        return view('home', [
            'contests' => $contests
        ]);
    }
}
