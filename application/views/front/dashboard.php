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
         <?=include('dash_nav.php')?>
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