<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
<<<<<<< HEAD
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');

// Authentication routes
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dashboard', 'Auth::dashboard');
=======
<<<<<<< HEAD
$routes->get('about', 'Home::about');
$routes->get('contact', 'Home::contact');
=======
>>>>>>> 1416350463312d3df6c6aa5e38dfa2e762175ccc
>>>>>>> 53f19cc5b3bf96b96cac056b0d7eebf4c08b344d
