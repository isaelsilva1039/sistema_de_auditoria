<?php
  include '../conexao/Conexao.php';
  require '../controller/Login/Login.php';
  @$usuario = $_POST['usuario'];
  @$senha   = $_POST['senha'];

  $login = new Login();
  $login->logar($usuario,$senha);