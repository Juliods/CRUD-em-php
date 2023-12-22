<!-- Autor: Júlio Perozzi Dias -->
<!-- Data: 21.12.2023 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionando...</title>
    <style>
        ..area-colorida {
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
			<td><h1 style="background-color: #068ed0; color: #ffffff;">Criando contato...</h1>
			</td>
		</tr>
	</table>
	</div>
<hr>
<?php
//Autor: Júlio Perozzi Dias
//Data: 21.12.2023
//dados para conexão com o banco de dados
$servername="localhost";
$username="programa";
$password="486502";
$dbname="funcionarios";


$conn=new mysqli($servername,$username,$password,$dbname);

//ativando relatório de erros
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);

//verificando conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

//obtendo dados do formulário
$nome=$_POST['nome'];
$data=$_POST['data'];
$email=$_POST['email'];
$profissao=$_POST['profissao'];
$telefone=$_POST['telefone'];
$celular=$_POST['celular'];
//estes valores precisam ser obtidos de forma diferente
$whatsapp=isset($_POST['whatsapp']) ? 1 : 0;
$emailnotific=isset($_POST['emailnotific']) ? 1 : 0;
$SMSnotific=isset($_POST['SMSnotific']) ? 1 : 0;


//inserindo dados na tabela
$sql="INSERT INTO cadastros (nome,data,email,profissao,telefone,celular,whatsapp,emailnotific,SMSnotific) VALUES ('$nome','$data','$email','$profissao','$telefone','$celular','$whatsapp','$emailnotific','$SMSnotific')";

if ($conn->query($sql) === TRUE) {
    echo "Registro adicionado com sucesso... voltando à página inicial";
}  else {
    echo "Erro na inserção: " . $conn->error;
}

//fazendo a tabela sql
$sql = "SELECT * FROM cadastros ORDER BY id_funcionario DESC";
$result = $conn->query($sql);
//print_r($result);

// Adicionar redirecionamento e atualização automática
echo '<script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 1000); // Redireciona após 1 segundo
      </script>';

//fechando a conexão
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