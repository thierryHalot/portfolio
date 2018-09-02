<?= $top ?>

<!--<!-- formulaire Update User -->
<!--    <div class="container contenue" >-->
<!--        <br>-->
<!--        <form id="updateUser" method="post" action="/updateUser">-->
<!--            <h6>Mettre à jour mes imformations :</h6>-->
<!--            <br>-->
<!--            <div class="form-group row">-->
<!--                <label for="villeUser" class="col-sm-2 col-form-label">Lien CV</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="text" class="form-control" name="lienCvUser" id="lienCvUser" value="--><?//=$user->getLien_cv(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row" >-->
<!--                <label for="nomUser" class="col-sm-2 col-form-label">Nom</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="text" class="form-control" name="nomUser" id="nomUser" value="--><?//=$user->getNom(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="prenomUser" class="col-sm-2 col-form-label">Prenom</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="text" class="form-control" name="prenomUser" id="prenomUser" value="--><?//=$user->getPrenom(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="statutUser" class="col-sm-2 col-form-label">Statut</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="text" class="form-control" name="statutUser" id="statutUser" value="--><?//=$user->getStatut(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="emailUser" class="col-sm-2 col-form-label">Email</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="email" class="form-control" name="emailUser" id="emailUser" value="--><?//=$user->getMail(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="photoUser" class="col-sm-2 col-form-label">Photo</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="text" class="form-control" name="photoUser" id="photoUser" value="--><?//=$user->getPhoto(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="codePostalUser" class="col-sm-2 col-form-label">Code-Postal</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="number" class="form-control"  name="codePostalUser" id="codePostalUser" value="--><?//=$user->getCode_postal(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="villeUser" class="col-sm-2 col-form-label">Ville</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="text" class="form-control" name="villeUser" id="villeUser" value="--><?//=$user->getVille(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="adresseUser" class="col-sm-2 col-form-label">Adresse</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="text" class="form-control" name="adresseUser" id="adresseUser" value="--><?//=$user->getAdresse(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="telUser" class="col-sm-2 col-form-label">tel</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="tel" class="form-control" name="telUser" id="telUser" value="--><?//=$user->getTel(); ?><!--" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="descriptionUser">description:</label>-->
<!--                <textarea class="form-control" rows="5" name="descriptionUser" id="descriptionUser" required >--><?//=$user->getDescription(); ?><!-- </textarea>-->
<!--            </div>-->
<!--            <div>-->
<!--                <button type="submit" class="btn btn-primary float-right">Mettre à jour</button>-->
<!--                <br>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--<!-- fin formulaire Update User -->-->
<!---->
<!--    <div class="container contenue" >-->
<!--        <br>-->
<!--        <form id="updateDiplomes" method="post" action="/updateDiplomes">-->
<!--            <h6>Qu'elle diplomes voulez vous mettre à jour :</h6>-->
<!--            <br>-->
<!--            <div class="form-group row">-->
<!--                <label for="date_debutDiplome" class="col-sm-2 col-form-label">Date de début</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="number" class="form-control" name="date_debutDiplome" id="date_debutDiplome" value="" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row" >-->
<!--                <label for="date_finDiplomes" class="col-sm-2 col-form-label">Date de fin</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="number" class="form-control" name="date_finDiplomes" id="date_finDiplomes" value="" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="nomDiplomes" class="col-sm-2 col-form-label">Nom</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="text" class="form-control" name="nomDiplomes" id="nomDiplomes" value="" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group row">-->
<!--                <label for="nom_EcoleDiplomes" class="col-sm-2 col-form-label">Nom de l'école</label>-->
<!--                <div class="col-sm-10">-->
<!--                    <input type="text" class="form-control" name="nom_EcoleDiplomes" id="nom_EcoleDiplomes" value="" required>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <label for="descriptionDiplomes">description:</label>-->
<!--                <textarea class="form-control" rows="5" name="descriptionDiplomes" id="descriptionDiplomes" required ></textarea>-->
<!--            </div>-->
<!--            <div>-->
<!--                <button type="submit" class="btn btn-primary float-right">Mettre à jour</button>-->
<!--                <br>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->

<!-- Crud diplome table -->
    <div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Liste des diplomes</h2>
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary fas fa-plus-circle float-right" data-toggle="modal" data-target="#createDiplome"> diplome</button>

                </div>
            </div>
        </div>


        <table class="table table-responsive-sm table-hover table-striped">


            <thead class="table-light">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">date de début</th>
                <th scope="col">date de fin</th>
                <th scope="col">nom</th>
                <th scope="col"></th>
                <th scope="col">edit</th>
                <th scope="col">detail</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($diplomes as $diplome): ?>
            <tr>
                <th scope="row"><?= $diplome->getIddiplome() ?></th>
                <td><?= $diplome->getDate_debut() ?></td>
                <td><?= $diplome->getDate_fin() ?></td>
                <td><?= $diplome->getNom() ?></td>
                <!--Affichage du bouton de suppression -->
                <td>

                    <form method="post" action="/deleteDiplome">
                        <input type="hidden" name="supprDiplome" value="<?= $diplome->getIddiplome(); ?>">
                        <button type="submit" class="btn btn-danger fas fa-trash-alt" ></button>
                    </form>
                </td>
                <td>
                    <button type="button" class="btn btn-primary fas fa-edit" data-toggle="modal" data-target="#updateDiplomes<?=$diplome->getIddiplome() ?>"></button>
                </td>
                <td>
                    <button type="button" class="btn btn-primary fas fa-search" data-toggle="modal" data-target="#detailDiplomes<?=$diplome->getIddiplome() ?>"></button>
                </td>
            </tr>
                <!--  formulaire mise à jour Diplome-->
                <div class="modal" id="updateDiplomes<?=$diplome->getIddiplome() ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="updateDiplomes" method="post" action="/updateDiplomes">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">mise à jour d'un diplome</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body formulaire mise à jour Diplome -->
                                <div class="modal-body">
                                    <div class="form-group row d-none">
                                        <label for="idDiplomeUpdate" class="col-sm-4 col-form-label">Id</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="idDiplomeUpdate" id="idDiplomeUpdate" value="<?=$diplome->getIddiplome(); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="date_debutDiplome" class="col-sm-4 col-form-label">Date de début</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="date_debutDiplome" id="date_debutDiplome" value="<?=$diplome->getDate_debut(); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row" >
                                        <label for="date_finDiplomes" class="col-sm-4 col-form-label">Date de fin</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="date_finDiplomes" id="date_finDiplomes" value="<?=$diplome->getDate_fin(); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nomDiplomes" class="col-sm-4 col-form-label">Nom</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nomDiplomes" id="nomDiplomes" value="<?=$diplome->getNom(); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nom_EcoleDiplomes" class="col-sm-4 col-form-label">Nom de l'école</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nom_EcoleDiplomes" id="nom_EcoleDiplomes" value="<?=$diplome->getNom_ecole(); ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="descriptionDiplomes">description:</label>
                                        <textarea class="form-control" rows="5" name="descriptionDiplomes" id="descriptionDiplomes" required ><?=$diplome->getDescription(); ?></textarea>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary float-right">Mettre à jour</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- modal d'affichage du détail d'un Diplome-->
                <div class="modal" id="detailDiplomes<?=$diplome->getIddiplome() ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Détail du diplome</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body formulaire mise à jour Diplome -->
                                <div class="modal-body">
                                <div class="container-fluid">

                                    <dl class="row">
                                        <dt class="col-sm-6">Date de debut:</dt>
                                        <dd class="col-sm-6"><?= $diplome->getDate_debut() ?></dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-6">Date de fin:</dt>
                                        <dd class="col-sm-6"><?= $diplome->getDate_fin() ?></dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-6">Nom du diplome:</dt>
                                        <dd class="col-sm-6"><?= $diplome->getNom() ?></dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-6">Nom de l'école:</dt>
                                        <dd class="col-sm-6"><?= $diplome->getNom_ecole() ?></dd>
                                    </dl>
                                    <dl>
                                        <dt>Description: </dt>
                                    <dd style="word-wrap: break-word;">
                                        <?= $diplome->getDescription() ?>
                                </dd>


                                </dl>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
    </div>
    <!--  formulaire Creation Diplome-->
    <div class="modal" id="createDiplome">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="createDiplomes" method="post" action="/createDiplomes">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Nouveau diplome</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="date_debutDiplomeCreate" class="col-sm-4 col-form-label">Date de début</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="date_debutDiplomeCreate" id="date_debutDiplomeCreate" value="<?$diplome ?>" required>
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label for="date_finDiplomesCreate" class="col-sm-4 col-form-label">Date de fin</label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="date_finDiplomesCreate" id="date_finDiplomesCreate" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nomDiplomesCreate" class="col-sm-4 col-form-label">Nom</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nomDiplomesCreate" id="nomDiplomesCreate" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nom_EcoleDiplomesCreate" class="col-sm-4 col-form-label">Nom de l'école</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nom_EcoleDiplomesCreate" id="nom_EcoleDiplomesCreate" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descriptionDiplomesCreate">description:</label>
                            <textarea class="form-control" rows="5" name="descriptionDiplomesCreate" id="descriptionDiplomesCreate" required ></textarea>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary float-right">Crée</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- Crud Experience Pro table -->
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Liste des Expériences profesionnels</h2>
                    </div>
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary fas fa-plus-circle float-right" data-toggle="modal" data-target="#createExpPro"> Exp Pro</button>

                    </div>
                </div>
            </div>


            <table class="table table-responsive-sm table-hover table-striped">


                <thead class="table-light">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">date d'entrer</th>
                    <th scope="col">date de sortie</th>
                    <th scope="col">nom de boite</th>
                    <th scope="col"></th>
                    <th scope="col">edit</th>
                    <th scope="col">detail</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($expPros as $expPro): ?>
                <tr>
                    <th scope="row"><?= $expPro->getIdexperience_pro() ?></th>
                    <td><?= $expPro->getDate_entrer() ?></td>
                    <td><?= $expPro->getDate_sortie() ?></td>
                    <td><?= $expPro->getNom_boite() ?></td>
                    <!--Affichage du bouton de suppression -->
                    <td>

                        <form method="post" action="/deleteExpPro">
                            <input type="hidden" name="supprExpPro" value="<?= $expPro->getIdexperience_pro() ?>">
                            <button type="submit" class="btn btn-danger fas fa-trash-alt" ></button>
                        </form>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary fas fa-edit" data-toggle="modal" data-target="#updateExpPro<?=$expPro->getIdexperience_pro() ?>"></button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary fas fa-search" data-toggle="modal" data-target="#detailExpPro<?=$expPro->getIdexperience_pro() ?>"></button>
                    </td>
                </tr>
                <!--  formulaire mise à d'une experience professionel -->
                <div class="modal" id="updateExpPro<?=$expPro->getIdexperience_pro() ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form id="updateExpPro" method="post" action="/updateExpPro">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">mise à jour</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <!-- Modal body formulaire mise à jour Diplome -->
                                <div class="modal-body">
                                    <div class="form-group row d-none">
                                        <label for="idExpProUpdate" class="col-sm-4 col-form-label">Id</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="idExpProUpdate" id="idExpProUpdate" value="<?=$expPro->getIdexperience_pro() ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="date_entrerExpPro" class="col-sm-4 col-form-label">Date d'entrer</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" name="date_entrerExpPro" id="date_entrerExpPro" value="<?=$expPro->getDate_entrer() ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row" >
                                        <label for="date_sortieExpPro" class="col-sm-4 col-form-label">Date de sortie</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" name="date_sortieExpPro" id="date_sortieExpPro" value="<?=$expPro->getDate_sortie() ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nom_boiteExpPro" class="col-sm-4 col-form-label">Nom de la boite</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="nom_boiteExpPro" id="nom_boiteExpPro" value="<?=$expPro->getNom_boite() ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="descriptionExpPro">description:</label>
                                        <textarea class="form-control" rows="5" name="descriptionExpPro" id="descriptionExpPro" required ><?=$expPro->getDescription(); ?></textarea>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary float-right">Mettre à jour</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- modal d'affichage du détail d'une exp pro-->
                <div class="modal" id="detailExpPro<?=$expPro->getIdexperience_pro() ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Détail de l'expérience pro</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body formulaire mise à jour Diplome -->
                            <div class="modal-body">
                                <div class="container-fluid">

                                    <dl class="row">
                                        <dt class="col-sm-6">Date d' entrer:</dt>
                                        <dd class="col-sm-6"><?= $expPro->getDate_entrer() ?></dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-6">Date de sortie:</dt>
                                        <dd class="col-sm-6"><?= $expPro->getDate_sortie() ?></dd>
                                    </dl>
                                    <dl class="row">
                                        <dt class="col-sm-6">Nom de la boite:</dt>
                                        <dd class="col-sm-6"><?= $expPro->getNom_boite() ?></dd>
                                    </dl>
                                    <dl>
                                        <dt>Description: </dt>
                                        <dd style="word-wrap: break-word;">
                                            <?= $expPro->getDescription() ?>
                                        </dd>


                                    </dl>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                <tbody>
            </table>
        </div>
    </div>
    <!--  formulaire Creation Exp pro-->
    <div class="modal" id="createExpPro">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="/createExpPro">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Nouvelle expérience professionnel</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="date_entrerExpProCreate" class="col-sm-4 col-form-label">Date d'entrer</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_entrerExpProCreate" id="date_entrerExpProCreate" value="<?$diplome ?>" required>
                            </div>
                        </div>
                        <div class="form-group row" >
                            <label for="date_sortieExpProCreate" class="col-sm-4 col-form-label">Date de sortie</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" name="date_sortieExpProCreate" id="date_sortieExpProCreate" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="nom_boiteExpProCreate" class="col-sm-4 col-form-label">Nom de boite</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nom_boiteExpProCreate" id="nom_boiteExpProCreate" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="descriptionExpProCreate">description:</label>
                            <textarea class="form-control" rows="5" name="descriptionExpProCreate" id="descriptionExpProCreate" required ></textarea>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary float-right">Crée</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?= $bottom ?>