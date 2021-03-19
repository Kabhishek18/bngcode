<footer class="site-footer footer-map">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>About Us</h2>
          <hr>
          <p class="about-lt">BNG “Business Network Gateway” is a trustworthy platform developed by the BNG INFO MEDIA & TECHNOLOGIES LLP.   BNG is an online B2B Portal for all kind of manufacturers, exporters and importers. 
      of customers world-wide. </p>
          <a href="<?=base_url()?>about" class="btn-primary-link more-detail"><i class="fa fa-hand-o-right"></i> Read More</a>
          <p><a href="tel:18005720558"><i class="fa fa-phone"></i> Call Us: 18005720558</a></p>
          <p style="color: #cfcfcf;"><a href="javascript:void(0)"><i class="fa fa-home"></i> Address: NOIDA ONE" C-321, 3RD FLOOR, PLOT NO. B-8, IT PARK, Sector 62, Noida, Delhi 201309</a></p>
          <h2>Follow Us</h2>
          <hr>
          <ul class="social-icons">
            <li><a href="https://www.facebook.com/go2bngnetworks/"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/gateway_network"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.linkedin.com/in/business-network-gateway-ab6025205?_l=en_US"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Recent Listing</h2>
          <hr>
          <ul class="widget-news-simple">
          <?php $listing =$this->front_model->GetQueryList(); 
                if($listing){ $i=0;
                foreach($listing as $list){ ?>
                   <?php $pro = $this->front_model->GetProduct($list['pid']);?>
            <li>
              <div class="news-thum"><a href="<?=base_url()?>products/<?=$pro['id']?>"><img src="<?=base_url()?>uploads/pro/<?=$pro['product_image']?>" alt="new-thum-1"></a></div>
              <?php $list['description'] = json_decode($list['description'], True); ?>
              <div class="news-text-thum">
                <h6><a href="javascript:void(0)"><?=$list['description']['requirement']?></a></h6>
               
                <p><?=$list['description']['user_name']?></p>
                <div><a href="<?=base_url()?>products/<?=$pro['id']?>">Product Name :</strong> <?=$pro['product_name']?></a></div>
              </div>
            </li>
                <?php $i++;if($i==3){break;} }}?>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Useful links</h2>
          <hr>
          <ul class="use-slt-link">
            <li><a href="<?=base_url()?>about"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;About</a></li>
            <li><a href="<?=base_url()?>product-listing"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Product Listing Policy</a></li>
            <li><a href="<?=base_url()?>privacy"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Privacy & Policy</a></li>
            <li><a href="#"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Sitemap</a></li>
            <li><a href="<?=base_url()?>terms"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Terms & Condition</a></li>
            <li><a href="<?=base_url()?>contact"><i class="fa fa-hand-o-right"></i>&nbsp;&nbsp;Contact Us</a></li>
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Get free quotes from multiple seller?</h2>
          <hr>
          <form class="form-alt"  method="post" action="<?=base_url()?>front/QuerySubmit">
            <div class="form-group">
              <input type="text" name="name" placeholder="Name :-" required class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name ="email" placeholder="Email :-" required class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name="phone" placeholder="Phone :-" required class="form-control">
            </div>
            <div class="form-group">
              <textarea name="message" rows="1" placeholder="Message :-" required class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn-quote">Enquire Now</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12">
          <p class="text-xs-center">Credit & Designed By: TechCentrica</p>
        </div>
        <div><a href="#" class="scrollup">Scroll</a></div>
      </div>
    </div>
  </div>
</footer>
<!--================================ Login and Register Forms ===========================================--> 

<!-- login form -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"> Sign In to your account</h4>
      </div>
      <div class="modal-body">
        <div class="listing-login-form">
          <form method="post" action="<?=base_url()?>Front/Authenticate">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="email" placeholder="User Email" />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="password" placeholder="Password"  />
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20">
              <input type="checkbox" id="checkbox-1-1" class="regular-checkbox" />
              <label for="checkbox-1-1"></label>
              <label class="checkbox-lable">Remember Me</label>

              <a data-dismiss="modal" data-toggle="modal" data-target="#forgot">Forgot Password ? </a>

              
             </div>
             <div class="text-center" >
                <h5>
                    <a style="color: #d07c18" data-dismiss="modal" data-toggle="modal" data-target="#register">Register Here</a> 
                </h5>
              </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="login" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- login form -->
<div class="modal fade" id="forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Reset Password</h4>
      </div>
      <div class="modal-body">
        <div class="listing-login-form">
          <form method="post" action="<?=base_url()?>Front/forgotPasswordEmail">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input type="text" name="user_email" class="form-field bgwhite" id="user-name" placeholder="Enter Your Email Id" required>
            </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="Send Mail" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- registration form -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel2">Create your account</h4>
      </div>
      <div class="modal-body">
        <div class="listing-register-form">
          <form action="<?=base_url()?>Front/Registeration" method="Post">
            <div class="listing-form-field"> <i class="fa fa-user blue-1"></i>
              <input class="form-field bgwhite" type="text" name="user_name" placeholder="Name"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-envelope blue-1"></i>
              <input class="form-field bgwhite" type="email" name="user_email" placeholder="Email" />
            </div>
             <div class="listing-form-field"> <i class="fa fa-phone blue-1"></i>
              <input class="form-field bgwhite" type="phone" name="user_phone" placeholder="Phone" />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_password" placeholder="Password"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_cpassword" placeholder="Confirm Password" />
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20 login_form_text_center">
              <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" />
              <label for="checkbox-1-2"></label>
              <label class="checkbox-lable">I agree with</label> &nbsp; <a href="<?=base_url()?>terms">Terms & Conditions</a> </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="create account" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
  .box-modal{
    font-family: "Poppins", sans-serif;
    background: -webkit-linear-gradient(left, #262626 50%, #d07c18 50%) repeat scroll right bottom/207% 100% transparent;
    background: linear-gradient(to right, #262626 50%, #d07c18 50%) repeat scroll right bottom/207% 100% transparent;
    color: whitesmoke;
    text-transform: uppercase;
    border-radius: 30px;
    padding: 15px 30px;
    font-weight: 500;
    -webkit-transition: background 350ms ease-in-out;
    transition: background 350ms ease-in-out;
    border: none;
    outline: 0;

}
</style>
<div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="listing-modal-1 modal-dialog expand">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
        <h4 class="modal-title text-center" id="myModalLabel2">Subscribe Our Free 6 Months Plan (Suppliers) </h4>
      </div>
      <div class="modal-body">
        <div class="col-md-3">
          <div class="card" style="margin-left: 125px;">
            <button class="btn btn-default box-modal" onclick="window.location.href='<?=base_url()?>pricings'"> <i class="fa fa-unlock-alt"></i> See Our Pricing Plan</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Scripts --> 
<script src="<?=base_url()?>resource/js/jquery-2.2.4.min.js"></script> 
<script src="<?=base_url()?>resource/js/bootstrap.min.js"></script> 
<script src="<?=base_url()?>resource/js/waypoints.js"></script> 
<script src="<?=base_url()?>resource/js/jquery_counterup.js"></script> 
<script src="<?=base_url()?>resource/js/jquery_custom.js"></script> 
<script src="<?=base_url()?>resource/js/homemap_custom.js"></script> 
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.1.0/js.cookie.js"></script>
<script type="text/javascript">
    // $(window).on('load', function() {
    //     $('#notification').modal('show');
    // });

     $(document).ready(function(){
            setTimeout(function(){
            if(!Cookies.get('modalShown')) {
                $("#notification").modal('show');
              Cookies.set('modalShown', true);
            } else {
               
            }

    },10);
 });
</script>
<?php if($this->uri->segment(1) == 'products'){?>
  <script src="<?=base_url()?>resource/js/colorbox/jquery.colorbox-min.js"></script> 
<script src="<?=base_url()?>resource/js/bootstrap-select/bootstrap-select.min.js"></script> 
<script src="<?=base_url()?>resource/js/owl.carousel/owl.carousel.js"></script> 
<script src="<?=base_url()?>resource/js/superlist.js"></script> 
<?php }?>
</body>
</html>