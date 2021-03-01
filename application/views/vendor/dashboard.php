<body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">


    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="text-center">
                    <h1>Welcome <?=($user_name)?></h1>
                    <?php $order = $this->vendor_model->GetOrder($id);?>
                <?php if(empty($order)){

                    ?>
                    <script type="text/javascript">
                        swal("", "Please buy subscription to have full access to panel", "info");
                    </script>
                 <?php }?>   
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>