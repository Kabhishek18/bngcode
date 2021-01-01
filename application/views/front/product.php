
<link rel="stylesheet" href="<?=base_url()?>resource/css/superlist.css" type="text/css">
<link rel="stylesheet" href="<?=base_url()?>resource/js/owl.carousel/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="<?=base_url()?>resource/js/colorbox/example1/colorbox.css" type="text/css">
<div class="details-lt-block">
  <div class="slt_block_bg"><img src="<?=base_url()?>resource/images/detail-view-bg.jpg" alt=""></div>
  <div class="container header_slt_block">
    <div class="slt_item_head">
      <div class="user_logo_pic"> <img alt="" src="<?=base_url()?>resource/images/company-logo.jpg"> </div>
      <div class="slt_item_contant">
        <h1><?=$product_name?></h1>
        <p class="contact_number"><i class="fa fa-phone"></i> +001 245 0154, &nbsp; +001 245 0154</p>
		<p class="email_detail"><i class="fa fa-envelope-o"></i> <a href="mailto:directorylisting@gmail.com">directorylisting@gmail.com</a>, &nbsp; <a href="mailto:info@directorylisting.com">info@directorylisting.com</a></p>
		<p class="location"><i class="fa fa-map-marker"></i> 124/47 22nd Avenue, New York City, USA</p>
        <div class="rating-box">
          <div class="rating"> <span> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </div>
        </div>
        <div class="head-bookmark-bock">
          <div class="detail-banner-btn"><a href="#"><i class="fa fa-bookmark-o"></i> Bookmark</a></div>
          <div class="detail-banner-btn"><a href="#"><i class="fa fa-heart-o"></i> Give Heart</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="vfx-product-inner-item">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div class="slider">
          <div class="detail-gallery">
            <div class="detail-gallery-preview"> <a href="<?=base_url()?>uploads/pro/<?=$product_image?>"> <img src="<?=base_url()?>uploads/pro/<?=$product_image?>" alt=""  width="100%"> </a> </div>
            <ul class="detail-gallery-index">
              <li class="detail-gallery-list-item active"><a data-target="<?=base_url()?>uploads/pro/<?=$product_image?>"><img src="<?=base_url()?>uploads/pro/<?=$product_image?>" alt=""> </a> </li>
              <li class="detail-gallery-list-item active"><a data-target="<?=base_url()?>resource/images/product_item/gallery-2.jpg"><img src="<?=base_url()?>resource/images/product_item/gallery-2.jpg" alt=""> </a> </li>
              <li class="detail-gallery-list-item active"><a data-target="<?=base_url()?>resource/images/product_item/gallery-3.jpg"><img src="<?=base_url()?>resource/images/product_item/gallery-3.jpg" alt=""> </a> </li>
              <li class="detail-gallery-list-item active"><a data-target="<?=base_url()?>resource/images/product_item/gallery-4.jpg"><img src="<?=base_url()?>resource/images/product_item/gallery-4.jpg" alt=""> </a> </li>
              <li class="detail-gallery-list-item active"><a data-target="<?=base_url()?>resource/images/product_item/gallery-5.jpg"><img src="<?=base_url()?>resource/images/product_item/gallery-5.jpg" alt=""> </a> </li>
              <li class="detail-gallery-list-item active"><a data-target="<?=base_url()?>resource/images/product_item/gallery-6.jpg"><img src="<?=base_url()?>resource/images/product_item/gallery-6.jpg" alt=""> </a> </li>
              <li class="detail-gallery-list-item active"><a data-target="<?=base_url()?>resource/images/product_item/gallery-7.jpg"><img src="<?=base_url()?>resource/images/product_item/gallery-7.jpg" alt=""> </a> </li>
              <li class="detail-gallery-list-item active"><a data-target="<?=base_url()?>resource/images/product_item/gallery-8.jpg"><img src="<?=base_url()?>resource/images/product_item/gallery-8.jpg" alt=""> </a> </li>
            </ul>
          </div>
        </div>
        <div class="dlt-title-item">
          <h2>Product Discription</h2>
           <?=$product_description?> 
        </div>
         <div class="dlt-title-item">
          <h2>Product Information</h2>
           <?=$product_information?> 
        </div>
      
     
      <!--   <div class="dlt-com-lt-comment-user">
          <h2>Post A Comment</h2>
          <div class="dlt-com-lt-block">
            <div class="dlt-com-lt-img"> <img alt="new-thum-1" src="<?=base_url()?>resource/images/come-user-img.png">
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="dlt-com-lt-text">
              <div class="dlt-com-lt-title">John Doe</div>
              <div class="dlt-com-clt">CEO & Founder</div>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s, when an unknown printer took a galley of type and scrambled.Nulla a enim et justo facilisis ornare. Sed ante sem, dignissim a vehicula et, rutrum volutpat turpis. Praesent id leo lacinia, malesuada tortor ut, lobortis leo.</p>
            </div>
          </div>
        </div>
        <div class="comments-wrapper">
          <h2>2 Comments</h2>
          <ul class="media-list">
            <li class="media">
              <div class="media-left"> <a href="#"> <img alt="image" src="<?=base_url()?>resource/images/comment-thumb-1.jpg"> </a> </div>
              <div class="media-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s, when an unknown printer took a galley of type and scrambled.Nulla a enim et justo facilisis ornare. Sed ante sem, dignissim a vehicula et, rutrum volutpat turpis. Praesent id leo lacinia, malesuada tortor ut, lobortis leo. </p>
                <div class="comment-meta clearfix"> <a href="#"><span class="author-name">John doe</span></a> <span class="comment-lt-time">22 April - 2016</span> <span class="rating-box"> <span class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </span> <a href="#" class="comment-reply-link pull-right">Reply</a> </div>
              </div>
            </li>
            <li class="media">
              <div class="media-left"> <a href="#"> <img alt="image" src="<?=base_url()?>resource/images/comment-thumb-2.jpg"> </a> </div>
              <div class="media-body">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since they 1500s, when an unknown printer took a galley of type and scrambled.Nulla a enim et justo facilisis ornare. Sed ante sem, dignissim a vehicula et, rutrum volutpat turpis. Praesent id leo lacinia, malesuada tortor ut, lobortis leo. </p>
                <div class="comment-meta clearfix"> <a href="#"><span class="author-name">John doe</span></a> <span class="comment-lt-time">22 April - 2016</span> <span class="rating-box"> <span class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </span> </span> <a href="#" class="comment-reply-link pull-right">Reply</a> </div>
              </div>
            </li>
          </ul>
          <div class="comment-respond">
            <h2>Post A Comment</h2>
            <form>
              <div class="row">
        				<div class="col-md-12">
                          <div class="form-group">
                            <span class="rating-box"> 
        						<span class="rating"> 
        							<i class="fa fa-star"></i> 
        							<i class="fa fa-star"></i> 
        							<i class="fa fa-star"></i> 
        							<i class="fa fa-star"></i> 
        							<i class="fa fa-star-o"></i> 
        						</span>
        					</span>	
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input placeholder="Full Name" required class="form-control" type="text">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input placeholder="Email Address" required class="form-control" type="email">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <input placeholder="Your Website" required class="form-control" type="text">
                  </div>
                </div>
              </div>
              <div class="form-group">
                <textarea placeholder="Type here message" rows="7" required class="form-control"></textarea>
              </div>
              <button class="btn pull-right" type="submit">Submit</button>
            </form>
          </div>
        </div> -->
      </div>
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="card">
          <form class="form-group" method="post" action="<?=base_url()?>front/Requirements">
          <div class="form-group">
            <input type="hidden" value="<?=$id?>"  name="pid">
            <input type="hidden" value="<?=$user_id?>"  name="vid">
            <div class="controls">
                <label>User Name</label>
                <input type="text" name="user_name" class="form-control" placeholder="User Name">
            </div>
        </div>
        <div class="form-group">
            <div class="controls">
                <label>User Email</label>
                <input type="email" name="user_email" class="form-control" placeholder="User Email">
            </div>
        </div>
        <div class="form-group">
            <div class="controls">
                <label>Query</label>
                <textarea class="form-control" name="requirement" placeholder="Requirement"></textarea>
            </div>
        </div>
        <div class="form-group">
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


