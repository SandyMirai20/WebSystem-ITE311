<?php

namespace App\Controllers;

class Home extends BaseController
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 53f19cc5b3bf96b96cac056b0d7eebf4c08b344d
    public function __construct()
    {
        helper('url'); 
    }

    public function index(): string
    {
<<<<<<< HEAD
=======
        
>>>>>>> 53f19cc5b3bf96b96cac056b0d7eebf4c08b344d
        return view('index');
    }

    public function about(): string
    {
        return view('about');
    }

    public function contact(): string
    {
        return view('contact');
<<<<<<< HEAD
=======
=======
    public function index(): string
    {
        return view('template');
>>>>>>> 1416350463312d3df6c6aa5e38dfa2e762175ccc
>>>>>>> 53f19cc5b3bf96b96cac056b0d7eebf4c08b344d
    }
}
