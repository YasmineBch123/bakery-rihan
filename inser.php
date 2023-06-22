<?php 
require_once("connection.php");

if(isset($_POST['frmSignUp'])) {
    print_r($_POST);

    $uuid = getUuid();
    $name= $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);   

    //gegevens toevoegen
    $sql = "INSERT INTO sign_up (uuid, Username,Password) VALUES (?,?,?)";
    $data = array($uuid, $name, $password);
    $result = getdata ($sql, $data);

    header("location: Loggedhome.php");
} else {
    header("location: login.php");
}
?>