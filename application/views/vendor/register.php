<body class="vertical-layout vertical-menu-modern 1-column  navbar-floating footer-static bg-full-screen-image  blank-page blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
   
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-xl-8 col-10 d-flex justify-content-center">
                        <div class="card bg-authentication rounded-0 mb-0">
                            <div class="row m-0">
                                <div class="col-lg-6 d-lg-block d-none text-center align-self-center pl-0 pr-3 py-0">
                                    <img src="<?=base_url()?>resource/images/logo.png" alt="branding logo" style="padding: 60px;"> 
                                </div>
                                <div class="col-lg-6 col-12 p-0">
                                    <div class="card rounded-0 mb-0 p-2">
                                        <div class="card-header pt-50 pb-1">
                                            <div class="card-title">
                                                <h4 class="mb-0">Supplier Create Account</h4>
                                            </div>
                                        </div>
                                        <p class="px-2">Fill the below form to create a new account.</p>
                                        <div class="card-content">
                                            <div class="card-body pt-0">
                                                <form action="<?=base_url()?>vendor/Registeration" method="post" onsubmit="this.form.submit()">
                                                    <div class="form-label-group">
                                                        <input type="text" name="user_name" id="inputName" class="form-control" placeholder="Name" required>
                                                       
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="email" name="user_email" id="inputEmail" class="form-control" placeholder="Email" required>
                                                        <label for="inputEmail">Email</label>
                                                    </div>
                                                    <div class="form-label-group">
                                                         <label for="inputPhone">Phone</label>
                                                        <input type="phone" name="user_phone" id="inputPhone" class="form-control" placeholder="Mobile" required>
                                                       
                                                    </div>
                                                    <div class="form-label-group">
                                                        <input type="password" name="user_password" id="inputPassword" class="form-control" placeholder="Password" required>
                                                      
                                                    </div>
                                                 
                                                    <div class="form-label-group">
                                                        <input type="password" name="user_cpassword" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required>
                                                        <label for="inputConfPassword">Confirm Password</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <fieldset class="checkbox">
                                                                <div class="vs-checkbox-con vs-checkbox-primary">
                                                                    <input type="checkbox" checked required="">
                                                                    <span class="vs-checkbox">
                                                                        <span class="vs-checkbox--check">
                                                                            <i class="vs-icon feather icon-check"></i>
                                                                        </span>
                                                                    </span>
                                                                    <span class=""> I accept the terms & conditions.</span>
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                    <a href="<?=base_url()?>vendor" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                                    <input type="submit" class="btn btn-primary float-right btn-inline mb-50" value="Register">
                                                </form>
                                            </div>
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
