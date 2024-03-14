<?php

use App\Controllers\LiveNews;
use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\News;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [LiveNews::class, 'index']);
$routes->get('news', [News::class, 'index']);
$routes->get('news/new', [News::class, 'new']);
$routes->post('news', [News::class, 'create']);
$routes->get('news/(:segment)', [News::class, 'show']);
$routes->get('register', [UserController::class, 'register']);
$routes->post('register', [UserController::class, 'attemptRegister']);
$routes->get('login', [UserController::class, 'login']);
$routes->post('login', [UserController::class, 'attemptLogin']);
$routes->get('profile', [UserController::class, 'profile', ['filter' => 'auth']]);
$routes->post('profile', [UserController::class, 'updateProfile', ['filter' => 'auth']]);
$routes->get('logout', [UserController::class, 'logout']);
$routes->get('pages', [Pages::class, 'index']);
$routes->get('live', [LiveNews::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);
