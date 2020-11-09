<?php

$pagina_nome = "Usuarios Cadastradas";
$pagina_link = 'admin_usuarios.php';




// Variavel com path padrão do projeto, 
//$path_projeto = substr(__DIR__, 0, strpos(__DIR__, 'src'));

// Inclui o arquivo de autoload 
include_once 'autoload/autoload.php';

// Pega o arquivo com informações do banco de dados
$config_bd = require 'config/banco_de_dados.php'; 

//-------------------------------//

use App\src\classes\Conexao;
use App\src\classes\Usuario;

//-------------------------------//

$conexao = new Conexao($config_bd);
$usuarios = new Usuario;

//-------------------------------//


    $lista_usuarios = $usuarios->Listar($conexao);
    
       
//------------




?>


