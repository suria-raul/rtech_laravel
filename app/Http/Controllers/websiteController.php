<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function index(){
    	return view('website.body.index');
    }

    public function about(){
    	return view('website.body.about');
    }

    public function services(){
    	return view('website.body.services');
    }

    public function contact(){
    	return view('website.body.contact');
    }
}
