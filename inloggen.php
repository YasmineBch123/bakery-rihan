<?php 
session_start();

require_once("connection.php");

 $name= $_POST['email'];
 $password = $_POST['psw'];



//gegevens ophalen
 $sql = "SELECT Password FROM sign_up WHERE Username = ?";

 $data = array($name);
 $result = getdata($sql, $data);

 $password_hash = $result[0]['Password'];
   $bool = password_verify($password, $password_hash); 

if($bool === true) {
   $_SESSION['users']['loggedin'] = true;
   header("location:home.php");
} else {
   $_SESSION['users']['loggedin'] = false;
   header("location:index.php");
}
?>