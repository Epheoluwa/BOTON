<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\contacts;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        
        contacts::create([
            'name' => $request['name'],
            'email'=> $request['email'],
            'ph_number' => $request['ph_number'],
            'message' => $request['message']
        ]);

        return redirect()-> route('contact');
    }
}

