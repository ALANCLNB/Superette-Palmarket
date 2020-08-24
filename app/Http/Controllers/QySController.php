<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QySController extends Controller
{
   
    
    public function index()
    {
        return view('dashboard.qys.qys');
    }


}
