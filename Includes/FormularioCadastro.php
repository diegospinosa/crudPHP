<?php
include ("Class/ClassCrud.php");
    /*Edicao de dados*/
    if(isset($_GET['id'])){
        $Acao = "Editar";

        $Crud = new ClassCrud();
        $BFetch = $Crud->selectDB("*", "cadastro", "where Id = ?", array($_GET['id']));
        $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
        $Id = $Fetch['Id'];
        $Nome = $Fetch['Nome'];
        $Preco = $Fetch['Preco'];
        $Descricao = $Fetch['Descricao'];
    }
    /*Novo cadastro de dados*/
    else{
        $Acao = "Cadastrar";
        $Id = 0;
        $Nome = "";
        $Preco = "";
        $Descricao = "";
    }
?>

<div class = "Resultado"></div>
<div class = "Formulario">
    <h1 class="Center"><?php echo $Acao;?></h1>

    <form name = "FormCadastro" id = "FormCadastro" method = "post" action = "Controllers/ControllerCadastro.php">
        <input type = "hidden" id = "Acao" name = "Acao" value = "<?php echo $Acao;?>">
        <input type = "hidden" id = "Id" name = "Id" value = "<?php echo $Id;?>">

        <div class="FormularioInput">
            Nome: <br>
            <input type = "text" id = "Nome" name = "Nome" value = "<?php echo $Nome;?>">
        </div>

        <div class="FormularioInput">
            Preço: <br>
            <input type = "text" id = "Preco" name = "Preco" value = "<?php echo $Preco;?>">
        </div>

        <div class="FormularioInput">
            Descrição: <br>
            <input type = "text" id = "Descricao" name = "Descricao" value = "<?php echo $Descricao;?>">
        </div>

        <div class="FormularioInput FormularioInput100 Center">
            <input type = "submit" value = "<?php echo $Acao;?>">
        </div>

    </form>
</div>
