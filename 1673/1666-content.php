  <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
        <div class="type-i-22">
            <div class="swiper-container gallery-top">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="swiper-slide-container">
							<div class="img-zoom-container">
								<img id="myimage" src="images/38a.jpg">
								<div id="myresult" class="img-zoom-result"></div>
							</div>
							
						</div>
					</div>
				    <div class="swiper-slide">
				    	<div class="swiper-slide-container">
				    		<div class="img-zoom-container">
				    			<img id="myimage" src="images/38b.jpg">
				    			<div id="myresult" class="img-zoom-result"></div>
				    		</div>
				    		
				    	</div>
				    </div>
				    <div class="swiper-slide">
				    	<div class="swiper-slide-container">
				    		<div class="img-zoom-container">
				    			<img id="myimage" src="images/38c.jpg">
				    			<div id="myresult" class="img-zoom-result"></div>
				    		</div>
				    		
				    	</div>
				    </div>
				</div>
			</div>
			<div class="swiper-container gallery-thumbs">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="swiper-slide-container">
							<img src="images/38a.jpg">
						</div>
					</div>
				    <div class="swiper-slide">
				    	<div class="swiper-slide-container">
				    		<img src="images/38b.jpg">
				    	</div>
				    </div>
				    <div class="swiper-slide">
				    	<div class="swiper-slide-container">
				    		<img src="images/38c.jpg">
				    	</div>
				    </div>				    
				</div>
			</div>
        </div>
        <script type="text/javascript">
        	imageZoom("myimage", "myresult"); 
        </script>
    
