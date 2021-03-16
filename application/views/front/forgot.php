<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Forgot Password</h1>
        </div>
      </div>
    </div>
  </div>
</div>
                 
<div class="dashboard_inner_block">
    <div class="container">
        <div class="row" style="padding: 20px"> 
           
           <div class="col-md-12" style="padding: 20px;background: #f3f3f3c7;border-radius: 10px;
    box-shadow: 2px 2px #c1bebec7;">
            <div class="text-center" style="text-decoration: underline;padding: 10px">
                <h3>Password Recovery </h3>
           </div>
            <form method="post" action="<?=base_url()?>Front/forgotPasswordEmail">
                <div class="col-md-6 col-sm-12 col-xs-12">
                   <div class="form-group">
                    <input type="text" name="user_email" class="form-control" id="user-name" placeholder="Enter Your Email Id" required>
                   
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="form-group">
                     <a href="<?=base_url()?>" class="btn btn-outline-primary float-left btn-inline"><i class="fa fa-home"></i> Back To Login</a>
                    <button type="submit" class="btn btn-primary float-right btn-inline">Send Mail</button>
                    </div>
                </div>    
            </form>
           </div> 
      
        </div>
    </div>
</div>
                                    
                                   
           