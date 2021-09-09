<?php
require('./config.php');

$id = filter_input(INPUT_POST, 'id');
$titulo = filter_input(INPUT_POST, 'titulo');
$autor = filter_input(INPUT_POST, 'autor');
$data = filter_input(INPUT_POST, 'data');
$artigo = filter_input(INPUT_POST, 'artigo');


if ($id && $titulo && $autor && $data && $artigo){
    
    $sql = "UPDATE artigos SET titulo = :titulo, autor = :autor, data= :data, artigo = :artigo WHERE id = :id";
    
    $sth = $pdo->prepare($sql);
    $sth->bindValue(':id', $id);
    $sth->bindValue(':titulo', $titulo);
    $sth->bindValue(':autor', $autor);
    $sth->bindValue(':data', $data);
    $sth->bindValue(':artigo', $artigo);
    $sth->execute();
    
    header('Location: consulta.php');
    exit;

} else {
    header('Location: index.php');
    exit;
}
/*
$pdo->query("INSERT INTO artigos (titulo, autor, data, artigo) VALUES ('$titulo', '$autor', '$data', '$artigo')");

    $sql = "INSERT INTO artigos (titulo, autor, data, artigo) VALUES (:titulo, :autor, :data, :artigo)";

    $sth = $pdo->prepare($sql);
    $sth->bindValue(':titulo', $titulo);
    $sth->bindValue(':autor', $autor);
    $sth->bindValue(':data', $data);
    $sth->bindValue(':artigo', $artigo);
    $sth->execute();
    
    $sql = $pdo->prepare("INSERT INTO artigos (titulo, autor, data, artigo) VALUES (:titulo, :autor, :data, :artigo");
    $sql->bindValue(':titulo', $titulo);
    $sql->bindValue(':autor', $autor);
    $sql->bindValue(':data', $data);
    $sql->bindValue(':artigo', $artigo);
    $sql->execute();
*/