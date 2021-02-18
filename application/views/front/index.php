<div id="location-map-block">
  <div id="location-homemap-block"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12">
        <div id="location-link-item">
          <button id="map_list"><i class="fa fa-angle-double-up"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="slider-banner-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div id="home-slider-item"> 
          <h1> <span>Business</span> Network <span>Gateway</span></h1>
          <p>Is hyper-focused on security, verifying all our users to create a trustworthy space for all businesses to easily complete global trade transactions.
        </p>
        </div>
        <div id="search-categorie-item-block">
          <form id="categorie-search-form" method="post" action="<?=base_url()?>front/SearchMain">
            <h1>Find Worldwide Buyers, Suppliers & Products</h1>
            <div class="col-sm-9 col-md-10 nopadding">
              <div id="search-input">
                <div class="col-sm-3 nopadding">
                  <select id="location-search-list" class="form-control" name="typesearch">
                    <option value="category">All Categories</option>
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
        <div id="location_slider_item_block">
          <button id="map_mark"><i class="fa fa-map-marker"></i></button>
        </div>
      </div>
    </div>
  </div>
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
          <?php $categories =$this->front_model->GetCategory(); 
                $i= 1; foreach ($categories as $cat) {?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">

              <div class="cate_item_block hi-icon-effect-8" style="height:320px">
              <a href="<?=base_url()?>category/<?=$cat['id']?>">
                <!--<div class="cate_item_social hi-icon"><i class="fa fa-home"></i></div>-->
                <img src="<?=base_url()?>uploads/cat/<?=$cat['category_image']?>" height="200px"> 
                <h1><?=$cat['category_name']?></h1>
              </div>
            </div>
          </div>
          <?php $i++; if($i==9){break;}}?>
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
          <?php foreach($sellers as  $seller){ ?>
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
        foreach($listing as $list){?>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="recent-listing-box-container-item">
                  <?php $list['description'] = json_decode($list['description'], True); ?>
                <div class="recent-listing-box-item">
                  <div class="listing-boxes-text"> <a href="listing_detail.html">
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
          <?php }?>
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
            <div class="price-table-feature-block">
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
                <h2>BUYER CONTACTS VIA BNG PLATEFORM </h2>
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
            <div class="price-table-feature-block">
              <h1>SUPER</h1>
              <hr>
              <p><span>$100</span> Per Year</p>
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
                <h2>BUYER CONTACTS VIA BNG PLATEFORM </h2>
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
                 <p>N/A </p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn" onclick="window.location.href='<?=base_url()?>checkout'"><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="price-table-feature-block">
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
                <h2>BUYER CONTACTS VIA BNG PLATEFORM </h2>
                 <p>100 NOS. MAX PER MONTH</p>
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
            <div class="price-table-feature-block">
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
                 <p>5 BANNERS EARLY </p>
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
                <h2>BUYER CONTACTS VIA BNG PLATEFORM </h2>
                 <p>UPTO 600 EMAIL TO TARGET CUSTOMERS YEARLY</p>
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
                 <p>Available </p>
              </div>
               <div class="vfx-price-list-item"> 
                <h2>LOGISTICS SUPPORT WHENEVER REQUIRED </h2>
                 <p>N/A </p>
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
