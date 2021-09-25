<?php
include '../conexao/Conexao.php';
include '../controller/Fechc/ExibirPedido.php';
include '../controller/Delete/Delete.php';
$delete = new Delete();
$delete->DeleteObjeto($_GET['id']);
