<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1100">
    <div class="container">
        <div class="main">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xs-12 col-sm-12 col-12">
                        <div class="img">
                            <img src="../1672/images/38a.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6 col-6">
                        <div class="products">
                            <div class="pro">
                                <p>
                                   DBPOWER T20 1500 Lumens LCD Project<br>   
                               </p>
                            </div>
                            
                           <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>

                            <div class="nontion">
                                <p>Curabitur at lacus ac velit ornare lobortis. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Ut varius tincidunt libero.</p>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6 col-6">
                        <div class="num">
                            <b>$200.00</b> 
                        </div>
                          <button class="button button1">Add to cart</button>
                        <ul class="like-banner">
                            <li>
                                <div class="heart1">
                                <i class="far fa-heart"></i>
                                </div>
                                <div class="More">
                                    <p>Wishlist</p>
                                </div>
                            </li>
                            <li>
                                <div class="heart">
                                <i class="fa fa-bar-chart"></i>
                                </div>
                                <div class="More">
                                    <p>Compare</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>






