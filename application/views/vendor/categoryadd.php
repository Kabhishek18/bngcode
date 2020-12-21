<body class="vertical-layout vertical-menu-modern  2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">
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
                            <h2 class="content-header-title float-left mb-0">Category</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('vendor/category')?>">Category</a>
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
                                    <h4 class="card-title">Category Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    	<?php echo form_open_multipart('vendor/Categoryinsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="id" value="<?=$datalist['id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Category Name <span class="text-danger">*</span></label>
                                                            <input type="text" name="category_name" class="form-control" placeholder="Category Name" required data-validation-required-message="This Course Name field is required" value="<?=(!empty($datalist['category_name'])?$datalist['category_name']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Category Sub <?php
                                                        if($datalist['parent_id'] =='0'){
                                                            echo '<span class="text-danger">Main</span>';
                                                        } elseif(empty($datalist['parent_id'])){

                                                        }
                                                        else{
                                                            $cat_name = $this->vendor_model->GetCategory($datalist['parent_id']);
                                                            echo '<span class="text-danger">'.$cat_name['category_name'].'</span>';
                                                        } 
                                                        ?></label>
                                                            <select class="form-control" name="parent_id">

                                                                <?php
                                                        if($datalist['parent_id'] =='0'){
                                                            echo "<optgroup>Selected</optgroup>";
                                                            echo '<option value="0">Main</option>';
                                                            echo "<optgroup>Non Selected</optgroup>";
                                                        }
                                                        elseif(empty($datalist['parent_id'])){

                                                        }else{
                                                            $cat_name = $this->vendor_model->GetCategory($datalist['parent_id']);
                                                            echo "<optgroup>Selected</optgroup>";
                                                            echo '<option value="'.$cat_name['id'].'">'.$cat_name['category_name'].'</option>';
                                                            echo "<optgroup>Non Selected</optgroup>";

                                                        } 
                                                        ?>
                                                                <option value="0"> Main</option>
                                                                <?php $cat =$this->vendor_model->GetMainCategory();
                                                                    foreach($cat as $cate) {?>
                                                                    <option value="<?=$cate['id']?>"><?=$cate['category_name']?></option>    
                                                                <?php }?>        
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">

                                                            <label>Category Slug <span class="text-danger">*</span></label>
                                                            <input type="text" name="category_slug" class="form-control" placeholder="Category Slug" required data-validation-required-message="This Course Name field is required" value="<?=(!empty($datalist['category_slug'])?$datalist['category_slug']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                            
                                               
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Image</label>
                                                            <input type="file" class="form-control" name="catimg" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        
                                                            <img src="<?=base_url()?>uploads/cat/<?=$datalist['category_image']?>" width="50%">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Category Meta<span class="text-danger">*</span></label>
                                                   <textarea name="category_meta" class="form-control" placeholder="Category Meta" contenteditable="true"><?=(!empty($datalist['category_meta'])?$datalist['category_meta']:'')?></textarea>
                                                    </div>
                                                </div>

                                            
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Category Description <span class="text-danger">*</span></label>
                                                   <textarea name="category_description" contenteditable="true">
                                                    <?=(!empty($datalist['category_description'])?$datalist['category_description']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('category_description');
                                                       
                                                   </script>
                                                </div>


                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Vendor Status <span class="text-danger"><?=(!empty($datalist['category_status'])?$datalist['category_status']:'')?></span> </label>
                                                            <select class="form-control" name="category_status">
                                                                <option value="active">Active</option>
                                                                <option value="inactive">Inactive</option>
                                                               
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