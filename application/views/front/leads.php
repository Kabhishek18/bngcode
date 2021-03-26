<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>New Freight Quote Requests</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="javascript:void(0)"><span>Listing</span></a> </div>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
  code{
    color: #b77c1a;
  }
</style>
 <?php if($this->session->vendor_account){ ?>

   <?php $data =$this->session->vendor_account;
   $order = $this->front_model->GetOrder($data['id']);?>
                <?php if(empty($order)){}else{?>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row"  style="padding-bottom: 100px"> 
     
          <?php if($leads){ ?>
          <?php foreach($leads as $lead){?>
            <?php $value = json_decode($lead['lead']);?>
            <div class="col-md-5 col-sm-12 col-xs-12" style="padding:10px;border:1px solid #fec218;margin: 10px">
              <a data-toggle="collapse" href="#collapseExample<?=($lead['id'])?>" role="button" aria-expanded="false" aria-controls="collapseExample" style="display: flex;"> 
                 
                 <span style="padding: 10px;  font-size: 45px;"><i class="fa fa-hand-o-right"></i></span><h4>Freight Title : <code><?=$value->freightleadtitle?></code> <br>Loading Port :   <code><?=$value->loadingport?></code><br>  Destination Port :  <code><?=$value->destinationport?></code> </h4>
               </a>
               <div class="collapse" id="collapseExample<?=($lead['id'])?>">
                  <div class="card card-body">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                          
                           <table class="table table-striped">
                             
                              <tr>
                                <th>Lead Title</th>
                                 <td><?=$value->freightleadtitle?></td>
                              </tr>


                              <tr>
                                <th>Date Of Lead</th>
                                 <td><?=$value->dateoflead?></td>
                              </tr>
                              <tr>
                                <th>Last Date</th>
                                 <td><?=$value->lastdate?></td>
                              </tr>
                              <tr>
                                <th>Company Name</th>
                                 <td><?=$value->companyname?></td>
                              </tr>
                              <tr>
                                <th>Address</th>
                                 <td><?=$value->address?></td>
                              </tr>
                              <tr>
                                <th>City</th>
                                 <td><?=$value->city?></td>
                              </tr>
                              <tr>
                                <th>Country</th>
                                 <td><?=$value->country?></td>
                              </tr>
                              <tr>
                                <th>Pincode</th>
                                 <td><?=$value->pincode?></td>
                              </tr>
                           
                              <tr>
                                <th>Contact Person</th>
                                 <td><?=$value->contactperson?></td>
                              </tr>
                              <tr>
                                <th>Phone No</th>
                                 <td><?=$value->phoneno?></td>
                              </tr>
                              <tr>
                                <th>Mobile No</th>
                                 <td><?=$value->mobileno?></td>
                              </tr>
                              <tr>
                                <th>Email Id</th>
                                 <td><?=$value->emailid?></td>
                              </tr>
                              <tr>
                                <th>Loading Port</th>
                                 <td><?=$value->loadingport?></td>
                              </tr>
                              <tr>
                                <th>Destination Port</th>
                                 <td><?=$value->destinationport?></td>
                              </tr>
                              <tr>
                                <th>Commodity</th>
                                 <td><?=$value->commodity?></td>
                              </tr>
                              <tr>
                                <th>Description of Goods and other information</th>
                                 <td><?=$value->descriptiongood?></td>
                              </tr>



                              <tr>
                                <th>Packing Type</th>
                                 <td><?=$value->packingtype?></td>
                              </tr>
                              <tr>
                                <th>Incoterms</th>
                                 <td><?=$value->incoterms?></td>
                              </tr>
                              <tr>
                                <th>Mode</th>
                                 <td><?=$value->mode?></td>
                              </tr>

                              <tr>
                                <th>No of Package</th>
                                 <td><?=$value->noofpackage?></td>
                              </tr>
                              <tr>
                                <th>Net Weight</th>
                                 <td><?=$value->netweight?></td>
                              </tr>
                              <tr>
                                <th>Gr. Weight</th>
                                 <td><?=$value->grweight?></td>
                              </tr>
                              <tr>
                                <th>Cargo Value</th>
                                 <td><?=$value->cargovalue?></td>
                              </tr>
                              <tr>
                                <th>Stackable</th>
                                 <td><?=$value->stackable?></td>
                              </tr>
                              <tr>
                                <th>Vol. Weight</th>
                                 <td><?=$value->volweight?></td>
                              </tr>


                              <tr>
                                <th>Type of Container</th>
                                 <td><?=$value->typeofcontainer?></td>
                              </tr>
                              <tr>
                                <th>No of Container</th>
                                 <td><?=$value->noofcontainer?></td>
                              </tr>

                              <?php $i=1;  foreach($value->unno as $unno){?>

                              <tr>
                                <th>UN NO <?=$i++?> </th>
                                 <td><?=$unno?></td>
                              </tr>
                              <?php  }?>

                              <?php $j=1; foreach($value->class as $class){?>

                              <tr>
                                <th>Class <?=$j++?> </th>
                                 <td><?=$class?></td>
                              </tr>
                              <?php  }?>
                              <?php $k=1 ;foreach($value->pack as $pack){?>

                              <tr>
                                <th>Packing Instruction <?=$k++?> </th>
                                 <td><?=$pack?></td>
                              </tr>
                              <?php  }?>
                              <?php $l=1;foreach($value->hscode as $hscode){?>

                              <tr>
                                <th>HS Code<?=$l++?> </th>
                                 <td><?=$hscode?></td>
                              </tr>
                              <?php  }?>

                              <?php $m=1; foreach($value->casno as $casno){?>

                              <tr>
                                <th>CAS No <?=$m++?> </th>
                                 <td><?=$casno?></td>
                              </tr>
                              <?php  }?>
                              <tr>
                                <th>Any Special Requirement</th>
                                 <td><?=$value->specialreq?></td>
                              </tr>
                        
                      



                              
                           </table> 

                    </div>
                  </div>
              </div>
            </div>
            <?php }?>
          <?php }?>

  </div>
</div>
</div>
<?php }?>
<?php  }else{  
  $this->session->set_flashdata('warning', 'Supplier Login Required');
  redirect('vendor/login');  }?>