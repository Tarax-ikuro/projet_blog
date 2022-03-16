<?php
include("./lesdeux/header.php");
include("config.php");
include("./fonctions/sendMessage.php");
include("contact_traitement.php");
?>

<article class="contact">
    <h2> Contact
    </h2>
    <form action="contact_traitement.php" method="POST">

        <div>

            <label for="name">Email</label>

            <input type="email" id="email" name="email" required minlength="4" maxlength="30" size="10">

            <label for="name">Ecris ton message </label>



            <textarea id="text" name="message" rows="10" cols="30">

                </textarea>

        </div>
        <button name="sendMessage">Envoyer</button>






    </form>
    <?php



    if (isset($_SESSION['erreur'])) {
        $err = $_SESSION['erreur'];
        unset($_SESSION['erreur']);
        if ($err == 2) {
            echo "Donnée manquante";
        }
        if ($err == 1) {
            echo "Envoi du message";
        }
    }
    ?>
</article>








<?php
include("./lesdeux/footer.php");
?>