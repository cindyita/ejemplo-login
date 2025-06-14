<?php
session_start();
require_once "src/templates/header.php";

if (!$_GET || !$_GET['page']){
    require_once "src/views/login.php";
}

$page = $_GET['page'] ?? '';

if($page == "dashboard"){
    require_once "src/views/dashboard.php";
}else if($page == "login"){
    require_once "src/views/login.php";
}else if($page == "register"){
    require_once "src/views/register.php";
}else if($page == "logout"){
    require_once "src/acciones/logout.php";
}else{
    require_once "src/views/login.php";
}

require_once "src/templates/footer.php";

?>