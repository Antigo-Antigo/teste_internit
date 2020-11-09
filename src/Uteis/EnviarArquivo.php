<?php 

function EnviarArquivo( $arquivo ):string
{
   
    $path_atual= "../../../../"; 
    $diretorio_imagem = "imagens/";
    $diretorio = $path_atual.$diretorio_imagem;

    if( !is_dir($diretorio) ): mkdir($diretorio, 0777, true); endif;

    //Pega a Extenção da Imagem
    $imagem_extencao = '.'.substr($arquivo['type'], -3);

    //Define Nome da Imagem
    $imagem_nome = date("Y.m.d-H.i.s") . $imagem_extencao;


    if( move_uploaded_file($arquivo['tmp_name'], $diretorio.$imagem_nome) ){  
        return $diretorio_imagem.$imagem_nome;
    }else{
        return FALSE;
    }
   
} 

?>