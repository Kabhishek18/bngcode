<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<?php require('inc/nav.php')?>

    <script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>
 <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Vendor</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin/vendor')?>">Vendor</a>
                                    </li>
                                    <li class="breadcrumb-item active">Add
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
                <!-- card actions section start -->
                <section id="card-actions">
          
                    <!-- Collapsible and Refresh Action starts -->
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vendor Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('admin/Vendorinsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="id" value="<?=$datalist['id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>User Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="user_name" class="form-control" placeholder="User Name" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['user_name'])?$datalist['user_name']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>User Email <span class="text-danger">*</span></label>
                                                            <input type="text" name="user_email" class="form-control" placeholder="User Email" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['user_email'])?$datalist['user_email']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                  <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>User Password <span class="text-danger">*</span></label>
                                                            <input type="text" name="user_password" class="form-control" placeholder="User Password" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                   <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>User Phone <span class="text-danger">*</span></label>
                                                            <input type="text" name="user_phone" class="form-control" placeholder="User Phone" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['user_phone'])?$datalist['user_phone']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Company Logo</label>
                                                            <input type="file" class="form-control" name="user_image" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        
                                                             <img src="<?=base_url()?>uploads/profile/<?=($datalist['user_image'])?>" width="50%">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                         
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive <span class="text-danger"><?=(!empty($datalist['user_status'])?$datalist['user_status']:'')?></span>  </label>
                                                            <select class="form-control" name="user_status">
                                                                <option value="active">Active</option>
                                                                <option value="inactive">Inactive</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                   <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> User Verified <span class="text-danger"><?=(!empty($datalist['user_verified'])?$datalist['user_verified']:'')?></span>  </label>
                                                            <select class="form-control" name="user_verified">
                                                                <option value="verified">Verified</option>
                                                                <option value="unverified">Unverified</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary" >Submit</button>
                                           
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