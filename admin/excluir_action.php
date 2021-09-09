<?php 
require("./admin_header.php");
require("./config.php");

$id = filter_input(INPUT_POST, 'id');

if($id) {
    $sql = $pdo->prepare("DELETE FROM artigos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

}

header('Location: consulta.php');
exit;

?>