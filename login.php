<?php
/*
$array_usuarios = [
    "jhoana" => "admin",
    "zincri" => "client",
];
*/
$user = $_POST['user'];
$pass = $_POST['pass'];

if($user=="jhoana" && $pass=="123456"){
    echo header("location:dashboard.html");
}else if($user=="zincri" && $pass=="123"){
    echo header("location:principal.html");
}else{
    echo header("location:login_h.html");
}
?>