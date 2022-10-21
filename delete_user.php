<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;

if (!empty($_GET['id'])) {
    $token = md5($_SESSION['id']);
    if($_GET['token'] == $token){
        $id = $_GET['id'];
         $userModel->deleteUserById($id);
    }
}
header('location: list_users.php');
?>