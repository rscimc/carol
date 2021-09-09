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

    <section class="pag_artigo container ">
        <h2>Exclusão de Artigo</h2>
        <form class="artigo" method="POST" action="excluir_action.php">
            <input type="hidden" name="id" value="<?php echo $consulta['id'];?>" />
            <input type="text" name="titulo" required value="<?php echo $consulta['titulo'];?>" />
            <input type="text" name="autor" required value="<?php echo $consulta['autor'];?>" />
            <input type="date" name="data" require value="<?php echo $consulta['data'];?>"/>
            <input type="text" name="artigo" required value="<?php echo $consulta['artigo'];?>" />
            <input type="submit" value="Excluir" onclick="return confirm('Tem certeza que deseja excluir este artigo?')"/>
        </form>
    </section>
    
    <div class="container" style="display:flex;justify-content:space-between;">
        <a href="">< Anterior</a>
        <a href="">Posterior ></a>
    </div>