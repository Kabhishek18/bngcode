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
            <li>
              <div class="news-thum"><a href="#"><img src="<?=base_url()?>resource/images/new-thum-1.png" alt="new-thum-1"></a></div>
              <div class="news-text-thum">
                <h6><a href="listing_detail.html">Hello Directory Listing</a></h6>
                <p>Phasellus ut condimentum diam, eget tempus lorem...</p>
                <div>Price: $117</div>
              </div>
            </li>
            <li>
              <div class="news-thum"><a href="#"><img src="<?=base_url()?>resource/images/new-thum-1.png" alt="new-thum-1"></a></div>
              <div class="news-text-thum">
                <h6><a href="listing_detail.html">Hello Directory Listing</a></h6>
                <p>Phasellus ut condimentum diam, eget tempus lorem...</p>
                <div>Price: $117</div>
              </div>
            </li>
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
          </ul>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <h2>Have you any Query?</h2>
          <hr>
          <form class="form-alt">
            <div class="form-group">
              <input type="text" placeholder="Name :-" required class="form-control">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Email :-" required class="form-control">
            </div>
            <div class="form-group">
              <textarea placeholder="Message :-" required class="form-control"></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn-quote">Send Now</button>
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
          <p class="text-xs-center">Copyright © 2020 All Rights Reserved.</p>
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
        <h4 class="modal-title" id="myModalLabel"> Login</h4>
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
              <a href="#">Forgot Password?</a> </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="login" />
            </div>
          </form>
          <div class="bottom-links">
            <p>Not a Member?<a href="#">Create Account</a></p>
          </div>
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
        <h4 class="modal-title" id="myModalLabel2">Registration</h4>
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
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_password" placeholder="Password"  />
            </div>
            <div class="listing-form-field"> <i class="fa fa-lock blue-1"></i>
              <input class="form-field bgwhite" type="password" name="user_cpassword" placeholder="Confirm Password" />
            </div>
            <div class="listing-form-field clearfix margin-top-20 margin-bottom-20 login_form_text_center">
              <input type="checkbox" id="checkbox-1-2" class="regular-checkbox" />
              <label for="checkbox-1-2"></label>
              <label class="checkbox-lable">i agree with</label> &nbsp; <a href="#">Terms & Conditions</a> </div>
            <div class="listing-form-field">
              <input class="submit" type="submit" value="create account" />
            </div>
          </form>
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

<?php if($this->uri->segment(1) == 'products'){?>
  <script src="<?=base_url()?>resource/js/colorbox/jquery.colorbox-min.js"></script> 
<script src="<?=base_url()?>resource/js/bootstrap-select/bootstrap-select.min.js"></script> 
<script src="<?=base_url()?>resource/js/owl.carousel/owl.carousel.js"></script> 
<script src="<?=base_url()?>resource/js/superlist.js"></script> 
<?php }?>
</body>
</html>