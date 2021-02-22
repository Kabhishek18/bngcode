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
            <div class="feature-item-container-box listing-item" style="height: 350px;">
              <div class="feature-title-item">
                <h1><?=$subcat['category_slug']?></h1>
                <img src="<?=base_url()?>uploads/cat/<?=$subcat['category_image']?>" alt="img1"> </div>
         
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