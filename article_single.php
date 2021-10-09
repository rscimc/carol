<?php 
require('./header.php');
require("./admin/config.php");

$sql = $pdo->query('SELECT * FROM artigos');
$artigos = [];

if ($sql->rowCount() > 0) {
    $artigos = $sql->fetchAll(PDO::FETCH_ASSOC);
}

$consulta = [];
$id = filter_input(INPUT_GET, 'id');

$idAll = 0;


if($id) {
    $sql = $pdo->prepare("SELECT * FROM artigos WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    
    if($sql->rowcount() > 0) {
        $consulta = $sql->fetch(PDO::FETCH_ASSOC);
    }
}

foreach($artigos as $artigo){
    if ($artigo['id'] == $consulta['id']) {
        $idArray = $idAll;
        
    }
    $idAll ++;
}

$artigoUp = ($idArray+1);
$artigoDown = ($idArray-1);


?>
<div class="container single">
    <h3><?php echo $consulta['titulo'];?></h3>
    <h4>Por <?php echo $consulta['autor'];?></h4>
    <div><?php echo $consulta['artigo'];?></div>
</div>

<div class="container pages">
    <a href="./article_single.php?id=<?php echo $artigos[$artigoDown]['id'];?>">< Anterior</a>
    <a href="./article_single.php?id=<?php echo $artigos[$artigoUp]['id'];?>">Posterior ></a>
</div>



<?php 
require('./footer.php');