<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <?php if($this->session->flashdata('success')){ ?>
            <script type="text/javascript">
                swal("", "<?=($this->session->flashdata('success'))?>", "success");
            </script>
        <?php }?>
          
        <?php if($this->session->flashdata('danger')){ ?>
             <script type="text/javascript">
                swal("", "<?=($this->session->flashdata('danger'))?>", "danger");
            </script>
        <?php }?>
           
        <?php if($this->session->flashdata('warning')){ ?>
             <script type="text/javascript">
                swal("", "<?=($this->session->flashdata('warning'))?>", "warning");
            </script>
        <?php }?>
           
        <?php if($this->session->flashdata('info')){ ?>
            <script type="text/javascript">
                swal("", "<?=($this->session->flashdata('info'))?>", "info");
            </script>
        <?php }?>
          
        <?php if($this->session->flashdata('any')){ ?>
         <script type="text/javascript">
                swal("", "<?=($this->session->flashdata('any'))?>", "any");
            </script>
        <?php }?>
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-11 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center px-1 py-0">
                                    <div class="card rounded-0 mb-0 px-2" style="padding:15px;">
                                    <img src="<?=base_url()?>resource/images/logo.png" alt="branding logo">
                                       <div class="form-group d-flex justify-content-between align-items-center" style="margin-top:15px;padding-left: 40px;display:grid;width: 100%">
                                            
                                                <a style="margin:15px;" href="<?=base_url()?>" class="btn btn-outline-primary float-left btn-inline">
                                                    <i class="fa fa-home"></i> Back To Home
                                                </a>
                                            
                                        </div>
                                    </div>    
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 px-2">
                                        <div class="card-header pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Supplier Login</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Welcome back, please login to your account.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-1">
                                                <form method="post" action="<?=base_url()?>Vendor/Authenticate">
                                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                                        <input type="text" name="email" class="form-control" id="user-name" placeholder="User Email" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-user"></i>
                                                        </div>
                                                        <label for="user-name">Useremail</label>
                                                    </fieldset>

                                                    <fieldset class="form-label-group position-relative has-icon-left">
                                                        <input type="password" name="password" class="form-control" id="user-password" placeholder="Password" required>
                                                        <div class="form-control-position">
                                                            <i class="feather icon-lock"></i>
                                                        </div>
                                                        <label for="user-password">Password</label>
                                                    </fieldset>
                                                    <div class="form-group d-flex justify-content-between align-items-center">
                                                        <div class="text-left">
                                                            
                                                        </div>
                                                        <div class="text-right"><a href="<?=base_url()?>vendor/forgotPassword" class="card-link">Forgot Password?</a></div>
                                                    </div>
                                                    <a href="<?=base_url()?>vendor/Register" class="btn btn-outline-primary float-left btn-inline">Register</a>
                                                    <button type="submit" class="btn btn-primary float-right btn-inline">Login</button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="login-footer">
                                         <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->