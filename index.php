<?php
// Allow from any origin
if (isset($_SERVER['HTTP_ORIGIN'])) {
  // should do a check here to match $_SERVER['HTTP_ORIGIN'] to a
  // whitelist of safe domains
  header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
  header('Access-Control-Allow-Credentials: true');
  header('Access-Control-Max-Age: 86400');    // cache for 1 day
}
// Access-Control headers are received during OPTIONS requests
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

  if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
    header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

echo "Welcome to our backend32-asd4";
echo "<br>\n";
echo 'REQUEST_METHOD => ' . $_SERVER['REQUEST_METHOD'];
echo "<br>\n";
echo 'REQUEST_URI => ' . $_SERVER['REQUEST_URI'];
echo "<br>\n";
echo 'SCRIPT_NAME => ' . $_SERVER['SCRIPT_NAME'];
echo "<br>\n";
echo 'PHP_SELF => ' . $_SERVER['PHP_SELF'];
echo "<br>\n";


// The App Service
// require 'bootstrap/app.php';

// $routes = $app->getContainer()->router->getRoutes();
// // And then iterate over $routes

// foreach ($routes as $route) {
//     echo $route->getPattern(), "<br>";
// }
