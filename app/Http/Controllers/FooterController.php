<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use App\Models\mails;
use Illuminate\Support\Facades\Validator;

class FooterController extends Controller
{
    public function store(Request $request)
    {
        
        mails::create([
            'email'=> $request['email']
        ]);

        return redirect()-> route('home');
    }
}
