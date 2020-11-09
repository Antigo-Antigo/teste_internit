<?php

session_start();

//-------------------------------//

// Variavel com path padrão do projeto, 
$path_projeto = substr(__DIR__, 0, strpos(__DIR__, 'src'));

// Inclui o arquivo de autoload 
include_once $path_projeto.'autoload/autoload.php';

// Pega o arquivo com informações do banco de dados
$config_bd = require $path_projeto.'config/banco_de_dados.php'; 

//-------------------------------//

use App\src\classes\Conexao;
use App\src\classes\Usuario;

//-------------------------------//

$conexao = new Conexao($config_bd);
$usuario = new Usuario;

//-------------------------------//

if( isset($_POST['botao_logar']) ){

    $pagina_link = isset($_POST['pagina_link']) ? trim(strip_tags($_POST['pagina_link'])) : "index.php"; 

    $Email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : FALSE; 
    $Senha = isset($_POST['senha']) ? trim(strip_tags($_POST['senha'])) : FALSE; 

    if( $Email != FALSE && $Senha != FALSE ){

        $usuario->setEmail($Email);
        $usuario->setSenha($Senha);

        $retorno = $usuario->Logar($usuario, $conexao);

        if( !empty($retorno) ){ 
            
            $_SESSION['login'] = $retorno;
            header("location:../../../index.php");
        
        }else{

            $_SESSION['mensagem']= [ 2, "Email ou Senha invalida!" ];
            header("location:../../../logar.php");

        }
        
    }else{ $_SESSION['mensagem']= [ 2, "Preencha Todos os Campos!" ]; } 

}

header("location:../../../index.php"); 

?>