<html>
	<head><title>Login</title></head>	
	<body>
        <h2>Cadastro de Usuário</h2>
		<form action="../../controller/usuario_controller.php?acao=atualizar" method="POST">
			Nome: <input type="text" name="nome" value="<?php echo $dados[0]["nome"]?>"/> <br>
			Sobrenome: <input type="text" name="sobrenome" value="<?php echo $dados[0]["sobrenome"]?>"/> <br>
			Email: <input type="text" name="email" value="<?php $email?>"/> <br>
			Login: <input type="text" name="login" /> <br>
			Senha: <input type="password" name="senha"/> <br>
			Confirmar Senha: <input type="password" name="confirmar_senha"/><br>
			<input type="submit" value="Cadastrar"/> <br>
	    </form>
</body>
</html>