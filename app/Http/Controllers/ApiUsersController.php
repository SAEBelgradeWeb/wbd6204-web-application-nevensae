<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApiUsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('api.users-index', [
            'users' => $users
        ]);
    }

    public function edit(Request $request)
    {
        $users = DB::table('users');
        return view('api.users-edit',[
            'user' => $request
        ]);
    }


}
