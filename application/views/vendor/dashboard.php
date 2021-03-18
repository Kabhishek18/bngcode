<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="text-center">
                    <?php $order = $this->vendor_model->GetOrder($id);?>
                <?php if(empty($order)){

                    ?>
                    <script type="text/javascript">
                        swal("", "Please buy subscription to have full access to panel", "info");
                    </script>
                 <?php }?>   

                        <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="card bg-analytics ">
                                    <div class="card-content">
                                        <div class="card-body text-center">
                                            <img src="<?=base_url()?>resource-admin/app-assets/images/elements/decore-left.png" class="img-left" alt="card-img-left">
                                            <img src="<?=base_url()?>resource-admin/app-assets/images/elements/decore-right.png" class="img-right" alt="card-img-right">
                                            <div class="avatar avatar-xl bg-primary shadow mt-0">
                                                <div class="avatar-content">
                                                    <i class="feather icon-award font-large-1"></i>
                                                </div>
                                            </div>
                                            <div class="text-center">
                                                <h1 class="mb-2">Welcome <span style="text-transform: capitalize;"><?=($user_name)?></span>,</h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                              <div class="col-lg-3 col-md-6 col-12">
                           <?php $cvp = $this->vendor_model->CountVendorProduct($id);?>
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                   <div class="text-center text-title">
                                       <h2 class="text-bold-700 mt-20 mb-20" style="font-size: 4rem !important">  <i class="feather icon-box text-primary font-medium-5" style="font-size: 6rem !important"></i> <?=(!empty($cvp)?$cvp:'')?></h2>
                                   
                                    <p class="mb-30"> Products</p>
                                   </div> 
                                
                                </div>
                            </div>
                        </div>
                       <div class="col-lg-3 col-md-6 col-12">
                            <?php $cap = $this->vendor_model->CountAllProduct();?>
                            <div class="card">
                                <div class="card-header d-flex flex-column align-items-start pb-0">
                                   <div class="text-center text-title">
                                       <h2 class="text-bold-700 mt-20 mb-20" style="font-size: 4rem !important">  <i class="feather icon-box text-primary font-medium-5" style="font-size: 6rem !important"></i> <?=(!empty($cap)?$cap:'')?></h2>
                                        <p class="mb-30" >Total Products</p>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="mb-0">Recent Requirement</h4>
                                </div>
                                <div class="card-content">
                                    <div class="table-responsive mt-1">
                                        <table class="table table-hover-animation mb-0">
                                             <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Parent</th>
                                                        <th>Description</th>
                                                        <th>Last Modified</th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php if(!empty($datalist)){?>
                                                    <?php $intial= 0; foreach($datalist as $items):?>
                                                        <tr>
                                                            <?php $product =$this->vendor_model->GetProductId($id);?>
                                                            <td><?=$product['product_name']?></td>
                                                            <td><?php
                                                            if($product['category_id'] ==0){
                                                                echo '<span class="text-danger">Main</span>';
                                                            }else{
                                                                $cat_name = $this->vendor_model->GetCategoryId($product['category_id']);
                                                                echo $cat_name['category_name'];
                                                            } 
                                                            ?></td>
                                                            <td><?php $desc = json_decode($items['description'],true);?><pre><?=$desc['user_name']?></pre>
                                                                <pre><?=$desc['user_email']?></pre><?=$desc['requirement']?></td>
                                                          
                                                            <td><?=date('F,d Y h:i:s',strtotime($items['date_modified']))?></td>
                                                        </tr>                                                        
                                                    <?php $intial++;if($intial==4){break;} endforeach;?>
                                                <?php }?>    
                                                </tbody>
                                               
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Dashboard Analytics end -->



  
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>