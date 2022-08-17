<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function Register() {
        return view('form');
    }

    public function Welcome(Request $request) {
        // dd($request->all());

        $firstName = $request['first-name'];
        $lastName = $request['last-name'];
        $gender = $request['gender'];
        $nationality = $request['nationality'];
        $languages = $request['language'];
        $bio = $request['bio'];

        return view('welcome', compact('firstName', 'lastName', 'gender', 'nationality', 'languages', 'bio'));
    }
}
