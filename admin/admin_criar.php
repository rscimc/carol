<?php
require('./admin_header.php');


?>

    <section class="pag_artigo container ">
        <h2>Inclusão de Artigos</h2>
        <form class="artigo" method="POST" action="./create_action.php">
            <input type="text" name="titulo" required placeholder="Insira o título do artigo" />
            <input type="text" name="autor" required placeholder="Insira o nome do Autor" />
            <input type="date" name="data" require placeholder="Insira a data da publicação" />
            <textarea type="text" name="artigo" id="artigo" required placeholder="Digite o artigo" rows="10"></textarea>
            <script>CKEDITOR.replace( 'artigo' );</script>
            <input type="submit" value="Salvar" />
        </form>
    </section>
  </body> 