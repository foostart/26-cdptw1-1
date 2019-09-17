  <?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>  
        <div class="type-i-22">
            <div class="row">
                <div class="col-md-6">
                    <div class="features-block">
                        <div class="col-left">
                            <h3>
                                WHY WE ARE BEST
                            </h3>
                            <P>
                                Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain. Completely synergize resource taxing via premier niche markets. Professionally cultivate one-to-one customer .
                            </P>
                            <div class="about-more">
                                <a href="#">
                                    ABOUT MORE <i class="fas fa-user"></i>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-md-4 features-box">
                                    <div class="item-icon">
                                        <i class="fas fa-rocket"></i>
                                        <span>1</span>
                                    </div>
                                    <div class="content">
                                        <h4>QUALITY COMMITMENT</h4>
                                        <p>Incubator viral prood management mailin such a founders.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 features-box">
                                    <div class="item-icon">
                                        <i class="fas fa-male"></i>
                                        <span>2</span>
                                    </div>
                                    <div class="content">
                                        <h4>QUALITY COMMITMENT</h4>
                                        <p>Incubator viral prood management mailin such a founders.</p>
                                    </div>
                                </div>
                                <div class="col-md-4 features-box">
                                    <div class="item-icon">
                                        <i class="far fa-thumbs-up"></i>
                                        <span>3</span>
                                    </div>
                                    <div class="content">
                                        <h4>QUALITY COMMITMENT</h4>
                                        <p>Incubator viral prood management mailin such a founders.</p>
                                    </div>
                                </div>
                            </div>
                        </div>     
                    </div>
                </div>
                <div class="col-md-6 col-right">
                    <div class="header">
                        <i class="fas fa-bars"></i>
                        <h3>REQUEST A QUOTE</h3>
                        <p>Fill in the form below and we will get back to you ASAP.</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name Here">
                            </div>                            
                        </div>
                        <div class="col-md-6 align">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>                            
                        </div>
                        <div class="col-md-6 align">
                            <div class="form-group">
                                <select class="form-control">
                                    <option>Storage</option>
                                    <option>100</option>
                                    <option>2000</option>
                                    <option>30000</option>
                                </select>
                            </div>                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">
                                        Get Latest
                                        <p>New</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </div>
                </div>                                 
            </div>               
        </div>
    
