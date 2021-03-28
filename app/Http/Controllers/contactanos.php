<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contactanos extends Controller
{
    public function index(Request $request)
    {
      

        return view('ux.contactanos');
    }
}
