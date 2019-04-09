<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
use DB;

class PrivateController extends Controller
{

   public function __construct()
    {
    $this->middleware('auth');
    }


    public function first()
    {

    	
        return view('private_pages/home_page');
    }


    public function aboutus()
    {

    	
        return view('private_pages/about_page');
    }

    public function menu()
    {

    	
        return view('private_pages/menu_page');
    }

    public function contactus()
    {

    	
        return view('private_pages/contact_us');
    }

     public function element_page()
    {

    	
        return view('private_pages/element_page');
    }

    public function blog_home()
    {

    	
        return view('private_pages/blog_hompage');
    }

    public function blog_detail()
    {

    	
        return view('private_pages/blog_detailpage');
    }

    public function food_add()
    {

        
        return view('private_pages/add_food');
    }

    public function cart()
    {
              $project=new Food();
              $project->food=request('food');
              $result = DB::Table('foods')->select('food','prize')->where('food',$project->food)->get();
              
         return view('/private_pages/cart_details',compact('result'));
       
    }
}
