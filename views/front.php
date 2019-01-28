<?= $top ?>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
    <a class="navbar-brand" href="#">Accueil</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#presentation">Présentation <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#competence">Compétence</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#projets">Projets</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#contact">Contact</a>
            </li>
        </ul>
    </div>
</nav>

<!-- Nouvelle page Acueil-->
<div class="container contenue accueil" id="accueil">


    <?php if(isset($_SESSION['msgContact'])):?>

        <?php if($_SESSION['msgContact']):?>
            <p style="color: green; font-size: large;"><i class="fa fa-smile-o" aria-hidden="true" style="color: green;"></i>
                Votre mail a bien été envoyé, merci de m'avoir contacter</p>
        <?php else:?>

            <p style="color: red; font-size: large;"><i class="fa fa-frown-o" aria-hidden="true" style="color: red"></i>
                Une erreur est survenue</p>
        <?php endif; ?>
    <?php unset($_SESSION['msgContact'])?>
    <?php endif; ?>

    <div class="media ">
        <img class="mr-5" src="public/img/petit.jpg" alt="Generic placeholder image">
        <div class="media-body align-self-center">
                <h1><?= $user->getPrenom()." ".$user->getNom() ?></h1>
            <h1>Développeur Junior</h1>
        </div>
    </div>
    <br>
    <div class="offset-md-6 col-md-4">
        <h1>Concevoir </h1>
        <h1 style="padding-left: 20%;">Réaliser</h1>
        <h1 style="padding-left: 40%;">Maintenir </h1>
    </div>
    <br>
    <h1 class="text-center">(<?= $user->getStatut() ?>)</h1>
</div>

<!-- Competence -->
<div class="container contenue" id="competence">
    <h1><i class="fas fa-arrow-alt-circle-up"></i>Les Compétences où je suis le plus à l'aise :</h1>
    <br>
    <div>
        <p>HTML</p>
        <div class="fondBarProgresse" >
            <div class="skills html" id="skillHtml">90%</div>
        </div>

        <p>CSS</p>
        <div class="fondBarProgresse">
            <div class="skills css" id="skillCss">80%</div>
        </div>

        <p>JavaScript</p>
        <div class="fondBarProgresse">
            <div class="skills js" id="skillJs">65%</div>
        </div>
        <p>Ajax</p>
        <div class="fondBarProgresse">
            <div class="skills ajax" id="skillAjax">65%</div>
        </div>
        <p>PHP</p>
        <div class="fondBarProgresse">
            <div class="skills php" id="skillPhp">60%</div>
        </div>
        <p>Symfony</p>
        <div class="fondBarProgresse">
            <div class="skills symfony" id="skillSymfony">60%</div>
        </div>
        <p>SQL</p>
        <div class="fondBarProgresse">
            <div class="skills sql" id="skillSql">60%</div>
        </div>
    </div>
</div>

<!-- Projets -->

<div class="container contenue">
    <h1><i class="fas fa-book-reader" id="projets"></i>Mes Projets</h1>
    <br>

    <!-- Test insertion projet de maniere dynamique-->
    <div class="row">
        <?php foreach ($projets as $projet):?>
        <div class="col-md-4">

            <div class="card">
                <h1 class="card-title text-center"><?= $projet->getNom() ?></h1>
                <img class="card-img img-responsive" src="<?= $projet->getImg()?>" alt="photoProjet<?= $projet->getNom()?>" />
                <div class="card-body">
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#affProjet<?=$projet->getIdprojet() ?>">
                    plus d'info !
                </button>
                </div>
                <div class="modal" id="affProjet<?=$projet->getIdprojet() ?>">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title"><?= $projet->getNom() ?></h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">


                                <dl class="row">
                                    <dt class="col-sm-6">Nom:</dt>
                                    <dd class="col-sm-6"><?= $projet->getNom() ?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-6">Type:</dt>
                                    <dd class="col-sm-6"><?= $projet->getType() ?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-sm-6">Date:</dt>
                                    <dd class="col-sm-6"><?= $projet->getDate() ?></dd>
                                </dl>
                                <dl>
                                    <dt>Description: </dt>
                                    <dd style="word-wrap: break-word;">
                                        <?= $projet->getDescription() ?>
                                    </dd>
                                </dl>
                                <?php if (!empty($projet->getFonctionalites())):?>
                                                <h6>Fonctionnalités principale:</h6>
                                                <?php foreach ($projet->getFonctionalites() as $fonct):?>
                                                    <p>-<?= $fonct->getNom() ?> :<br>
                                                    <?= $fonct->getDescription() ?></p>

                                                <?php endforeach; ?>

<?php endif; ?>


                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <?php if (!empty($projet->getLien_git()&& $projet->getLien_git() != 'null')): ?>
                                <a href="<?= $projet->getLien_git() ?>" class="float-left btn btn-primary">Voir sur GitHub</a>
                                <?php endif;?>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <br>
            </div>

        <?php endforeach; ?>
        </div>

</div>


<!-- Presentation -->
<div class="container contenue" id="presentation" >
    <h1><i class="fas fa-grin"></i></i>Qui suis-je ?</h1>
    <br>
<div>
    <p><?= $user->getDescription() ?></p>
</div>
    <div class="row">
        <div class="col-md-7">
            <h2><img src="public/icones/icone_exp.png" class="img-fluid" style="height: 50px; width: 50px">Expériences professionnelles</h2>
            <br>
            <ul>
                <?php foreach ($expPros as $expPro) :?>

                    <li><strong><?=$expPro->getNom_boite()." ( du ".$expPro->getDate_entrer()." au ".$expPro->getDate_sortie()." )" ?></strong></li>
                    <p><?= $expPro->getDescription() ?></p>
                <?php endforeach;?>
            </ul>
        </div>
        <div class="col-md-5">
            <h2><i class="fa fa-graduation-cap" aria-hidden="true"></i>Diplômes</h2>
            <br>
            <ul>
                <?php foreach ($diplomes as $diplome) :?>

                    <li><strong><?=$diplome->getDate_debut()." : ".$diplome->getDate_fin()." ".$diplome->getNom_ecole() ?></strong></li>
                    <p><?= $diplome->getNom() ?></p>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
<br>
    <form method="get" action="public/document/CV_Thierry_Halot.pdf">
    <input type="submit" value="Télécharger mon cv" class="btn btn-primary float-lg-right" onclick="window.location='<?= "http://".$_SERVER['HTTP_HOST']."/public/document/CV_Thierry_Halot.pdf"  ?>';">
        <br>
    </form>
</div>

<!-- Contact -->
<div class="container contenue" id="contact">
    <h1><i class="far fa-id-card"></i>Contact</h1>
    <br>
    <div class="media">
        <img class="mr-5" src="public/img/petit.jpg" alt="Generic placeholder image">
        <div class="media-body align-self-center">
           <p>
              Nom: <?= $user->getNom() ?><br>
               Prenom: <?= $user->getPrenom() ?><br>
               Tel: <?= $user->getTel() ?> <br>
              Adresse: <?= $user->getAdresse() ?><br>
               Code postal: <?= $user->getCode_postal() ?><br>
              Ville: <?= $user->getVille() ?><br>
           </p>
        </div>
    </div>
    <br>
    <form method="post" action="/sendContactMail">
<h6>Me contacter :</h6>
        <br>
        <div class="form-group row" >
            <label for="nomContact" class="col-sm-2 col-form-label">Nom</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="nomContact" id="nomContact" placeholder="Veuillez renseigné votre nom">
            </div>
        </div>
        <div class="form-group row">
            <label for="prenomContact" class="col-sm-2 col-form-label">Prénom</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="prenomContact" id="prenomContact" placeholder="Veuillez renseigné votre Prénom">
            </div>
        </div>
        <div class="form-group row">
            <label for="emailContact" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="emailContact" id="emailContact" placeholder="Veuillez renseigné votre email">
            </div>
        </div>
        <div class="form-group">
            <label for="messageContact">Message:</label>
            <textarea class="form-control" rows="5" name="messageContact" id="messageContact" ></textarea>
        </div>
        <div>
        <button type="submit" class="btn btn-primary float-right">Envoyer</button>
            <br>
        </div>
    </form>
</div>
<footer>
<div class="container monFooter">
    <div class="text-center center-block">
        <?php foreach ($comptReseaux as $comptReseau) :?>
        <a href="<?=$comptReseau->getLien()?>" class="<?=$comptReseau->getImg()?>"></a>
        <?php endforeach;?>

    </div>
    <hr>
</div>
</footer>
<?= $bottom ?>
