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
                            <h2 class="content-header-title float-left mb-0">Subscription</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin/Subscription')?>">Subscription</a>
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
                                    <h4 class="card-title">Subscription Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('admin/Subinsert','class="form-horizontal"') ?> 
                                           
                                     <div class="row">               
                                        <div class="col-md-6 form-group">
                                            <label for="firstname">First Name  <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="firstname" name="fname" placeholder="First Name" required="">
                                        
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="lastname">Last Name  <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" id="lastname" name="lname" placeholder="Last Name" required="">

                                        </div>
                                        

                                        <div class="col-md-12 form-group">
                                                <label for="email">Billing Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required="">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="adress">Address</label>
                                            <input type="text" class="form-control" id="adress" name="address" placeholder="1234 Main Street" required="">
                                            
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="address2">Address 2
                                                <span class="text-muted">(Optional)</span>
                                            </label>
                                            <input type="text" class="form-control" id="adress2" name="address2" placeholder="Flat No" >
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control" id="country" name="country" placeholder="Country">
                                            </div>
                                        

                                        <div class="col-md-4 form-group">
                                            <label for="city">City</label>
                                            <input type="text" class="form-control" id="city" name="city" placeholder="City">
                                            </div>
                                        
                                            
                                        <div class="col-md-4 form-group">
                                            <label for="postcode">Postcode</label>
                                            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode">
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col-md-6 form-group">
                                            <label>OrderId <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control"  name="order_id" required="">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Subscription Type <span class="text-danger">*</span></label>
                                           <select class="form-control" name="order_amount" required="">
                                               <option value="50">BASIC $50</option>
                                               <option value="99">SUPER $99</option>
                                               <option value="499">PREMIUM $499</option>
                                               <option value="1199">ELITE $1199</option>
                                           </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label>Supplier <span class="text-danger">*</span></label>
                                            <?php $vendors =$this->admin_model->GetVendor();?>
                                           <select class="form-control select2" name="uid" required="">
                                               <option></option>
                                               
                                               <!-- Loops Creation -->
                                               <?php foreach($vendors as $vendor){?>
                                               <option value="<?=$vendor['id']?>"><?=$vendor['user_email']?></option>
                                                <?php }?>
                                           </select>
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