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
                            <img src="../1672/images/38a.jpg">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xs-6 col-sm-6 col-6">
                        <div class="products">
                            <div class="pro">
                                <p>
                                   DBPOWER T20 1500 Lumens LCD Project<br>   
                               </p>
                            </div>
                            <div class="star">
                                <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> 1
                            </div> 
                            <div class="nontion">
                                <p>Curabitur at lacus ac velit ornare lobortis. Proin viverra, ligula sit amet ultrices semper, ligula arcu tristique sapien, a accumsan nisi mauris ac eros. Praesent porttitor, nulla vitae posuere iaculis, arcu nisl dignissim dolor, a pretium mi sem ut ipsum. Ut varius tincidunt libero.</p>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-3 col-lg-3 col-xs-6 col-sm-6 col-6">
                        <div class="num">
                            <b>$200.00</b> 
                        </div>
                        <div class="button">
                            <p id="text-button">
                                <a id="cart-text" href="#">Add To Cart</a>
                            </p> 
                        </div>
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
</div>





