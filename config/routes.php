<?php
use Cake\Routing\Router;

/** @var \Cake\Routing\RouteBuilder $routes */
$routes->plugin('Burzum/FileStorage', function($routes) {
    $routes->fallbacks();
});
