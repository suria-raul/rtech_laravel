<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class product extends Model
{
    public function addproduct($request, $fileNameToStore){
    	return DB::table('products')->insert(array('created_at'  => \Carbon\Carbon::now(), 
    											   'name' 		 => $request['name'],
    											   'description' => $request['desc'],
    											   'price' 		 => '$'.$request['price'],
    											   'image'		 => $fileNameToStore));
    }

    public function products(){
    	return DB::table('products')->get();
    }
}
