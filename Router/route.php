<?php
require_once 'Router/Router.php';
require_once "Controllers/VideoController.php";

$routes = new Router();

$routes->get('/', [VideoController::class, 'index']);

// Dispatch the routes
$routes->dispatch();
