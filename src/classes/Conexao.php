<?php

namespace App\src\classes;

class Conexao extends \PDO
{

    public function __construct(array $dados_conexao) 
    {
      //
      $dns = \vsprintf('%s:host=%s;dbname=%s', $dados_conexao);

      //
      parent::__construct($dns, $dados_conexao['usuario'], $dados_conexao['senha']);

    } 

}


?>