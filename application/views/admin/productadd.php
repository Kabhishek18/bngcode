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
                            <h2 class="content-header-title float-left mb-0">Product</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin/product')?>">Product</a>
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
                                    <h4 class="card-title">Product Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('admin/Productinsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="id" value="<?=$datalist['id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Product Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="product_name" class="form-control" placeholder="Product Name" required data-validation-required-message="This Course Name field is required" value="<?=(!empty($datalist['product_name'])?$datalist['product_name']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Product Slug <span class="text-danger">*</span></label>
                                                            <input type="text" name="product_slug" class="form-control" placeholder="Product Slug" required data-validation-required-message="This Course Name field is required" value="<?=(!empty($datalist['product_slug'])?$datalist['product_slug']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                               
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Image</label>
                                                            <input type="file" class="form-control" name="proimg" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        
                                                            <img src="<?=base_url()?>uploads/pro/<?=$datalist['product_image']?>" width="50%">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Category <?php
                                                        if($datalist['category_id'] =='0'){
                                                            echo '<span class="text-danger">Main</span>';
                                                        }

                                                        elseif(empty($datalist['category_id'])){

                                                        }else{
                                                            $cat_name = $this->admin_model->GetCategory($datalist['category_id']);
                                                            echo '<span class="text-danger">'.$cat_name['category_name'].'</span>';
                                                        } 
                                                        ?></label>
                                                            <select class="form-control" name="category_id">

                                                                <?php
                                                        if($datalist['category_id'] =='0'){
                                                            echo "<optgroup>Selected</optgroup>";
                                                            echo '<option value="0">Main</option>';
                                                            echo "<optgroup>Non Selected</optgroup>";
                                                        }
                                                        elseif(empty($datalist['category_id'])){

                                                        }
                                                        else{
                                                            $cat_name = $this->admin_model->GetCategory($datalist['category_id']);
                                                            echo "<optgroup>Selected</optgroup>";
                                                            echo '<option value="'.$cat_name['id'].'">'.$cat_name['category_name'].'</option>';
                                                            echo "<optgroup>Non Selected</optgroup>";
                                                            
                                                        } 
                                                        ?>
                                                                <?php $cat =$this->admin_model->GetSubCategory();
                                                                    foreach($cat as $cate) {?>
                                                                    <option value="<?=$cate['id']?>"><?=$cate['category_name']?></option>    
                                                                <?php }?>        
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Meta<span class="text-danger">*</span></label>
                                                   <textarea name="product_meta" class="form-control" placeholder=" Meta" contenteditable="true"><?=(!empty($datalist['product_meta'])?$datalist['product_meta']:'')?></textarea>
                                                    </div>
                                                </div>

                                            
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Description <span class="text-danger">*</span></label>
                                                   <textarea name="product_description" contenteditable="true">
                                                    <?=(!empty($datalist['product_description'])?$datalist['product_description']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('product_description');
                                                       
                                                   </script>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Product Information <span class="text-danger">*</span></label>
                                                   <textarea name="product_information" contenteditable="true">
                                                    <?=(!empty($datalist['product_information'])?$datalist['product_information']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('product_information');
                                                       
                                                   </script>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Vendor Status <span class="text-danger"><?=(!empty($datalist['product_status'])?$datalist['product_status']:'')?></span> </label>
                                                            <select class="form-control" name="product_status">
                                                                <option value="active">Active</option>
                                                                <option value="inactive">Inactive</option>
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label> Status Active/Inactive <span class="text-danger"><?=(!empty($datalist['status'])?$datalist['status']:'')?></span>  </label>
                                                            <select class="form-control" name="status">
                                                                <option value="Active">Active</option>
                                                                <option value="Inactive">Inactive</option>
                                                               
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