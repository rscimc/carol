<?php
require('./config.php');

$titulo = filter_input(INPUT_POST, 'titulo');
$autor = filter_input(INPUT_POST, 'autor');
$data = filter_input(INPUT_POST, 'data');
$artigo = filter_input(INPUT_POST, 'artigo');

if ($titulo && $autor && $data && $artigo){
    //$pdo->query("INSERT INTO artigos (titulo, autor, data, artigo) VALUES ('$titulo', '$autor', '$data', '$artigo')");

    $sql = "INSERT INTO artigos (titulo, autor, data, artigo) VALUES (:titulo, :autor, :data, :artigo)";

    $sth = $pdo->prepare($sql);
    $sth->bindValue(':titulo', $titulo);
    $sth->bindValue(':autor', $autor);
    $sth->bindValue(':data', $data);
    $sth->bindValue(':artigo', $artigo);
    $sth->execute();
    
   /* $sql = $pdo->prepare("INSERT INTO artigos (titulo, autor, data, artigo) VALUES (:titulo, :autor, :data, :artigo");
    $sql->bindValue(':titulo', $titulo);
    $sql->bindValue(':autor', $autor);
    $sql->bindValue(':data', $data);
    $sql->bindValue(':artigo', $artigo);
    $sql->execute();
*/
    header('Location:consulta.php');
    exit;

} else {
    header('Location: admin_article.php');
    exit;
}