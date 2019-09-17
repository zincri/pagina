<?php
/*
$array_usuarios = [
    "jhoana" => "admin",
    "zincri" => "client",
];
*/
$user = $_POST['user'];
if($user=="jhoana"){
    echo header("location:dashboard.html");
}else if($user=="zincri"){
    echo header("location:principal.html");
}else{
    echo "error en la autenticacion";
    header('Location: login_h.html');
}
?>