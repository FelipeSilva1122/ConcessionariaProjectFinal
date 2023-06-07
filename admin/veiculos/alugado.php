<?php
require('../topo_admin.php');
require('../../conexao.php');

$select_aluguel = mysqli_query($conexao, "SELECT * FROM aluguel ORDER BY id ASC");

if (mysqli_num_rows($select_aluguel) > 0) {
?>

    <div class="estila_tabela">
        <div><h1>VEICULOS PEDIDOS</h1></div>
        <table>
            <tr class="tabela_cabecalho">
                <td>ID</td>
                <td>CÓDIGO</td>
                <td>DESCRIÇÃO</td>
                <td>MARCA</td>
                <td>MODELO</td>
                <td>ANO</td>
            </tr>

            <?php while ($dados_veiculo = mysqli_fetch_assoc($select_aluguel)) { ?>
            <tr>
                <td><?php echo $dados_veiculo['id'];?></td>
                <td><?php echo $dados_veiculo['codigo_veiculo'];?></td>
                <td><?php echo $dados_veiculo['descricao'];?></td>
                <td><?php echo $dados_veiculo['marca'];?></td>
                <td><?php echo $dados_veiculo['modelo'];?></td>
                <td><?php echo $dados_veiculo['ano'];?></td>
            </tr>
            <?php } ?>

        </table>
    </div>

<?php
} else {
    
    echo "<script> alert ('NÃO EXISTEM VEICULOS ALUGADOS!');</script>";

    echo "<script> window.location.href='$url_admin/veiculos';</script>";
}
?>

</body>
</html>
