<?php

// include 'controller/Cadastros/PegaUltimoRegisto.php';
// include 'conexao/Conexao.php';

spl_autoload_register(
    function ($class) {
        
        
        if (file_exists('../../conexao/'.$class.'.php')) { 
            include_once "../../conexao/".$class.".php";
        }

        if (file_exists('../../controller/Cadastros/'.$class.'.php')) { 
            include_once "../../controller/Cadastros/".$class.".php";
        }

        if (file_exists('../../controller/Fechc/'.$class.'.php')) { 
            include_once "../../controller/Fechc/".$class.".php";
        }

        if (file_exists('../../controller/Delete/'.$class.'.php')) { 
            include_once "../../controller/Delete/".$class.".php";
        }
        if (file_exists('../../controller/Updat/'.$class.'.php')) { 
            include_once "../../controller/Updat/".$class.".php";
        }
        
        if (file_exists('../../controller/Login/'.$class.'.php')) { 
            include_once "../../controller/Login/".$class.".php";
        }
    }
);
