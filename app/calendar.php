<?php
require_once('../partials/header.php');
?>


<div class="bgsite pt-5">
    <div class="container">
        
        <div class="row">
            <div class="col-md-8">
                <div class="container calendar">        
                    <div class="row mb-2">
                        <div class="col-1 offset-3">
                            <a href="#"><i class="fa fa-angle-left mt-2 mb-4" aria-hidden="true"> </i></a>
                        </div>
                        
                        <div class="col-4">
                            <h3 class="text-center mt-2 mb-4">Juillet 2018</h3>     
                        </div>                                        
                        <div class="col-1">
                            <a href="#"><i class="fa fa-angle-right mt-2 mb-4" aria-hidden="true"> </i></a>
                        </div>             
                    </div>
        
                        

                    <table class="table text-center">                    
                        <thead>                            
                            <tr>                                
                                <th scope="col">Lun</th>
                                <th scope="col">Mar</th>
                                <th scope="col">Mer</th>
                                <th scope="col">Jeu</th>
                                <th scope="col">Ven</th>
                                <th scope="col">Sam</th>
                                <th scope="col">Dim</th>
                            </tr>
                        </thead>
                        <tbody>                            
                            <tr>                                
                                <td class="prev-month">26</td>
                                <td class="prev-month">27</td>
                                <td class="prev-month">28</td>
                                <td class="prev-month">29</td>
                                <td class="prev-month">30</td>
                                <td class="prev-month">31</td>
                                <td>1</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td class="event position-relative"><a href="#">10</a><p class="event-marker position-absolute"><i class="fa fa-circle" aria-hidden="true"></i></p></td>
                                <td>11</td>
                                <td>12</td>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                                <td>20</td>
                                <td class="event position-relative"><a href="#">21</a><p class="event-marker position-absolute"><i class="fa fa-circle" aria-hidden="true"></i></p></td>
                                
                                <td>22</td>
                            </tr>

                            <tr>
                                <td class="current-day event position-relative"><a href="#">23</a><p class="event-marker position-absolute"><i class="fa fa-circle" aria-hidden="true"></i></p></td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td class="next-month">1</td>
                                <td class="next-month">2</td>
                                <td class="next-month">3</td>
                                <td class="next-month">4</td>
                                <td class="next-month">5</td>
                                <td class="next-month">6</td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end calendar -->
            </div>
            <div class="course-pannel col-md-3 offset-md-1 text-right ">  
            
                <h3 class="selected-day text-center mt-5 mt-md-0 ">23 juillet 2018</h3>
                <hr class="title-bar  mb-5">
                <h4 class="mt-5">Droit</h4>
                <hr>
                    <ul class="course-subject">
                        <li><button type="button" class="simple-link-btn" data-toggle="modal" data-target="#drt-modal-1">Le droit des affaires</button></li>
                        <div class="modal fade" id="drt-modal-1" tabindex="-1" role="dialog" aria-labelledby="drt-modal-title-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="drt-modal-title-1">Le droit des affaires</h5>
                                <button type="button" id="quit-modal-btn" class="close" data-dismiss="modal" aria-label="Close">
                                <span id="quit-modal" aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>Introduction</h6>
                                <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.</p>
                                <h6>Chapitre 1</h6>
                                <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.</p>
                                <h6>Chapitre 2</h6>
                                <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.</p>
                                <h6>Chapitre 3</h6>
                                <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.</p>
                                <h6>Conclusion</h6>
                                <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit voluptate exercitationem aspernatur, quaerat quia laboriosam optio ipsa veniam pariatur tempora voluptas nihil modi eligendi, culpa debitis hic rem officiis perferendis.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn download-content-btn" data-dismiss="modal">Télécharger</button>
                                
                            </div>
                            </div>
                        </div>
                        </div>
                        <li><a href="#">Le droit du travail</a></li>
                        <li><a href="#">TD</a></li>
                    </ul>
                <h4 class="mt-5">Économie</h4>
                <hr>
                    <ul>
                        <li><a href="#">La pyramide de Maslow</a></li>
                        <li><a href="#">Évaluation</a></li>                       
                    </ul>
                <h4 class="mt-5">Marketing</h4>
                <hr>
                    <ul>
                        <li><a href="#">Le marketing mix</a></li>                       
                    </ul>
                <h4 class="mt-5">Anglais</h4>
                <hr>
                    <ul>
                        <li><a href="#">Where is Brian ?</a></li>
                        <li><a href="#"> Write a dialog</a></li>
                        <li><a href="#">The world cup</a></li>
                    </ul>

            </div>
        </div> <!-- end of row -->
    </div> <!-- end container -->
</div>














<?php
require_once('../partials/footer.php');
?>