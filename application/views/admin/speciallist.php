 
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
                            <h2 class="content-header-title float-left mb-0">List</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?php base_url('laravel-admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">List
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
                                    <!-- List Expanding -->
                                    <?php foreach($lists as $list){?>
                                    <div class="col-sm-6 col-12">
                                        <form method="post" action="<?=base_url()?>admin/specialinsert">
                                            <div class="text-bold-600 font-medium-2">
                                                    <h4><?=$list['name']?></h4>
                                                    <input type="hidden" name="id" value="<?=$list['id']?>">
                                                </div>
                                                <input type="hidden" name="id" value="<?=$list['id']?>">
                                                <p>Select Your Multiple List</p>
                                                <div class="form-group">
                                                     <?php $selected =json_decode($list['list'],true);?>   
                                                    <select class="select2 form-control" multiple="multiple" name="listed[]">
                                                        <?php foreach($selected as $selects){?>
                                                        <?php $cat = $this->admin_model->GetCategory($selects);?>
                                                        <?php if($cat){?>
                                                            <option value="<?=$cat['id']?>" selected>
                                                                <?=$cat['category_name']?>
                                                                    
                                                            </option>    
                                                        <?php }}?>    
                                                        <?php $categories =$this->admin_model->GetCategory();?>
                                                        <?php foreach($categories  as $category){ ?>
                                                        <option value="<?=($category['id'])?>"><?=($category['category_name'])?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" class="btn btn-outline-light mr-1 mb-1 waves-effect waves-lightop" name="" value="Update">
                                                </div>
                                        </form>

                                    </div>
                                <?php }?>
                                   


                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <p class="card-text">
                                           <!--  The print button will open a new window in the end user's browser and, by default, automatically trigger the print function allowing the end user to print the table. The window will be closed once the print is complete, or has been cancelled. -->
                                        </p>

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

