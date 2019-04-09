<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
     public function first()
    {

    	
        return view('public_pages/home_page');
    }


    public function aboutus()
    {

    	
        return view('public_pages/about_page');
    }

    public function menu()
    {

    	
        return view('public_pages/menu_page');
    }

    public function contactus()
    {

    	
        return view('public_pages/contact_us');
    }

     public function element_page()
    {

    	
        return view('public_pages/element_page');
    }

    public function blog_home()
    {

    	
        return view('public_pages/blog_hompage');
    }

    public function blog_detail()
    {

    	
        return view('public_pages/blog_detailpage');
    }
}
