<?php
    require('../conexao.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $data_retirada = $_POST['data_retirada'];
<<<<<<< HEAD
        $local_retirada = $_POST['local_retirada'];
=======
>>>>>>> 22055235bff1811fa8994285494bf773e2e9a9d6
        $codigo_veiculo = $_GET['codigo_veiculo'];

        // Recupere os dados do veículo do banco de dados
        $select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo WHERE codigo_veiculo = $codigo_veiculo");

        if (mysqli_num_rows($select_veiculo) > 0) {
            $dados_veiculo = mysqli_fetch_assoc($select_veiculo);
            $descricao = $dados_veiculo['descricao_veiculo'];
            $marca = $dados_veiculo['marca_veiculo'];
            $modelo = $dados_veiculo['modelo_veiculo'];
            $ano = $dados_veiculo['ano_veiculo'];

            // Insira os dados do aluguel e do veículo no banco de dados
<<<<<<< HEAD
            $insert_query = "INSERT INTO aluguel (data_retirada, local_retirada, codigo_veiculo, descricao, marca, modelo, ano) VALUES ('$data_retirada', '$local_retirada', '$codigo_veiculo', '$descricao', '$marca', '$modelo', '$ano')";

            if (mysqli_query($conexao, $insert_query)) {
                echo "Dados inseridos com sucesso no banco de dados.";
            } else {
                echo "Erro ao inserir dados no banco de dados: " . mysqli_error($conexao);
            }
        } else {
            echo "<script> alert ('NÃO EXISTEM VEICULOS CADASTRADOS!');</script>";
            echo "<script> window.location.href='$url_admin/veiculos';</script>";
        }
=======
            $insert_query = "INSERT INTO aluguel (data_retirada, codigo_veiculo, descricao, marca, modelo, ano) VALUES ('$data_retirada', '$codigo_veiculo', '$descricao', '$marca', '$modelo', '$ano')";

            if (mysqli_query($conexao, $insert_query)) {

                echo "<script> alert('VEICULO ALUGADO COM SUCESSO.');</script>";

                echo "<script> window.location.href='http://localhost/projeto/cliente';</script>";

            } else {
                echo "Erro ao inserir dados no banco de dados: " . mysqli_error($conexao);
            }
        } 
>>>>>>> 22055235bff1811fa8994285494bf773e2e9a9d6
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilo.css">
=======
    <title>Alugar</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .agrupamento_alugar {
            border: 10px solid gray;
            padding: 50px;
            max-width: 400px;
            max-height: 530px;
            background-color: white;
        }

        .agrupamento_alugar li {

            font-size: 3rem;
            list-style: none;

        }

        .agrupamento_alugar img {

            width: 400px;
            height: 300px;
        }
        
    </style>
>>>>>>> 22055235bff1811fa8994285494bf773e2e9a9d6
</head>
<body>
    <?php
        require('../conexao.php');

        $codigo_veiculo = $_GET['codigo_veiculo'];

<<<<<<< HEAD
        $imagem_veiculo = "http://localhost/projeto25/upload/";
=======
        $imagem_veiculo = "http://".$host_ip."/upload/";
>>>>>>> 22055235bff1811fa8994285494bf773e2e9a9d6

        $select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo WHERE codigo_veiculo = $codigo_veiculo");

        if (mysqli_num_rows($select_veiculo) > 0) {
            $dados_veiculo = mysqli_fetch_assoc($select_veiculo);
        } else {
            echo "<script> alert ('NÃO EXISTEM VEICULOS CADASTRADOS!');</script>";
<<<<<<< HEAD
            echo "<script> window.location.href='$url_admin/veiculos';</script>";
        }
    ?>

    <ul>
        <li><img src="<?php echo $imagem_veiculo . $dados_veiculo['imagem_veiculo'];?>" alt="Imagem do veiculo"></li>
        <li><?php echo $dados_veiculo['descricao_veiculo'];?></li>
        <li><?php echo $dados_veiculo['marca_veiculo'];?></li>
        <li><?php echo $dados_veiculo['modelo_veiculo'];?></li>
        <li><?php echo $dados_veiculo['ano_veiculo'];?></li>
    </ul>
    <div>
        <form action="alugar.php?codigo_veiculo=<?php echo $codigo_veiculo;?>" method="post" id="form_alugar" name="form_alugar" class="form_alugar">

            <div><label>Data de retirada</label></div>

            <div><input type="date" name="data_retirada"></div>

            <div><label>Local de retirada</label></div>
            
            <div>
                <select name="local_retirada" id="local_retirada">
            
                    <option value="Local A">Local A</option>
                    <option value="Local B">Local B</option>
                    <option value="Local C">Local C</option>
            
                </select>

            </div>

            <div><input type="submit" id="btn_confirmar" name="btn_confirmar" value="Confirmar"></div>


        </form>

    </div>
=======
            echo "<script> window.location.href='$url_cliente';</script>";
        }
    ?>
        <div class="agrupamento_alugar">

            <ul class="lista_alugar"> 
                <li><img src="<?php echo $imagem_veiculo . $dados_veiculo['imagem_veiculo'];?>" alt="Imagem do veiculo"></li>
                <li><?php echo $dados_veiculo['descricao_veiculo'];?></li>
                <li><?php echo $dados_veiculo['marca_veiculo'];?></li>
                <li><?php echo $dados_veiculo['modelo_veiculo'];?></li>
                <li><?php echo $dados_veiculo['ano_veiculo'];?></li>
            </ul>
        
            <form action="alugar.php?codigo_veiculo=<?php echo $codigo_veiculo;?>" method="post" id="form_alugar" name="form_alugar" class="form_alugar">

                <div><label>Data de retirada</label></div>

                <div><input type="date" name="data_retirada"></div>

                <div><input type="submit" id="btn_confirmar" name="btn_confirmar" value="Confirmar"></div>


            </form>

        </div>
>>>>>>> 22055235bff1811fa8994285494bf773e2e9a9d6

</body>

</html>