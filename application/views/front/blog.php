<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Blogs</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="javascript:void(0)"><span>Blog Listings</span></a> </div>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
    .blog-box{
      margin-bottom: 25px;
      box-shadow: 2px 3px 2px #f1f1f1;
    }
    .inbox-blog{
      background-color: #f1f1f1;
      border: 1px solid #000;
      
      padding: px;
    }
    .blog-padd{
      padding: 10px;
    }
    .blog-box:hover{
      transform:scale(1.05);
    }
</style>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row"  style="padding-bottom: 100px"> 
    <?php $blogs = $this->front_model->GetBlog(); ?> 
    <div class="col-md-12">
    <?php if(!empty($blogs)){?>
    <?php $i=1;foreach($blogs as $items){?>
      <a href="<?=base_url()?>blogs/<?=$items['id']?>">
        <div class="col-md-4" style="color:#000"> 
          <div class="blog-box">
             <div class="inbox-blog">
               <div class="img-responsive">
                 <img src="<?=base_url()?>uploads/blog/<?=$items['blog_image']?>">
               </div>
               <div class="text-info text-center">
                 <h1 style="color:#444546"><?=$items['title']?></h1>
               </div>
               <div class="blog-padd text-description">
                 <p style="color:#444546"><?=$items['subtitle']?></p>

               <div>
                 <p style="color:#444546"  class="text-left"><strong>Author:</strong> <?=$items['author']?></p>
                
                 <span class="text-right"><a href="<?=base_url()?>blogs/<?=$items['id']?>">Read More >></a></span>
               </div>
               </div>
             </div>
          </div>
      </div>
      </a>
    <?php if($i==10){break;}  }}?>

  </div>
  </div>
</div>
</div>