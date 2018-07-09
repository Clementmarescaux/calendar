<!doctype html>
<html class="no-js" lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <title></title>
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cabin+Sketch:700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
        <link rel="stylesheet" href="css/normalize.css"/>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    </head>
    <body>
       <div class="bg-img">
            <div class="container text-center pt-md-2 pt-xl-5  ">
                <div class="row">
                    <div class="col">
                        <p id="brand" class="d-none d-md-block">Just Learn!</p>
                    </div>
                </div>
            </div>
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <p id="mobile-brand" class=" d-md-none">Just Learn!</p>
                    </div>
                </div>
            </div>
           

        <!-- Modal -->
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="login-title" style="display: block;" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content text-center">
                        <div class="modal-header d-block">
                            <h3 class="modal-title" id="modal-title">Connexion</h3>
                        </div>
                         <div class="modal-body">
                             <form>
                                <div class="container">                                    
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-1 d-none d-md-block">
                                                <label id="pseudo-icon" class="d-inline-block" for="pseudo"><i class="fa fa-user" aria-hidden="true"></i></label>
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control d-inline-block" id="pseudo" placeholder="Nom d'utilisateur">    
                                            </div>
                                        </div>      
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-1 d-none d-md-block">
                                                <label id="password-icon" for="password"><i class="fa fa-lock" aria-hidden="true"></i></label>
                                            </div>
                                            <div class="col">
                                                <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
                                    </div>
                                    <!-- a ajouter pour vérification BDD -->
                                    <!--<button id="connect-btn" type="submit" class="btn">--><a href="app/calendar.php" id="connect-btn" class="d-block"> Je me connecte !<a/><!-- </button> -->
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>
            </div>
        </div>

    <!-- POUR OBSCURCIR à l'APPARITION DE LA MODALE :
         <div class="modal-backdrop fade show"></div> 
    --> 




     <!-- chargement de jQuery-->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>

        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

    
    </body>
</html>