<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Quote List</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="javascript:void(0)"><span>Listing</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="head-title text-center" style="background: #337ab7;color:white;padding: 10px;margin-bottom:10px">
           <h2>New Freight Quote Requests</h2>
        </div>
      </div>  
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <?php if($this->session->vendor_account){ ?>
          <?php if($leads){ ?>
          <?php foreach($leads as $lead){?>
            <?php $value = json_decode($lead['lead']);?>
            <div class="col-md-12 col-sm-12 col-xs-12" style="padding:10px">
              <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"> 
                 <h4>>> <?=$value->freightleadtitle?></h4>
               </a>
               <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="feature-item-container-box listing-item">
                      <div class="feature-title-item">
                      <div class="feature-box-text">
                  

                         <table class="table table-striped">
                           
                            <tr>
                              <td><strong>Lead Title</strong></td>
                               <td><?=$value->freightleadtitle?></td>
                            </tr>
                            <tr>
                              <td><strong>Company Name </strong></td>
                               <td><?=$value->companyname?></td>
                            </tr>
                            <tr>
                              <td><strong>Customer Name</strong></td>
                              <td><?=$value->contactperson?></td>
                            </tr>
                            <tr>
                              <td><strong>Customer Email</strong></td>
                              <td><?=$value->emailid?></td>
                            </tr>
                            <tr>
                              <td><strong>Customer Phone</strong></td>
                              <td><?=$value->mobileno?></td>
                            </tr>
                            <tr>
                              <td><strong>Date </strong></td>
                               <td><?=$value->dateoflead?> - <?=$value->lastdate?></td>
                            </tr>
                            <tr>
                              <td><strong>City </strong></td>
                               <td><?=$value->city?></td>
                            </tr>
                            <tr>
                              <td><strong>Country</strong></td>
                               <td><?=$value->country?></td>
                            </tr>
                            <tr>
                              <td><strong>Loading Port</strong></td>
                               <td><?=$value->loadingport?></td>
                            </tr>
                            <tr>
                              <td><strong>Destination Port</strong></td>
                               <td><?=$value->destinationport?></td>
                            </tr>
                              <tr>
                                <td><strong>Number of Package</strong></td>
                                <td><?=$value->noofpackage?></td>
                              </tr>
                            <tr>
                              <td><strong>Net Weight</strong></td>
                               <td><?=$value->netweight?></td>
                            </tr>
                         </table> 

                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          <?php }}?>
          
      </div>
    </div>
  </div>
</div>