<?php
	require_once "Empregado.php";

	$empregado = new Empregado();
	$dados = $empregado->obterTodos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Dados dos Empregados</h2>
	<table border="1">
		<tr>
			<th>Id</th>
			<th>Numero da Matricula</th>
			<th>Nome Completo</th>
			<th>Data Nascimento</th>
			<th>Data Contratação</th>
		</tr>
		<?php
			for ($i=0; $i<sizeof($dados); $i++){
				echo "<tr>";
				echo "<td>".$dados[$i]["id"]."</td>";
				echo "<td>".$dados[$i]["no_matricula"]."</td>";
				echo "<td>".$dados[$i]["nome"]. " ".$dados[$i]["sobrenome"]."</td>";
				echo "<td>".$dados[$i]["data_nascimento"]."</td>";
				echo "<td>".$dados[$i]["data_contratacao"]."</td>";
				echo "</tr>";
			}
			?>
	</table>

</body>
</html>