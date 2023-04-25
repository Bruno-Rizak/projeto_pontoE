<?php
    function valida_sessao(){
        session_start();
	    if (empty($_SESSION["logado"])){
		    header("location: login.php");
	    }
    }

    valida_sessao();
?>