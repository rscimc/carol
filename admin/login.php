<?php
session_start();

require('./config.php');

if(isset($_POST['name']) && isset($_POST['password'])) {
    $name = addslashes($_POST['name']); 
    $pass = md5(addslashes($_POST['password'])); 
    $sql = $pdo->query("SELECT * FROM usuarios WHERE name = '$name' AND password = '$pass'");

    if ($sql->rowCount() > 0) {
        $dado = $sql->fetch();

        $_SESSION['id'] = $dado['id'];

        header('Location: ./index.php');

    }
}

?>

<section class="pag_artigo container ">
    <h2>Login</h2>
    <form class="" method="POST" action="#">
        <input type="text" name="name" required placeholder="Digite seu nome de usuário" />
        <input type="password" name="password" required placeholder="Digite sua senha" />
        <input type="submit" value="Entrar" />
    </form>
</section>