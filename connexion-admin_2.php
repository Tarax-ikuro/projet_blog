<?php
include("./lesdeux/header.php");
include_once("config.php");

?>
<article class="admintableau">
    <h2>Administration</h2>
    <div>
        <a href="http:" $b?> <button>Ajouter un article</button></a>
        <a href="http:" $b ?><button> Contact</button></a>
        <a href="http:" $b ?>><button>Modifier un utilisateur</button></a>

    </div>
    <section>
        <table class="table table-striped table-sm">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titre</th>
                    <th scope="col">Catégorie</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <?php
            $stmt = popArticle($pdo, ['sql' => 1]);
            while ($row = $stmt->fetch()) {
                $i = $row->article ?>
                <tr>
                    <!-- ON UTILISE LE TAG PHP ET ECHO DANS LES CASES DU TABLEAU POUR LES REMPLIR AVEC LES DONNÉES -->
                    <td><?php echo $row->idArticle; ?></td>
                    <td><?php echo $row->titre; ?></td>
                    <td><?php echo $row->categorie; ?></td>
                    <td class="spaceBtton">
                        <div>
                            <form action="http://<?= $b ?><?= $row->idArticle ?>" method="post">

                                <button name="edit">Modifier</button>
                                <input hidden value="<?= $row->idArticle ?>" type="text" name="idDelete">

                                <button class="delete" name="delete">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </section>


</article>








<?php
include("./lesdeux/footer.php");
?>