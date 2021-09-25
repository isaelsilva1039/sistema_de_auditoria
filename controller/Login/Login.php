<?php
    class Login extends Conexao {
        /* metodo resposavel por logar na aplicação recebendo usario do model com retorno de paginas */
        public function logar($usuario,$senha){

            $sql = "Select * from usuario where usuario = :usuario and senha = :senha ";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':usuario',$usuario);
            $sql->bindValue(':senha',$senha);
            $sql->execute();
                if ($sql->rowCount() > 0){
                    session_start();
                    $sessaousuario = $_SESSION['usuario'] = $usuario;
                    header('Location: ../views/painel/index.php');
                }else{
                    header('Location: ../index.php?senhaerrada');
                }
        }
        // metodo para vaidar se o usuario esta logado, caso não esteja voce deve redirecionar ele pra pagina indx
        public function validaUsuarioLOgado($usuario)
        {
            if(!isset($usuario)){
                header('Location: ../../index.php?iformausuario');
            }
        }
        /* metodo resposavel por deleta usuario aplicação recebendo id do model  com retorno de paginas */
        public function DeletaUsuario(int $id){
            $sql = "DELETE FROM `login` WHERE id = :id  ";
            $sql = $this->db->prepare($sql);
            $sql->bindValue(':id',$id);
            $sql->execute();
                if ($sql->rowCount() > 0){
                    // metodo chamado pra capturar o id
                    $this->consutaPosId($id);
                    return "Deletado";
                }else{
                    return "Erro ao deleta";
                }
        }
        // metodo vai fazer um inster do usuario recebido pelo metodo do consutaposID()
        public function HistoricosDeletado(){
            // metodo cai conter a consuta por id , passando os resutado para o metodo HistoricoDeletado
        }
       /* metodo resposavel por logar na aplicação
        recebendo id do metodo delete
        com retorno dos usuarios
        */
        public function consutaPosId(){
            // metodo vai conter a consuta por id , passando os resutado para o metodo HistoricoDeletado()
        }

    } 