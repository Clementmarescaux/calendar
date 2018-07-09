<?php
require_once('../partials/header.php');
?>
                        <div class="container mt-5">
                            <div class="col-5 offset-7">
                                <div class="input-group d-flex justify-content-end mb-2">
                                    <select class="custom-select" id="filter-form">
                                        <option>Filtrer les matières</option>
                                        <option value="drt">Droit</option>
                                        <option value="eco">Économie</option>
                                        <option value="en">Anglais</option>
                                        <option value="mrk">Marketing</option>
                                    </select>
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-secondary" type="button">Button</button>
                                    </div>                                    
                                </div>
                                <div id="filter" class="mb-4">Droit</div>
                            </div>
                        
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                    <h5 class="mb-0">
                                        <button id="drt-btn" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Droit
                                        </button>
                                    </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <h5>7 janvier 2018</h5>
                                                <ul>
                                                    <li><a href="#">Affaires</a></li>
                                                    <li><a href="#">Exercices</a></li>
                                                    <li><a href="#">Eval</a></li>
                                                    <li><a href="#">Support de cours</a></li>
                                                </ul>
                                            <h5 class="mt-3">28 février 2018</h5>
                                                <ul>
                                                    <li><a href="#">Droit du travail</a></li>                                                 
                                                </ul>
                                            <h5 class="mt-3">1er avril 2018</a></h5>
                                                <ul>
                                                    <li><a href="#">Droit pénal</a></li>
                                                    <li><a href="#">Droit civil</a></li>
                                                </ul>
                                            <h5 class="mt-3">15 avril 2018</h5>
                                                <h6>Consigne : </h6> 
                                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eum impedit animi aspernatur. Ab et aliquid ullam tempora. Perferendis necessitatibus aliquid dolores earum quaerat consectetur iusto, dolore amet enim alias totam.
                                            <h5 class="mt-3">17 mai 2018</h5>
                                                <ul>
                                                    <li><a href="#">Arrêt de la cours de cassation</a></li>
                                                    <li><a href="#">Droit européen</a></li>
                                                    <li><a href="#">Droit international</a></li>
                                                    <li><a href="#">La CNIL</a></li>
                                                </ul>
                                            <h5 class="mt-3">24 juin 2018</h5>
                                                <ul>
                                                    <li><a href="#">Evaluation finale</a></li>
                                                </ul>
                                        </div>
                                    </div>
                                </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0">
                                        <button id="fr-btn" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Français
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button id="en-btn" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Anglais
                                    </button>
                                </h5>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        


<?php
require_once('../partials/footer.php');
?>