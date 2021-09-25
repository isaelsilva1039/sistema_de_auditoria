<?php

// include '../../autoload.php';
class ExibirPedido extends Conexao
{
    public  function pegarPedido($PEDIDO)
    {
        $sql = "SELECT  * FROM auditoria_wms_aereo_objetos_atualizada WHERE PEDIDO = :PEDIDO ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':PEDIDO', $PEDIDO);
        $sql->execute();
        if ($sql->rowCount()) {
            return  $sql->fetchAll();
        } else {
            $sql = "SELECT  * FROM auditoria_wms_aereo_objetos_atualizada WHERE PEDIDO = '1' ";
            $sql = $this->db->prepare($sql);
            $sql->execute();
            return $sql->fetchAll();
        }
    }

}
