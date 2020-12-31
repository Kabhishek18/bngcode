<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<div class="container">
<br><br><br>
<div class="row">
	<div class="col-md-4">
		<h2>Bill Information</h2>
		<table class="table">
			<tr>
				<th>Full Name</th>
			</tr>
			<tr>
				<td><?=$fname?>  <?=$lname?></td>
			</tr>
			<tr></tr>
			<tr>
				<th>Email</th>
			</tr>
			<tr>
				<td><?=$email?></td>
			</tr>
			<tr></tr>
			<tr>
				<th>Address</th>
				<th>Address line 2(Optinal)</th>
			</tr>
			<tr>
				<td><?=$address?></td>
				<td><?=$address?></td>
			</tr>
			<tr></tr>
			<tr>
				<th>Town</th>
				<th>Country</th>
			</tr>
			<tr>
				<td><?=$city?></td>
				<td><?=$country?></td>
			</tr>
			<tr></tr>
			<tr>
				<th>Zip</th>
			</tr>
			<tr>
				<td><?=$postcode?></td>
			</tr>
		</table>
		
		
	</div>
	<div class="col-md-4">
		<div class="container">
				||<a href="javascript:void(0)" class="btn btn-lg btn-warning buy_now">Click To Pay</a> 
				||
				<a href="<?=base_url('')?>"class="btn btn-lg btn-danger">Back To Home</a>||
		</div>	
	</div> <!-- col // -->
	<div class="col-md-4">
		<h2>Plan Information</h2>
		 <table class="table">
		 	  <thead>
                                         <tr>
                                             <th>Plane Name</th>
                                             <th>Total</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><?=$planname?></td>
                                             <td>$ <?=$planprice?></td>
                                         </tr>
                                     </tbody>
                                     <tfoot>
                                  
                                         <tr>
                                             <th>Total</th>
                                             <th>$ <?=$planprice?></th>
                                         </tr>
                                     </tfoot>
		 </table>
	</div>

</div> <!-- row.// -->
</div> 
<!--container.//-->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
	var SITEURL = "<?php echo base_url() ?>";
	$('body').on('click', '.buy_now', function(e){
		var totalAmount = "<?=$planprice?>";
		var options = {
			"key": "rzp_test_BrgCAlCjTxTyo4",
			"amount": (totalAmount*100), 
			"name": "BNG",
			'currency': 'USD',
			"description": "Payment",
			"image": "<?=base_url()?>/resource/images/logo.png",
			"handler": function (response){
				$.ajax({
				url: SITEURL + 'vendor/razorPaySuccess',
				type: 'post',
				dataType: 'json',
				data: {
				razorpay_payment_id: response.razorpay_payment_id , totalAmount : totalAmount 
				}, 
				success: function (msg) {
				window.location.href = SITEURL + 'thankyou';
				}
		
				});
			},
		"theme": {
		"color": "#ffce10"
		}
		};
		var rzp1 = new Razorpay(options);
		rzp1.open();
		e.preventDefault();
	});
</script>
