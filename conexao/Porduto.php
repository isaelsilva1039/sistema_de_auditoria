<?php
include 'conexao.php';
    class Porduto extends Conexao
    {
            public $valorCompraPorduto; 
        
            public function fun(){

                $sql = "SELECT * FROM tb_login";
                $sql = $this->db->prepare($sql);
                $sql->execute();
                if ($sql->rowCount() > 0){
                    var_dump($sql->fetchAll());
                }else{
                    echo "sem";
                }
            }

    }

    $a =new Porduto();
    $a->fun();

?>