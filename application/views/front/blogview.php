<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Blogs</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="<?=base_url()?>blogs"><span>Blog Listings</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row"  style="padding-bottom: 100px"> 
    <div class="text-center col-md-12 col-sm-12">
    	 <h1><u><?=$title?></u></h1>
    </div>	
    <div class="col-md-12 col-sm-12">
    	<img class="img-responsive" src="<?=base_url()?>uploads/blog/<?=$blog_image?>">
    </div>
    <div class="col-md-12">
    	<strong>	<span class="text-left">Author: <?=$author?></span></strong>
    	<strong><span class="text-right" style="float:right;">Created on : <?=date('F, d y',strtotime($date_created))?></span></strong>
    </div>
    <br>
    <div class="col-md-12 col-sm-12 text-description">
    	<h4><?=$subtitle?></h4>
    	<?=$blog_description?>
    </div>
    </div>
  </div>  	
</div>  