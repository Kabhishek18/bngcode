<style type="text/css">
  label{
    font-weight: 500;
  }
  .bow{
    padding: 20px; border:1px solid #e6e6e6; box-shadow: 3px 4px 10px #e6e6e6;
  }   
</style>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row bow" style="">
      <div class="col-md-12 text-center" style="padding-bottom: 10px">
          <h2><u><strong>Mail Us Your Query</strong></u></h2>
         <br><br>
      </div>
       <div class="col-md-6">
         <img src="<?=base_url()?>resource/contact.jpg">    
          <div class="col-md-12" style="padding: 10px"> 
            <div class="text-default">  
              <p><a href="tel:18005720558"><i class="fa fa-phone"></i> Call Us: 18005720558</a></p>
              <p><a href="mailto:support@go2bng.com"><i class="fa fa-envelope"></i> support@go2bng.com</a></p>
              <p><i class="fa fa-home"></i> Address: NOIDA ONE" C-321, 3RD FLOOR, PLOT NO. B-8, IT PARK, Sector 62, Noida, Delhi 201309</p>
            </div>
          </div>
      </div>
      <div class="col-md-6 ">
        <form  method="post" action="<?=base_url()?>front/QuerySubmit"> 
          <div class="col-md-12 form-group">
            <label>Full Name <span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Full Name" type="text" name="name" required="">
          </div>
          <div class="col-md-12 form-group">
            <label>Email <span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Email" type="text" name="email" required="">
          </div>
          <div class="col-md-12 form-group">
            <label>Phone <span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Phone" type="text" name="phone" required="">
          </div>
          <div class="col-md-12 form-group">
            <label>Message us</label>
            <textarea name="message" rows="4" class="form-control" placeholder="Please Write Note"></textarea>
          </div>
          <div class="col-md-12 form-group"> 
            <input type="reset" class="btn btn-warning" name="">
            <input type="submit" class="btn btn-primary" name="">
          </div>
        </form>
      </div>
     
    </div>
  </div>
</div>