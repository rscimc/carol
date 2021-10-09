<?php
session_start();

if(isset($_SESSION['id']) && empty($_SESSION['id'] == false)) {
    header('Location: ./admin_criar.php');
} else {
    header('Location: ./login.php');
}