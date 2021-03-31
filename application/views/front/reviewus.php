<style type="text/css">
  label{
    font-weight: 500;
    float: left;
  }
  .bow{
    padding: 20px; border:1px solid #e6e6e6; box-shadow: 3px 4px 10px #e6e6e6;
  }   
</style>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row bow" style="">
      <div class="col-md-12 text-center" style="padding-bottom: 10px">
          <h2><u><strong>Review Us Your Concern</strong></u></h2>
         <br><br>
      </div>
     
      <div class="text-center  col-md-12 ">
        <form  method="post" action="<?=base_url()?>front/TestQuerySubmit"> 
          <div class="col-md-6 form-group">
            <label>Full Name <span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Full Name" type="text" name="name" required="">
          </div>
          <div class="col-md-6 form-group">
            <label>Email <span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Email" type="text" name="email" required="">
          </div>
        
          <div class="col-md-12 form-group">
            <label>Message us</label>
            <textarea name="message" rows="4" class="form-control" placeholder="Please Write Note"></textarea>
          </div>
          <div class="col-md-12 form-group"> 
            <div class="text-left" style="top-margin:50px;"> 
              <input type="reset" class="btn btn-warning" name="">
              <input type="submit" class="btn btn-primary" name="">
            </div>
          </div>
        </form>
      </div>
     
    </div>
  </div>
</div>