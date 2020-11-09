<?php

$pagina_nome = "Noticia";
$pagina_link = 'noticia.php';


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

    $noticia->IdNoticia = isset($_GET['noticia']) ? trim(strip_tags($_GET['noticia'])) : FALSE; 

    $noticia_exibir = $noticia->Noticia_Id( $noticia, $conexao);

//------------



?>