<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class websiteController extends Controller
{
    var $data = [];
    var $prod;
    public function __construct(){
        $this->prod = new product;
    }

    public function index(){
        $this->data['product'] = $this->prod->products();
    	return view('website.body.index', $this->data);
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

    public function view($id){
        // $this->data['prod'] = $this->prod->viewproduct($id);
        return 'UnderConstruction';
    }
}
