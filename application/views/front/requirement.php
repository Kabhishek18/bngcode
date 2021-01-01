<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Dashboard</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="dashboard"><span>Dashboard</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <div class="col-md-12 all-categorie-list-title bt_heading_3">
          <h1>Requirement</h1>
          <div class="blind line_1"></div>
          <div class="flipInX-1 blind icon"><span class="icon"><i class="fa fa-stop"></i>&nbsp;&nbsp;<i class="fa fa-stop"></i></span></div>
          <div class="blind line_2"></div>
        </div>
        <div class="row">
         <?=include('dash_nav.php')?>
          <div class="col-md-9 col-sm-8 col-xs-12">
            <div id="dashboard_listing_blcok">
                <?php $reqs = $this->front_model->GetQueryList($id);?>
                <table class="table">
                        <thead>
                          <tr>
                            <td>#</td>
                            <td>Description</td>
                            <td>Date</td>
                            <td>Action</td>

                          </tr>
                        </thead>

                        <tbody>
                          <?php $i=1; foreach($reqs as $req){?>
                          <tr>
                            <td><?=$i++?></td>
                            <td><?php $desc= json_decode($req['description'],true); ?> 
                            <pre>Name : <?=$desc['user_name']?></pre>
                            <pre>Email : <?=$desc['user_email']?></pre>
                            <pre>Requirement : <?=$desc['requirement']?></pre>
                          </td>
                            <td><?=$req['date_created']?></td>
                            <td> 
                                  <a href="<?=base_url()?>front/RequirementDelete/<?=$req['id']?>" onclick="return confirm('Are you sure, you want to delete it?')">
                                      <span class=" text-danger fa fa-trash"></span>
                                  </a>
                                                            
                            </td>
                          </tr>
                           <?php }?> 
                        </tbody>

                        
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>