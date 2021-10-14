<?php
require('./admin/config.php');

$sql = $pdo->query('SELECT * FROM artigos');
$artigos = [];

if ($sql->rowCount() > 0) {
    $artigos = $sql->fetchAll(PDO::FETCH_ASSOC);
}

$random = rand(0, $sql->rowCount()-1);
$random2 = rand(0, $sql->rowCount()-1);

?>

<section id="articles" class="mini-articles">
    <div class="articles">
        <div>
            <h2><?php echo $artigos[$random]['titulo'];?></h2>
            <!--<p><i class="fas fa-calendar-alt"></i> <?php echo $artigos[$random]['data'];?></p>-->
            <?php echo substr($artigos[$random]['artigo'], 0, 250). ' . . .';?>
        </div>
        <div>
            <a href="./article_single.php?id=<?php echo $artigos[$random]['id'];?>" class="read" target="_blank">Leia mais</a>
        </div>
    </div>
    <div class="articles">
        <h2><?php echo $artigos[$random2]['titulo'];?></h2>
        <!--<p><i class="fas fa-calendar-alt"></i> <?php echo $artigos[$random2]['data'];?></p>-->
        <p><?php echo substr($artigos[$random2]['artigo'], 0, 250). ' . . .';?></p>
        <div>
            <a href="./article_single.php?id=<?php echo $artigos[$random2]['id'];?>" class="read" target="_blank">Leia mais</a>
        </div>
    </div>
</section>

