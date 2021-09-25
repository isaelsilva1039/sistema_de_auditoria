<?php
include '../conexao/Conexao.php';
  require '../controller/Cadastros/Cadastro.php';
  
  $nome            = $_POST['nome'];
  $endereco        = $_POST['endereco'];
  $telefone        = $_POST['telefone'];
  $data_nascimento = $_POST['data_nascimento'];
  $idade           = $_POST['idade'];
  
  $cadastros = new Cadastro;
  
  // $cadastros->cadastroDizimista($nome,$endereco,$telefone,$data_nascimento,$idade
    );