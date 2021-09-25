<?php
require '../controller/Cadastros/Cadastro.php';
// require '../../controller/Fechc/ExibirPedido.php';
class Updat extends Cadastro
{
    public function aterarStatusDoPedidoAudiritaDoResumo($pedido)
    {

       
        $sql = "UPDATE auditoria_wms_aereo_atualizada SET status = 'Finalizado' where id = '$pedido'";
        $sql = $this->db->prepare($sql);
        $sql->execute();
        if ($sql->rowCount() > 0) {
            header('Location: ../views/painel/cadastros.php?cadastro_erros_aereo');
        } else {
            header('Location: ../views/painel/cadastros.php?erro');
        }
    }

    public function naoPodeFinalizarPedidoVazio($pedido)
    {
        $sql = "SELECT  * FROM auditoria_wms_aereo_objetos_atualizada WHERE PEDIDO = :PEDIDO ";
        $sql = $this->db->prepare($sql);
        $sql->bindValue(':PEDIDO', $pedido);
        $sql->execute();
        if ($sql->rowCount()) {
            return  1;
        } else {
            $sql = "SELECT  * FROM auditoria_wms_aereo_objetos_atualizada WHERE PEDIDO = '1' ";
            $sql = $this->db->prepare($sql);
            $sql->execute();
            return 2;
        }
    }
}
