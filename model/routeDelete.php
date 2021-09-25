<?php
include '../conexao/Conexao.php';
require '../controller/Delete/Delete.php';
$id = $_POST['pedido']; // pedido eo mesmo id aqui 
$cadastros = new Delete();
$cadastros->deletaPedidoQueNaoVaiSerUsado($id);
