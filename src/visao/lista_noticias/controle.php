<?php

$pagina_nome = "Noticias Cadastradas";
$pagina_link = 'lista_noticias.php';




// Inclui o arquivo de autoload 
include_once 'autoload/autoload.php';

// Pega o arquivo com informações do banco de dados
$config_bd = require 'config/banco_de_dados.php'; 

//-------------------------------//

use App\src\classes\Conexao;
use App\src\classes\Noticia;

//-------------------------------//

$conexao = new Conexao($config_bd);
$noticia = new Noticia;

//-------------------------------//

    $lista_noticias = $noticia->Listar($conexao);

//------------



?>
