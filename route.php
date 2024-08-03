<?php

require_once 'app/core/Controller.php';
require_once 'app/core/Model.php';
require_once 'app/core/View.php';

// Define routes
$routes = [
    'home' => 'HomeController@index',
    'contact' => 'ContactController@showContactForm',
    'users' => 'UsersController@index',
    'restaurant' => 'Restaurant@onboard',
    'onboard-restaurant' => 'RestaurantController@onboardRestaurant'
    // Add more routes here
];

// Function to handle routing
function handleRouting($requestUrl, $routes) {
    if (array_key_exists($requestUrl, $routes)) {
        list($controller, $method) = explode('@', $routes[$requestUrl]);

        // Define the base path for controllers
        define('CONTROLLER_PATH', __DIR__ . '/app/controllers/');

        // Load the controller
        $controllerFile = CONTROLLER_PATH . $controller . '.php';
        if (file_exists($controllerFile)) {
            require_once $controllerFile;

            // Instantiate the controller class
            if (class_exists($controller)) {
                $controllerInstance = new $controller();

                // Call the action method if it exists
                if (method_exists($controllerInstance, $method)) {
                    $controllerInstance->$method();
                } else {
                    echo "Method '$method' not found in controller '$controller'!";
                }
            } else {
                echo "Controller class '$controller' not found!";
            }
        } else {
            echo "Controller file '$controllerFile' not found!";
        }
    } else {
        echo "Route '$requestUrl' not found!";
    }
}

// Handle the routing
handleRouting($requestUrl, $routes);
