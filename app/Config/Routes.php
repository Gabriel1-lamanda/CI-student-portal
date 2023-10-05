<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('register', 'Auth::register');
$routes->post('auth-signin', 'Auth::signin'); // Route to sign in for student
$routes->get('dashboard', 'Dashboard::index'); // Route to direct to the dashboard
$routes->get('bio-data', 'Dashboard::biodata'); // Route to the redirect to the biodata section in the menu.
$routes->get('update-photo', 'Dashboard::uploadPhoto'); // Route to redirect the section to upload photos.
$routes->post('upload-photo', 'Biodata::uploadPhoto'); // Route to upload photo student
