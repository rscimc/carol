<?php
session_start();

if(empty($_SESSION['id'] == true)) {
  header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="./assets/images/Logotipo Carol.png" />
    <title>Caroline Gonçalves</title>
    <link rel="stylesheet" type="text/css" href="./../assets/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="./style.css" />
    <!--Font Awesome-->
    <script
      src="https://kit.fontawesome.com/977a9179f9.js"
      crossorigin="anonymous"
    ></script>
    <!--CKEditor-->
    <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
  </head>
  <body>

    <header>
        <div class="header-area container">
        <div class="header--left">
            <a href="./index.php"
            ><img src="./../assets/images/Logotipo Carol 172x100.png"
            /></a>
        </div>
        <div class="header-right">
            <ul>
            <li><a href="./admin_criar.php">Incluir</a></li>
            <li><a href="./consulta.php">Consultar</a></li>
            <li><a href="./admin_sair.php">Sair</a></li>
            </ul>
        </div>
        </div>
    </header>