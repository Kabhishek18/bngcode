<div id="breadcrum-inner-block">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <div class="breadcrum-inner-header">
          <h1>Checkout</h1>
          <a href="<?=base_url()?>">Home</a> <i class="fa fa-circle"></i> <a href="checkout"><span>Checkout</span></a> </div>
      </div>
    </div>
  </div>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style type="text/css">
		.card-input-element {
		    display: none;
		}

		.card-input {
		    margin: 10px;
		    padding: 00px;
		}

		.card-input:hover {
		    cursor: pointer;
		}

		.card-input-element:checked + .card-input {
		     box-shadow: 0 0px 2px 2px #ffce10;
		 }

		 label{
		 	font-weight: 400;
		 }
		.planbox{
			border: 1px solid #ffecd3;
		    padding: 20px;
		    box-shadow: 1px 1px 8px #ffecd3;
		}
		.paymentbox{
			padding: 10px;
    		margin-top: 50px;
		   font-size: 20px;
		}
		.paymentstrip{
		}
</style>
<div id="dashboard_inner_block">
  <div class="container">
    <div class="row">

		<div class="bg-default">
					
					
				<form method="post" action="<?=base_url()?>payment">
					<div class="row">				
						<div class="col-md-6 form-group">
							<label for="firstname">First Name</label>
							<input type="text" class="form-control" id="firstname" name="fname" placeholder="First Name">
						
						</div>

						<div class="col-md-6 form-group">
							<label for="lastname">Last Name</label>
							<input type="text" class="form-control" id="lastname" name="lname" placeholder="Last Name">

						</div>
						

						<div class="col-md-12 form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" required>
						</div>

						<div class="col-md-6 form-group">
							<label for="adress">Address</label>
							<input type="text" class="form-control" id="adress" name="address" placeholder="1234 Main Street" required>
							
						</div>

						<div class="col-md-6 form-group">
							<label for="address2">Address 2
								<span class="text-muted">(Optional)</span>
							</label>
							<input type="text" class="form-control" id="adress2" name="address2" placeholder="Flat No">
						</div>
					</div>	
					<div class="row">
							<div class="col-md-4 form-group">
								<label for="country">Country</label>
								<input type="text" class="form-control" id="country" name="country" placeholder="Country">
								</div>
							

							<div class="col-md-4 form-group">
								<label for="city">City</label>
								<input type="text" class="form-control" id="city" name="city" placeholder="City">
								</div>
							
								
							<div class="col-md-4 form-group">
								<label for="postcode">Postcode</label>
								<input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode">
							</div>
					</div>

						<hr>
						<div class="row planbox">
						    	<h4 class="text-left">Choose Your Plan</h4>
						    	<div class="col-md-3 col-lg-3 col-sm-1">
				    		         <label>
						          <input type="radio" name="product" id="plan-5" value="5" class="card-input-element" />

						            <div class=" text-center card-input">
						               <div class="price-table-feature-block">
							                 <h1 style="color: #d07c18">Free </h1>
								              <hr>
								                <p><span>$0</span> Half Per Year</p>
								             
							           
							            </div>
							          
						            </div>

						        </label>
						    	</div>
						      <div class="col-md-3 col-lg-3 col-sm-1">
						
						        <label>
						          <input type="radio" name="product" id="plan-1" value="1" class="card-input-element" />

						            <div class=" text-center card-input">
						               <div class="price-table-feature-block">
							                 <h1>Basic</h1>
								              <hr>
								              <p><span>$50</span> Per Year</p>
								             
							           
							            </div>
							          
						            </div>

						        </label>
						        
						      </div>
						      <div class="col-md-3 col-lg-3 col-sm-1">
						        
						        <label>
						          <input type="radio" name="product" id="plan-2" value="2" class="card-input-element" />

						            <div class="text-center card-input">
						              <div class="price-table-feature-block"> 
							              <h1>SUPER</h1>
							              <hr>
							              <p><span>$99</span> Per Year</p>
							              
							            
							            </div>
						            </div>
						        </label>
						        
						      </div>
						      <div class="col-md-3 col-lg-3 col-sm-1">
						        
						        <label>
						          <input type="radio" name="product" id="plan-3" value="3" class="card-input-element" />

						            <div class="text-center card-input">
						                  <div class="price-table-feature-block">
								             <h1>PREMIUM</h1>
								              <hr>
								              <p><span>$499</span> Per Year</p>
								             
								           
								            </div>
						            </div>
						        </label>
						        
						      </div>
						      <div class="col-md-3 col-lg-3 col-sm-1">
						        
						        <label>
						          <input type="radio" name="product" id="plan-4" value="4" class="card-input-element" />

						            <div class="text-center card-input">
						               <div class="price-table-feature-block">
							             <h1>ELITE </h1>
							              <hr>
							              <p><span>$1199</span> Per Year</p>
							            
            
							            
							            </div>
						            </div>
						        </label>
						        
						      </div>
						</div>

						<div class="row paymentbox">
							
						
						<div class="col-md-6">
							<strong>Payment Mode</strong>
							<div class="form-group">
								<input type="radio" class="form-check-input" name="paymentmethod" value="razorpay" checked required>
								<label for="credit" class="form-check-label">Razorpay <img src="https://i0.wp.com/www.ecommerce-nation.com/wp-content/uploads/2019/02/Razorpay-the-new-epayment-that-will-break-everything-in-2019.png?resize=1000%2C600&ssl=1" width="200px"></label>
								
							</div>

						</div>
						<div class="col-md-6 paymentstrip">
							<div class="col-md-6">
								<strong>MemberShip plan</strong>
							</div>
							<div  class="col-md-6">
								<strong>Price ( $ )</strong>
							</div>
							<span class="editview-radio-box"></span>
						</div>
						
							<button class="btn btn-primary bt-lg btn-block" type="submit">Continue to Checkout</button>
						</div>
				</form>
		</div>
	</div>
   </div>	
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
	$('[id^="plan-"]').click(function(){


       var title = $(this).val();	
      	console.log(title);
      	var base_url ="<?=base_url()?>";
        $.ajax({
           url: base_url + 'AjaxRequest',
           type: 'POST',
           data: {title: title},
           error: function() {
              alert('Something is wrong');
           },
           success: function(data) {
           	 var html = "";
			  if(JSON.parse(data)){
			  	var obj = JSON.parse(data);

			      // $.each(JSON.parse(data), function(key, value){
			      //    html += `
			        		
			      //   			<td>  ${ value.name }</td>
			      //   			<td>  ${ value.price }</td>
			    					
			      //         `
			      // });
			      html +=`<div class=""><div class='col-md-6'>
											
										  ${ obj.name }</div><div class='col-md-6'>$  ${ obj.price }</div> <input type="hidden" name="planname" value="${ obj.name }"> <input type="hidden" name="planprice" value="${ obj.price }">
			      			</div></div>	
										<div class='col-md-6'>Total</div>
										<div class='col-md-6'>$ ${ obj.price }</div>
									
			      `
			    }
			  else{
			        html +=`<div class="text-danger"> Error</div >`;
			  }
			  $('.editview-radio-box').html(html);
			}
        });


    });



</script>