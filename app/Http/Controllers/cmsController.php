<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use Session;
use Redirect;

class cmsController extends Controller
{
	var $data = [];
	var $p;
	public function __construct(){
		$this->p = new product; 
	}

	public function index(){
	   	return view('cms.body.index');
	}

	public function addview(){
	   	return view('cms.body.add');
	}

	public function add(Request $request){

        if($request->hasFile('image')){
        	
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename =pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

        }else{
        	
            $fileNameToStore = 'noimage.jpg';
        }

		$this->data['result'] = $this->p->addproduct($request->all(), $fileNameToStore);
		if ($this->data['result']) {

			return 'Success!';

		} else {

			return 'Failed!';

		}
	}
}
