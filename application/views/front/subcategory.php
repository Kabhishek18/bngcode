<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Product Listing </h1>
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
          <h3>Similar Subcategories</h3>
        </div>
        <div class="list-group"> 
          <?php $subcat =$this->front_model->GetCatSub($categories['id']); 
                  foreach($subcat as $sub){?>
          <a id="sub-<?=$sub['id']?>"  href="javascript:void(0)" class="list-group-item"  data-value= "<?=$sub['id']?>">
              <i class="fa fa-hand-o-right"></i>
               <?=$sub['category_name']?> 
                <span class="list-lt">
                  <?=(!empty($this->front_model->GetSubPro($sub['id']))?count($this->front_model->GetSubPro($sub['id'])):'0')?>
                </span>
          </a>
           <?php }?>
        </div>
     
      </div>
      <?php $products = $this->front_model->GetSubPro($this->uri->segment(2,0));?>
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="sorts-by-results">
          <div class="col-md-6 col-sm-6 col-xs-6"> <span class="result-item-view">Your Search Returned <span class="yellow"><?=count($products)?></span> Results</span> </div>
          <div class="col-md-6 col-sm-6 col-xs-6">
         
          </div>
        </div>
        <div class="row">
          <div class="editview-radio-box">
            
          </div>
          <?php foreach ($products as $product) {?> 
           <div class="editview">
             <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="feature-item-container-box listing-item">
                <div class="feature-title-item">
                  <h1><?=$product['category_slug']?></h1>
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
                  <h3><a href="<?=base_url()?>products/<?=$product['id']?>"><?=$product['product_name']?></a></h3>
                  <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                  <p><?=$product['product_slug']?></p>
                </div>
                <div class="feature-item-location">
                  <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                  <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
              </div>
            </div>
           
           </div>    
          <?php }?>
       
        </div>
      </div>
    </div>
  </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
    $('[id^="sub-"]').on('click', function postinput(){
        //var matchvalue = $(this).val(); // this.value
        var matchvalue =this.getAttribute('data-value');
        var base_url = '<?=base_url()?>';
        $.ajax({ 
            url: base_url+'front/SubProductJson',
            data: { matchvalue: matchvalue },
            type: 'post'
        }).done(function(responseData) {
            onSuccess(responseData);
        }).fail(function() {
            console.log('Failed');
        });
    });
}); 

function onSuccess(data) {
   $(".editview").hide();
  let html = "";
  if(JSON.parse(data)){
      $.each(JSON.parse(data), function(key, value){

         html += `
               <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="feature-item-container-box listing-item">
              <div class="feature-title-item">
                <h1>${ value.category_slug}</h1>
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
                <h3><a href="<?=base_url()?>products/${ value.id }">${ value.product_name }</a></h3>
                <a href="#"><i class="fa fa-phone"></i> +91 087 654 3210</a>
                <p>${ value.product_slug }</p>
              </div>
              <div class="feature-item-location">
                <h2><i class="fa fa-map-marker"></i> Your City Here</h2>
                <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
            </div>
          </div>
          `
      });
    }
  else{
        html +=`<div class="error-page-alt">
  <div class="container">
    <div class="b-title-error f-title-error"> <span class="f-primary-eb">404</span> <strong class="f-primary-l">Data Not Found !</strong> </div>
   
</div>`;
  }
  $('.editview-radio-box').html(html);
}

</script>