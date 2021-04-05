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
                            <h2 class="content-header-title float-left mb-0">Blog</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard')?>">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="<?=base_url('admin/blog')?>">Blog</a>
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
                                    <h4 class="card-title">Blog Field </h4>
                                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <?php echo form_open_multipart('admin/Bloginsert','class="form-horizontal"') ?> 
                                            <?php if($datalist){?>
                                            <input type="hidden" name="id" value="<?=$datalist['id']?>">
                                        <?php }?>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Blog Title <span class="text-danger">*</span></label>
                                                            <input type="text" name="title" class="form-control" placeholder="Blog  Title" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['title'])?$datalist['title']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Blog Subtitle </label>
                                                            <input type="text" name="subtitle" class="form-control" placeholder="Blog Subtitle" value="<?=(!empty($datalist['subtitle'])?$datalist['subtitle']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Blog Meta </label>
                                                            <textarea name="meta" name="meta" class="form-control" placeholder="Blog Meta"><?=(!empty($datalist['meta'])?$datalist['meta']:'')?></textarea>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Author </label>
                                                            <input type="text" name="author" class="form-control" placeholder="Blog Author"  value="<?=(!empty($datalist['author'])?$datalist['author']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Author Email </label>
                                                            <input type="text" name="author_email" class="form-control" placeholder="Blog Author Email" required data-validation-required-message="This field is required" value="<?=(!empty($datalist['author_email'])?$datalist['author_email']:'')?>">
                                                        </div>
                                                    </div>
                                                </div>
    
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Blog Image</label>
                                                            <input type="file" class="form-control" name="blog_image" >
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                        
                                                            <img src="<?=base_url()?>uploads/blog/<?=$datalist['blog_image']?>" width="50%">
                                                        </div>
                                                    </div>
                                                </div>
                                             
                                            
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Blog Description <span class="text-danger">*</span></label>
                                                   <textarea name="blog_description" contenteditable="true">
                                                    <?=(!empty($datalist['blog_description'])?$datalist['blog_description']:'')?>
                                                   </textarea>
                                                    </div>
                                                </div>

                                                
                                                   <script>
                                                        CKEDITOR.replace('blog_description');
                                                       
                                                   </script>
                                                </div>

                                     

                                     
                                          
                                           <div class="form-group">
                                                <div class="controls">
                                                    <button type="submit" class="btn btn-primary" >Submit</button>
                                                </div>
                                            </div>    
                                             </div>
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