<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class WebsiteController extends Controller
{
    public function index(Request $request){
        $data=[
            'name'=>$request->name,
            'email'=>$request->email,
            'message'=>$request->message,
             ];
      
    }
}
