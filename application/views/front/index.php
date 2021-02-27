
<div id="slider-banner-section" style="border-top:16px solid #ffce10">   
   <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Composer -->
    <!-- Source: https://www.jssor.com/demos/image-slider.slider/=edit -->
    <script src="<?=base_url()?>resource/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:500,d:1000,x:0,e:{x:6}}],
              [{b:-1,d:1,x:100,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,x:200,p:{x:{d:1,dO:9}}},{b:0,d:2000,x:0,e:{x:6},p:{x:{dl:0.1}}}],
              [{b:-1,d:1,rX:20,rY:90},{b:0,d:4000,rX:0,e:{rX:1}}],
              [{b:-1,d:1,rY:-20},{b:0,d:4000,rY:-90,e:{rY:7}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:3000,sX:1,sY:1,e:{sX:1,sY:1}}],
              [{b:-1,d:1,sX:2,sY:2},{b:1000,d:5000,sX:1,sY:1,e:{sX:3,sY:3}}],
              [{b:-1,d:1,tZ:300},{b:0,d:2000,o:1},{b:3500,d:3500,tZ:0,e:{tZ:1}}],
              [{b:-1,d:1,x:20,p:{x:{o:33,r:0.5}}},{b:0,d:1000,x:0,o:0.5,e:{x:3,o:1},p:{x:{dl:0.05,o:33},o:{dl:0.02,o:68,rd:2}}},{b:1000,d:1000,o:1,e:{o:1},p:{o:{dl:0.05,o:68,rd:2}}}],
              [{b:-1,d:1,da:[0,700]},{b:0,d:600,da:[700,700],e:{da:1}}],
              [{b:600,d:1000,o:0.4}],
              [{b:-1,d:1,da:[0,400]},{b:200,d:600,da:[400,400],e:{da:1}}],
              [{b:800,d:1000,o:0.4}],
              [{b:-1,d:1,sX:1.1,sY:1.1},{b:0,d:1600,o:1},{b:1600,d:5000,sX:0.9,sY:0.9,e:{sX:1,sY:1}}],
              [{b:0,d:1000,o:1,p:{o:{o:4}}}],
              [{b:1000,d:1000,o:1,p:{o:{o:4}}}]
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

            var MAX_WIDTH = 1380;

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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&subset=latin-ext,cyrillic-ext,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
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

        /*jssor slider bullet skin 031 css*/
        .jssorb031 {position:absolute;}
        .jssorb031 .i {position:absolute;cursor:pointer;}
        .jssorb031 .i .b {fill:#000;fill-opacity:0.6;stroke:#fff;stroke-width:1600;stroke-miterlimit:10;stroke-opacity:0.8;}
        .jssorb031 .i:hover .b {fill:#fff;fill-opacity:1;stroke:#000;stroke-opacity:1;}
        .jssorb031 .iav .b {fill:#fff;stroke:#000;stroke-width:1600;fill-opacity:.6;}
        .jssorb031 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
    <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/double-tail-spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
     
            <div>
                <img data-u="image" src="<?=base_url()?>resource/images/banner1.jpeg" />
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                  <!-- Form -->
                    <div  data-to="50% 50%" class="text-center  hidden-xs" style="margin-top:180px">
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
                  <!-- Form -->   
                </div>
            </div>

             <div>
                <img data-u="image" src="<?=base_url()?>resource/images/banner2.jpeg" />
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                  <!-- Form -->
                    <div  data-to="50% 50%" class="text-center  hidden-xs" style="margin-top:180px">
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
                  <!-- Form -->          
                </div>
            </div>
                 <div>
                <img data-u="image" src="<?=base_url()?>resource/images/banner3.jpeg" />
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                  <!-- Form -->
                    <div  data-to="50% 50%" class="text-center  hidden-xs" style="margin-top:180px">
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
                  <!-- Form -->   
                </div>
            </div>
                 <div>
                <img data-u="image" src="<?=base_url()?>resource/images/banner4.jpeg" />
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="left:0px;top:0px;width:980px;height:380px;position:absolute;">
                  <!-- Form -->
                    <div  data-to="50% 50%" class="text-center  hidden-xs" style="margin-top:180px">
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
                  <!-- Form -->   
                </div>
            </div>
        </div><a data-scale="0" href="https://www.jssor.com" style="display:none;position:absolute;">slider html</a>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb031" style="position:absolute;bottom:16px;right:16px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:13px;height:13px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                </svg>
            </div>
        </div>
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
  <!-- Banner Slider -->

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
                <h1><?=$category['category_name']?></h1></a>  
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
