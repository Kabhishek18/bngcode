
<div id="slider-banner-section" style="border-top:16px solid #ffce10">     
  <!-- Banner Slider -->
  <!-- #region Jssor Slider Begin -->
        <script src="<?=base_url()?>resource/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            window.jssor_1_slider_init = function() {

                    var jssor_1_SlideoTransitions = [
                      [{b:0,d:600,o:0.8}],
                      [{b:300,d:600,o:0.8}],
                      [{b:600,d:600,o:0.8}],
                      [{b:-1,d:1,da:[0,700]},{b:500,d:3500,da:[623,700],e:{da:1}}],
                      [{b:1000,d:500,o:1}],
                      [{b:1000,d:500,o:1}],
                      [{b:-1,d:1,y:30},{b:1000,d:500,y:0,o:1,e:{y:27}}],
                      [{b:1700,d:500,o:1}],
                      [{b:1700,d:500,o:1}],
                      [{b:-1,d:1,y:30},{b:1700,d:500,y:0,o:1,e:{y:27}}],
                      [{b:2300,d:500,o:1}],
                      [{b:2300,d:500,o:1}],
                      [{b:-1,d:1,y:30},{b:2300,d:500,y:0,o:1,e:{y:27}}],
                      [{b:2900,d:500,o:1}],
                      [{b:2900,d:500,o:1}],
                      [{b:-1,d:1,y:30},{b:2900,d:500,y:0,o:1,e:{y:27}}],
                      [{b:0,d:600,x:208,y:44,e:{x:27,y:27}}],
                      [{b:300,d:600,x:145,y:22,e:{x:27,y:27}}],
                      [{b:100,d:600,x:177,y:31,e:{x:27,y:27}}],
                      [{b:200,d:600,x:177,y:31,e:{x:27,y:27}}],
                      [{b:-1,d:1,x:-80,y:-370,r:-60,rY:30,sY:1.5,p:{x:{d:1,dO:68},y:{d:1,dO:68},r:{d:1,dO:68}}},{b:300,d:1500,x:0,y:0,o:1,r:0,kX:-15,e:{x:27,y:27,o:1,r:27,kX:27},p:{x:{dl:0.02,o:68},y:{dl:0.02,o:68},o:{dl:0.2,o:68},r:{dl:0.02,o:68},kX:{dl:0.02,o:68}}}],
                      [{b:-1,d:1,x:-80,y:-370,r:-60,sY:1.5,p:{x:{d:1,dO:68},y:{d:1,dO:68},r:{d:1,dO:68}}},{b:300,d:1500,x:0,y:0,o:1,r:0,kX:-15,e:{x:27,y:27,o:1,r:27,kX:27},p:{x:{dl:0.02,o:68},y:{dl:0.02,o:68},o:{dl:0.2,o:68},r:{dl:0.02,o:68},kX:{dl:0.02,o:68}}}],
                      [{b:-1,d:1,sX:1.2,kX:-15},{b:0,d:600,o:0.06}],
                      [{b:-1,d:1,x:-30,sY:1.3,p:{x:{o:32,r:0.5}}},{b:600,d:600,x:0,o:1,e:{x:36,o:1},p:{x:{dl:0.1,o:32,rd:2},o:{dl:0.1,o:32,rd:2}}}],
                      [{b:600,d:600,x:300,e:{x:7}}],
                      [{b:-1,d:1,x:-30,sY:1.3,p:{x:{o:32,r:0.5}}},{b:900,d:600,x:0,o:1,e:{x:36,o:1},p:{x:{dl:0.1,o:32,rd:2},o:{dl:0.1,o:32,rd:2}}}],
                      [{b:900,d:600,x:97,e:{x:7}}],
                      [{b:-1,d:1,x:-30,sY:1.3,p:{x:{o:32,r:0.5}}},{b:1200,d:600,x:0,o:1,e:{x:36,o:1},p:{x:{dl:0.1,o:32,rd:2},o:{dl:0.1,o:32,rd:2}}}],
                      [{b:1200,d:600,x:260,e:{x:7}}],
                      [{b:-1,d:1,x:-30,sY:1.3,p:{x:{o:32,r:0.5}}},{b:1500,d:1000,x:0,o:1,e:{x:36,o:1},p:{x:{dl:0.1,o:32,rd:2},o:{dl:0.1,o:32,rd:2}}}],
                      [{b:1500,d:1000,x:112,e:{x:7}}],
                      [{b:-1,d:1,x:-30,sY:1.3,p:{x:{o:32,r:0.5}}},{b:2000,d:1000,x:0,o:1,e:{x:36,o:1},p:{x:{dl:0.1,o:32,rd:2},o:{dl:0.1,o:32,rd:2}}}],
                      [{b:2000,d:1000,x:105,e:{x:7}}]
                    ];

                    var jssor_1_options = {
                      $AutoPlay: 1,
                      $CaptionSliderOptions: {
                        $Class: $JssorCaptionSlideo$,
                        $Transitions: jssor_1_SlideoTransitions
                      },
                      $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                      },
                      $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$,
                        $SpacingX: 16,
                        $SpacingY: 16
                      }
                    };

                    var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                    /*#region responsive code begin*/

                    var MAX_WIDTH = 1370;

                    function ScaleSlider() {
                        var containerElement = jssor_1_slider.$Elmt.parentNode;
                        var containerWidth = containerElement.clientWidth;

                        if (containerWidth) {

                            var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                            jssor_1_slider.$ScaleWidth(expectedWidth);
                        }
                        else {
                            window.setTimeout(ScaleSlider, 30);
                        }
                    }

                    ScaleSlider();

                    $Jssor$.$AddEvent(window, "load", ScaleSlider);
                    $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                    $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                    /*#endregion responsive code end*/
            };
        </script>
        <style>
            /*jssor slider loading skin double-tail-spin css*/
            .jssorl-004-double-tail-spin img {
                animation-name: jssorl-004-double-tail-spin;
                animation-duration: 1.6s;
                animation-iteration-count: infinite;
                animation-timing-function: linear;
            }

            @keyframes jssorl-004-double-tail-spin {
                from { transform: rotate(0deg); }
                to { transform: rotate(360deg); }
            }

            /*jssor slider bullet skin 102 css*/
            .jssorb102 .i {position:absolute;cursor:pointer;}
            .jssorb102 .i .ci {fill:#fff;}
            .jssorb102 .i .co {fill:#000;opacity:.2;}
            .jssorb102 .i:hover .co {fill:#ff9933;opacity: 1;}
            .jssorb101 .i:hover .ci {fill:#000;}
            .jssorb102 .iav .ci {fill:#000;stroke-width:0;}
            .jssorb102 .iav .co {fill:#ffba04;opacity: 1;}
            .jssorb102 .i.idn {opacity:.3;}

            /*jssor slider arrow skin 051 css*/
            .jssora051 {display:block;position:absolute;cursor:pointer;}
            .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
            .jssora051:hover {opacity:.8;}
            .jssora051.jssora051dn {opacity:.5;}
            .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
        </style>
        <svg viewbox="0 0 0 0" width="0" height="0" style="display:block;position:relative;left:0px;top:0px;">
                    <defs>
                        <filter id="jssor_1_flt_1" x="-50%" y="-50%" width="200%" height="200%">
                            <feGaussianBlur stddeviation="4"></feGaussianBlur>
                        </filter>
                        <filter id="jssor_1_flt_2" x="-50%" y="-50%" width="200%" height="200%">
                            <feGaussianBlur stddeviation="4"></feGaussianBlur>
                        </filter>
                        <filter id="jssor_1_flt_3" x="-50%" y="-50%" width="200%" height="200%">
                            <feGaussianBlur stddeviation="4"></feGaussianBlur>
                        </filter>
                        <filter id="jssor_1_flt_4" x="-50%" y="-50%" width="200%" height="200%">
                            <feGaussianBlur stddeviation="4"></feGaussianBlur>
                        </filter>
                        <filter id="jssor_1_flt_5" x="-50%" y="-50%" width="200%" height="200%">
                            <feImage x="0" y="0" width="980" height="380" data-load="href" result="r1" href="img/ski.jpg"></feImage>
                            <feDisplacementMap in="SourceGraphic" in2="r1" scale="4" xchannelselector="R" ychannelselector="G" result="r3"></feDisplacementMap>
                            <feColorMatrix in="r1" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 -0.4 -0.4 -0.4 1.4 0" result="r2"></feColorMatrix>
                            <feComposite operator="in" in="r3" in2="r2" result="r4"></feComposite>
                        </filter>
                    </defs>
        </svg>
        <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
            <!-- Loading Screen -->
            <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
            </div>
            <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
              <!-- Slide 1 -->
                <div data-p="680">
                 
                    <img data-u="image" src="<?=base_url()?>resource/images/banner.jpg" />
                          <!-- Banner Slider -->
                    <div class="text-center  hidden-xs" style="margin-top:180px">
                        <form id="categorie-search-form" method="post" action="<?=base_url()?>front/SearchMain">
                          <h1>Find Worldwide Buyers, Suppliers & Products</h1>
                          <div class="col-sm-6 col-md-10 nopadding">
                            <div id="search-input">
                              <div class="col-sm-3 nopadding">
                                <select id="location-search-list" class="form-control" name="typesearch">
                                  <option value="category">All Categories</option>
                                  <option value="subcategory">All Subcategories</option>
                                  <option value="buyers">Buyers</option>
                                  <option value="sellers">Sellers</option>
                                </select>
                              </div>
                              <div class="col-sm-9 nopadding">
                                <div class="form-group">
                                  <input id="location-search-data-store" class="form-control" name="search" placeholder="Enter Keyword" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3 col-md-2 text-right nopadding-right">
                            <div id="location-search-btn">
                              <button type="submit" id="search-btn"><i class="fa fa-search"></i>Search</button>
                            </div>
                          </div>
                        </form>
                    </div>
                   
                </div>
               <!-- Slide2 -->
                 <div data-p="680">
                 
                    <img data-u="image" src="<?=base_url()?>resource/images/banner.jpg" />
                          <!-- Banner Slider -->
                    <div class="text-center  hidden-xs" style="margin-top:180px">
                        <form id="categorie-search-form" method="post" action="<?=base_url()?>front/SearchMain">
                          <h1>Find Worldwide Buyers, Suppliers & Products</h1>
                          <div class="col-sm-6 col-md-10 nopadding">
                            <div id="search-input">
                              <div class="col-sm-3 nopadding">
                                <select id="location-search-list" class="form-control" name="typesearch">
                                  <option value="category">All Categories</option>
                                  <option value="subcategory">All Subcategories</option>
                                  <option value="buyers">Buyers</option>
                                  <option value="sellers">Sellers</option>
                                </select>
                              </div>
                              <div class="col-sm-9 nopadding">
                                <div class="form-group">
                                  <input id="location-search-data-store" class="form-control" name="search" placeholder="Enter Keyword" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3 col-md-2 text-right nopadding-right">
                            <div id="location-search-btn">
                              <button type="submit" id="search-btn"><i class="fa fa-search"></i>Search</button>
                            </div>
                          </div>
                        </form>
                    </div>
                   
                </div>
                <!-- Slide 3 -->
                  <div data-p="680">
                 
                    <img data-u="image" src="<?=base_url()?>resource/images/banner.jpg" />
                          <!-- Banner Slider -->
                    <div class="text-center  hidden-xs" style="margin-top:180px">
                        <form id="categorie-search-form" method="post" action="<?=base_url()?>front/SearchMain">
                          <h1>Find Worldwide Buyers, Suppliers & Products</h1>
                          <div class="col-sm-6 col-md-10 nopadding">
                            <div id="search-input">
                              <div class="col-sm-3 nopadding">
                                <select id="location-search-list" class="form-control" name="typesearch">
                                  <option value="category">All Categories</option>
                                  <option value="subcategory">All Subcategories</option>
                                  <option value="buyers">Buyers</option>
                                  <option value="sellers">Sellers</option>
                                </select>
                              </div>
                              <div class="col-sm-9 nopadding">
                                <div class="form-group">
                                  <input id="location-search-data-store" class="form-control" name="search" placeholder="Enter Keyword" required>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3 col-md-2 text-right nopadding-right">
                            <div id="location-search-btn">
                              <button type="submit" id="search-btn"><i class="fa fa-search"></i>Search</button>
                            </div>
                          </div>
                        </form>
                    </div>
                   
                </div>
                
            </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">html slider</a>
            <!-- Bullet Navigator -->
         <!--    <div data-u="navigator" class="jssorb102" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                <div data-u="prototype" class="i" style="width:16px;height:16px;">
                    <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                        <circle class="co" cx="8000" cy="8000" r="5000"></circle>
                        <circle class="ci" cx="8000" cy="8000" r="3000"></circle>
                    </svg>
                </div>
            </div> -->
            <!-- Arrow Navigator -->
            <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                </svg>
            </div>
            <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                </svg>
            </div>
        </div>
                <script type="text/javascript">jssor_1_slider_init();
                </script>
                <!-- #endregion Jssor Slider End -->

</div>
<div id="search-categorie-item">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="row">
          <div class="col-md-12 categories-heading bt_heading_3">
            <h1>Directory <span>Categories</span></h1>
            <div class="blind line_1"></div>
            <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
            <div class="blind line_2"></div>
          </div>
          <?php $list =$this->front_model->GetSList(1);
               foreach (json_decode($list['list'],true) as $cat) {?>
               <?php $category = $this->front_model->GetCategoryAll($cat);?>
               <?php if($category){?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">

              <div class="cate_item_block hi-icon-effect-8" style="height:320px">
              <a href="<?=base_url()?>category/<?=$category['id']?>">
                <!--<div class="cate_item_social hi-icon"><i class="fa fa-home"></i></div>-->
                <img src="<?=base_url()?>uploads/cat/<?=$category['category_image']?>" height="200px"> 
                <h1><?=$category['category_name']?></h1>
              </div>
            </div>
          </div>
          <?php }}?>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="feature-item_listing_block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 feature-item-listing-heading bt_heading_3">
          <h1>Featured <span>Seller</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <!-- Feature Seller-->
          <?php $sellers = $this->front_model->GetUserType('vendor');?>
          <?php $i=1;foreach($sellers as  $seller){ ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <img src="<?=base_url()?>resource/images/product/img1.png" alt="img1"> </div>
          
              <div class="feature-box-text" style=" text-align: center;">                
				        <h3><?=$seller['user_name']?></h3>
              </div>
      
            </div>
          </div>
         <?php $i++; if($i==9){break;}}?>
          <!-- Feature Seller -->
        </div>
      </div>
    </div>
  </div>
</div>

<div id="feature-item_listing_block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 feature-item-listing-heading bt_heading_3">
          <h1>Featured <span>Buyer</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <!-- Feature Seller-->
          <?php $buyers = $this->front_model->GetUserType('user');?>
          <?php foreach($buyers as  $buyer){ ?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <img src="<?=base_url()?>resource/images/product/img1.png" alt="img1"> </div>
          
              <div class="feature-box-text" style=" text-align: center;">                
                <h3><?=$buyer['user_name']?></h3>
              </div>
      
            </div>
          </div>
         <?php $i++; if($i==9){break;}}?>
          <!-- Feature Seller -->
        </div>
      </div>
    </div>
  </div>
</div>
<div class="vfx-counter-block">
  <div class="vfx-item-container-slope vfx-item-bottom-slope vfx-item-left-slope"></div>
  <div class="container">
    <div class="vfx-item-counter-up">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="vfx-item-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-file"></i></div>
            <div id="count-1" class="vfx-coutter-item count_number vfx-item-count-up">496</div>
            <div class="counter_text">Listings</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="vfx-item-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-users"></i></div>
            <div id="count-2" class="vfx-coutter-item count_number vfx-item-count-up">245</div>
            <div class="counter_text">Users</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="vfx-item-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-th"></i></div>
            <div id="count-3" class="vfx-coutter-item count_number vfx-item-count-up">96</div>
            <div class="counter_text">Categories</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="vfx-item-countup last-countup">
            <div class="vfx-item-black-top-arrow"><i class="fa fa-th-list"></i></div>
            <div id="count-4" class="vfx-coutter-item count_number vfx-item-count-up">274</div>
            <div class="counter_text">Listings Types</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="recent-product-item-listing">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 recent-item-listing-heading bt_heading_3">
          <h1>Recent <span>Query</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">

        <?php $listing =$this->front_model->GetQueryList(); 
          if($listing){
          foreach($listing as $list){?>
            <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="recent-listing-box-container-item">
                    <?php $list['description'] = json_decode($list['description'], True); ?>
                  <div class="recent-listing-box-item">
                    <div class="listing-boxes-text"> <a href="#">
                      <h3></h3>
                      </a> <a href="#"> <?=$list['description']['user_name']?></a>
                      <p><?php $pro = $this->front_model->GetProduct($list['pid']);?>
                       <strong>Product Name :</strong> <?=$pro['product_name']?>
                      </p>
                      <p><?=$list['description']['requirement']?></p>
                    </div>
                    <div class="recent-feature-item-rating">
                      <h2><i class="fa fa-map-marker"></i> <?=$list['description']['user_email']?></h2>
                      <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
                  </div>
              </div>
            </div>
          <?php }}?>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="pricing-item-block">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 pricing-heading-title bt_heading_3">
          <h1>Pricing <span>Plan</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="price-table-feature-block" style="height: 1450px;">
              <h1>Basic</h1>
              <hr>
              <p><span>$50</span> Per Year</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>FREE LISTING OF PRODUCTS, LOGO, CATALOGUE </h2>
                <p> Upto 5 PRODUCTS </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>TOP SEARCH RANKING </h2>
                <p>N/A </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>BANNER ADVERTISIMENT ON HOME PAGE </h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>COMPLETE PROCUREMENT SOLUTION</h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>SOCIAL MEDIA MARKETING, EMAIL MARKETING SUPPORT  SOLUTION </h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>BUYER CONTACTS VIA BNG PLATFORM </h2>
                 <p>10 NOS. MAX PER MONTH</p>
              </div>
              <div class="vfx-price-list-item"> 
                <h2>TARGENT MARKET STATISTICS DATA REPORT </h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-list-item"> 
                <h2>NEGOTATIONS WITH SELLERS VIA DEDICATED TRADE EXPERT </h2>
                 <p>N/A </p>
              </div>
               <div class="vfx-price-list-item"> 
                <h2>DEDICATED TRADE EXPERT SUPPORT  24X7</h2>
                 <p>N/A </p>
              </div>
               <div class="vfx-price-list-item"> 
                <h2>LOGISTICS SUPPORT WHENEVER REQUIRED </h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn" onclick="window.location.href='<?=base_url()?>checkout'"><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="price-table-feature-block" style="height: 1450px;">
              <h1>SUPER</h1>
              <hr>
              <p><span>$99</span> Per Year</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>FREE LISTING OF PRODUCTS, LOGO, CATALOGUE </h2>
                <p> Max 25 PRODUCTS </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>TOP SEARCH RANKING </h2>
                <p>N/A </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>BANNER ADVERTISIMENT ON HOME PAGE </h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>COMPLETE PROCUREMENT SOLUTION</h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>SOCIAL MEDIA MARKETING, EMAIL MARKETING SUPPORT  SOLUTION </h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>BUYER CONTACTS VIA BNG PLATFORM </h2>
                 <p>25 NOS. MAX PER MONTH</p>
              </div>
              <div class="vfx-price-list-item"> 
                <h2>TARGENT MARKET STATISTICS DATA REPORT </h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-list-item"> 
                <h2>NEGOTATIONS WITH SELLERS VIA DEDICATED TRADE EXPERT </h2>
                 <p>N/A </p>
              </div>
               <div class="vfx-price-list-item"> 
                <h2>DEDICATED TRADE EXPERT SUPPORT  24X7</h2>
                 <p>N/A </p>
              </div>
               <div class="vfx-price-list-item"> 
                <h2>LOGISTICS SUPPORT WHENEVER REQUIRED </h2>
                 <p>AVAILABLE </p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn" onclick="window.location.href='<?=base_url()?>checkout'"><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="price-table-feature-block" style="height: 1450px;">
              <h1>PREMIUM</h1>
              <hr>
              <p><span>$499</span> Per Year</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>FREE LISTING OF PRODUCTS, LOGO, CATALOGUE</h2>
                <p>UNLIMITED</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>TOP SEARCH RANKING </h2>
                <p>AVAILABLE </p>
              </div>
              
             <div class="vfx-price-list-item">
                <h2>BANNER ADVERTISIMENT ON HOME PAGE </h2>
                 <p>5 BANNERS EARLY </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>COMPLETE PROCUREMENT SOLUTION</h2>
                 <p>AVAILABLE </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>SOCIAL MEDIA MARKETING, EMAIL MARKETING SUPPORT  SOLUTION </h2>
                 <p>UPTO 600 EMAIL TO TARGET CUSTOMERS YEARLY</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>BUYER CONTACTS VIA BNG PLATFORM </h2>
                 <p>50 NOS. MAX PER MONTH</p>
              </div>
              <div class="vfx-price-list-item"> 
                <h2>TARGENT MARKET STATISTICS DATA REPORT </h2>
                 <p>N/A </p>
              </div>
              <div class="vfx-price-list-item"> 
                <h2>NEGOTATIONS WITH SELLERS VIA DEDICATED TRADE EXPERT </h2>
                 <p>N/A </p>
              </div>
               <div class="vfx-price-list-item"> 
                <h2>DEDICATED TRADE EXPERT SUPPORT  24X7</h2>
                 <p>AVAILABLE </p>
              </div>
               <div class="vfx-price-list-item"> 
                <h2>LOGISTICS SUPPORT WHENEVER REQUIRED </h2>
                 <p>AVAILABLE </p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn" onclick="window.location.href='<?=base_url()?>checkout'" ><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="price-table-feature-block" style="height: 1450px;">
              <h1>ELITE </h1>
              <hr>
              <p><span>$1199</span> Per Year</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>FREE LISTING OF PRODUCTS, LOGO, CATALOGUE </h2>
                <p>UNLIMITED</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>TOP SEARCH RANKING </h2>
                <p>AVAILABLE </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>BANNER ADVERTISIMENT ON HOME PAGE </h2>
                 <p>12 BANNERS EARLY </p>
              </div>
               <div class="vfx-price-list-item">
                <h2>COMPLETE PROCUREMENT SOLUTION</h2>
                 <p>AVAILABLE </p>
              </div>
              <div class="vfx-price-list-item">
                <h2>SOCIAL MEDIA MARKETING, EMAIL MARKETING SUPPORT  SOLUTION </h2>
                 <p>UPTO 2400 EMAIL TO TARGET CUSTOMERS YEARLY</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>BUYER CONTACTS VIA BNG PLATEFORM </h2>
                 <p>UNLIMITED</p>
              </div>
              <div class="vfx-price-list-item"> 
                <h2>TARGENT MARKET STATISTICS DATA REPORT </h2>
                 <p>AVAILABLE </p>
              </div>
              <div class="vfx-price-list-item"> 
                <h2>NEGOTATIONS WITH SELLERS VIA DEDICATED TRADE EXPERT </h2>
                 <p>AVAILABLE </p>
              </div>
               <div class="vfx-price-list-item"> 
                <h2>DEDICATED TRADE EXPERT SUPPORT  24X7</h2>
                 <p>AVAILABLE </p>
              </div>
               <div class="vfx-price-list-item"> 
                <h2>LOGISTICS SUPPORT WHENEVER REQUIRED </h2>
                 <p>AVAILABLE </p>
              </div>
            
              <div class="vfx-price-btn">
                <button class="purchase-btn" onclick="window.location.href='<?=base_url()?>checkout'" ><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
