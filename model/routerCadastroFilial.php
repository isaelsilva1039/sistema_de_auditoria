

<?php
include '../conexao/Conexao.php';
require '../controller/Cadastros/Cadastro.php';

$i0_filial      = $_POST['I0_FILIAL'];
$d0_filial      = $_POST['D0_FILIAL'];
$d0_cescrcao    = $_POST['D0_CESCRCAO'];
$d0_sigla       = $_POST['D0_SIGLA'];
$i0_cliente     = $_POST['D0_CLIENTE'];
$i0_fornecedor = $_POST['D0_FORNERCEDOR'];
$d0_regionalL    = $_POST['D0_REGIONAL'];
$cadastros = new Cadastro;

$cadastros->cadastroFilial(
  $i0_filial,
  $d0_filial,
  $d0_cescrcao,
  $d0_sigla,
  $i0_cliente,
  $i0_fornecedor,
  $d0_regionalL
);
