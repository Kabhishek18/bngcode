
<div id="slider-banner-section" style="border-top:16px solid #d07c18">   
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
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="top:20%;width:100%;position:absolute;">
                  <!-- Form -->
                    <div  data-to="50% 50%" class="text-center  hidden-xs" style="margin-top:180px">
                        <form id="categorie-search-form" method="post" action="<?=base_url()?>front/SearchMain">
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
                                  <input id="location-search-data-store" class="form-control" name="search" placeholder="Search for products & find verified sellers near you" required>
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
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="top:20%;width:100%;position:absolute;">
                  <!-- Form -->
                    <div  data-to="50% 50%" class="text-center  hidden-xs" style="margin-top:180px">
                        <form id="categorie-search-form" method="post" action="<?=base_url()?>front/SearchMain">
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
                                  <input id="location-search-data-store" class="form-control" name="search" placeholder="Search for products & find verified sellers near you" required>
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
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="top:20%;width:100%;position:absolute;">
                  <!-- Form -->
                    <div  data-to="50% 50%" class="text-center  hidden-xs" style="margin-top:180px">
                        <form id="categorie-search-form" method="post" action="<?=base_url()?>front/SearchMain">
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
                                  <input id="location-search-data-store" class="form-control" name="search" placeholder="Search for products & find verified sellers near you" required>
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
                <div data-ts="flat" data-p="2720" data-po="50% 48%" style="top:20%;width:100%;position:absolute;">
                  <!-- Form -->
                    <div  data-to="50% 50%" class="text-center  hidden-xs" style="margin-top:180px">
                        <form id="categorie-search-form" method="post" action="<?=base_url()?>front/SearchMain">
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

              <div class="cate_item_block hi-icon-effect-8" >
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
          if($listing){ $k=0;
          foreach($listing as $list){?>
             <?php $pro = $this->front_model->GetProduct($list['pid']);?>
              <a href="<?=base_url()?>products/<?=$pro['id']?>">
                <div class="col-md-6 col-sm-6 col-xs-12">
                 
                  <div class="recent-listing-box-container-item">
                        <?php $list['description'] = json_decode($list['description'], True); ?>
                      <div class="recent-listing-box-item">
                        <div class="listing-boxes-text"> 

                         <a href="<?=base_url()?>products/<?=$pro['id']?>"> <?=$list['description']['user_name']?></a>
                       
                            <a href="javascript:void(0)" class="text-success " style="color: green">
                              <img src="<?=base_url()?>badge.png" width="12px"> Verified</a>
                          
                          
                          <p>
                           <strong>Product Name :</strong><a href="<?=base_url()?>products/<?=$pro['id']?>">  <?=$pro['product_name']?>
                            </a></p>
                          <p><?=$list['description']['requirement']?></p>
                        </div>
                        <div class="recent-feature-item-rating">
                          <h2><i class="fa fa-envelope"></i> <?=$list['description']['user_email']?></h2>
                          <span class="text-right">
                           <h2><i class="fa fa-calendar"></i>  <?=date('F d y',strtotime($list['date_created']))?></h2>
                          </span>
                         </div>
                      </div>
                  </div>
                 
                </div>
             </a>
          <?php $k++; if($k==8){break;} }}?>
         
          <div class="col-md-12">
             <br><a class="btn btn-default box-modal" href="<?=base_url()?>Front/ViewAllQuery">View More</a></div>
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
            <div class="price-table-feature-block" >
              <h1>Basic</h1>
              <hr>
              <p><span>$50</span> Per Year</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="price-table-feature-block">
              <h1>SUPER</h1>
              <hr>
              <p><span>$99</span> Per Year</p>
       
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="price-table-feature-block" >
              <h1>PREMIUM</h1>
              <hr>
              <p><span>$499</span> Per Year</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="price-table-feature-block">
              <h1>ELITE </h1>
              <hr>
              <p><span>$1199</span> Per Year</p>
              
            </div>
          </div>
          <div class="vfx-price-btn">
            <button class="purchase-btn" onclick="window.location.href='<?=base_url()?>pricings'" ><i class="fa fa-unlock-alt"></i> See Our Pricing Plan</button>
          </div>  
        </div>
      </div>
    </div>
  </div>
</div>


<link rel="preconnect" href="https://fonts.gstatic.com">
<style type="text/css">
  .page-width {
  max-width: 1200px;
  margin: auto;
}
.text-left {
  text-align: left;
}
.quotes {
  display: flex;
  padding: 1rem 1rem;
  align-items: center;
}

.quotes-slide {
  width: 33%;
  padding: 3rem;
  background-color: white;
  opacity: .4;
  cursor: pointer;
  box-shadow: 0px 0px 0px 1px #d5d5d5;
  line-height: 1.55;
  font-family: 'Roboto', sans-serif;
  transition: all .5s ease;
  outline: none;
}

.quotes-slide--active {
    transform: scale(1.2);
    z-index: 10;
    opacity: 1;
    border: none;
    box-shadow: 1px 0px 10px 5px #eaeaea;
    color: #999999;
}
blockquote {
  margin: 0;
}
cite{
  font-style: normal;
  font-size: 12px;
}
cite::before {
    content: '\2014 \0020';
}
.icon {
  width: 20px;
  height: 20px;
  fill: #f19220;
}
</style>
<?php $testimonials = $this->front_model->ClientTestimonial();?>
<?php if(!empty($testimonials)){?>
  <div class="container-fluid" style="padding-bottom: 50px">
    <div class="row">
        <div class="text-center col-md-12 pricing-heading-title bt_heading_3">
          <h1>Client's <span>Testimonials</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
      <div class="quotes page-width">
        <?php $i=0; foreach($testimonials as $testimonial){?>
          <div class="quotes-slide slideshow__slide--active"  data-slider-slide-index="<?=$i++?>" aria-hidden="false" tabindex="-1">
              <blockquote class="quotes-slider__text text-left" style="border-left:5px">
                  <span class="quote-icon">
                    <svg aria-hidden="true" focusable="false" role="presentation"  class="icon icon-quote" viewBox="0 0 41 35">
                          <path d="M10.208 17.711h6.124v16.332H0V21.684C0 8.184 5.444.956 16.332 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766zm24.498 0h6.124v16.332H24.498V21.684C24.498 8.184 29.942.956 40.83 0v6.125c-4.083 1.14-6.124 4.414-6.124 9.82v1.766z"></path>
                      </svg>
                  </span>

                  <div class="content">
                      <p><?=$testimonial['description']?>
                      </p>
                  </div>
                  <cite><?=$testimonial['author']?></cite>
              </blockquote>
          </div>
        <?php if($i==3){break;}}?>  
          
 

      </div>
    </div>
  </div>    
<?php }?>
<script type="text/javascript">
  const testimonialPage = document.querySelector(".quotes-slide[data-slider-slide-index='1']");
testimonialPage.classList.add("quotes-slide--active");


document.querySelector(".quotes").addEventListener("mouseout", function(){
  document.querySelector(".quotes-slide--active").classList.remove("quotes-slide--active")
  document.querySelector(".quotes-slide[data-slider-slide-index='1']").classList.add("quotes-slide--active")
});


document.querySelectorAll(".quotes-slide").forEach( 
  elem => elem.addEventListener("mouseover", function(){
    document.querySelector(".quotes-slide--active").classList.remove("quotes-slide--active")
    this.classList.add("quotes-slide--active")
  })
)
</script>

<?php $clientlogo = $this->front_model->ClientLogo();?>
<?php if(!empty($clientlogo)){?>


<div style="padding-bottom: 50px">
    <div class="row">
        <div class="text-center col-md-12 pricing-heading-title bt_heading_3">
          <h1>Our <span>Partners</span></h1>



    <br>


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

  <style>
        /* bx-wrapper Styling */
      .bx-wrapper {
        box-shadow: none !important;
        border: none !important;
        background: #fff !important;
        margin: auto !important;
        
      }

      .bx-wrapper .bx-caption {
        position: absolute !important;
        bottom: 0 !important;
        left: 0 !important;
        background: rgba(80, 80, 80, 0.5) !important;
        width: 100% !important;
        
      }

      .bx-wrapper .bx-caption span {
        color: #fff !important;
        font-family: Arial !important;
        display: block !important;
        font-size: 8px !important;
        padding: 10px !important;
        
        text-align: center;
      }

      .bx-wrapper .bx-controls-direction a {
        position: absolute;
        top: 50%;
        margin-top: -16px;
        outline: 0;
        width: 32px;
        height: 32px;
        text-indent: -9999px;
        z-index: 9999;
        
      }

      .bx-wrapper .bx-prev {
        left: 10px;
        background: url(images/controls.png) no-repeat 0 -32px;
      }

      .bx-wrapper .bx-next {
        right: 10px;
        background: url(images/controls.png) no-repeat -43px -32px;
      }
      /* End bx-wrapper Styling */

      .logosImgs {
        display: -webkit-flex;
        display: flex;
        justify-content: center;
        
      }

      .logosImgs img {
        max-height: 100%;
       
        opacity: .65;
        transition: all .5s;
      }

      .logosImgs img:hover {
        opacity: 1;
        
      }


      @media screen and (max-width: 800px) {
          .logosImgs img {
            max-width: 125px;
            max-height: 88px;
            margin: 5px 8px;
        }
      }

      @media screen and (max-width: 560px) {
        .logosImgs img {
            max-width: 85px;
            max-height: 60px;
            margin: 3px 5px;
        }
      }
  </style>


<div class="bxslider logosImgs">
   <?php $j=0; foreach($clientlogo as $logo){?>
          <div>
            <img src="<?=base_url()?>uploads/client/<?=$logo['image']?>" alt="<?=$logo['image']?>">
          </div>
        <?php }?>
</div>


<!-- partial -->
  <script>
    $('.bxslider').bxSlider({
      default: '',
    autoHover: true,
    auto: true,
    slideWidth: 250,
    minSlides: 2,
    maxSlides: 6,
    controls: true,
    pager: true,
    speed: 5650,
    captions: true,
    slideMargin: 3,
  });
  </script>


  </div>
</div>
<?php }?>
