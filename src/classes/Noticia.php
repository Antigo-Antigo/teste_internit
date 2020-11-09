<?php

namespace App\src\classes;

class Noticia
{

    public int $IdNoticia;
    public string $Titulo;
    public string $Data;
    public string $Resumo;
    public string $Imagem;
    public string $Conteudo;
    public int $Destaque;



    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function Cadastrar(object $noticia, $conexao): int
    {

        $sql = "INSERT INTO Noticia (Titulo, Data, Resumo, Imagem, Conteudo, Destaque) 
        VALUES ('$noticia->Titulo','$noticia->Data','$noticia->Resumo','$noticia->Imagem',
        '$noticia->Conteudo',1)";

        $retorno = $conexao->query($sql);

        if($retorno != FALSE){
            return 1;
        }else{
            return 0;
        }
        
    }

    public function Editar(object $noticia, $conexao): int
    {

        if( $noticia->Imagem != FALSE ){

            $sql = "UPDATE Noticia SET Titulo='$noticia->Titulo', Data='$noticia->Data',
            Resumo='$noticia->Resumo',Imagem='$noticia->Imagem',Conteudo='$noticia->Conteudo'
            WHERE IdNoticia = '$noticia->IdNoticia' ";  

        }else{
            
            $sql = "UPDATE Noticia SET Titulo='$noticia->Titulo', Data='$noticia->Data',
            Resumo='$noticia->Resumo',Conteudo='$noticia->Conteudo'
            WHERE IdNoticia = '$noticia->IdNoticia' ";  

        }

        $retorno = $conexao->query($sql);
        
        if($retorno != FALSE){
            return 1;
        }else{
            return 0;
        }
        
    }

    public function Atualizar_Destaque(array $destaques, $conexao): void
    {
   
        $sql = "UPDATE `Noticia` SET `Destaque`= 1 WHERE `Destaque` = 2;";
        $conexao->query($sql);

        if( !empty($destaques) ){

            foreach ($destaques as $destaque) {
    
                $sql = "UPDATE `Noticia` SET `Destaque`= 2 WHERE IdNoticia = '$destaque' ";
                $conexao->query($sql);
    
            }
        }

    }

    public function Atualizar_Destaque_Id(object $noticia, $conexao): int
    {

        $sql = "UPDATE `Noticia` SET `Destaque`= '$noticia->Destaque' WHERE 
        `IdNoticia` = '$noticia->IdNoticia' ; ";

        $resutado = $conexao->query($sql);

        if($resutado != FALSE){
            return 1;
        }else{
            return 0;
        }

    }


    public function Noticia_Id(object $noticia, $conexao)
    {

        $sql = "SELECT * FROM Noticia WHERE IdNoticia = '$noticia->IdNoticia'";

        $resultado = $conexao->query($sql);

        $retorno = $resultado->fetchAll(\PDO::FETCH_ASSOC);
        
        return $retorno[0];
        
    }

    public function Listar($conexao): array
    {

        $sql = "SELECT IdNoticia, Titulo, Data, Resumo, Imagem, Conteudo, Destaque FROM Noticia order by Destaque Desc";

        $resultado = $conexao->query($sql);

        $retorno = $resultado->fetchAll(\PDO::FETCH_ASSOC);
        
        return $retorno;
        
    }

    public function Listar_Destaque($conexao): array
    {

        $sql = "SELECT IdNoticia, Titulo, Data, Resumo, Imagem, Conteudo, Destaque FROM Noticia WHERE Destaque = 2 ";

        $resultado = $conexao->query($sql);

        $retorno = $resultado->fetchAll(\PDO::FETCH_ASSOC);
        
        return $retorno;
        
    }


    public function Excluir(object $noticia, $conexao): int
    {

        $sql = " DELETE FROM Noticia WHERE IdNoticia = '$noticia->IdNoticia' ";

        $retorno = $conexao->query($sql);
        
        if($retorno != FALSE){
            return 1;
        }else{
            return 0;
        }
        
    }

}