<?php
include '../../App/Controllers/AuthController.php';
include '../utilities/server.php';

header("Content-Type: application/json"); 

$controller = new AuthController(); 
if ($_SERVER['REQUEST_METHOD'] == "POST") {
$request_type = $_POST["request-type"] ?? $_GET["request-type"] ?? null;
   if ($request_type == 'signup') {

      $controller->signup($conn, $_POST);
   
   } else if ($request_type == 'login') {

      $controller->login($conn, $_POST);
   
   }  else if ($request_type === 'logout') {
    $controller->logout($conn);
}
}



?>