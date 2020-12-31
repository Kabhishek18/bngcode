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
					

						<div class="row">
						    	<h4 class="text-center">Choose Your Plan</h4>
						      <div class="col-md-4 col-lg-4 col-sm-4">
						        
						        <label>
						          <input type="radio" name="product" id="plan-1" value="1" class="card-input-element" />

						            <div class=" text-center card-input">
						              <div class="price-table-feature-block">
							              <h1>Basic</h1>
							              <hr>
							              <p>Free <span>$50</span> Per Month</p>
							              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
							              <div class="vfx-price-list-item">
							                <h2>Limited Number</h2>
							                <p>Our company offers best pricing options for field agents and companies.</p>
							              </div>
							              <div class="vfx-price-list-item">
							                <h2>One Agent for All</h2>
							                <p>Our company offers best pricing options for field agents and companies.</p>
							              </div>
							              <div class="vfx-price-list-item">
							                <h2>Mail Communication</h2>
							                <p>Our company offers best pricing options for field agents and companies.</p>
							              </div>
							            </div>
							          
						            </div>

						        </label>
						        
						      </div>
						      <div class="col-md-4 col-lg-4 col-sm-4">
						        
						        <label>
						          <input type="radio" name="product" id="plan-2" value="2" class="card-input-element" />

						            <div class="text-center card-input">
						              <div class="price-table-feature-block ">
							              <h1>Premium</h1>
							              <hr>
							              <p>Free <span>$100</span> Per Month</p>
							              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
							              <div class="vfx-price-list-item">
							                <h2>Unlimited Number</h2>
							                <p>Our company offers best pricing options for field agents and companies.</p>
							              </div>
							              <div class="vfx-price-list-item">
							                <h2>One Agent for All</h2>
							                <p>Our company offers best pricing options for field agents and companies.</p>
							              </div>
							              <div class="vfx-price-list-item">
							                <h2>Mail Communication</h2>
							                <p>Our company offers best pricing options for field agents and companies.</p>
							              </div>
							            </div>
						            </div>
						        </label>
						        
						      </div>
						      <div class="col-md-4 col-lg-4 col-sm-4">
						        
						        <label>
						          <input type="radio" name="product" id="plan-3" value="3" class="card-input-element" />

						            <div class="text-center card-input">
						                <div class="price-table-feature-block">
							              <h1>Plus</h1>
							              <hr>
							              <p>Free <span>$200</span> Per Month</p>
							              <div class="vfx-pl-seperator"> <span><i class="fa fa-caret-down"></i></span> </div>
							              <div class="vfx-price-list-item">
							                <h2>Unlimited Number</h2>
							                <p>Our company offers best pricing options for field agents and companies.</p>
							              </div>
							              <div class="vfx-price-list-item">
							                <h2>Unlimited Number</h2>
							                <p>Our company offers best pricing options for field agents and companies.</p>
							              </div>
							              <div class="vfx-price-list-item">
							                <h2>Personal Training</h2>
							                <p>Our company offers best pricing options for field agents and companies.</p>
							              </div>
							            </div>
						            </div>
						        </label>
						        
						      </div>
						  </div>

						<hr>

						<h4>Payment</h4>
						<div class="col-md-6">
							<div class="form-group">
								<input type="radio" class="form-check-input" name="paymentmethod" value="razorpay" checked required>
								<label for="credit" class="form-check-label">Razorpay <img src="https://i0.wp.com/www.ecommerce-nation.com/wp-content/uploads/2019/02/Razorpay-the-new-epayment-that-will-break-everything-in-2019.png?resize=1000%2C600&ssl=1" width="200px"></label>
								
							</div>

							<div class="form-group">
								<input type="radio" class="form-check-input" name="paymentmethod" value="paypal" required>
								<label for="paypal" class="form-check-label">PayPal <img src="https://www.arcadier.com/learn/assets/uploads/payments/logo1511166968img.png" width="200px"></label>
								
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<table class="table">
									<thead>
										<tr>
											<th>MemberShip plan</th>
											<th>Price ( $ )</th>
										</tr>
									</thead>
									<tbody  class="editview-radio-box">
										
									</tbody>
								
								</table>
							</div>
						</div>
							<hr class="mb-4">
						
							<button class="btn btn-primary bt-lg btn-block" type="submit">Continue to Checkout</button>
				</form>
		</div>
	</div>
   </div>	
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">
	$('[id^="plan-"]').click(function(){


       var title = $(this).val();	
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
			      html +=`<tr>
											
										<td>  ${ obj.name }</td><td>$  ${ obj.price }</td> <input type="hidden" name="planname" value="${ obj.name }"> <input type="hidden" name="planprice" value="${ obj.price }">
			      </tr><tr>
										<th>Total</th>
										<th>$ ${ obj.price }</th></tr>
			      `
			    }
			  else{
			        html +=`<td class="text-danger"> Error</td >`;
			  }
			  $('.editview-radio-box').html(html);
			}
        });


    });



</script>