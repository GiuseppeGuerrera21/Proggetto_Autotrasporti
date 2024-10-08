<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        return view('home');
    }

    public function serviceArea(){
        return view('service');
    }

    public function index(){
        return view('index');
    }
    public function prev(){
        return view('contact');
    }

    // public function contactSend(Request $request){
    //     return view('contact');
    // }
}
