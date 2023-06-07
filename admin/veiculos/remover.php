<?php require('../topo_admin.php');

    require('../../conexao.php');

    $codigo_veiculo = $_GET['codigo_veiculo'];

<<<<<<< HEAD
    $delete_curso = "DELETE FROM veiculo WHERE codigo_veiculo = $codigo_veiculo";;

        if (mysqli_query($conexao,$delete_curso)) {
=======
    $delete_veiculo = "DELETE FROM veiculo WHERE codigo_veiculo = $codigo_veiculo";

        if (mysqli_query($conexao,$delete_veiculo)) {
>>>>>>> 22055235bff1811fa8994285494bf773e2e9a9d6

            mysqli_close($conexao);

            echo "<script> alert ('VEICULO EXCLUIDO COM SUCESSO!');</script>";

            echo "<script> window.location.href='$url_admin/veiculos/consultar.php';</script>";

        } else {

            echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

            echo "<script> window.location.href='$url_admin/veiculos';</script>";
        }

?>