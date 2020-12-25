<body>

<div id="vfx_loader_block">
  <div class="vfx-loader-item"> <img src="<?=base_url()?>resource/images/loading.gif" alt="" /> </div>
</div>

<div id="logo-header" data-spy="affix" data-offset-top="500">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-9">
        <div id="logo"> <a href="<?=base_url()?>"><img src="<?=base_url()?>resource/images/logo.png" alt="logo"></a> </div>
      </div>
      <div class="col-sm-9 text-right">
        <nav class="navbar navbar-default">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#thrift-1" aria-expanded="false"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="thrift-1"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
            <div id="nav_menu_list">
              <ul>
                <li class="active"><a href="<?=base_url()?>">Home</a></li>
                <li><a href="#">Exporter</a></li>
                <li><a href="<?=base_url()?>logistics">Logistics Lead</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="<?=base_url()?>categories">Categories</a></li>
                
                <li class="btn_item">
				    <ul>
             <?php if(!$this->session->user_account){?> 
						<li>
						  <button class="btn_login" data-toggle="modal" data-target="#login">Login</button>
						</li>
						<li>
						  <button class="btn_register" data-toggle="modal" data-target="#register">Register</button>
						</li>
              <?php }else{ $value = $this->session->user_account;?>
                <li>
              <button class="btn_login" onclick="window.location.href='<?=base_url()?>dashboard'">Dashboard</button>
            </li>
            <li>
              <button class="btn_register"  onclick="window.location.href='<?=base_url()?>logout'">Logout</button>
            </li>
              <?php  } ?>
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