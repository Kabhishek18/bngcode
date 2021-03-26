<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Profile</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('vendor/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Profile Update
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                  
                </div>
            </div>
            <div class="content-body">
                      <section id="card-actions">
          
                    <!-- Collapsible and Refresh Action starts -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Profile Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <?php echo form_open_multipart('vendor/profileUpdate','class="form-horizontal"') ?> 
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Company Logo</label>
                                                            <input type="file" class="form-control" name="catimg" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if($user_image){?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        
                                                            <img src="<?=base_url()?>uploads/profile/<?=($user_image)?>" width="50%">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php }?>
                                                   <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="user_name" class="form-control" placeholder="Name" required data-validation-required-message="This Name field is required" value="<?=(!empty($user_name)?$user_name:'')?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                    <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Email <span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" placeholder="Name" required data-validation-required-message="This Name field is required" value="<?=$user_email?>" disabled="" readonly="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Phone <span class="text-danger">*</span></label>
                                                            <input type="number" name="user_phone" class="form-control" placeholder="Phone" required data-validation-required-message="This Name field is required" value="<?=(!empty($user_phone)?$user_phone:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <?=$user_address?>
                                                            <label>Address <span class="text-danger">*</span></label>
                                                            <input type="number" name="user_address" class="form-control" placeholder="Address" required data-validation-required-message="This Name field is required" value="<?=(!empty($user_address)?$user_address:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php $datalist =json_decode($user_description,true) ?>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Company Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="company_name" class="form-control" placeholder="Company Name" required data-validation-required-message="This Name field is required" value="<?=(!empty($datalist['company_name'])?$datalist['company_name']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Your Business Type <span class="text-danger">*</span></label>
                                                            <select class="form-control" name="business_type" required="">  
                                                                <?php if($datalist['business_type']){?>
                                                                    <option value="<?=($datalist['business_type'])?>"><?=($datalist['business_type'])?></option>
                                                                <?php }?>    
                                                                <option >Choose an option</option>
                                                                <option value="Buying Agent">Buying Agent</option>
                                                                <option value="Dealer / Reseller">Dealer / Reseller</option>
                                                                <option value="Distributor">Distributor</option>
                                                                <option value="Manufacturer/ OEM">Manufacturer/ OEM</option>
                                                                <option value="Not Known">Not Known</option>
                                                                <option value="Retailer">Retailer</option>
                                                                <option value="Service Provider">Service Provider</option>
                                                                <option value="others">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Business Establishment Year</label>
                                                            <input type="number" name="estab_year" class="form-control" placeholder="Year" value="<?=(!empty($datalist['estab_year'])?$datalist['estab_year']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                  <div class="col-sm-4">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Annual Sale</label>
                                                            <input type="number" name="annual_sale" class="form-control" placeholder="Annual Sale"   value="<?=(!empty($datalist['annual_sale'])?$datalist['annual_sale']:'')?>">
                                                        </div>
                                                    </div>
                                                    </div>
                                               
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <div class="controls">
                                                                <label>Certfications Your Company Received</label>
                                                                 <input type="text" name="iso_cert" class="form-control" placeholder="e.g. ISO9000 etc"  value="<?=(!empty($datalist['iso_cert'])?$datalist['iso_cert']:'')?>">
                                                            </div>
                                                        </div>

                                                    </div>

                                            


                                   
                                            </div>
                                            <button type="submit" class="btn btn-primary" >Update</button>
                                           
                                        <?php echo form_close() ?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Profile Password Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <?php echo form_open_multipart('vendor/profilePassword','class="form-horizontal"') ?> 
                                            <div class="row">
                                              
                                                  

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Password <span class="text-danger">*</span></label>
                                                            <input type="password" name="user_password" class="form-control" placeholder="Password" required data-validation-required-message="This Name field is required" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Confirm Password <span class="text-danger">*</span></label>
                                                            <input type="password" name="user_cpassword" class="form-control" placeholder="Password" required data-validation-required-message="This Name field is required" value="">
                                                        </div>
                                                    </div>
                                                </div>

                                              

                                            


                                   
                                            </div>
                                            <button type="submit" class="btn btn-primary" >Update</button>
                                           
                                        <?php echo form_close() ?>  
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

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>