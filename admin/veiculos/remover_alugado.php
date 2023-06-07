<?php require('../topo_admin.php');

    require('../../conexao.php');

    $id = $_GET['id'];

    $delete_alugado = "DELETE FROM aluguel WHERE id = $id";

    if (mysqli_query($conexao,$delete_alugado)) {

        mysqli_close($conexao);

        echo "<script> alert ('ALUGADO EXCLUIDO COM SUCESSO!');</script>";

        echo "<script> window.location.href='$url_admin/veiculos/alugado.php';</script>";

    } else {

        echo "<script> alert ('ERRO: NÃO FOI POSSÍVEL EXCLUIR.');</script>";

        echo "<script> window.location.href='$url_admin/veiculos';</script>";
    }