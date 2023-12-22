<!-- Autor: Júlio Perozzi Dias -->
<!-- Data: 21.12.2023 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro e visualização</title>
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
			<td><h1 style="background-color: #068ed0; color: #ffffff;">Cadastro de contatos</h1>
			</td>
		</tr>
	</table>
	</div>
<hr>
	<!--começo do formulário-->
	<table>
	<tr>
	<td>
		<form action="formulario.php" method="post" onsbmit="valores();">
		<label for="nome">Nome completo:</label>
		<input type="text" id="nome" name="nome" required>
	<td>
		<label for="data">Data de nascimento:</label>
		<input type="date" id="data" name="data" required><br>
		</td>
		</tr>

<tr>
<td>
		<label for="email">E-mail:</label>
		<input type="text" id="email" name="email" required>
<td>
		<label for="profissao">Profissão:</label>
		<input type="text" id="profissao" name="profissao" required>
</td>
</tr>
<tr>
<td>
		<label for="telefone">Telefone para contato:</label>
		<input type="text" id="telefone" name="telefone" required>
<td>
		<label for="celular">Celular para contato:</label>
		<input type="text" id="celular" name="celular"  required><br>
</tr>
</td>
</table>
		<label for="whatsapp">Número de celular possui Whatsapp</label>
		<input type="checkbox" id="opcaowpp" name="opcaowpp">
		<input type="hidden" id="codwhatsapp" name="whatsapp" style="align:'right'"><br>

		<label for="emailnotific">Enviar notificações por E-mail</label>
		<input type="checkbox" id="opcaoeM" name="opcaoeM">
		<input type="hidden" id="codemail" name="emailnotific"><br>

		<label for="SMSnotific">Enviar notificações por SMS</label>
		<input type="checkbox" id="opcaoSMS" name="opcaoSMS">
		<input type="hidden" id="codeSMS" name="SMSnotific"><br>

		<br><input type="submit" value="Cadastrar contato" style="background-color: #068ed0; color: #ffffff;">
	</form>

	<script>
		function valores() {
			var checkbox = document.getElementById('opcaowpp');
			var valorInput = document.getElementById('whatsapp');
			valorInput.value = checkbox.checked ? 1 : 0;

			var checkboxEM = document.getElementById('opcaoeM');
			var valorInput = document.getElementById('emailnotific');
			valorInput.value = checkbox.checked ? 1 : 0;

			var checkboxSMS = document.getElementById('opcaoSMS');
			var valorInputSMS = document.getElementById('SMSnotific');
			valorInput.value = checkbox.checked ? 1 : 0;
		}
	</script>
	
	<hr>
	
<?php

$servername ="localhost";
$username ="programa";
$password="486502";
$dbname="funcionarios";
$conn=new mysqli($servername,$username,$password,$dbname);

//activando relatório de erros
error_reporting(E_ALL);
ini_set('display_errors','1');


$SQL = "SELECT * FROM cadastros ORDER BY id_funcionario DESC;";
$result = $conn->query($SQL);
$dados = $conn->query("SELECT * FROM cadastros");

//while ($row = $result->fetch_assoc()) {
//    echo $row['id_funcionario'].$row['nome'].'<br>';
//}

//verificando consulta
if (!$result) {
	die("Erro na consulta: " . $conn->error);
}
//verificando resultados

if ($result->num_rows>0){
    echo '<div class="table-responsive">';
    echo '<table class="table table-bordered">';
    echo '<thead style="background-color: #068ed0; color: white;"><tr><th>ID</th><th>Nome</th><th>Data de nascimento</th><th>E-mail</th><th>Celular para contato</th><th>Ações</th></tr></thead>';
    echo '<tbody>';

   
    
	while ($row = $result->fetch_assoc()) {
	    echo '<tr>';
	    echo '<td>' . $row['id_funcionario'] . '</td>';
	    echo '<td>' . $row['nome'] . '</td>';
	    echo '<td>' . date('d-m-Y', strtotime($row['data'])) . '</td>';
	    echo '<td>' . $row['email'] . '</td>';
	    echo '<td>' . $row['celular'] . '</td>';
	    //implementando botões de adição e exclusão
	    echo '<td>';
	    echo '<a href="editar.php?id_funcionario=' . $row['id_funcionario'] . '"><img src="img/editar.png" alt="Editar"></a>   ';
	    echo '<a href="excluir.php?id_funcionario=' . $row['id_funcionario'] . '"><img src="img/excluir.png" alt="Excluir"></a>';
	    echo '</td>';
	    echo '</tr>';
	} 
	echo '</tbody>';
	echo '</table>';
	echo '</div>';
} else { 
    echo 'Nenhum resultado encontrado.';
}

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