<?php
    require '../controller/Cadastros/Cadastro.php';
    
    class Delete extends Cadastro{
       
        public function deletaPedidoQueNaoVaiSerUsado($id){
            $sql = "DELETE FROM auditoria_wms_aereo_atualizada  where id = '$id'";
            $sql = $this->db->prepare($sql);
            $sql->execute();
            if($sql->rowCount() > 0){
                 header('Location: ../views/painel/cadastros.php?cadastro_erros_aereo');
            }else{
                header('Location: ../views/painel/cadastros.php?erro');
            }
        }

        public function DeleteObjeto($id){
            $sql = "DELETE FROM auditoria_wms_aereo_objetos_atualizada  where id = '$id'";
            $sql = $this->db->prepare($sql);
            $sql->execute();
            if($sql->rowCount() > 0){
                 header('Location: ../views/painel/cadastros.php?pedidoDeAuditoriaEmAndamento');
            }else{
                header('Location: ../views/painel/cadastros.php?erro');
            }
        }
    }
?>