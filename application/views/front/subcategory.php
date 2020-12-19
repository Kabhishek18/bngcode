<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Subcategory Listing </h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="javascript:void(0)"><span>Subcategories</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="vfx-product-inner-item">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="news-search-lt">
          <input class="form-control" placeholder="Search" type="text">
          <span class="input-search"> <i class="fa fa-search"></i> </span> </div>
        <div class="left-slide-slt-block">
          <h3>Similar SubCategories</h3>
        </div>
        <div class="list-group"> 
          <?php $subcat =$this->front_model->GetCatSub($categories['id']); 
                  foreach($subcat as $sub){?>
          <a href="#" class="list-group-item active">
              <i class="fa fa-hand-o-right"></i>
               Business 
                <span class="list-lt">
                  15
                </span>
          </a>
           <?php }?>
        </div>
     
      </div>
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="sorts-by-results">
          <div class="col-md-6 col-sm-6 col-xs-6"> <span class="result-item-view">Your Search Returned <span class="yellow">12</span> Results</span> </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
            <div class="disp-f-right">
              <div class="disp-style active"><a href="listing_grid.html"><i class="fa fa-th"></i></a></div>
              <div class="disp-style"><a href="listing_list.html"><i class="fa fa-th-list"></i></a></div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="col-md-4 col-sm-6 col-xs-12">
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
          <div class="vfx-person-block">
            <ul class="vfx-pagination">
              <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>