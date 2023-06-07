<?php //session_start();

<<<<<<< HEAD
    $servidor = "localhost";
    $usuario = "root"; 
    $senha = "";
    $db_name = "db_locadora";
=======
    $servidor = "co28d739i4m2sb7j.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $usuario = "ngcw3qu5av0q8fxz"; 
    $senha = "c6fvnwe0mxt0eiqc";
    $db_name = "hpw9jpzs198ve751";
>>>>>>> 22055235bff1811fa8994285494bf773e2e9a9d6

    $conexao = mysqli_connect($servidor, $usuario, $senha, $db_name) or die('Banco de dados indisponível.');

    date_default_timezone_set("America/Manaus");

    $host_ip = $_SERVER['HTTP_HOST'];

<<<<<<< HEAD
    $url = "http://".$host_ip."/projeto25";

    $url_admin = "http://".$host_ip."/projeto25/admin";
    
    $url_cliente = "http://".$host_ip."/projeto25/cliente";
=======
    $url = "http://".$host_ip."/";

    $url_admin = "http://".$host_ip."/admin";
    
    $url_cliente = "http://".$host_ip."/cliente";
>>>>>>> 22055235bff1811fa8994285494bf773e2e9a9d6
?>