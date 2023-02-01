<?php
include "../database/db.php";
$nick = $_POST['nick'];
$login=$_POST['login'];
$password=$_POST['password'];
$hash_pass=sha1($password);
$d_base=$db->query("SELECT * FROM users WHERE nick='$nick'");
// if($d_base->num_rows==0){
$db->query("INSERT INTO users (nick , login , password) VALUES 
('$nick','$login','$hash_pass')");
// echo $nick . $login;
echo json_encode(true);
// }else {
//     echo json_encode(false);
// }



