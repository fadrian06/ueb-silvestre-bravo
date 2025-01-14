<?php

session_start();

if (!empty($_SESSION['usuario'])) {
  header('Location: home_admin.php');
} else {
  header("Location: login.php");
}
