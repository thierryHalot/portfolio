<?= $top ?>
    <div class="container contenue" >
        <br>
        <form id="updateUser" method="post" action="/updateUser">
            <h6>Mettre à jour mes imformations :</h6>
            <br>
            <div class="form-group row">
                <label for="villeUser" class="col-sm-2 col-form-label">Lien CV</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="lienCvUser" id="lienCvUser" value="<?=$user->getLien_cv(); ?>" required>
                </div>
            </div>
            <div class="form-group row" >
                <label for="nomUser" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nomUser" id="nomUser" value="<?=$user->getNom(); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="prenomUser" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="prenomUser" id="prenomUser" value="<?=$user->getPrenom(); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="statutUser" class="col-sm-2 col-form-label">Statut</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="statutUser" id="statutUser" value="<?=$user->getStatut(); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="emailUser" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" name="emailUser" id="emailUser" value="<?=$user->getMail(); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="photoUser" class="col-sm-2 col-form-label">Photo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="photoUser" id="photoUser" value="<?=$user->getPhoto(); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="codePostalUser" class="col-sm-2 col-form-label">Code-Postal</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control"  name="codePostalUser" id="codePostalUser" value="<?=$user->getCode_postal(); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="villeUser" class="col-sm-2 col-form-label">Ville</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="villeUser" id="villeUser" value="<?=$user->getVille(); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="adresseUser" class="col-sm-2 col-form-label">Adresse</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="adresseUser" id="adresseUser" value="<?=$user->getAdresse(); ?>" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="telUser" class="col-sm-2 col-form-label">tel</label>
                <div class="col-sm-10">
                    <input type="tel" class="form-control" name="telUser" id="telUser" value="<?=$user->getTel(); ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="descriptionUser">description:</label>
                <textarea class="form-control" rows="5" name="descriptionUser" id="descriptionUser" required ><?=$user->getDescription(); ?> </textarea>
            </div>
            <div>
                <button type="submit" class="btn btn-primary float-right">Mettre à jour</button>
                <br>
            </div>
        </form>
    </div>

<?= $bottom ?>