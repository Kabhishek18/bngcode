<body>

<div id="vfx_loader_block">
  <div class="vfx-loader-item"> <img src="<?=base_url()?>resource/images/loading.gif" alt="" /> </div>
</div>

<div id="logo-header" data-spy="affix" data-offset-top="500">
  <div class="container">
    <div class="row">
      <div class="col-sm-3 col-xs-9">
        <div id="logo"> <a href="<?=base_url()?>"><img src="<?=base_url()?>resource/images/logo.png" alt="logo" style="    width: 150px;"></a> </div>
      </div>
      <div class="col-sm-9 text-right">
        <nav class="navbar navbar-default" style="text-transform: uppercase;">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#thrift-1" aria-expanded="false"> <span class="sr-only">Toggle Navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          </div>
          <div class="collapse navbar-collapse" id="thrift-1"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
            <div id="nav_menu_list">
              <ul>
                <li ><a href="<?=base_url()?>">HOME</a></li>
                <li><a href="#">LOGISTICS LEAD  <i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown">
                    <li><a href="<?=base_url()?>logistics">  <i class="fa fa-angle-double-right"></i>POST LEAD</a></li>
                    <li><a href="<?=base_url()?>viewlead">  <i class="fa fa-angle-double-right"></i>VIEW LEAD</a></li>
                  </ul>
                </li>
                
                <li><a href="<?=base_url()?>categories">CATEGORIES</a></li>
                <li><a href="<?=base_url()?>pricings">PRICING</a></li>
                 <?php if(!$this->session->user_account){?> 
                <li><a href="javascript:void(0)">BUYERS <i class="fa fa-caret-down"></i></a>
                  <ul class="dropdown">
                    <li><a data-toggle="modal" data-target="#login"><i class="fa fa-angle-double-right"></i>LOGIN </a></li>
                    <li><a  data-toggle="modal" data-target="#register"><i class="fa fa-angle-double-right"></i>REGISTER </a></li>
                  </ul>
                </li>
                <?php } if(!$this->session->vendor_account){ ?>  
                <li><a href="#">SUPPLIERS <i class="fa fa-caret-down"></i></a>
                 <ul class="dropdown">
                    <li><a href="<?=base_url()?>vendor"><i class="fa fa-angle-double-right"></i>LOGIN </a></li>
                     <li><a  href="<?=base_url()?>vendor/register"><i class="fa fa-angle-double-right"></i>REGISTER </a></li>
                  </ul>   
                </li>
                    <?php }if($this->session->user_account){ 
                      $value = $this->session->user_account;
                      ?>
                      <li>
                        <a class="btn btn-warning" style="background:#ffce10;border:none;padding: 10px" href='<?=base_url()?>dashboard'>Hi, <?=$value['user_name']?></a>
                      </li>
                      <li>
                        <a class="btn btn-warning" style="background:#ffce10;border:none;padding: 10px" href='<?=base_url()?>logout'>LOGOUT</a>
                      </li>
                    <?php  }elseif($this->session->vendor_account){ 
                      $vvalue = $this->session->vendor_account;?>
                      <li >
                        <a class="btn btn-warning" style="background:#ffce10;border:none;padding: 10px" href='<?=base_url()?>vendor/dashboard'>Hi, <?=$vvalue['user_name']?></a>
                      </li>
                      <li>
                        <a class="btn btn-warning" style="background:#ffce10;border:none;padding: 10px" href='<?=base_url()?>vendor/logout'>LOGOUT</a>
                      </li>
                    <?php } ?>
                    
              </ul>
              <ul>
                  
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div>

<?php include('status.php')?>