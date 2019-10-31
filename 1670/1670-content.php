
<?php
$url_host = 'http://'.$_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/'.$pattern_document_root.'(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host.$matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <main class="cd-main-content">
        <div class="cd-filter">
            <form>
                <div class="cd-filter-block">
                    <h4>MANUFACTURER</h4>
                    <div class="cd-filter-content">
                        <input type="search" placeholder="Search"> 
                        <button><i class="fa fa-search"></i></button>
                       

                    </div> <!-- cd-filter-content -->
                </div> <!-- cd-filter-block -->

                <div class="cd-filter-block">
                    <ul class="cd-filter-content cd-filters list">
                        <li>
                            <input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
                            <label class="checkbox-label" for="checkbox1">  <span>Samsung (3)</span></label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
                            <label class="checkbox-label" for="checkbox2"> <span> Sony (3)</span></label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
                            <label class="checkbox-label" for="checkbox3"> <span> Blue Stone (2)</span></label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".check4" type="checkbox" id="checkbox4">
                            <label class="checkbox-label" for="checkbox4"> <span> Canon (1)</span></label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".check5" type="checkbox" id="checkbox5">
                            <label class="checkbox-label" for="checkbox5"> <span> Daikin (1)</span></label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".check6" type="checkbox" id="checkbox6">
                            <label class="checkbox-label" for="checkbox6"> <span> Electrolux (1)</span></label>
                        </li>

                        <li>
                            <input class="filter" data-filter=".check7" type="checkbox" id="checkbox7">
                            <label class="checkbox-label" for="checkbox7"> <span> Gopro(1)</span></label>
                        </li>
                    </ul> <!-- cd-filter-content -->
                </div> <!-- cd-filter-block -->

                <div class="cd-filter-block">
                    <h4>Select</h4>
                    
                    <div class="cd-filter-content">
                        <div class="cd-select cd-filters">
                            <select class="filter" name="selectThis" id="selectThis">
                                <option value=".option1">Hitachi<span>(1)</span></option>
                                <option value=".option2">LG<span>(1)</span></option>
                                <option value=".option3">Nikon<span>(1)</span></option>
                                <option value=".option4">Panasonic<span>(1)</span></option>
                            </select>
                        </div> <!-- cd-select -->
                    </div> <!-- cd-filter-content -->
                </div> <!-- cd-filter-block -->
                <div class="cd-filter-block">
                    <h4>STYLE</h4>

                    <ul class="cd-filter-content cd-filters list">


                        <li>
                            <input class="filter" data-filter=".check8" type="radio" name="check8" id="checkbox8">
                            <label class="checkbox-label" for="checkbox8"> <span> Modern (16)</span> </label>
                        </li>


                        <li>
                            <input class="filter" data-filter=".check9" type="radio" name="check9" id="checkbox9">
                            <label class="checkbox-label" for="checkbox9">  <span> Classic(1)</span> </label>
                        </li>
                    </ul> <!-- cd-filter-content -->
                </div> <!-- cd-filter-block -->
            </form>

            <a href="#0" class="cd-close">Close</a>
        </div> <!-- cd-filter -->

        <a href="#0" class="cd-filter-trigger">Filters</a>
    </main> <!-- cd-main-content -->
</div>