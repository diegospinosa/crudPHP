<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();

if($Acao == 'Cadastrar'){
    $Crud->insertDB(
        "cadastro",
        "?, ?, ?, ?",
        array($Id, $Nome, $Preco, $Descricao)
    );

    echo "Cadastro Realizado com Sucesso!";
}
else{
    $Crud->updateDB(
        "cadastro",
        "Nome = ?, Preco = ?, Descricao = ?",
        "Id = ?",
        array($Nome, $Preco, $Descricao, $Id)
    );
    echo "Dado Editado com Sucesso!";
}


