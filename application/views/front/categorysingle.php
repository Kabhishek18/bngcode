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
<div id="vfx-search-item-inner">
  <div class="container">
    <div class="row">
      <div class="col-md-12 vfx-search-categorie-title text-center bt_heading_3">
        <h1>Search & Business <span>Listing</span></h1>
        <div class="blind line_1"></div>
        <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
        <div class="blind line_2"></div>
      </div>
      <div class="col-md-12">
        <form id="search-form"  method="post" action="<?=base_url()?>front/SearchMain">
          <div class="col-sm-9 col-md-10 nopadding">
            <div id="vfx-search-box">
              <div class="col-sm-3 nopadding">
                <select id="search-location" class="form-control" name="typesearch">
                  <option value="category">All Categories</option>
                    <option value="subcategory">All Subcategories</option>
                    <option value="buyers">Buyers</option>
                    <option value="sellers">Sellers</option>
                </select>
              </div>
              <div class="col-sm-9 nopadding">
                <div class="form-group">
                  <input id="search-data" class="form-control" name="search" placeholder="Enter Keyword" required>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-3 col-md-2 text-right nopadding-right">
            <div id="vfx-search-btn">
              <button type="submit" id="search"><i class="fa fa-search"></i>Search</button>
            </div>
          </div>
        </form>
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
            <div class="feature-item-container-box listing-item" style="height: 350px;">
              <div class="feature-title-item">
                <h1><?=$subcat['category_slug']?></h1>
               <a href="<?=base_url()?>subcategories/<?=$subcat['id']?>"> <img src="<?=base_url()?>uploads/cat/<?=$subcat['category_image']?>" alt="img1"> </a></div>
         
              <div class="feature-box-text">
                <h3><a href="<?=base_url()?>subcategories/<?=$subcat['id']?>"><?=$subcat['category_name']?></a></h3>
                <p><?=$subcat['category_description']?></p>
              </div>
            </div>
          </div>
          <?php }?>
         
        </div>
      </div>
    </div>
  </div>
</div>