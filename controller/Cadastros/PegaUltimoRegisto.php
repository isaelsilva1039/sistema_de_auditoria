<?php 
// include '../../controller/Cadastros/Cadastro.php';

class PegaUltimoRegisto extends Conexao {

    public function pegarUltimoIdPorUsuarioLogado($usuario_logado)
    {
      $sql=" SELECT  * FROM  auditoria_wms_aereo_atualizada  where usuario_logado = '$usuario_logado' order by id desc limit 1";
      $sql = $this->db->prepare($sql);
      $sql->execute();
      if ($sql->rowCount() > 0) {
        $numeroPedidoAuditoria = $sql->fetch();
        return $numeroPedidoAuditoria; 
      }else {
        return "Sem pedido encontrado pra esse usuario !";
      }
    }
}

?>