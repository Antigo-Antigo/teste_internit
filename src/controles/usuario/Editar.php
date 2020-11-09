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

$pagina_link = isset($_POST['pagina_link']) ? trim(strip_tags($_POST['pagina_link'])) : "index.php";

$IdUsuario = isset($_POST['id_usuario']) ? trim(strip_tags($_POST['id_usuario'])) : FALSE; 
$Nome = isset($_POST['nome']) ? trim(strip_tags($_POST['nome'])) : FALSE; 
$Email = isset($_POST['email']) ? trim(strip_tags($_POST['email'])) : FALSE; 
$Cpf = isset($_POST['cpf']) ? trim(strip_tags($_POST['cpf'])) : FALSE; 
$End = isset($_POST['endereco']) ? trim(strip_tags($_POST['endereco'])) : FALSE; 
$Cidade = isset($_POST['cidade']) ? trim(strip_tags($_POST['cidade'])) : FALSE;
$Uf = isset($_POST['estado']) ? trim(strip_tags($_POST['estado'])) : FALSE; 
$Senha = isset($_POST['senha']) ? trim(strip_tags($_POST['senha'])) : FALSE; 
$IdTipoUsuario = isset($_POST['IdTipoUsuario']) ?  (int) trim(strip_tags($_POST['IdTipoUsuario'])) : 1; 


if($IdUsuario !=FALSE && $Nome != FALSE && $Email != FALSE && $Cpf != FALSE && $End != FALSE && $Cidade != FALSE && $Uf != FALSE && $IdTipoUsuario != FALSE ){

    $usuario->setIdUsuario($IdUsuario);
    $usuario->setNome($Nome);
    $usuario->setEmail($Email);
    $usuario->setCpf($Cpf);
    $usuario->setEnd($End);
    $usuario->setCidade($Cidade);
    $usuario->setUf($Uf);
    $usuario->setSenha($Senha);
    $usuario->setIdTipoUsuario($IdTipoUsuario);

    $retorno = $usuario->Editar($usuario, $conexao);

    if( $retorno == 1){

        $usuario_editado = $usuario->Usuario_Id($usuario, $conexao);
        $_SESSION['login'] = $usuario_editado;

        $_SESSION['mensagem']= [ 1, "Perfil Editado com Sucesso!" ];
        header("location:../../../perfil.php");

    }else{
        
        $_SESSION['mensagem']= [ 2, "Não foi possivel Editar o Perfil!" ];
        header("location:../../../perfil.php");
    }

}else{ 
    $_SESSION['mensagem']= [ 2, "Preencha todos os campos!" ]; 
    header("location:../../../../$pagina_link");
}


?>