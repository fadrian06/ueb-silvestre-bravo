<?php 
session_start();
if(!empty($_SESSION["usuario"])){ 
    header("Location: /sistema/home_admin.php");
}else{
    header("Location: /sistema/login.php");

}


?>