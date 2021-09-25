<?php
include 'config.php';

    class Conexao {
        
        public $db;
        
        function __construct() {
           $banco   = Configura::banco();
           $usuario = Configura::usuario();
           $senha   = Configura::senha();
           $host    = Configura::host();
           $dns     = Configura::dns();
           $porta   = Configura::porta();

            try {
                $this->db = new PDO("$dns:host=$host;dbname=$banco", "$usuario", "$senha");
            }catch (PDOException $e){
                echo  "Falha ao conctar ao banco de dados";
                die($e->getMessage());
            }
        }
    }

?>