<!DOCTYPE html>
<!-- Autor: Júlio Perozzi Dias -->
<!-- Data: 21.12.2023 -->
<!--  Esse é um arquivo bonus para testar a conexão com o banco de dados mysql -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de conexão</title>
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
	<table id="bluetable">
		<tr>
			<td>
				<img src="img/logo_alphacode.png" width="100px" alt="logo_alphacode">
			</td>
			<td><h1 style="background-color: #068ed0; color: #ffffff;">Testador de conexão</h1>
			</td>
		</tr>
	</table>
	</div>
<hr>
<?php
$servername = "localhost";
$username = "programa";
$password = "486502";
$dbname = "funcionarios";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

echo "Conexão bem-sucedida!";

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
