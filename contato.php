<?php require('./header.php');

?>


<section class="container contato">
  <h2>Entre em contato conosco</h2>

  <form class="form" method="POST" action="recebe.php">
    <input type="text" name="name" required placeholder="Nome Completo" />
    <input type="email" name="email" required placeholder="E-mail" />
    <input type="tel" name="tel" placeholder="Whatsapp" />
    <textarea type="text" name="msg" required placeholder="Escreva" rows="6"></textarea>
    <input type="submit" value="Enviar" />
  </form>

</section>

<?php require('./footer.php');
