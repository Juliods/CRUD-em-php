<!-- Autor: Júlio Perozzi Dias -->
<!-- Data: 21.12.2023 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluindo...</title>
    <style>
        .area-colorida {
            background-color: #068ed0;
            padding: 10px; 
        }
         table, th{
	    border: 1px solid #b0b0b0;
	    #bluetable {
	       border: 'px solid #068ed0;
	       }
    </style>
</head>
<body>
  	<hr>
  	<div class="area-colorida">
        <!-- Conteúdo dentro da área colorida -->
	<table>
		<tr>
			<td>
				<img src="img/logo_alphacode.png" width="100px" alt="logo_alphacode">
			</td>
			<td><h1 style="background-color: #068ed0; color: #ffffff;">Excluindo contato...</h1>
			</td>
		</tr>
	</table>
	</div>
<hr>
<?php
 //Autor: Júlio Perozzi Dias
 //Data: 21.12.2023
 
$servername = "localhost";
$username = "programa";
$password = "486502";
$dbname = "funcionarios";
// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);


//activando relatório de erros
error_reporting(E_ALL);
ini_set('display_errors','1');

if (isset($_GET['id_funcionario'])) {
    $id = $_GET['id_funcionario'];
    
    // Excluir o registro do banco de dados
    $query = "DELETE FROM cadastros WHERE id_funcionario = $id";
    $result = $conn->query($query);
    
    if ($result) {
        echo 'Registro excluído com sucesso... voltando à página inicial';
    } else {
        echo 'Erro ao excluir o registro: ' . $conn->error;
    }
} else {
    echo 'ID não fornecido.';
}

// Adicionar redirecionamento e atualização automática
echo '<script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 1000); // Redireciona após 1 segundo
      </script>';

// Fechar a conexão
$conn->close();
?>
<hr>
  	<div class="area-colorida">
        <!-- Conteúdo dentro da área colorida -->
			<div style="display: flex; align-items: center; justify-content: center;">
    <a href="politica.html" style="background-color: #068ed0; color: #ffffff; padding: 10px;">termos|politica</a>
    <p style="background-color: #068ed0; color: #ffffff; margin: 0;">Copyright 2022 | Desenvolvido por: <img src="img/logo_rodape_alphacode.png" width="100px" alt="logo_alphacode"></p>
</div>
</body>
</html>