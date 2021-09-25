
<?php
include '../conexao/Conexao.php';
require '../controller/Cadastros/Cadastro.php';

$lista[]  =  $data             = $_POST['data'];
$lista[]  =  $PEDIDO           = $_POST['pedido'];
$lista[]  =  $USUARIO_LOGADO   = $_POST['usuario_logado'];
$lista[]  =  $I0_FILIAL        = $_POST['i0_filial'];
$lista[]  =  $CODIGO_AUDITOR   = $_POST['codigo_auditor'];
$lista[]  =  $OBJETO           = $_POST['objeto'];
$lista[]  =  $VALIDADE_ERRADA  = $_POST['validade_errada'];
$lista[]  =  $VALIDADE_CORRETA = $_POST['validade_coreta'];
$lista[]  =  $QTD_PEDIDO       = $_POST['qtd_pedida'];
$lista[]  =  $QTD_ENCONTRADO   = $_POST['qtd_encontrada'];
$lista[]  =  $CODIGO_OPERADOR  = $_POST['codigo_operador'];
$lista[]  =  $TIPO_MOVIMENTO   = $_POST['tipo_movimento'];
$lista[]  =  $VALOR_DESCONTO   = $_POST['valor_desconto'];


$cadastros = new Cadastro();
$cadastros->cadastroPedidoAuditoriaPorObjetoEpedido(
    $lista,
    $data,
    $PEDIDO,
    $USUARIO_LOGADO,
    $I0_FILIAL,
    $CODIGO_AUDITOR,
    $OBJETO,
    $VALIDADE_ERRADA,
    $VALIDADE_CORRETA,
    $QTD_PEDIDO,
    $QTD_ENCONTRADO,
    $CODIGO_OPERADOR,
    $TIPO_MOVIMENTO,
    $VALOR_DESCONTO
);