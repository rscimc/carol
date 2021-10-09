<?php
session_start();

require('./config.php');

$_SESSION['id'] = "";

header('Location: ./index.php');

