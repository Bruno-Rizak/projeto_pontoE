<?php
    require_once "../model/Usuario.php";

    class UsuarioController{

        public function execute($post, $get){
            $acao = $get['acao'];
            if ($acao == "cadastrar"){
                $usuario = new Usuario();

                $nome = $post["nome"];
                $usuario->__set("nome", $nome);

                $sobrenome = $post["sobrenome"];
                $usuario->__set("sobrenome", $sobrenome);

                $email = $post["email"];
                $usuario->__set("email", $email);

                $login = $post["login"];
                $usuario->__set("login", $login);

                $senha = $post["senha"];
                $confirmar_senha = $post["confirmar_senha"];
                
                if ($senha == $confirmar_senha){
                    $senha_hash = hash("sha3-256", $senha);
                    $usuario->__set("senha", $senha_hash);
                   
                    if($usuario->salvar() == true){
                        echo "Usuario Cadastrado com Sucesso!";
                    }
                }
                else{
                    //enviar msg de erro
                }
            }
            else if($acao == "listar"){
                $usuario = new Usuario();
                $dados = $usuario->listarTodos();
                require_once("../view/usuario/listar_usuario.php");
            }
            else if($acao == "editar"){
                $id = $get["id"];
                $usuario = new Usuario();
                $dados = $usuario->buscarPorId($id);
                
                require_once("../view/usuario/editar_usuario.php");
            }    

        }
    }
    
  
  $controller = new UsuarioController();
  $controller->execute($_POST, $_GET);
  
  
  
  
  /* 
  
  session_start();
    require_once ("Usuario.php");
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    $usuario = new Usuario();
    $senha_cripto = hash("sha3-256", $senha);
    $status = $usuario->autenticar($login, $senha_cripto);
    if ($status == true){
        $_SESSION["logado"] = true;
        $_SESSION["user"] = $login;
        header("location:principal.php");
    }
    else{
        echo "Ops!!! Usuário/senha Inválidos :(";
    }
*/