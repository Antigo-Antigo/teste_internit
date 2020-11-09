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
use App\src\classes\Noticia;

//-------------------------------//

$conexao = new Conexao($config_bd);
$noticia = new Noticia;

//-------------------------------//

$noticia->IdNoticia = isset($_POST['IdNoticia']) ? trim(strip_tags($_POST['IdNoticia'])) : FALSE; 

$pagina_link = isset($_POST['pagina_link']) ? trim(strip_tags($_POST['pagina_link'])) : "index.php";

$retorno = $noticia->Excluir($noticia, $conexao);

    if( $retorno == 1)
    {

        $_SESSION['mensagem']= [ 1, "Noticia Excluida com Sucesso!" ];
        header("location:../../../../$pagina_link");

    }else{
        
        $_SESSION['mensagem']= [ 2, "Não foi possivel Exluir a Noticia!" ];
        header("location:../../../../$pagina_link");
    }


?>