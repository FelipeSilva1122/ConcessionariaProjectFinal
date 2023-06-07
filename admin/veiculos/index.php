<?php require('../topo_admin.php');?>
    
    <form id="form_cadastro" name="form_cadastro" class="form_cadastro" method="post" enctype="multipart/form-data" action="salvar.php">

        <div><h1>Cadastro de dados</h1></div>

            <div class="agrupamento_cadastro">
                <div>

                <div><label>Digite a descrição do veículo </label></div>

                <div><input type="text" id="descricao_veiculo" name="descricao_veiculo" required autofocus></div>

                <div><label>Digite a marca do veículo </label></div>

                <div><input type="text" id="marca_veiculo" name="marca_veiculo" required autofocus></div>

                <div><label>Digite o modelo do veículo</label></div>

                <div><input type="text" id="modelo_veiculo" name="modelo_veiculo" required autofocus></div>

                <div><label>Digite o ano do veículo</label></div>

                <div><input type="text" id="ano_veiculo" name="ano_veiculo" placeholder="0000/0000" required autofocus></div>

                <div><input type="file" name="imagem_veiculo" id="imagem_veiculo" accept="image/*"></div>

                <div><input type="submit" id="btn_cadastrar" name="btn_cadastrar" value="Cadastrar"></div>


                </div>    
            
            </div>

    </form>

</body>
</html>