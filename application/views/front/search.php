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
<div id="all-categorie-item-block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="col-md-12 all-categorie-list-title bt_heading_3">
          <h1>All <span>Searchs</span> <?=(!empty($categories)?'('.count($categories).' )':'')?></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
			<!-- Begin Categories -->
        	<?php if(!empty($categories)){?>
		      <?php foreach($categories as $category){?>
		      <div class="col-md-3 col-sm-6 col-xs-12">
		        <div class="categorie-list-box">
		          <div class="search-categories-boxes">
		            <h2><i><?=substr($category['category_name'], 0, 1)?></i> <?=$category['category_name']?></h2>
		          </div>
		          <div class="categories-list">
		            <ul>
		              <?php $subcat =$this->front_model->GetCatSub($category['id']); 
		              foreach($subcat as $sub){?>
		              <li><a href="<?=base_url()?>subcategories/<?=$sub['id']?>"><i class="fa fa-hand-o-right"></i> <?=$sub['category_name']?></a><span>10</span></li>
		              <?php }?>
		            </ul>
		          </div>
		        </div>
		      </div>
		    <?php }}?>
          	<!-- End Categories -->
          	<!-- Begin Buyers -->
        	<?php if(!empty($buyers)){?>
		      <?php foreach($buyers as $buyer){?>
		      <div class="col-md-3 col-sm-6 col-xs-12">
		        <div class="categorie-list-box">
		          <div class="search-categories-boxes">
		            <h2><i><?=substr($buyer['user_name'], 0, 1)?></i> <?=$buyer['user_name']?></h2>
		          </div>
		          <div class="categories-list">
		            <ul>
		              <li><a href="mailto:<?=$buyer['user_email']?>"><i class="fa fa-hand-o-right"></i> <?=$buyer['user_email']?></a></li>
		            </ul>
		          </div>
		        </div>
		      </div>
		    <?php }}?>
          	<!-- End Buyers -->
          	<!-- Begin Seller -->
        	<?php if(!empty($sellers)){?>
		      <?php foreach($sellers as $buyer){?>
		      <div class="col-md-3 col-sm-6 col-xs-12">
		        <div class="categorie-list-box">
		          <div class="search-categories-boxes">
		            <h2><i><?=substr($buyer['user_name'], 0, 1)?></i> <?=$buyer['user_name']?></h2>
		          </div>
		          <div class="categories-list">
		            <ul>
		              <li><a href="mailto:<?=$buyer['user_email']?>"><i class="fa fa-hand-o-right"></i> <?=$buyer['user_email']?></a></li>
		            </ul>
		          </div>
		        </div>
		      </div>
		    <?php }}?>
          	<!-- End Buyers -->
        </div>
      </div>
    </div>
  </div>
</div>        	


