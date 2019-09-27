<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1673">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                 <img class="img-responsive" src="http://<?php echo $url_path ?>/images/38a.jpg" alt="Chania">
            </div>

             <div class="swiper-slide"> 
                <img class="img-responsive" src="http://<?php echo $url_path ?>/images/38b.jpg" alt="Chania">      
            </div>

             <div class="swiper-slide">
                 <img class="img-responsive" src="http://<?php echo $url_path ?>/images/38c.jpg" alt="Flower">
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
            <div class="swiper-button-next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            <div class="swiper-button-prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    </div>
</div>

