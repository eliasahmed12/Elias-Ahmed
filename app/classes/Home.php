<?php

namespace App\classes;

class Home
{
    public $message;

    public function __construct()
    {
        $this->message = "Hello World";
    }

    public function index()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
}