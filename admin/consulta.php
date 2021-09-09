<?php
require('./admin_header.php');
require('./config.php');

$sql = $pdo->query('SELECT * FROM artigos');
$artigos = [];

if ($sql->rowCount() > 0) {
    $artigos = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<section id="articles" class="pag_artigo">
    <h2>Consulta Artigos</h2>

    <?php foreach($artigos as $artigo): ?>
    <div class="articles container">
        <h2><?php echo $artigo['titulo'];?></h2>
        <p><i class="fas fa-calendar-alt"></i> <?php echo $artigo['data'];?></p>
        <p>Por: <?php echo $artigo['autor'];?></p>
        <p><?php echo $artigo['artigo'];?></p>
        <div class="botões">
            <a href="admin_consulta_page.php?id=<?php echo $artigo['id'];?>" class="read">Leia mais</a>
            
        </div>
    </div>
    <?php endforeach; ?>
</section>
