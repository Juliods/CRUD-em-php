<!-- Autor: Júlio Perozzi Dias -->
<!-- Data: 21.12.2023 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizando...</title>
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
			<td><h1 style="background-color: #068ed0; color: #ffffff;">Atualizador de contatos</h1>
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
// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_funcionario = $_POST['id_funcionario'];
    $novo_nome = $_POST['novo_nome'];
    $nova_data = $_POST['nova_data'];
    $novo_email = $_POST['novo_email'];
    $nova_profissao = $_POST['nova_profissao'];
    $novo_telefone = $_POST['novo_telefone'];
    $novo_celular = $_POST['novo_celular'];
    $novo_whatsapp = $_POST['novo_whatsapp'];
    $nova_emailnotific = $_POST['nova_emailnotific'];
    $nova_SMSnotific = $_POST['nova_SMSnotific'];
    // Atualizar o nome no banco de dados
    //lembrete: não coloque vírgula no último, o sql não gosta disso
    $sql = "UPDATE cadastros SET
             nome = '$novo_nome',
             data = '$nova_data',
             email = '$novo_email',
             profissao = '$nova_profissao',
             telefone = '$novo_telefone',   
             celular = '$novo_celular',
             whatsapp = '$novo_whatsapp',
             emailnotific = '$nova_emailnotific',
             SMSnotific = '$nova_SMSnotific'
             WHERE id_funcionario = $id_funcionario";
    $result = $conn->query($sql);
    
    if ($result) {
        echo 'Registro atualizado com sucesso... retornando ao menu principal';
    } else {
        echo 'Erro ao atualizar o registro: ' . $conn->error;
    }
} else {
    echo 'Método de requisição inválido.';
}

echo '<script>
        setTimeout(function() {
            window.location.href = "index.php";
        }, 1000); // Redireciona após 1 segundos
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