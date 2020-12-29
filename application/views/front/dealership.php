<style type="text/css">
hr.someClass {
  background-color: #f6ce13;
  width: 100%;
  height: 1px;
  border-top: 1px solid #f6ce13;
}
</style>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Freight, Supply Chain And Logistics Lead</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="javascript:void(0)"><span>Logistics Lead Form</span></a> </div>
      </div>
    </div>
  </div>
</div>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="row">
          <?=form_open_multipart('logisticslead')?>
         
            <div class="row">
              <div class="form-group col-xs-12 col-sm-12">
                <label>Freight Lead Title</label>
                <input class="form-control" name="freightleadtitle" required placeholder="Freight Lead Title" type="text">
              </div>
              <div class="form-group col-xs-12 col-sm-6">
                  <label>Date of Lead</label> 
                <input class="form-control" name="dateoflead"  required  type="date">
              </div>
              <div class="form-group col-xs-12 col-sm-6">
                  <label>Last Date</label> 
                <input class="form-control" required  type="date" name="lastdate">
              </div>
              <div class="form-group col-xs-12 col-sm-12">
                <label>Company Name</label>
                <input class="form-control" required placeholder="Comapny Name" name="companyname" type="text">
              </div>
            
              <div class="form-group col-xs-12"> 
                <label>Address</label>
                <textarea class="form-control" required placeholder="Address" name="address"></textarea>
              </div>

              <div class="form-group col-sm-3 col-xs-12">
                <label>City</label>
                <input class="form-control" type="text" required placeholder="City" name="city">
              </div>

              <div class="form-group col-sm-3 col-xs-12">
                <label>Country</label>
                <input class="form-control" type="text" required placeholder="Country" name="country">
              </div>

              <div class="form-group col-sm-3 col-xs-12">
                <label>Pincode </label>
                <input class="form-control" type="number" required placeholder="Zipcode" name="pincode">
              </div>

              <div class="form-group col-sm-3 col-xs-12">
                <label>Website</label>
                <input class="form-control" type="text" required placeholder="Website Url" name="weburl">
              </div>


              <div class="form-group col-sm-3 col-xs-12">
                <label>Contact Person</label>
                <input class="form-control" type="text" required placeholder="Contact Person" name="contactperson">
              </div>

              <div class="form-group col-sm-3 col-xs-12">
                <label>Phone No</label>
                <input class="form-control" type="number" required placeholder="Phone No" name="phoneno">
              </div>

              <div class="form-group col-sm-3 col-xs-12">
                <label>Mobile No </label>
                <input class="form-control" type="number" required placeholder="Mobile No" name="mobileno">
              </div>

              <div class="form-group col-sm-3 col-xs-12">
                <label>Email Id </label>
                <input class="form-control" type="email" required placeholder="Email Id " name="emailid">
              </div>
                <!-- HR -->
              <hr class="someClass">

              <div class="form-group col-sm-6 col-xs-12">
                <label>Loading Port</label>
                <input class="form-control" type="text" required placeholder="Loading Port" name="loadingport">
              </div>

              <div class="form-group col-sm-6 col-xs-12">
                <label>Destination Port</label>
                <input class="form-control" type="text" required placeholder="Destination Port" name="destinationport">
              </div>
              
              <div class="form-group col-sm-12 col-xs-12">
                <label>Commodity </label>
                <input class="form-control" type="text" required placeholder="Destination Port" name="commodity">
              </div>


              <div class="form-group col-xs-12"> 
                <label>Description of Goods and other information</label>
                <textarea class="form-control" required placeholder="Description of Goods and other information i.e. (Dimensions / CBM etc.)   " name="descriptiongood"></textarea>
              </div>
             <!-- HR -->
              <hr class="someClass">

              <div class="form-group col-sm-4 col-xs-12">
                <label>Packing Type</label>
                <input class="form-control" type="text" required placeholder="Packing Type" name="packingtype">
              </div>

              <div class="form-group col-sm-4 col-xs-12">
                <label>Incoterms</label>
                <input class="form-control" type="text" required placeholder="Incoterms" name="incoterms">
              </div>

              <div class="form-group col-sm-4 col-xs-12">
                <label>Mode</label>
                <input class="form-control" type="text" required placeholder="Mode" name="mode">
              </div>

              <div class="form-group col-sm-4 col-xs-12">
                <label>No of Package</label>
                <input class="form-control" type="text" required placeholder="No of Package" name="noofpackage">
              </div>

              <div class="form-group col-sm-4 col-xs-12">
                <label>Net Weight</label>
                <input class="form-control" type="text" required placeholder="Net Weight " name="netweight">
              </div>

              <div class="form-group col-sm-4 col-xs-12">
                <label>Gr. Weight</label>
                <input class="form-control" type="text" required placeholder="Gr. Weight" name="grweight">
              </div>

              <div class="form-group col-sm-4 col-xs-12">
                <label>Cargo Value</label>
                <input class="form-control" type="text" required placeholder="Cargo Value" name="cargovalue">
              </div>

              <div class="form-group col-sm-4 col-xs-12">
                <label>Stackable</label>
                <input class="form-control" type="text" required placeholder="Stackable" name="stackable">
              </div>

              <div class="form-group col-sm-4 col-xs-12">
                <label>Vol. Weight</label>
                <input class="form-control" type="text" required placeholder="Vol. Weight" name="volweight">
              </div>

               <!-- HR -->
              <hr class="someClass">
              <div class="">
                <p><strong>IF FCL (Please provide below information)</strong>
                </p>  
              
                <div class="form-group col-sm-6 col-xs-6">
                  <label>Type of Container </label>
                    <input type="text" class="form-control" required placeholder="Type of Container " name="typeofcontainer">
                </div>
                <div class="form-group col-sm-6 col-xs-6">
                  <label>No of Container </label>
                    <input type="text" class="form-control" required placeholder="No of Container" name="noofcontainer">
                </div>
              </div>
              <hr class="someClass">
              <div class="">
              <p><strong>IF HAZARDOUS (Please provide Below Information)</strong>
              </p> 
              <div class="col-sm-12 col-xs-12">
                <table class="table table-bordered" id="dynamic_field">
                  <tr>
                    <th>UN NO</th>
                    <th>Class</th>
                    <th>Packing Instruction</th>
                    <th>HS Code</th>
                    <th>CAS No</th>
                    <th>Action</th>

                  </tr>
                  <tr>
                    <td><input type="text" name="unno[]" placeholder="UN NO" class="form-control name_list" /></td>
                    <td><input type="text" name="class[]" placeholder="Class" class="form-control name_list" /></td>
                    <td><input type="text" name="pack[]" placeholder="Packing Instruction" class="form-control name_list" /></td>
                    <td><input type="text" name="hscode[]" placeholder="HS Code" class="form-control name_list" /></td>
                    <td><input type="text" name="casno[]" placeholder="CAS No" class="form-control name_list" /></td>
                    <td><button type="button" name="add" id="add" class="btn btn-warning" style="background: transparent linear-gradient(to right, #262626 50%, #ffce10 50%) repeat scroll right bottom / 202% 100%">Add More</button></td>
                  </tr>
                </table>
              </div>
              </div>

              <div class="form-group col-sm-12 col-xs-12">
                <label>Any Special Requirement</label>
                 <textarea class="form-control" placeholder="Any Special Requirement  (IF ANY)" name="specialreq"></textarea> 
              </div>

              <div class="form-group col-sm-12 col-xs-12">
                <label>Upload File</label>
                  <input  class="form-control" type="file" name="uploadfile"> 
              </div>

              <div class="form-group col-sm-11 col-xs-12">
                <button class="btn btn-danger pull-right" type="submit">Submit</button>
              </div>
              <div class="form-group col-sm-1 col-xs-12">
                <button class="btn btn-success pull-right" type="reset">Reset</button>
              </div>
            </div>
          </form>
  
         
        </div>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  var i=1;
  $('#add').click(function(){
    i++;
    $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="unno[]" placeholder="UN NO" class="form-control name_list" /></td><td><input type="text" name="class[]" placeholder="Class" class="form-control name_list" /></td><td><input type="text" name="pack[]" placeholder="Packing Instruction" class="form-control name_list" /></td><td><input type="text" name="hscode[]" placeholder="HS Code" class="form-control name_list" /></td><td><input type="text" name="casno[]" placeholder="CAS No" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
  });
  
  $(document).on('click', '.btn_remove', function(){
    var button_id = $(this).attr("id"); 
    $('#row'+button_id+'').remove();
  });
  
  
  
});
</script>