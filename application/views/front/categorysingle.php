<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Category List</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="javascript:void(0)"><span>Listing Subcategories</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">

          <?php foreach($categories as $subcat){?>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>Food</h1>
                <img src="<?=base_url()?>uploads/cat/<?=$subcat['category_image']?>" alt="img1"> </div>
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
          <?php }?>
         
        </div>
      </div>
    </div>
  </div>
</div>