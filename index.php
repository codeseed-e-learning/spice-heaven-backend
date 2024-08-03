<?php

// Get the requested URL path
$requestUrl = isset($_GET['url']) ? $_GET['url'] : '/';

// Include the route.php file to handle routing
require_once 'route.php';
