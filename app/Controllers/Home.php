<?php

namespace App\Controllers;

class Home extends BaseController
{
<<<<<<< HEAD
    public function __construct()
    {
        helper('url'); 
    }

    public function index(): string
    {
        
        return view('index');
    }

    public function about(): string
    {
        return view('about');
    }

    public function contact(): string
    {
        return view('contact');
=======
    public function index(): string
    {
        return view('template');
>>>>>>> 1416350463312d3df6c6aa5e38dfa2e762175ccc
    }
}
