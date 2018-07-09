<?php
require_once('../partials/header.php');
?>

<div class="bgsite">
    <div class="container pt-5">
        <div class="row">
            <div class="col-8">
                <form>
                    <div class="form-group" >
                        <input class="form-control " type="text" placeholder="Objet">
                        <label for="message">Message : </label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Taper votre message ici"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="upload-file">Ajouter un fichier</label>
                        <input type="file" class="form-control-file" id="upload-file">
                    </div>
                    <button type="submit" class="btn btn-submit">Envoyer</button>
                <form>
            </div>
        </div>
    </div>
</div>
<?php
require_once('../partials/footer.php');
?>