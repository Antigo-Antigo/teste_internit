<?php 

session_start();

//-------------------------------//

// Variavel com path padrão do projeto, 
$path_projeto = substr(__DIR__, 0, strpos(__DIR__, 'src'));

// Inclui o arquivo de autoload 
include_once $path_projeto.'autoload/autoload.php';

// Pega o arquivo com informações do banco de dados
$config_bd = require $path_projeto.'config/banco_de_dados.php'; 

// Funcão Upload de Imagens
include "../../../Uteis/EnviarArquivo.php";

//-------------------------------//


use App\src\classes\Conexao;
use App\src\classes\Noticia;

//-------------------------------//

$conexao = new Conexao($config_bd);
$noticia = new Noticia;

//-------------------------------//


$pagina_link = isset($_POST['pagina_link']) ? trim(strip_tags($_POST['pagina_link'])) : "index.php"; 

$noticia->IdNoticia = isset($_POST['IdNoticia']) ? trim(strip_tags($_POST['IdNoticia'])) : FALSE; 
$noticia->Destaque = isset($_POST['select_destaque']) ? trim(strip_tags($_POST['select_destaque'])) : FALSE; 

if( $noticia->IdNoticia != FALSE && $noticia->Destaque != FALSE){

    if($noticia->Destaque == 2){
        $noticias_destaques = $noticia->Listar_Destaque($conexao);
    }else{
        $noticias_destaques = 0;
    }

    if( count($noticias_destaques) <= 2 ){

        $retorno = $noticia->Atualizar_Destaque_Id($noticia, $conexao);

        if($retorno == 1 )
        {
            $_SESSION['mensagem']= [ 1, "Destaque Atualizado Com Sucesso!" ];
            header("location:../../../../$pagina_link");

        }else
        {
            $_SESSION['mensagem']= [ 1, "Erro ao Atualizar Destaque!" ];
            header("location:../../../../$pagina_link");
        }

    }else
    {
        $_SESSION['mensagem']= [ 2, "Já existem 3 noticias em destaque no momento!" ]; 
        header("location:../../../../$pagina_link");
    }



}else
{ 
    $_SESSION['mensagem']= [ 2, "Nenhuma alteração foi indicada!" ]; 
    header("location:../../../../$pagina_link"); 
}
