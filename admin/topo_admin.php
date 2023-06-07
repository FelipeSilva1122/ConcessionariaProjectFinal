<?php session_start();

    if (!isset($_SESSION['nome_login'])) {

        session_destroy();

        unset ($_SESSION['nome_login']);
        unset ($_SESSION['tipo_login']);

        echo "<script> alert ('ERRO: É NECESSÁRIO FAZER LOGIN');</script>";

        echo "<script> window.location.href='http://localhost/projeto25';</script>";

    }

    if ($_SESSION['tipo_login'] <> 0) {

        echo "<script> alert('ERRO: VOCÊ NÃO TEM PERMISSÃO PARA ACESSAR ESSA PÁGINA!');</script>";
        session_destroy();

        unset ($_SESSION['nome_completo_login']);
        unset ($_SESSION['nome_login']);
        unset ($_SESSION['tipo_login']);

        unset ($_SESSION['url']);
        unset ($_SESSION['url_admin']);
        unset ($_SESSION['url_cliente']);

        echo "<script> window.location.href='http://localhost/projeto25';</script>";

    }

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
   
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto</title>

    <link rel="stylesheet" type="text/css" href="<?php echo $_SESSION['url']."/css/estilo.css";?>">

    <script>

        function confirmar_exclusao(codigo_veiculo) {

            var resposta = confirm("Deseja continuar com a exclusão?")

            if (resposta == true) {

                window.location.href = "remover.php?codigo_veiculo="+codigo_veiculo;
            }
        }

    </script>

</head>


<body>
    
    <div class="barra_topo">

        <div class="barra_topo_n1">
            
            <!-- <img src="<?php echo $_SESSION['url']."/img/a";?>"> -->

            <label><?php echo "Seja bem-vindo,". $_SESSION['nome_completo_login'];?></label>
    
        </div>

        <div class="barra_topo_n2">
			
				<nav>

					<ul class="menu_admin">

						<li><a href="#">VEICULO</a>

							<ul>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/veiculos";?>" >Cadastrar </a></li>
				                  <li><a href="<?php echo $_SESSION['url_admin']."/veiculos/consultar.php";?>"> Consultar </a></li>
                                  <li><a href="<?php echo $_SESSION['url_admin']."/veiculos/alugado.php";?>"> Alugados </a></li>
				       		</ul>

						</li>
						
						<li><a href="<?php echo $_SESSION['url']."/sair.php";?>">SAIR</a></li>

					</ul>

				</nav>

			</div>

		</div>