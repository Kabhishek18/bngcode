   <?php $company =json_decode($company);?>
<link rel="stylesheet" href="<?=base_url()?>resource/css/superlist.css" type="text/css">
<link rel="stylesheet" href="<?=base_url()?>resource/js/owl.carousel/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?=base_url()?>resource/js/colorbox/example1/colorbox.css" type="text/css">
<div class="details-lt-block">
  <div class="slt_block_bg"><img src="<?=base_url()?>resource/images/detail-view-bg.jpg" alt=""></div>
  <div class="container header_slt_block">
    <div class="slt_item_head">
      <div class="user_logo_pic">
        <?php if(!empty($company_logo)){?>
       <img alt="<?=(!empty($company_logo))?$company_logo:''?>" src="<?=base_url()?>uploads/profile/<?=(!empty($company_logo))?$company_logo:''?>"> 
        <?php }else{?>
       <img alt="logo" src="<?=base_url()?>resource/images/company-logo.jpg"> 

         <?php }?> 
     </div>
      <div class="slt_item_contant">
        <h1> <?=(!empty($company->company_name)?$company->company_name:'')?></h1>
      
        <p class="contact_number"><i class="fa fa-phone"></i> <?=(!empty($company->company_phone)?$company->company_phone:'')?></p>
		<p class="email_detail"><i class="fa fa-envelope-o"></i> <?=(!empty($company->company_email)?$company->company_email:'')?></p>
		<p class="location"><i class="fa fa-map-marker"></i> <?=(!empty($company->company_address)?$company->company_address:'')?></p>

      
      </div>
    </div>
  </div>
</div>
<style type="text/css">
  .textbox{
    border:1px solid #d6d6d6;
    box-shadow: 2px 4px 8px #d6d6d6;
    padding: 30px;
  }
  .boxtitle{
    padding: 20px;
  }
  #vfx-product-inner-item{
    background: #ffffff;
    padding: 20px 0;
  }
  .formclass{
    margin-top:20px;
    border:1px solid #d6d6d6;
    box-shadow: 2px 4px 8px #d6d6d6;
    padding: 20px;
    margin-bottom:40px;
  }
  .imgclass{
    border: 2px solid #d6d6d6;
     box-shadow: 2px 4px 8px #d6d6d6;
  }
</style>
<div id="vfx-product-inner-item">
  <div class="container">
    <div class="text-title text-center boxtitle">
        <h1><?=$product_name?></h1>
      </div>
    <div class="row textbox">
      
      <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="slider">
            <div class="detail-gallery">
              <div class="detail-gallery-preview"> <a href="<?=base_url()?>uploads/pro/<?=$product_image?>"> <img class="imgclass" src="<?=base_url()?>uploads/pro/<?=$product_image?>" alt="<?=$product_image?>"  width="100%"> </a> </div>
   
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="dlt-title-item">
            <h2>Product Description</h2>
             <?=$product_description?> 
          </div>
          <div class="dlt-title-item">
            <h2>Product Information</h2>
             <?=$product_information?> 
          </div>
        </div> 
    </div>
    <div class="row formclass">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="text-title text-center">
          <h3>Requirement Form</h3>
        </div>
        <div class="card">
            <form  method="post" action="<?=base_url()?>front/Requirements">
            <div class=" col-md-6 form-group">
              <input type="hidden" value="<?=$id?>"  name="pid">
              <input type="hidden" value="<?=$user_id?>"  name="vid">
              <div class="controls">
                  <label>Name <span class="text-danger">*</span></label>
                  <input type="text" name="user_name" class="form-control" placeholder="Name" required="">
              </div>
            </div>
            <div class=" col-md-6 form-group">
                <div class="controls">
                    <label>Email <span class="text-danger">*</span></label>
                    <input type="email" name="user_email" class="form-control" placeholder="Email" required="">
                </div>
            </div>
             <div class="col-md-6 form-group">
                  <div class="controls">
                      <label>Phone <span class="text-danger">*</span></label>
                      <input type="number" name="user_phone" class="form-control" placeholder="phone" required="">
                  </div>
              </div>
              <div class="col-md-12 form-group">
                  <div class="controls">
                      <label>Query <span class="text-danger">*</span></label>
                      <textarea class="form-control" name="requirement" placeholder="Requirement" required=""></textarea>
                  </div>
              </div>
              <div class="col-md-12  form-group">
                  <div class="controls">
                    <input type="submit" class="btn btn-success" name="submit">
                  </div>
              </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>


