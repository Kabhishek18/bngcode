<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Dashboard</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="dashboard"><span>Dashboard</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="col-md-12 all-categorie-list-title bt_heading_3">
          <h1>Dashboard</h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-4 col-xs-12">
            <div id="leftcol_item">
              <div class="user_dashboard_pic"> <img alt="user photo" src="<?=base_url()?>resource/images/user-profile.png"> <span class="user-photo-action">Click here to Reupload</span> </div>
            </div>
            <div class="dashboard_nav_item">
              <ul>
                <li class="active"><a href="dashboard"><i class="fa fa-tachometer"></i> Dashboard</a></li>
                <li><a href="listing_submit"><i class="fa fa-pencil"></i> Submit Listing</a></li>
                <li><a href="edit_profile"><i class="fa fa-user"></i> Edit Profile</a></li>
                <li><a href="my_listing"><i class="fa fa-list-ul"></i> My Listing</a></li>
                <li><a href="change_password"><i class="fa fa-key"></i> Change Password</a></li>
                <li><a href="<?=base_url()?>logout"><i class="fa fa-sign-out"></i> Logout</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-9 col-sm-8 col-xs-12">
            <div id="dashboard_listing_blcok">
              <div class="col-md-3 col-sm-6">
                <div class="statusbox">
                  <h3>Balance</h3>
                  <div class="statusbox-content">
                    <p class="ic_status_item ic_col_one"><i class="fa fa-balance-scale"></i></p>
                    <h2>$16,00</h2>
                    <span>Updated 12/01/2017</span> </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statusbox">
                  <h3>Progress</h3>
                  <div class="statusbox-content">
                    <p class="ic_status_item ic_col_two"><i class="fa fa-line-chart"></i></p>
                    <h2>$19,00</h2>
                    <span>Updated 23/01/2017</span> </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statusbox">
                  <h3>Payments</h3>
                  <div class="statusbox-content">
                    <p class="ic_status_item ic_col_three"><i class="fa fa-cc-paypal"></i></p>
                    <h2>$22,00</h2>
                    <span>Updated 02/02/2017</span> </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="statusbox">
                  <h3>Avg. Salary</h3>
                  <div class="statusbox-content">
                    <p class="ic_status_item ic_col_four"><i class="fa fa-money"></i></p>
                    <h2>$26,00</h2>
                    <span>Updated 15/02/2017</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>