 
<body class="vertical-layout vertical-menu-modern  dark-layout  2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
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
                            <h2 class="content-header-title float-left mb-0">Subscription</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('vendor/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Subscription List
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
                                    <h4 class="card-title"><a href="<?=base_url()?>admin/SubscriptionAdd" class="btn btn-outline-light mr-1 mb-1 waves-effect waves-light">Subscription Add</a> </h4>
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
                                                        <th>#</th>
                                                        <th>Order Created</th>
                                                        <th>Order_id</th>
                                                        <th>Order_amount</th>
                                                        <th>Description</th>
                                                        <th>PlanName || PaymentMethod</th>
                                                        <th>Last Modified</th>
                                                        <th>Actions</th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php $i=1; foreach($datalist as $items):?>
                                                    <tr>
                                                        <td><?=$i++?></td>
                                                      <td><?=$items['date_modified']?></td>

                                                      <td><?=$items['order_id']?></td>
                                                      <td><?=$items['order_amount']?></td>
                                                      <td ><?php $order= json_decode($items['order_detail'],true)?>
                                                          <pre style="color: white"><?=$order['fname']?> <?=$order['lname']?></pre>
                                                          <pre style="color: white"><?=$order['email']?></pre>
                                                          <pre style="color: white"><?=$order['address']?>, <?=$order['address2']?> <?=$order['city']?> <?=$order['postcode']?></pre>
                                                      </td>
                                                      <td><?=$order['planname']?> || Payment<?=$order['paymentmethod']?></td>
                                                   
                                                      <td><?=$items['date_created']?></td>
                                                      <td><span class="action-delete">
                                                                <a href="<?=base_url()?>admin/cancelSubscrip/<?=$items['id']?>" onclick="return confirm('Are you sure, you want to delete it?')">
                                                                     <span class="text-danger">
                                                                    <i class="feather icon-trash"></i></span>
                                                                </a>
                                                            </span>
                                                        </td>
                                                    </tr>                                                        
                                                   <?php endforeach;?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>Order Created</th>
                                                        
                                                           <th>Order_id</th>
                                                        <th>Order_amount</th>
                                                        <th>Description</th>
                                                        <th>PlanName || PaymentMethod</th>
                                                        <th>Last Modified</th>
                                                        <th>Actions</th>
                                                        
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

