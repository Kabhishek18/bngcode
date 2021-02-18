<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Lead List</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="javascript:void(0)"><span>Listing</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">

          <?php foreach($leads as $lead){?>
            <?php $value = json_decode($lead['lead']);?>
            
              <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="feature-item-container-box listing-item">
                  <div class="feature-title-item">
                  <div class="feature-box-text">
                    <h3 class="text-center"><?=$value->freightleadtitle?></h3>
                    <p>Date : <?=$value->dateoflead?> - <?=$value->lastdate?></p>
                    <p>City : <?=$value->city?> </p>
                    <p>Country : <?=$value->country?> </p>
                    <p><?=$value->descriptiongood?></p>
                  </div>
                </div>
              </div>
          <?php }?>
         
        </div>
      </div>
    </div>
  </div>
</div>