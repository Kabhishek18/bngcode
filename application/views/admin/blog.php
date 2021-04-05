 
<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
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
                            <h2 class="content-header-title float-left mb-0">Blog</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Blog List
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
                                    <h4 class="card-title"><a href="<?=base_url()?>admin/BlogAdd" class="btn btn-outline-light mr-1 mb-1 waves-effect waves-light">Blog Add</a> </h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">
                                        </p>
                                        <div class="table-responsive">
                                            <table class="table dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>author</th>
                                                        <th>Created</th>
                                                        <th>Last Modified</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   <?php $i=1; foreach($datalist as $items):?>
                                                    <tr>
                                                        <td><?=$i++?></td>
                                                        <td><?=$items['title']?></td>   
                                                        <td><?=$items['author']?></td>   
                                                        <td><?=date('F,d Y',strtotime($items['date_created']))?></td>   
                                                        <td><?=date('F,d Y h:i:s',strtotime($items['date_modified']))?></td>
                                                        <td>
                                                            <span class="action-edit">
                                                                <a href="<?=base_url()?>admin/blog/edit/<?=$items['id']?>">
                                                                <i class="feather icon-edit"></i>
                                                                </a>
                                                            </span>
                                                            <span class="action-delete">
                                                                <a href="<?=base_url()?>admin/BlogDelete/<?=$items['id']?>" onclick="return confirm('Are you sure, you want to delete it?')">
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
                                                        <th>#</th>
                                                        <th>Title</th>
                                                        <th>author</th>
                                                        <th>Created</th>
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

