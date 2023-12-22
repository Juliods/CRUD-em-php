<!-- Autor: Júlio Perozzi Dias -->
<!-- : 21.12.2023 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
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
			<td><h1 style="background-color: #068ed0; color: #ffffff;">Editor de contatos</h1>
			</td>
		</tr>
	</table>
	</div>
<hr>

<?php
// Autor: Júlio Perozzi Dias
$servername = "localhost";
$username = "programa";
$password = "486502";
$dbname = "funcionarios";
$nomealterar = "";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se o ID do funcionário foi fornecido
if (isset($_GET['id_funcionario'])) {
    $id_funcionario = $_GET['id_funcionario'];

    // Consultar o registro no banco de dados
    $sql = "SELECT * FROM cadastros WHERE id_funcionario = $id_funcionario";
    $result = $conn->query($sql);
//descorbir como fazer esses campos como required
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Renderizar um formulário de edição
        echo '<form action="atualizar.php" method="post">';
        echo '<input type="hidden" name="id_funcionario" value="' . $row['id_funcionario'] . '">';
        //mudando nome
        $nomealterar = $row['nome'];
        echo 'Nome antigo: ' . $row['nome'] . '<br>';
        echo 'Novo nome: <input type="text" name="novo_nome" value="' . $nomealterar . '" required><br>';
        echo '<br>';
        //mudando data de nascimento
        $dataalterar = $row['data'];
        echo 'Data de nascimento antiga: ' . date('d-m-Y', strtotime($row['data'])) . '<br>';
        echo 'Data de nascimento nova: <input type="date" name="nova_data" value="' . $dataalterar . '" required><br>';
        echo '<br>';
        //mudando e-mail
        $emailalterar = $row['email'];
        echo 'e-mail antigo: ' . $row['email'] . '<br>';
        echo 'e-mail novo: <input type="text" name="novo_email" value="' . $emailalterar . '" required><br>';
        echo '<br>';
        //mudando profissao
        $profissaoalterar = $row['profissao'];
        echo 'profissao antiga: ' . $row['profissao'] . '<br>';
        echo 'profissao nova: <input type="text" name="nova_profissao" value="' . $profissaoalterar . '" required><br>';
        echo '<br>';
        //mudando telefone para contato
        $telefonealterar = $row['telefone'];
        echo 'telefone antigo: ' . $row['telefone'] . '<br>';
        echo 'telefone novo: <input type="text" name="novo_telefone" value="' . $telefonealterar . '" required><br>';
        echo '<br>';
        //mudando celular para contato
        $celularalterar = $row['celular'];
        echo 'celular antigo: ' . $row['celular'] . '<br>';
        echo 'celular novo: <input type="text" name="novo_celular" value="' . $celularalterar . '" required><br>';
        echo '<br>';
        //aviso
        echo 'Configurações de whatsapp e notificações Digite: 0 (zero) para não e: 1 (um) para sim<br>';
        //mudando valor do whatsapp
        $whatsappalterar = $row['whatsapp'];
        echo 'Número tem whatsapp antigo: ' . $row['whatsapp'] . '<br>';
        echo 'Número tem whatsapp novo: <input type="tinyint" name="novo_whatsapp" value="' . $whatsappalterar . '" required><br>';
        echo '<br>';
        //mudando valor do emailnotific
        $emailnotificalterar = $row['emailnotific'];
        echo 'Receber e-mail antigo: ' . $row['emailnotific'] . '<br>';
        echo 'Receber e-mail novo: <input type="tinyint" name="nova_emailnotific" value="' . $emailnotificalterar . '" required><br>';
        echo '<br>';
        //mudando valor do SMSnotific
        $SMSnotificalterar = $row['SMSnotific'];
        echo 'Receber SMS antigo: ' . $row['SMSnotific'] . '<br>';
        echo 'Receber SMS novo: <input type="tinyint" name="nova_SMSnotific" value="' . $SMSnotificalterar .  '" required><br>';
        echo '<br>';
        
    
        //enviando os dados
        echo '<form action="atualizar.php" method="post">';
        echo '<input type="hidden" name="id_funcionario" value="' . $row['id_funcionario'] . '">';
      
        // Botões
        echo '<input type="submit" value="Salvar" style="background-color: #068ed0; color: #ffffff; display: inline-block;" form="myForm">';
        echo '<a href="index.php"><button style="background-color: #068ed0; color: white; display: inline-block; margin-left: 10px;" form="myForm">Voltar</button></a>';
        echo '</form>';
        
    } else {
        echo 'Registro não encontrado.';
    }
} else {
    echo 'ID do funcionário não fornecido.';
}

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