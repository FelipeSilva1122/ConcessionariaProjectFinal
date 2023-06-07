<?php require('../topo_admin.php');

    require('../../conexao.php');

    $codigo_veiculo = $_GET['codigo_veiculo'];
    

    $select_veiculo = mysqli_query($conexao, "SELECT * FROM veiculo WHERE codigo_veiculo = $codigo_veiculo");

        if (mysqli_num_rows($select_veiculo) > 0) {

            $dados_veiculo= mysqli_fetch_assoc($select_veiculo);

        } else {

            echo "<script> alert ('NÃO EXISTEM VEICULOS CADASTRADOS!');</script>";

            echo "<script> window.location.href='$url_admin/veiculos';</script>";

        }


?>
    
    <form id="form_atualizar" name="form_atualizar" class="form_atualizar" enctype="multipart/form-data" method="post" action="salvar.php">

        <div><h1>Atualizar os dados</h1></div>

            <div class="agrupamento_atualizar">
                <div>

                    <div><label>Codigo do veículo</label></div>

                    <div><input type="text" id="codigo_veiculo" name="codigo_veiculo" value="<?php echo $dados_veiculo['codigo_veiculo'];?>" readonly></div>

                    <div><label>Digite a descrição do veículo </label></div>

                    <div><input type="text" id="descricao_veiculo" name="descricao_veiculo" value="<?php echo $dados_veiculo['descricao_veiculo'];?>" required autofocus></div>

                    <div><label>Digite a marca do veículo </label></div>

                    <div><input type="text" id="marca_veiculo" name="marca_veiculo" value="<?php echo $dados_veiculo['marca_veiculo'];?>" required autofocus></div>

                    <div><label>Digite o modelo do veículo</label></div>

                    <div><input type="text" id="modelo_veiculo" name="modelo_veiculo" value="<?php echo $dados_veiculo['modelo_veiculo'];?>" required autofocus></div>

                    <div><label>Digite o ano do veículo</label></div>

                    <div><input type="text" id="ano_veiculo" name="ano_veiculo" placeholder="0000/0000" value="<?php echo $dados_veiculo['ano_veiculo'];?>" required autofocus></div>

                    <div><input type="file" name="imagem_veiculo" id="imagem_veiculo" value="<?php echo $dados_veiculo['imagem_veiculo'];?>" accept="image/*"></div>

                    <div><input type="submit" id="btn_atualizar" name="btn_atualizar" value="Atualizar"></div>

                </div>    
            
            </div>

    </form>

</body>
</html>