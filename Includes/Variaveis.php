<?php

if(isset($_POST['Acao'])){
    $Acao = filter_input(INPUT_POST,'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['Acao'])){
    $Acao = filter_input(INPUT_GET,'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $Acao = 0;
}

if(isset($_POST['Id'])){
    $Id = filter_input(INPUT_POST,'Id', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['Id'])){
    $Id = filter_input(INPUT_GET,'Id', FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $Id = 0;
}


if(isset($_POST['Nome'])){
    $Nome = filter_input(INPUT_POST,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['Nome'])){
    $Nome = filter_input(INPUT_GET,'Nome', FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $Nome = "";
}

if(isset($_POST['Preco'])){
    $Preco = filter_input(INPUT_POST,'Preco', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['Preco'])){
    $Preco = filter_input(INPUT_GET,'Preco', FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $Preco = "";
}

if(isset($_POST['Descricao'])){
    $Descricao = filter_input(INPUT_POST,'Descricao', FILTER_SANITIZE_SPECIAL_CHARS);
}
elseif(isset($_GET['Descricao'])){
    $Descricao = filter_input(INPUT_GET,'Descricao', FILTER_SANITIZE_SPECIAL_CHARS);
}
else{
    $Descricao = "";
}