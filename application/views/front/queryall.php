<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Query All</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="javascript:void(0)"><span>Query All</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="col-md-12 recent-item-listing-heading bt_heading_3">
          <h1>Recent <span> All Query</span></h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">

        <?php $listing =$this->front_model->GetQueryList(); 
          if($listing){
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
          <?php $k++; }}?>
         
          <div class="col-md-12">
             <br><a class="btn btn-default box-modal" href="<?=base_url()?>Front/ViewAllQuery">View More</a></div>
        </div>
      </div>
    </div>
  </div>  
</div>  	