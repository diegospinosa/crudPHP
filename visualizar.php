<?php
include("Includes/Header.php");
include("Class/ClassCrud.php")
?>

<div class="Content">
    <?php
        $Crud = new ClassCrud();
        $IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $BFetch = $Crud->selectDB(
            "*",
            "cadastro",
            "where Id = ?",
            array($IdUser)
        );

        $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    ?>
    <h1>Dados do Usuário</h1>
    <hr>
    <strong>Nome:</strong><?php echo $Fetch['Nome']; ?><br>
    <strong>Preço:</strong><?php echo $Fetch['Preco']; ?><br>
    <strong>Descrição:</strong><?php echo $Fetch['Descricao']; ?><br>
</div>

<?php include("Includes/Footer.php"); ?>
