<?php 
 class  Configura{
    
    // nome banco 
    public static function banco (){
        //$banco = "BI_LOGISTICA";
        //$banco = "postgres";
        $banco = "u119780054_BI_LOGISTICA";
        return $banco;
    }
    // host do banco 
    public static function host (){
        // $host = "192.168.87.250";
        // $host="localhost";
           $host = "185.201.10.73";
        return $host;
    }

	 public static function usuario(){
        // $usuario = "logistica";
        // $usuario = "ROOT"
        // $usuario = "postgres";
        $usuario = "u119780054_logistica";
        return $usuario;

    }
	 
    public static function senha (){
        // $senha = "logisticabls";
        //$senha = 123;
        $senha = "Isaelsilva@1039";

        // Isaelsilva@1039   senha do banco de dados  MYSQL produção 
        return $senha;
    }
    public static function dns(){
        // $dns = "pgsql";
        $dns = "mysql";
        return $dns;
    }
    
    public static function porta(){
        // $porta = '5432';
        // return $porta;
    }
}