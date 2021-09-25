<?php
include '../conexao/Conexao.php';
include '../controller/Updat/Updat.php';
$updat = new Updat();
$pedido = $_POST['pedido'];
if (isset($pedido)) {
    $updat->aterarStatusDoPedidoAudiritaDoResumo($pedido);
}
