<?php

class Cadastro extends Conexao
{

  // cadastra filial
    public function cadastroFilial($i0_filial, $d0_filial, $d0_descricao, $d0_sigla, $i0_cliente, $i0_fornecedor, $d0_regional)
    {

        $sql = "INSERT INTO filial_cd (i0_filial, d0_filial, d0_descricao, d0_sigla, i0_cliente, i0_fornecedor, d0_regional)
                values (:i0_filial, :d0_filial, :d0_descricao, :d0_sigla, :i0_cliente, :i0_fornecedor, :d0_regional)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':i0_filial', $i0_filial);
        $sql->bindValue(':d0_filial', $d0_filial);
        $sql->bindValue(':d0_descricao', $d0_descricao);
        $sql->bindValue(':d0_sigla', $d0_sigla);
        $sql->bindValue(':i0_cliente', $i0_cliente);
        $sql->bindValue(':i0_fornecedor', $i0_fornecedor);
        $sql->bindValue(':d0_regional', $d0_regional);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            header('Location: ../views/painel/cadastros.php?ok');
        } else {
            header('Location: ../views/painel/cadastros.php?erro');
        }
    }

    // cadastrar resumo da audiotira 
    public function cadastroPedidoAuditoriaResumo($usuario_logado,$DATA,$I0_FILIAL,$d0_bloco,$TIPO_AUDITORIA,$CID, $RUA,$TOTAL_OBJETOS,$OBJETOS_NAO_CONFORME)
    {
        // caso for criar um novo pedido, e ja exista um pedido em digitação voltar ele pra tela inicial, infomando que ele tem um pedido em andamento
        
        if ($this->ValidadePedidoEmdigitaCaoUsuarioLogado($usuario_logado) == 1) {
            header('Location: ../views/painel/cadastros.php?voceTemUmpedidoEmAndamento');
        } else {
            $sql = "INSERT INTO auditoria_wms_aereo_atualizada (usuario_logado,DATA, PEDIDO,I0_FILIAL,d0_bloco,TIPO_AUDITORIA,CID, RUA,TOTAL_OBJETOS,OBJETOS_NAO_CONFORME,status)values 
            (:usuario_logado,:DATA,'00', :I0_FILIAL,:d0_bloco,:TIPO_AUDITORIA,:CID,:RUA,:TOTAL_OBJETOS,:OBJETOS_NAO_CONFORME,'digitado')";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':usuario_logado', $usuario_logado);
            $sql->bindValue(':DATA', $DATA);
            $sql->bindValue(':I0_FILIAL', $I0_FILIAL);
            $sql->bindValue(':d0_bloco', $d0_bloco);
            $sql->bindValue(':TIPO_AUDITORIA', $TIPO_AUDITORIA);
            $sql->bindValue(':CID', $CID);
            $sql->bindValue(':RUA', $RUA);
            $sql->bindValue(':TOTAL_OBJETOS', $TOTAL_OBJETOS);
            $sql->bindValue(':OBJETOS_NAO_CONFORME', $OBJETOS_NAO_CONFORME);
            $sql->execute();
            if ($sql->rowCount() > 0) {
                header('Location: ../views/painel/cadastros.php?pedidoDeAuditoriaEmAndamento');
            } else {
                header('Location: ../views/painel/cadastros.php?preenchaTodosOsCampos');
            }
        }
    }

    // cadastra erros dentro do resumo da auditoria 
    public function cadastroPedidoAuditoriaPorObjetoEpedido($lista, $data, $PEDIDO, $USUARIO_LOGADO, $I0_FILIAL, $CODIGO_AUDITOR, $OBJETO, $VALIDADE_ERRADA, $VALIDADE_CORRETA, $QTD_PEDIDO, $QTD_ENCONTRADO, $CODIGO_OPERADOR, $TIPO_MOVIMENTO, $VALOR_DESCONTO)
    {
        $sql = "insert into auditoria_wms_aereo_objetos_atualizada(data, PEDIDO, USUARIO_LOGADO, I0_FILIAL,CODIGO_AUDITOR,OBJETO,VALIDADE_ERRADA,VALIDADE_CORRETA,QTD_PEDIDO,QTD_ENCONTRADO,CODIGO_OPERADOR,NOME_OPERADOR,TIPO_MOVIMENTO,VALOR_DESCONTO)
      values (:data,:PEDIDO,:USUARIO_LOGADO,:I0_FILIAL,:CODIGO_AUDITOR,:OBJETO,:VALIDADE_ERRADA,:VALIDADE_CORRETA,:QTD_PEDIDO,:QTD_ENCONTRADO,:CODIGO_OPERADOR,':nome_operador',:TIPO_MOVIMENTO,:VALOR_DESCONTO)";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':data', $data);
        $sql->bindValue(':PEDIDO', $PEDIDO);
        $sql->bindValue(':USUARIO_LOGADO', $USUARIO_LOGADO);
        $sql->bindValue(':I0_FILIAL', $I0_FILIAL);
        $sql->bindValue(':CODIGO_AUDITOR', $CODIGO_AUDITOR);
        $sql->bindValue(':OBJETO', $OBJETO);
        $sql->bindValue(':VALIDADE_ERRADA', $VALIDADE_ERRADA);
        $sql->bindValue(':VALIDADE_CORRETA', $VALIDADE_CORRETA);
        $sql->bindValue(':QTD_PEDIDO', $QTD_PEDIDO);
        $sql->bindValue(':QTD_ENCONTRADO', $QTD_ENCONTRADO);
        $sql->bindValue(':CODIGO_OPERADOR', $CODIGO_OPERADOR);
        $sql->bindValue(':TIPO_MOVIMENTO', $TIPO_MOVIMENTO);
        $sql->bindValue(':VALOR_DESCONTO', $VALOR_DESCONTO);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            header('Location: ../views/painel/cadastros.php?pedidoDeAuditoriaEmAndamento');
        } else {
            header('Location: ../views/painel/cadastros.php?erro');
        }
    }

    // caso o susuario logado esta com um pedido em digitação, não deixar ele fazer nem um pedido novo a mais
    public function ValidadePedidoEmdigitaCaoUsuarioLogado($usuario_logado)
    {
        $consultarUsuarioPedidoPendendete = "SELECT * FROM auditoria_wms_aereo_atualizada WHERE usuario_logado = '$usuario_logado' AND status = 'digitado'";
        $consultarUsuarioPedidoPendendete = $this->db->prepare($consultarUsuarioPedidoPendendete);
        $consultarUsuarioPedidoPendendete->execute();
        if ($consultarUsuarioPedidoPendendete->rowCount() > 0) {
            return $resut = 1;
        } else {
            return $resut = 2;
        }
    }
}
