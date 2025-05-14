<?php
require_once 'Router/Router.php';
require_once "Controllers/VideoController.php";
require_once "Controllers/NavController.php";

$routes = new Router();

$routes->get('/', [VideoController::class, 'index']);
$routes->get('/admin', [AdminNavBarController::class, 'AdminNav']);

// Dispatch the routes
$routes->dispatch();
