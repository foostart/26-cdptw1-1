<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1673">
	<div class="swiper-container gallery-top">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/38a.png"></div>
      <div class="swiper-slide"><img src="images/38b.png"></div>
      <div class="swiper-slide"><img src="images/38c.png"></div>
      <div class="swiper-slide"><img src="images/38b.png"></div>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next swiper-button-red"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
    <div class="swiper-button-prev swiper-button-red"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
  </div>
  <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
     <div class="swiper-slide"><img src="images/38a.png"></div>
     <div class="swiper-slide"><img src="images/38b.png"></div>
     <div class="swiper-slide"><img src="images/38c.png"></div>
     <div class="swiper-slide"><img src="images/38b.png"></div>
    </div>
  </div>
</div>
