
<?php
include '../conexao/Conexao.php';
require '../controller/Cadastros/Cadastro.php';
$usuario_logado = $_POST['usuario_logado'];
$DATA           = $_POST['data'];
$I0_FILIAL      = $_POST['i0_filial'];
$d0_bloco       = $_POST['d0_bloco'];
$TIPO_AUDITORIA = $_POST['tipo_auditoria'];
$CID            = $_POST['cid'];
$RUA            = $_POST['rua'];
$TOTAL_OBJETOS = $_POST['total_objetos'];
$OBJETOS_NAO_CONFORME = $_POST['objetos_nao_conforme'];

$cadastros = new Cadastro;
$cadastros->cadastroPedidoAuditoriaResumo($usuario_logado,$DATA,$I0_FILIAL,$d0_bloco,$TIPO_AUDITORIA,$CID, $RUA,$TOTAL_OBJETOS,$OBJETOS_NAO_CONFORME);