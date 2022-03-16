<?php
include("./lesdeux/header.php");


?>


<section>
    <div class="title">
        <label for="ControlInput" class="form-label">Titre</label>
        <input type="titre" class="form-control" id="Input1" placeholder="">
    </div>
    <div class="content">
        <label for="ControlTextarea1" class="form-label">Contenu</label>
        <textarea class="form-control" id="Textarea" rows="12"></textarea>
    </div>

    <div class="image">
        <label for="img" class="form-label">Image</label>
        <input type="titre" class="form-control" id="images" placeholder="mettre l'URL">


        <select class="cat" aria-label="">
            <option selected>Open this select menu</option>
            <option value="">One</option>
            <option value="">Two</option>
            <option value="">Three</option>
        </select>

        <select class="auteur" aria-label="">
            <option selected>Open this select menu</option>
            <option value="">One</option>
            <option value="">Two</option>
            <option value="">Three</option>
        </select>


    </div>

</section>




























































<?php
include("./lesdeux/footer.php");
?>