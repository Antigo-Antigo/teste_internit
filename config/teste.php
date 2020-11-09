<?php 

// Variavel com path padrão do projeto, 
$path_projeto = substr(__DIR__, 0, strpos(__DIR__, 'src'));

// Inclui o arquivo de autoload 
include_once $path_projeto.'autoload/autoload.php';

// Pega o arquivo com informações do banco de dados
$config_bd = require $path_projeto.'config/banco_de_dados.php'; 


use App\src\classes\Conexao;
use App\src\classes\Usuario;


$conexao = new Conexao($config_bd);


var_dump($conexao);

$user = new Usuario;

$user->IdUsuario = 13;

echo $user->IdUsuario;




$user->CadastrarUsuario();


?>

