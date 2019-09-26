<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<section class="our-webcoderskull padding-lg">
  <div class="container">
    <div class="row ">
        <h2>Our Team</h2>
    </div>
    <ul class="row">
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Web coder skull</a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
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
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Kappua </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
              <fieldset class="rating">
            <input type="radio" id="star10" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
            <input type="radio" id="star9half" name="rating" value="4 and a half" /><label class="half" for="star9half" title="Pretty good - 4.5 stars"></label>
            <input type="radio" id="star9" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
            <input type="radio" id="star8half" name="rating" value="3 and a half" /><label class="half" for="star8half" title="Meh - 3.5 stars"></label>
            <input type="radio" id="star8" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
            <input type="radio" id="star7half" name="rating" value="2 and a half" /><label class="half" for="star7half" title="Kinda bad - 2.5 stars"></label>
            <input type="radio" id="star7" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
            <input type="radio" id="star6half" name="rating" value="1 and a half" /><label class="half" for="star6half" title="Meh - 1.5 stars"></label>
            <input type="radio" id="star6" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
          </div>
      </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Manish </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
            <fieldset class="rating">
            <input type="radio" id="star15" name="rating" value="5" /><label class = "full" for="star15" title="Awesome - 5 stars"></label>
            <input type="radio" id="star14half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
            <input type="radio" id="star14" name="rating" value="4" /><label class = "full" for="star14" title="Pretty good - 4 stars"></label>
            <input type="radio" id="star13half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
            <input type="radio" id="star13" name="rating" value="3" /><label class = "full" for="star13" title="Meh - 3 stars"></label>
            <input type="radio" id="star12half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
            <input type="radio" id="star12" name="rating" value="2" /><label class = "full" for="star12" title="Kinda bad - 2 stars"></label>
            <input type="radio" id="star11half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
            <input type="radio" id="star11" name="rating" value="1" /><label class = "full" for="star11" title="Sucks big time - 1 star"></label>
            <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
          </div>
       </li>
      <li class="col-12 col-md-6 col-lg-3">
          <div class="cnt-block equal-hight" style="height: 349px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Atul </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
            <fieldset class="rating">
            <input type="radio" id="star20" name="rating" value="5" /><label class = "full" for="star20" title="Awesome - 5 stars"></label>
            <input type="radio" id="star19half" name="rating" value="4 and a half" /><label class="half" for="star19half" title="Pretty good - 4.5 stars"></label>
            <input type="radio" id="star19" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
            <input type="radio" id="star18half" name="rating" value="3 and a half" /><label class="half" for="star18half" title="Meh - 3.5 stars"></label>
            <input type="radio" id="star18" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
            <input type="radio" id="star17half" name="rating" value="2 and a half" /><label class="half" for="star17half" title="Kinda bad - 2.5 stars"></label>
            <input type="radio" id="star17" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
            <input type="radio" id="star16half" name="rating" value="1 and a half" /><label class="half" for="star16half" title="Meh - 1.5 stars"></label>
            <input type="radio" id="star16" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
            <input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
          </div>
      </li>
    </ul>
  </div>
</section>