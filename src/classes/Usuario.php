<?php

namespace App\src\classes;

class Usuario
{

    private int $IdUsuario;
    private string $Nome;
    private string $Email;
    private string $Cpf;
    private string $End;
    private string $Cidade;
    private string $Uf;
    private string $Senha;
    private int $IdTipoUsuario;

//--------------------------------------------------//
    public function setIdUsuario(int $IdUsuario): void
    {
        $this->IdUsuario = $IdUsuario;
    }

    public function getIdUsuario(): int
    {
        return $this->IdUsuario;
    }
//--------------------------------------------------//
    public function setNome(string $Nome): void
    {
        $this->Nome = $Nome;
    }

    public function getNome(): string
    {
        return $this->Nome;
    }
//--------------------------------------------------//
    public function setEmail(string $Email): void
    {
        $this->Email = $Email;
    }

    public function getEmail(): string
    {
        return $this->Email;
    }
//--------------------------------------------------//
    public function setCpf(string $Cpf): void
    {
        $this->Cpf = $Cpf;
    }

    public function getCpf(): string
    {
        return $this->Cpf;
    }
//--------------------------------------------------//
    public function setEnd(string $End): void
    {
        $this->End = $End;
    }

    public function getEnd(): string
    {
        return $this->End;
    }
//--------------------------------------------------//
    public function setCidade(string $Cidade): void
    {
        $this->Cidade = $Cidade;
    }

    public function getCidade(): string
    {
        return $this->Cidade;
    }
//--------------------------------------------------//
    public function setUf(string $Uf): void
    {
        $this->Uf = $Uf;
    }

    public function getUf(): string
    {
        return $this->Uf;
    }
//--------------------------------------------------//
    public function setSenha(string $Senha): void
    {
        $this->Senha = $Senha;
    }

    public function getSenha(): string
    {
        return $this->Senha;
    }
//--------------------------------------------------//
    public function setIdTipoUsuario(int $IdTipoUsuario): void
    {
        $this->IdTipoUsuario = $IdTipoUsuario;
    }

    public function getIdTipoUsuario(): int
    {
        return $this->IdTipoUsuario;
    }
//--------------------------------------------------//


    public function Cadastrar(object $usuario, $conexao): int
    {

        $sql = "INSERT INTO Usuario (Nome, Email, Cpf, End, Cidade, Uf, Senha, IdTipoUsuario) 
        VALUES ('$usuario->Nome','$usuario->Email','$usuario->Cpf','$usuario->End',
        '$usuario->Cidade','$usuario->Uf','$usuario->Senha','$usuario->IdTipoUsuario')";

        $retorno = $conexao->query($sql);
        
        if($retorno != FALSE){
            return 1;
        }else{
            return 0;
        }
        
    }
    

    public function Logar(object $usuario, $conexao)
    {

        $sql = "SELECT IdUsuario, Nome, Email, Cpf, End, Cidade, Uf, Senha, IdTipoUsuario FROM Usuario WHERE 
        Email = '$usuario->Email' AND Senha = '$usuario->Senha'";

        $resultado = $conexao->query($sql);
        
        if( $resultado > 0 ){
            $retorno = $resultado->fetchAll(\PDO::FETCH_ASSOC);
        }else{
            $retorno = FALSE;
        }
        
        return $retorno[0];
        
    }

    public function Editar(object $usuario, $conexao): int
    {

        if( empty($usuario->Senha) ){

            $sql = "UPDATE Usuario SET Nome='$usuario->Nome', Email='$usuario->Email',
            Cpf='$usuario->Cpf',End='$usuario->End',Cidade='$usuario->Cidade',Uf='$usuario->Uf',
            IdTipoUsuario='$usuario->IdTipoUsuario' WHERE IdUsuario = '$usuario->IdUsuario' ";  

        }else{
            
            $sql = "UPDATE Usuario SET Nome='$usuario->Nome', Email='$usuario->Email',
            Cpf='$usuario->Cpf',End='$usuario->End',Cidade='$usuario->Cidade',Uf='$usuario->Uf',
            Senha='$usuario->Senha', IdTipoUsuario='$usuario->IdTipoUsuario' WHERE IdUsuario = '$usuario->IdUsuario' ";

        }

        $retorno = $conexao->query($sql);
        
        if($retorno != FALSE){
            return 1;
        }else{
            return 0;
        }
        
    }

    public function Usuario_Id(object $usuario, $conexao)
    {

        $sql = "SELECT IdUsuario, Nome, Email, Cpf, End, Cidade, Uf, Senha, IdTipoUsuario FROM Usuario WHERE 
        IdUsuario = '$usuario->IdUsuario'";

        $resultado = $conexao->query($sql);

        $retorno = $resultado->fetchAll(\PDO::FETCH_ASSOC);
        
        return $retorno[0];
        
    }

    public function Listar($conexao): array
    {

        $sql = "SELECT IdUsuario, Nome, Email, Cpf, End, Cidade, Uf, Senha, IdTipoUsuario FROM Usuario order by IdTipoUsuario Desc";

        $resultado = $conexao->query($sql);

        $retorno = $resultado->fetchAll(\PDO::FETCH_ASSOC);
        
        return $retorno;
        
    }

    public function Excluir(object $usuario, $conexao): int
    {

        $sql = " DELETE FROM Usuario WHERE IdUsuario = '$usuario->IdUsuario' ";

        $retorno = $conexao->query($sql);
        
        if($retorno != FALSE){
            return 1;
        }else{
            return 0;
        }
        
    }

}