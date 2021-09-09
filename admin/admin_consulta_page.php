<?php 
require("./admin_header.php");
require("./config.php");

$consulta = [];
$id = filter_input(INPUT_GET, 'id');
if($id) {
    $sql = $pdo->prepare("SELECT * FROM artigos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if($sql->rowcount() > 0) {
        $consulta = $sql->fetch(PDO::FETCH_ASSOC);
    }
}

?>

<div class="container" style="display:flex;flex-direction:column;margin:auto;text-align:center;">
    <h2><?php echo $consulta['titulo'];?></h2>
    <p><i class="fas fa-calendar-alt"></i> <?php echo $consulta['data'];?></p>
    <p>Por: <?php echo $consulta['autor'];?></p>
    <p><?php echo $consulta['artigo'];?></p>
</div>

<div class="container" style="display:flex;justify-content:space-between;">
    <a href="">< Anterior</a>
    <a href="admin_editar_page.php?id=<?php echo $consulta['id'];?>" class="read">Alterar</a>
    <a href="admin_excluir_page.php?id=<?php echo $consulta['id'];?>" class="read">Excluir</a>
    <a href="">Posterior ></a>
</div>