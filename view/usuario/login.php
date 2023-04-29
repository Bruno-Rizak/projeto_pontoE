<html>
	<head>
		<title>Login</title>
		<script src="../../static/js/jquery-3.6.4.js"></script>
			<script type="text/javascript">
				$( document ).ready(function() {
				});

				function processa_login(){
					alert("FUNCAO LOGIN")
				}
			</script>
	</head>	
	<body>
        <h2>Sistema Ponto Eletronico</h2>
		<form>
			Usuario <input type="text" id="login" name="login"/> <br>
			Senha <input type="password" id="senha" name="senha"/> <br>
			<input type="submit" value="Logar" onclick="processa_login"/> <br>
	        </form>
</body>
</html>