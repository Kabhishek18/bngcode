<body>

<div id="vfx_loader_block">
  <div class="vfx-loader-item"> <img src="<?=base_url()?>resource/images/loading.gif" alt="" /> </div>
</div>

<div id="logo-header" data-spy="affix" data-offset-top="500">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-9">
        <div id="logo"> <a href="index"><img src="<?=base_url()?>resource/images/logo.png" alt="logo"></a> </div>
      </div>
      <div class="col-sm-9 text-right">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#thrift-1" aria-expanded="false"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="thrift-1"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
            <div id="nav_menu_list">
              <ul>
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Exporter</a></li>
                <li><a href="#">Logistics Lead</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="categories">Categories</a></li>
                <li><a href="#">Listing <i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown">
                    <li><a href="dashboard"><i class="fa fa-angle-double-right"></i> Dashboard</a></li>
                    <li><a href="listing_grid"><i class="fa fa-angle-double-right"></i> Listing Grid</a></li>
                    <li><a href="listing_list"><i class="fa fa-angle-double-right"></i> Listing List</a></li>
                    <li><a href="listing_left_sidebar"><i class="fa fa-angle-double-right"></i> Listing Left Sidebar</a></li>
                    <li><a href="listing_right_sidebar"><i class="fa fa-angle-double-right"></i> Listing Right Sidebar</a></li>
                    <li><a href="listing_detail"><i class="fa fa-angle-double-right"></i> Listing Single Post</a></li>
                    <li><a href="listing_fullwidth"><i class="fa fa-angle-double-right"></i> Listing Full Width</a></li>
                    <li><a href="page_error_404"><i class="fa fa-angle-double-right"></i> Page not Found</a></li>
                  </ul>
                </li>
                <li class="btn_item">
				    <ul>
						<li>
						  <button class="btn_login" data-toggle="modal" data-target="#login">Login</button>
						</li>
						<li>
						  <button class="btn_register" data-toggle="modal" data-target="#register">Register</button>
						</li>
				    </ul>	
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>

<?php include('status.php')?>