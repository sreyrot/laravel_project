<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function action(){
        $text = "Action";
        return view('action', compact('text'));
    }
    public function join(){
        $text = "Join";
        return view('join', compact('text'));
    }
    public function about(){
        $text = "About";
        return view('about', compact('text'));
    }
    public function contact(){
        $text = "Contact";
        return view('contact', compact('text'));
    }
    public function shoCustomer(){
        // $text = "customer";
        $customers = array();
        return view('customer', compact('customers'));
    }
}
