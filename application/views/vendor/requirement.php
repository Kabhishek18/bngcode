 
<body class="vertical-layout vertical-menu-modern  2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
<?php require('inc/nav.php')?>

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Requirement</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('vendor/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Requirement List
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
            
                <!-- Column selectors with Export Options and print table -->
                <section id="column-selectors">
               
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                 
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">
                                           <!--  The print button will open a new window in the end user's browser and, by default, automatically trigger the print function allowing the end user to print the table. The window will be closed once the print is complete, or has been cancelled. -->
                                        </p>
                                        <div class="table-responsive">

                                            <table class="table dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Parent</th>
                                                        <th>Description</th>
                                                        <th>Last Modified</th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php foreach($datalist as $items):?>
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
                                                      
                                                        <td><?=date('F,d Y:h:i:s',strtotime($items['date_modified']))?></td>
                                                    </tr>                                                        
                                                   <?php endforeach;?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Product Id</th>
                                                        <th>Parent</th>
                                                        <th>Description</th>
                                                        <th>Last Modified</th>
                                                        
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Column selectors with Export Options and print table -->

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

