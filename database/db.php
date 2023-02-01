<?php
$db=new mysqli('localhost','root','455Kol10Di5ss','ftd_team');
if($db->connect_error){
    echo $db->connect_error;
}