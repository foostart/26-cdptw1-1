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
    <div class="row heading">
       <h3 style="text-align: center;color: white;font-size: 65px;">Our Team</h3>
    </div>
    <ul class="row">
      <li class="col-md-6 col-lg-3">
          <div class="cnt-block" style="height: 370px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Web coder skull</a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
              <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            </ul>
            <div class="stars">
                                  <form>
                                    <input class="star " id="star-5" type="radio" name="star"/>
                                    <label class="star " for="star-5"></label>
                                    <input class="star " id="star-4" type="radio" name="star"/>
                                    <label class="star " for="star-4"></label>
                                    <input class="star " id="star-3" type="radio" name="star"/>
                                    <label class="star " for="star-3"></label>
                                    <input class="star " id="star-2" type="radio" name="star"/>
                                    <label class="star " for="star-2"></label>
                                    <input class="star " id="star-1" type="radio" name="star"/>
                                    <label class="star star-5" for="star-1"></label>
                                  </form>
                                </div>

          </div>
      </li>
      <li class="col-md-6 col-lg-3">
          <div class="cnt-block" style="height: 370px;">
            <figure><img src="http://www.webcoderskull.com/img/team1.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Kappua </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
               <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
             <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            </ul>
             <div class="stars">
                                  <form>
                                    <input class="star " id="star-51" type="radio" name="star"/>
                                    <label class="star " for="star-51"></label>
                                    <input class="star " id="star-41" type="radio" name="star"/>
                                    <label class="star " for="star-41"></label>
                                    <input class="star " id="star-31" type="radio" name="star"/>
                                    <label class="star " for="star-31"></label>
                                    <input class="star " id="star-21" type="radio" name="star"/>
                                    <label class="star " for="star-21"></label>
                                    <input class="star " id="star-11" type="radio" name="star"/>
                                    <label class="star " for="star-11"></label>
                                  </form>
                                </div>

          </div>
      </li>
      <li class="col-md-6 col-lg-3">
          <div class="cnt-block" style="height: 370px;">
            <figure><img src="http://www.webcoderskull.com/img/team4.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Manish </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
               <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
               <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            </ul>
            <div class="stars">
                                  <form>
                                    <input class="star " id="star-52" type="radio" name="star"/>
                                    <label class="star" for="star-52"></label>
                                    <input class="star" id="star-42" type="radio" name="star"/>
                                    <label class="star " for="star-42"></label>
                                    <input class="star " id="star-32" type="radio" name="star"/>
                                    <label class="star" for="star-32"></label>
                                    <input class="star " id="star-22" type="radio" name="star"/>
                                    <label class="star " for="star-22"></label>
                                    <input class="star " id="star-12" type="radio" name="star"/>
                                    <label class="star " for="star-12"></label>
                                  </form>
                                </div>

          </div>
       </li>
      <li class="col-md-6 col-lg-3">
          <div class="cnt-block" style="height: 370px;">
            <figure><img src="http://www.webcoderskull.com/img/team2.png" class="img-responsive" alt=""></figure>
            <h3><a href="#">Atul </a></h3>
            <p>Freelance Web Developer</p>
            <ul class="follow-us clearfix">
                <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
            </ul>
            <div class="stars">
                                  <form>
                                    <input class="star " id="star-53" type="radio" name="star"/>
                                    <label class="star " for="star-53"></label>
                                    <input class="star" id="star-43" type="radio" name="star"/>
                                    <label class="star " for="star-43"></label>
                                    <input class="star " id="star-33" type="radio" name="star"/>
                                    <label class="star " for="star-33"></label>
                                    <input class="star " id="star-23" type="radio" name="star"/>
                                    <label class="star " for="star-23"></label>
                                    <input class="star " id="star-13" type="radio" name="star"/>
                                    <label class="star " for="star-13"></label>
                                  </form>
                                </div>

          </div>
      </li>
    </ul>
  </div>
</section>