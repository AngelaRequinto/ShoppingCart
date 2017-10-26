<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\makes;
use App\make;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$mades = made::all();

        return view('home');
    }
    public function womenpage()
    {
        return view('women');
    }
    public function menpage()
    {
        return view('men');
    }
    public function childrenpage()
    {
        return view('children');
    }
    public function bagpage()
    {
        return view('bag');
    }
    public function shoespage()
    {
        return view('shoes');
    }
    public function shoppage()
    {
        return view ('home');
    }
    public function addcart()
    {
        return view ('Cart');
    }
    public function cart(Request $request)
    { 
         $name=$request->input('name');
         $price=$request->input('price');
         

        $make = new makes;

        $make->name = $request->name;
        $make->price = $request->price;
 
        $make->save();
        $make = makes::orderBy('id')->get();

        // $student=array('firstname'=>$firstName,"lastname"=>$lastName,"id number"=>$idNumber,"course"=>$course,"address"=>$address);

        return view('home',['make'=>$make]);


}

   }



