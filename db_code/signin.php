<?php
include "../database/db.php";
$login =$_POST['login'];
$password=$_POST['pass'];
$d_base = $db->query("SELECT * FROM users WHERE login=$login");
if($d_base->num_rows==0){
    header("location:/index.php?error=1");
} else{
    $row = $d_base->fetch_object();
    if($row->password==sha1($password)){
        session_start();
        $_SESSION["id"]=$row->id;
        header("location: /team/cabinet.php");
    }
    else {
        header("location: index.php?error=2");
    }
}