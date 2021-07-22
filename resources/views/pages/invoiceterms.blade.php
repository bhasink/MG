@extends('layouts.layout')

@section('styles')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/all-games.css"/>



	@endsection
@section('content')

<style>
.invoice-design {
    border: 1px solid #ddd;
    padding: 0;
	    background: url(../images/backgrounbill.png);
    background-size: cover;
}

section.invoice-area {
    padding: 50px 0;
}

.invoice-design .row {
    margin: 40px 0;
}


.itm label, .itm p {
    margin: 0;
}

.customer-dtls .itm label {
    font-weight: 700;
    color: #000;
    width: 112px;
}

.itm {
    display: flex;
    flex-direction: revert;
}

.invoice-maintitle {
    position: relative;
    margin: 40px 0 0;
    width: 100%;
    display: inline-block;
}

.invoice-maintitle h1:after {
    border-bottom: 8px solid #ff2300;
    width: 35%;
    top: 20px;
    left: 0;
    margin: 0;
    transform: translateY(0px);
	content: "";
	right: inherit;
    bottom: inherit;
	position: absolute;
}

.invoice-maintitle h1:before {
    border-bottom: 8px solid #ff2300;
    width: 35%;
    top: 20px;
    right: 0;
    margin: 0;
    transform: translateY(0px);
    content: "";
    position: absolute;
}

.invoice-maintitle h1 {
    text-transform: uppercase;
    font-size: 32px;
    font-weight: 800;
	text-align:center;
}

.billdetails {
    position: relative;
    margin: 40px 0  0;
    display: inline-block;
    width: 100%;
}

.billdetails h6 {
    background: #d3d3d3;
    font-weight: 600;
    padding: 10px 15px;
}

.billdetails .col-md-3 {
    padding: 0;
}

.invoice-design .col-md-6 {
    padding: 0 15px;
}

.billdetails .itm {
    padding: 0 15px;
}

.billinvoice-table {
    padding: 15px;
}

.billinvoice-table table {
    width: 100%;
}

.billinvoice-table table tr td {
    border: 1px solid #ddd;
    padding: 14px;
}

.billinvoice-table table tr th {
    background: #d3d3d3;
    font-weight: 600;
    padding: 4px 10px;
}

.billinvoice-table table {
    border-collapse: inherit;
}

.subtotal-asset .col-md-7 {
    padding: 0;
}

.billinvoice-table.paymode-infos {
    padding: 0 6px;
}

.subtotal-asset .itm label {
    text-align: right;
    width: 151px;
    margin-right: 20px;
    font-weight: 600;
}

.thanksline-last {
    text-align: center;
}

.thanksline-last p {
    font-weight: 600;
    font-size: 19px;
}

.itm.bdrbtd p {
    border-bottom: 1px solid #ddd;
    padding: 10px;
    width: 52%;
    margin-bottom: 13px;
}

.subtotal-asset {
    margin-bottom: 40px;
}

.billinvoice-table.paymode-infos table tr th {
    background: transparent;
    border: 1px solid #ddd;
    font-size: 14px;
}

.invoice-maintitle.terms-inv h1::before {
    width: 20%;
}

.invoice-maintitle.terms-inv h1:after {
    width: 20%;
}

table {
    width: 100%;
}

@media screen and (max-width: 414px){
	.invoice-maintitle h1{
		    font-size: 23px;
	}
}

@media screen and (max-width: 768px){
	.billinvoice-table {
    overflow-y: scroll;
}

.invoice-maintitle h1:before,
.invoice-maintitle h1:after,
.invoice-maintitle.terms-inv h1:after,
.invoice-maintitle.terms-inv h1:before {
    width: 12%;
	top: 10px;
}
}


</style>

<section class="invoice-area">
	<div class="container">
		<div class="col-md-12 col-lg-9 mx-auto invoice-design" style="max-width: 800px;margin: auto; background: url('https://microgravity.co.in/images/backgrounbill.png'); background-size:cover;">
		
		<table style="background-size: cover; border: 1px solid #ddd;padding: 0; background-size: cover; width:100%;font-family: Helvetica-Neue-STD,sans-serif;">
			<tbody>
			
				<tr>
				<td>
					<div style="padding:20px;">
					<table style="width:100%">
						<tbody>
							<tr>
								<td><img src="/images/mglogo.png" alt="" style="width: 260px;"></td>
								<td>
									<div class="itm" style="display: flex;flex-direction: row;">
										<label style="font-weight: 700;color: #000; width: 112px; font-size:14px;">Store Name</label>
										<p style="margin: 0 0 7px 0;">sdsdsd</p>
									</div>
									
									<div class="itm" style="display: flex;flex-direction: row;">
										<label style="font-weight: 700;color: #000; width: 112px; font-size:14px;">Address</label>
										<p style="margin: 0 0 7px 0;">sdsdsd</p>
									</div>
									
									<div class="itm" style="display: flex;flex-direction: row;">
										<label style="font-weight: 700;color: #000; width: 112px; font-size:14px;">GST No.</label>
										<p style="margin: 0 0 7px 0;">sdsdsd</p>
									</div>
									
									<div class="itm" style="display: flex;flex-direction: row;">
										<label style="font-weight: 700;color: #000; width: 112px; font-size:14px;">Contact No.</label>
										<p style="margin: 0 0 7px 0; font-size:14px;">sdsdsd</p>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
						
					</div>
					
					
					<div>
						<table style="width:100%; text-align:center;">
							<tbody>
								<tr>
									<td>
									<div class="invoice-maintitle" style="position: relative; margin: 40px 0 0; width: 100%; display: inline-block;">
										<img src="https://microgravity.co.in/images/taxinvoice.jpg" style=" margin: 51px 0;  width: 100%;"> 
									</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
					
					
					<div>
						<table style="width:100%">
							<tbody style="vertical-align: top;">
								<tr>
									<td style="width:240px;">
									
										<h6 style="margin:0; background: #d3d3d3; font-size:16px; margin: 0 0 14px 0;padding: 6px; font-weight: 600;">Customer Details</h6>
										<div class="itm">
											<label>Name.</label>
											<p></p>
										</div>

										<div class="itm">
											<label>Price No.</label>
											<p></p>
										</div>

					
									</td>
									
									<td>
									</td>
									
									<td style="width:200px;">
									
										<h6 style="margin:0; background: #d3d3d3; font-size:16px; margin: 0 0 14px 0; padding: 6px; font-weight: 600;">Invoice Details</h6>
											<div class="itm">
												<label>Invoice Id:</label>
												<p></p>
											</div>

											<div class="itm">
												<label>Invoice Date:</label>
												<p></p>
											</div>

											<div class="itm">
												<label>Order ID:</label>
												<p></p>
											</div>

											<div class="itm">
												<label>Order Date:</label>
												<p></p>
											</div>
									</td>
								</tr>
							</tbody>
						</table>
						
					</div>
					
					
					<div class="billinvoice-table">
					<table style="width:100%;  border-collapse: initial;">
						<tbody>
							<tr>
								<th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px;">Sr No.</th>
								<th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px;">Product</th>
								<th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px;">Price (Per Unit)</th>
								<th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px;">Quantity</th>
								<th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px;">Amount</th>
								<th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px;">Final Amount</th>
							</tr>
							<tr>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
							</tr>

							<tr>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
							</tr>

							<tr>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
							</tr>


							<tr>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
							</tr>

							<tr>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
							</tr>

							<tr>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
							</tr>


							<tr>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
							</tr>


							<tr>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
								<td style=" border: 1px solid #ddd; padding: 14px;"></td>
							</tr>

						</tbody>
					</table>
				</div>
				
				
				<div class="subtotal-asset" style="margin-top: 30px;">
					<table style="width:100%; border-collapse: initial;">
						<tbody style="vertical-align: top;">
							<tr>
								<td>
									<table> 
										<tbody>
											<tr>
												<th style="border: 1px solid #ddd; padding: 7px;">Mode of Payment</th>
												<th style="border: 1px solid #ddd; padding: 7px;">Ref No.</th>
												<th style="border: 1px solid #ddd; padding: 7px;">Amount</th>
											</tr>
											<tr>
												<td style=" border: 1px solid #ddd; padding: 14px;"></td>
												<td style=" border: 1px solid #ddd; padding: 14px;"></td>
												<td style=" border: 1px solid #ddd; padding: 14px;"></td>
											</tr>

											<tr>
												<td style=" border: 1px solid #ddd; padding: 14px;"></td>
												<td style=" border: 1px solid #ddd; padding: 14px;"></td>
												<td style=" border: 1px solid #ddd; padding: 14px;"></td>
											</tr>

											<tr>
												<td style=" border: 1px solid #ddd; padding: 14px;"></td>
												<td style=" border: 1px solid #ddd; padding: 14px;"></td>
												<td style=" border: 1px solid #ddd; padding: 14px;"></td>
											</tr>

										</tbody>
									</table>
								</td>
								
								<td>
								</td>
								
								<td>
								
									<div class="itm" style="display:flex;flex-direction: row;">
										<label style="text-align: right; width: 151px; margin-right: 20px; font-weight: 600;">Total Amount</label>
										<p></p>
									</div>
									<div class="itm" style="display:flex;flex-direction: row;">
										<label style="text-align: right; width: 151px; margin-right: 20px; font-weight: 600;">CGST ## %</label>
										<p></p>
									</div>

									<div class="itm" style="display:flex;flex-direction: row;">
										<label style="text-align: right; width: 151px; margin-right: 20px; font-weight: 600;">SGST ## %</label>
										<p></p>
									</div>

									<div class="itm" style="display:flex;flex-direction: row;">
										<label style="text-align: right; width: 151px; margin-right: 20px; font-weight: 600;">IGST ## %</label>
										<p></p>
									</div>

									<div class="itm bdrbtd" style="display:flex;flex-direction: row;">
										<label style="text-align: right; width: 151px; margin-right: 20px; font-weight: 600;">UTGST ## %</label>
										<p style="border-bottom: 1px solid #ddd; padding: 10px; width: 52%; margin-bottom: 13px;"></p>
									</div>

									<div class="itm bdrbtd" style="display:flex;flex-direction: row;">
										<label style="text-align: right; width: 151px; margin-right: 20px; font-weight: 600;">Total Amount (Inc Tax)</label>
										<p style="border-bottom: 1px solid #ddd; padding: 10px; width: 52%; margin-bottom: 13px;"></p>
									</div>

									<div class="itm bdrbtd" style="display:flex;flex-direction: row;">
										<label style="text-align: right; width: 151px; margin-right: 20px; font-weight: 600;">Discount</label>
										<p style="border-bottom: 1px solid #ddd; padding: 10px; width: 52%; margin-bottom: 13px;"></p>
									</div>

									<div class="itm bdrbtd" style="display:flex;flex-direction: row;">
										<label style="text-align: right; width: 151px; margin-right: 20px; font-weight: 600;">Final Amount</label>
										<p style="border-bottom: 1px solid #ddd; padding: 10px; width: 52%; margin-bottom: 13px;"></p>
									</div>

					
								</td>
								
							</tr>
						</tbody>
					</table>
				</div>
				
				<div>
					<table style="width:100%; text-align:center;">
						<tbody>
							<tr>
								<td>
									<div class="thanksline-last">
										<p style="font-size:20px;">Thanks for visiting Microgravity Ventures Pvt. Ltd.</p>
									</div>				
								</td>
							</tr>
						</tbody>
					</table> 
				</div>
					
					
				</td>
				
				</tr>
				
				
				
			</tbody>
		</table>
		
		
		


		</div>
	</div>
</section>



@endsection