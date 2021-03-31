 
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
                            <h2 class="content-header-title float-left mb-0">Testimonial</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('vendor/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Testimonial List
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
                                                        <th>Author</th>
                                                        <th>Email</th>
                                                        <th>Description</th>
                                                        <th>Last Modified</th>
                                                        <th>Status</th>
                                                        <th>Actions</th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                  <?php $i=1;foreach($datalist as $item){?>
                                                    <tr>
                                                        <td><?=$i++?></td>
                                                        <td><?=$item['author']?></td>
                                                        <td><?=$item['author_email']?></td>
                                                        <td><?=$item['description']?></td>
                                                        <td><?=date('F,d y h:i:s',strtotime($item['date_modified']))?></td>
                                                        <td><a onclick="return confirm('Are You Sure, you want to <?=($item['status']=='Active'?'Inactive':'Active')?> ')" href="<?=base_url()?>admin/ChangeTestimonial/<?=$item['id']?>/<?=$item['status']?>"><span class="<?=($item['status']=='Active'?'text-info':'text-danger')?>" ><i class="fa fa-recycle"></i><?=$item['status']?></span></a></td>
                                                        <td><a onclick="return confirm('Are you sure, you want to delete it?')" href="<?=base_url()?>admin/TestimonialDelete/<?=$item['id']?>"><span class="text-danger"><i class="fa fa-trash"></i></span></a></td>
                                                    </tr>
                                                  <?php }?>
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Author</th>
                                                        <th>Email</th>
                                                        <th>Description</th>
                                                        <th>Last Modified</th>
                                                        <th>Status</th>
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

