<?php
use app\controllers\RamalController;
use FastRoute\RouteCollector;
use function FastRoute\simpleDispatcher;


$dispatcher =simpleDispatcher(function(RouteCollector $r) {
    $routes = require (base_path() . '/routes/web.php');
    foreach($routes as $route){
        $r->addRoute(...$route);
    }
    // $r->addRoute('GET', '/ramal', [RamalController::class,'index']);
});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        var_dump('not_found');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        var_dump('method not Allowed');
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        [,[$controllers,$methods],$vars] = $routeInfo;
        call_user_func_array([new $controllers,$methods],$vars);
        // ... call $handler with $vars
        break;
}