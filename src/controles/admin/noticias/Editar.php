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

$botao_editar_noticias = isset($_POST['botao_editar_noticias']) ? trim(strip_tags($_POST['botao_editar_noticias'])) : FALSE; 
$pagina_link = isset($_POST['pagina_link']) ? trim(strip_tags($_POST['pagina_link'])) : "index.php"; 
$imagem = isset($_FILES['Imagem']) ? $_FILES['Imagem'] : FALSE; 


$noticia->IdNoticia = isset($_POST['IdNoticia']) ? trim(strip_tags($_POST['IdNoticia'])) : FALSE; 
$noticia->Titulo = isset($_POST['Titulo']) ? trim(strip_tags($_POST['Titulo'])) : FALSE; 
$noticia->Data = isset($_POST['Data']) ? trim(strip_tags($_POST['Data'])) : FALSE; 
$noticia->Resumo = isset($_POST['Resumo']) ? trim(strip_tags($_POST['Resumo'])) : FALSE; 
$noticia->Conteudo = isset($_POST['Conteudo']) ? trim(strip_tags($_POST['Conteudo'])) : FALSE;

//vardump($noticia);

if( $noticia->Titulo != FALSE && $noticia->Data != FALSE && $noticia->Resumo != FALSE && $noticia->Conteudo != FALSE ){

    if( ($imagem = EnviarArquivo($imagem)) != FALSE ){
        $noticia->Imagem = $imagem;
    }else{
        $noticia->Imagem = FALSE;
    }

    $retorno = $noticia->Editar($noticia, $conexao);

    if( $retorno == 1)
    {

        $_SESSION['mensagem']= [ 1, "Noticia Atualizada com sucesso!" ];
        header("location:../../../../$pagina_link");

    }else{

        $_SESSION['mensagem']= [ 2, "Não foi possivel Atualizar a Noticia no momento !" ];
        header("location:../../../../$pagina_link");

    }

}else
{ 
    $_SESSION['mensagem']= [ 2, "Preencha todos os campos!" ]; 
    header("location:../../../../admin_noticias.php"); 
}


?>