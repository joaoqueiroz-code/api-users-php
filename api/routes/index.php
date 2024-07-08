<?php
require_once __DIR__ . '../../controllers/UserController.php';

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$controller = new UserController();
$request_method = $_SERVER["REQUEST_METHOD"];

switch ($request_method) {
    case 'POST':
        $controller->createUser();
        break;
    case 'GET':
        $controller->readUsers();
        break;
    case 'PUT':
        $id = isset($_GET['id']) ? intval($_GET['id']) : null;
        if ($id) {
            $controller->updateUser($id);
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "ID not provided."));
        }
        break;
    case 'DELETE':
        $id = isset($_GET['id']) ? intval($_GET['id']) : null;
        if ($id) {
            $controller->deleteUser($id);
        } else {
            http_response_code(400);
            echo json_encode(array("message" => "ID not provided."));
        }
        break;
    default:
        http_response_code(405);
        echo json_encode(array("message" => "Method not allowed."));
        break;
}
?>
