<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php if($this->session->flashdata('success')){ ?>
    <script type="text/javascript">
        swal("", "<?=($this->session->flashdata('success'))?>", "success");
    </script>
<?php }?>
  
<?php if($this->session->flashdata('danger')){ ?>
     <script type="text/javascript">
        swal("", "<?=($this->session->flashdata('danger'))?>", "danger");
    </script>
<?php }?>
   
<?php if($this->session->flashdata('warning')){ ?>
     <script type="text/javascript">
        swal("", "<?=($this->session->flashdata('warning'))?>", "warning");
    </script>
<?php }?>
   
<?php if($this->session->flashdata('info')){ ?>
    <script type="text/javascript">
        swal("", "<?=($this->session->flashdata('info'))?>", "info");
    </script>
<?php }?>
  
<?php if($this->session->flashdata('any')){ ?>
 <script type="text/javascript">
        swal("", "<?=($this->session->flashdata('any'))?>", "any");
    </script>
<?php }?>