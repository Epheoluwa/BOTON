<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mails;
use App\Models\contacts;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class InfoController extends Controller
{
    public function  __construct()
    {
       $this->middleware(['auth']);
    }

    public function index()
    {
        $result = DB::select('select * from mails');
        $con = DB::select('select * from contacts');

        return view('info', compact('result','con'));
    }

    
}


