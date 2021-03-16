<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Reset Password</h1>
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
          <form method="post" action="<?=base_url()?>Front/ResetprofilePassword">
                <fieldset class="form-label-group form-group position-relative has-icon-left">
                    <input type="hidden" name="user_name" value="<?=$user_name?>">
                    <input type="hidden" name="user_token" value="<?=$user_token?>">
                    <input type="text" name="user_password" class="form-control" id="user-name" placeholder="User password" required>
                    <div class="form-control-position">
                        <i class="feather icon-user"></i>
                    </div>
                </fieldset>
                 <fieldset class="form-label-group form-group position-relative has-icon-left">
                    <input type="text" name="user_cpassword" class="form-control" id="user-name" placeholder="User Confirm password" required>
                    <div class="form-control-position">
                        <i class="feather icon-user"></i>
                    </div>
                </fieldset>


                <div class="form-group d-flex justify-content-between align-items-center">
                    <div class="text-left">
                        
                    </div>
                </div>
                <a href="<?=base_url()?>" class="btn btn-outline-primary float-left btn-inline"><i class="fa fa-home"></i> Back To Home</a>
                <button type="submit" class="btn btn-primary float-right btn-inline">Update</button>
            </form>
           </div> 
      
        </div>
    </div>
</div>
                                    
                                   
           