   <?php $company =json_decode($company);?>
<link rel="stylesheet" href="<?=base_url()?>resource/css/superlist.css" type="text/css">
<link rel="stylesheet" href="<?=base_url()?>resource/js/owl.carousel/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?=base_url()?>resource/js/colorbox/example1/colorbox.css" type="text/css">
<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1><?=$product_name?></h1>
          <h4 style="color: white"> <?=(!empty($company->company_name)?$company->company_name:'')?></h4> </div>
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

  .formtext{
    box-shadow: 2px 3px 4px #ececec;
    border: 1px solid #ececec;
    padding: 22px;
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
    border: 1px solid #d6d6d6;
    width: 81%;
  }
</style>
<div id="vfx-product-inner-item">
  <div class="container">

    <div class="row ">
      
      <div class="col-md-7 col-sm-6 col-xs-12">
          <div class="slider">
            <div class="detail-gallery">
              <div class="detail-gallery-preview"> <a href="<?=base_url()?>uploads/pro/<?=$product_image?>"> <img class="imgclass" src="<?=base_url()?>uploads/pro/<?=$product_image?>" alt="<?=$product_image?>"  width="100%"> </a> </div>
   
            </div>
          </div>
        </div>
         <div class="col-md-5 col-sm-12 col-xs-12 formtext">
        <div class="left-slide-slt-block">
            <h3>Search Listings</h3>
          </div>
        <div class="sidebar-listing-search-wrap">
            <form id="search-form"  method="post" action="<?=base_url()?>front/SearchMain">
              <p>Search For :</p>
                <select id="search-location"  class="sidebar-listing-search-select" name="typesearch">
                    <option value="category">All Categories</option>
                      <option value="subcategory">All Subcategories</option>
                      <option value="buyers">Buyers</option>
                      <option value="sellers">Sellers</option>
                  </select>
             
                   <input class="sidebar-listing-search-input" placeholder="Search" name="search"  type="text">
    
                <div class="listing-search-btn">
                  <input class="sidebar-listing-search-btn" value="Search" type="submit">
                </div>
            </form>
        </div>
    
      </div>
      <div class="col-md-12 col-sm-12 col-md-12">
            <div class="left-slide-slt-block">
          <h3>Popular Search</h3>
        </div>
        <div class="archive-tag">
          <ul>
             <?php $list =$this->front_model->GetSList(1);
               foreach (json_decode($list['list'],true) as $cat) {?>
               <?php $category = $this->front_model->GetCategoryAll($cat);?>
               <?php if($category){?>        
            <li><a href="<?=base_url()?>category/<?=$category['id']?>"><?=$category['category_name']?></a></li>
              <?php }}?>
          </ul>
        </div>
      </div>
      <?php if(!empty($this->session->vendor_account)){?>
      <div class="formclass col-md-12 col-sm-12 col-md-12">
        <div class="left-slide-slt-block">
          <h3>Company Detail</h3>
        </div>
        <div class="col-md-6 col-sm-12 col-md-12">
          <ul style="list-style: none">
            <li>Company Name: <strong><?=$company->company_name?></strong></li>
            <li>Company Phone: <strong><?=$company->company_phone?></strong>  </li>
             <li>Company Email: <strong><?=$company->company_email?></strong></li>
            <li>Company Address: <strong><?=$company->company_address?></strong></li>
          </ul>
        </div>
        <div class="col-md-6 col-sm-12 col-md-12">
          <ul style="list-style: none">
            <?php $loo =json_decode($company_desc); ?>

            <li>Company Type: <strong><?=$loo->business_type?></strong></li>
            <li>Company Annual Sale: <strong><?=$loo->annual_sale?></strong></li>
            <li>Company ISO CERT: <strong><?=$loo->iso_cert?></strong></li>
            <li>Company Establishment Year: <strong><?=$loo->estab_year?></strong>  </li>
       
          </ul>
        </div>
      </div>
      <?php }?>

    </div>
    <div class="row formclass">
      <div class="col-md-7 col-sm-12 col-xs-12">
        
        <?php if($product_description){?> 
         <div class="dlt-title-item">
            <h2>Product Description</h2>
             <?=$product_description?> 
          </div>
        <?php } if($product_information){?>
          <div class="dlt-title-item">
            <h2>Product Information</h2>
             <?=$product_information?> 
          </div>
        <?php } ?>  
      </div>
       <div class="col-md-5 col-sm-6 col-xs-12 formtext">
            <div class="left-slide-slt-block">
               <h3>Requirement Form</h3>
           </div>
        
            <div class="card sidebar-listing-search-wrap">
                <form  method="post" action="<?=base_url()?>front/Requirements">
                <div class=" col-md-12 form-group">
                  <input type="hidden" value="<?=$id?>"  name="pid">
                  <input type="hidden" value="<?=$user_id?>"  name="vid">
                  <div class="controls">
                      <p>Name <span class="text-danger">*</span></p>
                      <input type="text" name="user_name" class="form-control" placeholder="Name" required="">
                  </div>
                </div>
                <div class=" col-md-12 form-group">
                    <div class="controls">
                        <p>Email <span class="text-danger">*</span></p>
                        <input type="email" name="user_email" class="form-control" placeholder="Email" required="">
                    </div>
                </div>
                 <div class="col-md-12 form-group">
                      <div class="controls">
                          <p>Phone <span class="text-danger">*</span></p>
                          <input type="number" name="user_phone" class="form-control" placeholder="Phone" required="">
                      </div>
                  </div>
                  <div class="col-md-12 form-group">
                      <div class="controls">
                          <p>Requirement Query <span class="text-danger">*</span></p>
                          <textarea class="form-control" name="requirement" placeholder="Requirement" required=""></textarea>
                      </div>
                  </div>
                  <div class="col-md-12  form-group">
                      <div class="controls">
                        <input type="submit" class="sidebar-listing-search-btn" name="submit" value="Submit Requirement">
                      </div>
                  </div>
                </form>
            </div>
        
        </div> 
     



    </div>
  </div>
</div>


