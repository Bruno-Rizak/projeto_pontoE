<html>
	<head><title>Login</title></head>	
	<body>
        <h2>Listar Usuários</h2>
		<table border="1">
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>Sobrenome</td>
			<td>Email</td>
			<td>Login</td>
		</tr>
		<?php
			for ($i=0; $i<sizeof($dados);$i++){
				echo "<tr>";
				echo "<td><a href=\"../controller/usuario_controller.php?acao=editar&id=".$dados[$i]["id"]."\">".$dados[$i]["id"]."</a></td>";
				echo "<td>".$dados[$i]["nome"]."</td>";
				echo "<td>".$dados[$i]["sobrenome"]."</td>";
				echo "<td>".$dados[$i]["email"]."</td>";
				echo "<td>".$dados[$i]["login"]."</td>";
				echo "</tr>";
			}
			?>
			
		</table>
</body>
</html>