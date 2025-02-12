<?php

    namespace PHP\Modelo;


    require_once('DAO/Conexao.php');
    require_once('DAO/Inserir.php');
    require_once('DAO/Consultar.php');
    require_once('DAO/ConsultarCodigo.php');
    require_once('DAO/Atualizar.php');
    require_once('DAO/Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Consultar;
    use PHP\MOdelo\DAO\ConsultarCodigo;
    use PHP\Modelo\DAO\Atualizar;
    use PHP\Modelo\DAO\Excluir;





    $conn = new Conexao();
    $conn->conectar();//Acessar o banco de dados 

    $inserir = new Inserir();//Criando acesso a classe inserir
    echo $inserir->CadastrarPessoa($conn,"...","...","Rua","11");

    $consultar = new Consultar();
    echo $consultar->consultarIndividual($conn,'1');
    echo $consultar->consultarIndividual($conn,'2');
    echo $consultar->consultarIndividual($conn,'3');

    $atualizar = new Atualizar();
    echo $atualizar->atualizarPessoa($conn, "nome", "...", 1);

    $excluir = new Excluir();
    $excluir->excluirPessoa($conn,1);
?>