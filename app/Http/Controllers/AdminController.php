<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function first()
    {

    	
        return view('admin_pages/admin_page');
    }

    public function data_table()
    {

    	$details  = \App\User::all();
              return view('/admin_pages/data_table',compact('details'));

        
    }
}
