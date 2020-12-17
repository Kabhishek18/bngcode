<?php if($this->session->flashdata('success')){ ?>
	<div class="alert alert-success alert-block">
	    <button type="button" class="close" data-dismiss="alert">×</button>    
	    <strong><?php echo $this->session->flashdata('success'); ?></strong>
	</div>
<?php }?>
  
<?php if($this->session->flashdata('danger')){ ?>
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong><?php echo $this->session->flashdata('danger'); ?></strong>
</div>
<?php }?>
   
<?php if($this->session->flashdata('warning')){ ?>
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong><?php echo $this->session->flashdata('warning'); ?></strong>
</div>
<?php }?>
   
<?php if($this->session->flashdata('info')){ ?>
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong><?php echo $this->session->flashdata('info'); ?></strong>
</div>
<?php }?>
  
<?php if($this->session->flashdata('any')){ ?>
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    Please check the form below for errors
</div>
<?php }?>
  