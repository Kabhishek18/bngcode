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
          <form id="categorie-search-form">
            <h1>Find Worldwide Buyers, Suppliers & Products</h1>
            <div class="col-sm-9 col-md-10 nopadding">
              <div id="search-input">
                <div class="col-sm-3 nopadding">
                  <select id="location-search-list" class="form-control">
                    <option>All Categories</option>
                    <option>Buyers</option>
                    <option>Sellers</option>
                    <option>Manufacturers</option>
                    <option>Freight  Forwarders</option>
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
                foreach ($categories as $cat) {?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="categorie_item">
              <div class="cate_item_block hi-icon-effect-8">
                <div class="cate_item_social hi-icon"><i class="fa fa-home"></i></div>
                <h1><a href="<?=base_url()?>category/<?=$cat['id']?>"><?=$cat['category_name']?></a></h1>
              </div>
            </div>
          </div>
          <?php }?>
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
          <h1>Featured <span>Listing</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="<?=base_url()?>resource/images/product/img1.png" alt="img1"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">                  
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">                
				<h3><a href="listing_detail.html">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="<?=base_url()?>resource/images/product/img2.png" alt="img2"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">                  
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail.html">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="<?=base_url()?>resource/images/product/img3.png" alt="img3"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">                  
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail.html">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="<?=base_url()?>resource/images/product/img4.png" alt="img4"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">                  
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail.html">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="<?=base_url()?>resource/images/product/img5.png" alt="img5"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">                  
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail.html">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="<?=base_url()?>resource/images/product/img6.png" alt="img6"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">                  
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail.html">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="<?=base_url()?>resource/images/product/img7.png" alt="img7"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">                  
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail.html">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="<?=base_url()?>resource/images/product/img8.png" alt="img8"> </div>
              <div class="hover-overlay">
                <div class="hover-overlay-inner">                  
                  <ul class="listing-links">
                    <li><a href="#"><i class="fa fa-heart green-1 "></i></a></li>
                    <li><a href="#"><i class="fa fa-map-marker blue-1"></i></a></li>
                    <li><a href="#"><i class="fa fa-share yallow-1"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="feature-box-text">
                <h3><a href="listing_detail.html">Hello Directory Listing</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>Eiusmod tempor incidiunt labore velit dolore magna aliqu sed veniam quis nostrud lorem ipsum dolor sit amet consectetur...</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
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
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 pricing-heading-title bt_heading_3">
          <h1>Pricing <span>Plan</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="price-table-feature-block">
              <h1>Basic</h1>
              <hr>
              <p>Free <span>$50</span> Per Month</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>Limited Number</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>One Agent for All</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>Mail Communication</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn" onclick="window.location.href='<?=base_url()?>checkout'"><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="price-table-feature-block active">
              <h1>Premium</h1>
              <hr>
              <p>Free <span>$100</span> Per Month</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>Unlimited Number</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>One Agent for All</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>Mail Communication</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-btn">
                <button class="purchase-btn" onclick="window.location.href='<?=base_url()?>checkout'"><i class="fa fa-unlock-alt"></i> Purchase Now</button>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="price-table-feature-block">
              <h1>Plus</h1>
              <hr>
              <p>Free <span>$200</span> Per Month</p>
              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
              <div class="vfx-price-list-item">
                <h2>Unlimited Number</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>Unlimited Number</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
              </div>
              <div class="vfx-price-list-item">
                <h2>Personal Training</h2>
                <p>Our company offers best pricing options for field agents and companies.</p>
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
