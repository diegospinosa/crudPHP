<?php
include ("Includes/Header.php");
include ("Class/ClassCrud.php");
?>

<div class="Content">
    <table class = "TabelaCrud">
        <tr>
            <td>Nome</td>
            <td>Preco</td>
            <td>Descricao</td>
            <td>Ações</td>
        </tr>

        <?php
            $Crud = new ClassCrud();
            $BFetch = $Crud->selectDB(
              "*",
              "cadastro",
              "",
              array()
            );

            while($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)){

            ?>
            <tr>
                <td><?php echo $Fetch['Nome'];?></td>
                <td><?php echo $Fetch['Preco'];?></td>
                <td><?php echo $Fetch['Descricao'];?></td>
                <td>
                    <a href = "<?php echo "visualizar.php?id={$Fetch['Id']}"; ?>"><img src = "Images/visu.png" alt = "Visualizar"</a>
                    <a href = "<?php echo "cadastro.php?id={$Fetch['Id']}"; ?>"><img src = "Images/edit.png" alt = "Editar"</a>
                    <a class = "Deletar" href = "<?php echo "Controllers/ControllerDeletar.php?id={$Fetch['Id']}"; ?>"><img src = "Images/delete.png" alt = "Deletar"</a>
                </td>
            </tr>
        <?php
        }
        ?>

    </table>
</div>

<?php include("Includes/Footer.php"); ?>
