<?php  

include '../../App/Controllers/ImageController.php';
include '../utilities/server.php';

header("Content-Type: application/json"); 

$controller = new ImageController(); 

if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $request_type = isset($_GET["request-type"]) ? $_GET["request-type"] : null;

    if ($request_type == 'get-all-images') {
     echo json_encode($controller->getAllimages($conn));
exit;
    }
    // if ($request_type == 'get_single_user') {
    //     echo json_encode($controller->getUser($conn, $_GET));
    //     exit;
    // }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $request_type = $_POST["request-type"] ?? $_GET["request-type"] ;

    if ($request_type == 'add_image') {
        echo json_encode($controller->addimages($conn, $_POST));
        exit;
    }
//     if ($request_type == 'update_user') {
//         echo json_encode($controller->UpdateUsers($conn, $_POST));
//         exit;
//     }
//     if ($request_type == 'delete_user') {
//         echo json_encode($controller->delete_User($conn, $_POST));
//         exit;
//     }
}


?> 