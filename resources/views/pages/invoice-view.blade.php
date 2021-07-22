@extends('layouts.layout')

<script src="http://www.openjs.com/scripts/events/keyboard_shortcuts/shortcut.js"></script>
<script language="javascript" type="text/javascript">

    shortcut.add("ctrl+p", function() {

        var printContents = document.getElementById("docp").innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
    });

</script>

@section('styles')

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>


    <style>

        .topnav {
            display: none;
        }

        nav {
            display: none !important;
        }

        footer {
            display: none !important;
        }

        .di{
            display: block;
            align-items: center;
            position: fixed;
            right: 0;
            top: 20em;
            z-index: 1;
        }

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

        .qcont:first-letter{
            text-transform: capitalize
        }

        @media print {
            #di{
                display: none;
            }
        }

        @media screen and (max-width: 414px){
            .invoice-maintitle h1{
                font-size: 23px;
            }
			tr.fl-drtcolm {
				display: flex;
				flex-direction: column;
			}

			td.fl-wdths {
				margin-top: 20px;
			}

			td.fl-wdths tr {
				vertical-align: top;
			}
			
			.main-text img {
				width: 100% !important;
			}

			.main-text {
				width: 100% !important;
			}
			
			.billinvoice-table {
				overflow: scroll;
				padding: 0;
				    width: 307px;
				margin: auto !important;
			} 

			.subtotal-asset {
				margin: 1em 0 !important;
			} 
			
			.invoice-design {
				max-width: 100% !important;
			}
			.thanksline-last {
				width: 100%;
			}
			
			.thanksline-last p{font-size: 12px !important;}
			
			.di {
				    top: 0;
					left: inherit;
					position: static;
					right: 0;

			}

			.main-text2 table.main-text {
				width: 100% !important;
			}
			
			.full-mobslay {
				overflow: hidden;
				margin: 1em auto !important;
				width: 97%;
				float: none;
			}
			
			.mgpdas {
				padding: 3px !important;
			}
			
			td.wdthtds {
			width: 100% !important;
			}

			td.wdthtds table td {
				text-align: left !important;
			}

			td.finalbill-voice {
				width: 100% !important;
				margin-top: 20px;
			}

			td.finalbill-voice table td {
				text-align: left !important;
			}
			.auto-cen {
				margin: auto;
				width: 304px !important;
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


        .subtotal-asset {
            margin: 1em;
        }
		
		

    </style>

@endsection
@section('content')


<div style="margin: 1em 0em;" class="full-mobslay">

    <div class="di" id="di">
        <a target="_blank" href="{{$link}}" class="btn know-more">Download Invoice</a>

    </div>


   <div id="docp" >
       <div class="col-md-12 col-lg-9 mx-auto invoice-design" style="max-width: 800px;margin: auto; background: url('https://microgravity.co.in/images/backgrounbill.png'); background-size:contain;">

           <table width="100%" style="background-size: cover; border: 1px solid #ddd;padding: 0; background-size: cover; width:100%;">
               <tbody>
               <tr>
                   <td>
                       <div style="padding:15px;" class="mgpdas">
                           <table style="width:100%">
                               <tbody>
                               <tr class="fl-drtcolm">
                                   <td style="vertical-align:top;">
                                       <img src="/images/mglogo.png" alt="" style="width: 200px;">
                                   </td>
                                   <td style="width:345px;" class="fl-wdths">
                                       <table>
                                           <tbody>

                                           {{--//        $client = new Party([--}}
                                           {{--//            'name'          => 'Microgravity Ventures Private Limited',--}}
                                           {{--//            'address'       => 'Ist Floor, JMD Empire Square, M G Road, Gurgaon, Haryana, 122002',--}}
                                           {{--//            'custom_fields' => [--}}
                                           {{--//                'email' => 'queries@microgravity.co.in',--}}
                                           {{--//            ],--}}
                                           {{--//        ]);--}}


                                           <tr>
                                               <td>
                                                   <label style="font-weight: 700;color: #000; font-size:14px;">Store&nbsp;Name&nbsp;</label>
                                               </td>

                                               <td>
                                                   <p style="margin: 0 0 7px 0;font-size:14px;">Microgravity Ventures Private Limited</p>
                                               </td>
                                           </tr>

                                           <tr> 
                                               <td style="vertical-align:top;">
                                                   <label style="font-weight: 700;color: #000;  font-size:14px; ">Address</label>
                                               </td>

                                               <td>
                                                   <p style="margin: 0 0 7px 0; font-size:14px;">1ST FLOOR, 18,19,20,20A,21,22,23,24, JMD EMPIRE SQUARE, MG ROAD, GURGAON, Gurgaon, Haryana, 122002 .</p>
                                               </td>
                                           </tr>
										   
										   <tr>
                                               <td>
                                                   <label style="font-weight: 700;color: #000; font-size:14px;">GSTIN&nbsp;</label>
                                               </td>

                                               <td>
                                                   <p style="margin: 0 0 7px 0;font-size:14px;">06AAMCM7221L1Z6
                                                   </p>
                                               </td>
                                           </tr>
										   

                                           {{--<tr>--}}
                                           {{--<td>--}}
                                           {{--<label style="font-weight: 700;color: #000; font-size:14px;">GST No.</label>--}}
                                           {{--</td>--}}
                                           {{----}}
                                           {{--<td>--}}
                                           {{--<p style="margin: 0 0 7px 0; font-size:14px;">sdsdsd</p>--}}
                                           {{--</td>--}}
                                           {{--</tr>--}}
                                           {{----}}
                                           <tr>
                                               <td>
                                                   <label style="font-weight: 700;color: #000; width: 112px; font-size:14px;">Email&nbsp;Id. &nbsp;</label>
                                               </td>

                                               <td>
                                                   <p style="margin: 0 0 7px 0; font-size:14px; width:100%;">queries@microgravity.co.in</p>
                                               </td>
                                           </tr>


                                           </tbody>
                                       </table>
                                   </td>
                               </tr>
                               </tbody>
                           </table>
                       </div>

                       <div>
                           <table style="width:100%; text-align:center;" class="main-text">
                               <tbody>
                               <tr>
                                   <td>
                                       <div style="margin: 30px 0 20px 0; width:100%;">
                                           <img src="https://microgravity.co.in/images/taxinvoice.jpg" style="margin:0 0 10px 0; width:600px;">
                                       </div>
                                   </td>
                               </tr>
                               </tbody>
                           </table>
                       </div>


                       <div style="    margin: 1em;" class="subtotal-asset">
                           <table style="width:100%;">
                               <tbody style="vertical-align: top;">
                               <tr class="fl-drtcolm">
                                   <td style="width:240px;" class="wdthtds">

                                       <h6 style="margin:0; background: #d3d3d3; font-size:16px; margin: 0 0 14px 0;padding: 6px; font-weight: 600;">Customer Details</h6>

                                       <table>
                                           <tbody>
                                           <tr>
                                               <th style="padding: 7px; font-size:14px; text-align:left; margin-bottom:0;">Name.</th>
                                               <td style="padding: 7px; font-size:14px; text-align:left; margin-bottom:0;">{!! $data['user_name'] !!}</td>
                                           </tr>

                                           <tr>
                                               <th style="padding: 7px; font-size:14px; text-align:left;margin-bottom:0;">Email.</th>
                                               <td style="padding: 7px; font-size:14px; text-align:left; margin-bottom:0;">{!! $data['user_email'] !!}</td>
                                           </tr>

                                           </tbody>
                                       </table>
                                   </td>
                                   <td>
                                   </td>
                                   <td style="width:280px;" class="wdthtds">
                                       <h6 style="margin:0; background: #d3d3d3; font-size:16px; margin: 0 0 14px 0; padding: 6px; font-weight: 600;">Invoice Details</h6>

                                       <table>
                                           <tbody>
                                           <tr>
                                               <th style="padding: 7px; font-size:14px; text-align:left;margin-bottom:0;">Invoice Id:</th>
                                               <td style="padding: 7px; font-size:14px; text-align:right ;margin-bottom:0;">{!! $data['invoice_no'] !!}</td>
                                           </tr>

                                           <tr>
                                               <th style="padding: 7px; font-size:14px; text-align:left;margin-bottom:0;">Invoice Date:</th>
                                               <td style="padding: 7px; font-size:14px; margin-bottom:0; text-align:right;">{!! $data['date'] !!}</td>
                                           </tr>

                                           <tr>
                                               <th style="padding: 7px; font-size:14px; text-align:left;margin-bottom:0;">Order ID:</th>
                                               <td style="padding: 7px; font-size:14px; margin-bottom:0; text-align:right;">{!! $data['order_guid'] !!}</td>
                                           </tr>

                                           {{--<tr>--}}
                                           {{--<th style="padding: 7px; font-size:14px; text-align:left;margin-bottom:0;">Order Date:</th>--}}
                                           {{--<td style="padding: 7px; font-size:14px; text-align:right;margin-bottom:0;"></td>--}}
                                           {{--</tr>--}}

                                           </tbody>
                                       </table>
                                   </td>
                               </tr>
                               </tbody>
                           </table>
                       </div>

                       <div class="billinvoice-table">
                           <table style="width:100%;  border-collapse: initial;">
                               <tbody>
                               <tr>
                                   <th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px; font-size:14px;">Sr No.</th>
                                   <th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px; font-size:14px;">Product</th>
								   <th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px; font-size:14px;">SAC Code</th>
                                   <th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px; font-size:14px;">Price (Per Unit)</th>
                                   <th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px; font-size:14px;">Quantity</th>
                                   <th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px; font-size:14px;">Discount Amount</th>
                                   <th style="background: #d3d3d3; font-weight: 600; padding: 4px 10px; font-size:14px;">Final Amount</th>
                               </tr>




                               @foreach($data['orders'] as $key=>$item)

                                   <tr>
                                       <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px; text-align:right;">{{$key+1}}</td>
                                       <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;">{{ $item->title }}
                                           <br>
                                           {{ $item->txtdesc }}

                                       </td>
									    <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;">{{$item->txt}}
                                       </td>
                                       <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px; text-align:right;">{{$item->price_per_unit}}</td>
                                       <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px; text-align:right;">{{$item->quantity}}</td>
                                       <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px; text-align:right;">{!! $item->discount !!}</td>
                                       <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px; text-align:right;">{{$item->units}}</td>
                                   </tr>

                               @endforeach


                               </tbody>
                           </table>
                       </div>


                       <div class="subtotal-asset" style="margin-top:10px;">
                           <table style="width:100%; border-collapse: initial;">
                               <tbody style="vertical-align: top;">
                               <tr class="fl-drtcolm">
                                   <td>
                                       <table style="width:250px;" class="auto-cen">
                                           <tbody>
                                           <tr>
                                               <th style="border: 1px solid #ddd; padding: 7px; font-size:14px;">Mode of Payment</th>
                                               <th style="border: 1px solid #ddd; padding: 7px; font-size:14px;">Ref No.</th>
                                               <th style="border: 1px solid #ddd; padding: 7px; font-size:14px;">Amount</th>
                                           </tr>

                                           @if($data['payment_invoice'])

                                               @foreach($data['payment_invoice'] as $key=>$payment_invoice)

                                           <tr>
                                               <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;">{!! $payment_invoice['msdyn_paymentmethod']['__DisplayName__'] !!}</td>
                                               <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;">{!! $payment_invoice['mg_bankpaymentrefno'] !!}</td>
                                               <td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;text-align:right;">{!! $payment_invoice['msdyn_amount'] !!}</td>
                                           </tr>

                                                @endforeach

                                           @endif

                                           {{--<tr>--}}
                                           {{--<td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;"></td>--}}
                                           {{--<td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;"></td>--}}
                                           {{--<td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;"></td>--}}
                                           {{--</tr>--}}

                                           {{--<tr>--}}
                                           {{--<td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;"></td>--}}
                                           {{--<td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;"></td>--}}
                                           {{--<td style=" border: 1px solid #ddd; padding: 7px; font-size:14px;"></td>--}}
                                           {{--</tr>--}}

                                           </tbody>
                                       </table>
                                   </td>

                                   <td>
                                   </td>

                                   <td style="width:300px;" class="finalbill-voice">

                                       <table>
                                           <tbody>
                                           <tr>
                                               <th style="padding: 3px; font-size:14px; text-align:left;">Total Amount</th>
                                               <td style="padding: 3px; font-size:14px; text-align:right;">{!! $data['finalamount']+$data['mg_discountamount'] !!}</td>
                                           </tr>

                                           <tr>
                                               <th style="padding: 3px; font-size:14px; text-align:left;">Discount</th>
                                               <td style="padding: 2px; font-size:14px; text-align:right; border-bottom: 1px solid #ddd;">{!! $data['mg_discountamount'] !!}</td>
                                           </tr>

                                           <tr>
                                               <th style="padding: 3px; font-size:14px; text-align:left;">Final Amount</th>
                                               <td style="padding: 3px; font-size:14px; text-align:right;">{!! $data['finalamount'] !!}</td>
                                           </tr>

                                           <th style="padding: 3px; font-size:14px; text-align:left;">CGST 9%</th>
                                           <td style="padding: 2px; font-size:14px; text-align:right;">{!! $data['mg_cgst'] !!}</td>
                                           </tr>

                                           <tr>
                                               <th style="padding: 3px; font-size:14px; text-align:left;"></th>
                                               <td style="padding: 2px; font-size:14px; text-align:right;"></td>
                                           </tr>

                                           <tr>
                                               <th style="padding: 3px; font-size:14px; text-align:left;">SGST/UTGST 9%</th>
                                               <td style="padding: 2px; font-size:14px; text-align:right;">

                                                   {!! $data['mg_utgst'] == 0 ? '':$data['mg_utgst'] !!}

                                                   {!! $data['mg_sgst'] == 0 ? '':$data['mg_sgst'] !!}

                                               </td>
                                           </tr>

                                           <tr>
                                               <th style="padding: 3px; font-size:14px; text-align:left;">IGST 18%</th>
                                               <td style="padding: 2px; font-size:14px; text-align:right; border-bottom: 1px solid #ddd;">{!! $data['mg_igst'] !!}</td>
                                           </tr>


                                           <tr>
                                               <th style="padding: 3px; font-size:14px; text-align:left;">Total Amount (Inc Tax)</th>
                                               <td style="padding: 2px; font-size:14px; text-align:right; border-bottom: 1px solid #ddd;">{!! $data['totalamountinctax'] !!}</td>
                                           </tr>


                                           <tr>

                                               <td olspan = "2" style="padding: 3px; font-size:14px; text-align:left;    font-weight: bold;">Total Amount in Words (Inc Tax)</td>
                                           </tr>

                                           <tr>

                                               <?php

                                               $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);

                                               ?>

                                               <td colspan = "2" class="qcont" style="padding: 3px; font-size:12px; text-align:left;  text-transform: uppercase;">  {{$digit->format($data['totalamountinctax'])}} </td>


                                           </tr>



                                           </tbody>
                                       </table>


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
                                           <p style="font-size:17px; color: #212529; margin:0;">Thanks for visiting Microgravity Ventures Pvt. Ltd.</p>
										   <p style="font-size:12px; color: #212529; margin:0;">Registered office: 1ST FLOOR, 18,19,20,20A,21,22,23,24, JMD EMPIRE SQUARE, MG ROAD, GURGAON, Gurgaon,
Haryana, 122002 .</p>
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



       <div class="col-md-12 col-lg-9 mx-auto invoice-design" style="max-width: 800px;margin: auto; margin-top:16px; background: url('https://microgravity.co.in/images/backgrounbill.png'); background-size:contain;">
           <table style="background-size: cover; border: 1px solid #ddd;padding: 0; background-size: cover; width:100%;">
               <tbody>
               <tr>
                   <td>
                       <div  class="main-text2">
                           <table style="width:100%; text-align:center;" class="main-text">
                               <tbody>
                               <tr>
                                   <td>
                                       <img src="https://microgravity.co.in/images/termshead.jpg" style="margin:20px 0; width:600px;">
                                   </td>
                               </tr>
                               </tbody>
                           </table>
                       </div>

                       <div style="padding-bottom:30px;">
                           <table>
                               <tbody style="font-size: 7.5px;">
                               <tr>
                                   <td>
                                       <p>
                                           <strong>
                                               Each Player or his/her parent/legal guardian, where the Player is a minor, acknowledges that he/she has carefully read the terms below prior to making payment for participation in any game at the Microgravity premises. </strong></p>
                                       </p>

                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       1. Use and experience of any and all activities at the Microgravity premises implies the acceptance of all Rules, Regulations and Instructions from the Microgravity Team for safety, health and security.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       2. Right to entry is reserved. Microgravity reserves the right to refuse entrance to anyone found under the influence of alcohol/ narcotic substance or drugs, or any person behaving in a violent manner. Further, at its discretion, Microgravity shall have the right to conduct temperature checks on all Players and Visitors seeking entry to the Microgravity premises using thermal temperature scanners, and to refuse entry to any Player/Visitor found to have a temperature above normal human temperature.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       3. Microgravity Ventures Pvt Ltd reserves the rights to request Players / Visitors to leave the Microgravity premises if they are found violating any of these rules, engaging inillegal activities or failing to comply with any of Microgravity’s safety or security measures. Anyone found under the influence of drugs/narcotic substance or alcohol will not be allowed to experience any activity or gameplay. Further, Microgravity reserves the right to request Players/Visitors to exit the premises if they are found to be exbiting known symptoms of Covid-19.  (Legal)
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       4. Microgravity Ventures Pvt Ltd reserves the right to deny access if a person is found physically unfit for any gameplay/ VR experience.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       5. Late entrants are not allowed for any scheduled game play.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       6. This MICROGRAVITY VENTURES PVT LTD centre is under constant CCTV Surveillance.
                                   </td>
                               </tr>


                               <tr>
                                   <td>
                                       7. MICROGRAVITY VENTURES PVT LTD records video of this centre and may use the images and videos being taken for any marketing/ promotional/ security purposes as it may deem fit.
                                   </td>
                               </tr>


                               <tr>
                                   <td>
                                       8. It is mandatory to accept terms and conditions on the ‘Consent & Waiver Form’ at the centre before commencing any activity/game play. Before accepting the terms and conditions on the “Consent & Waiver Form” the Players are requested to carefully read and understand the same, as it explains the inherent risks related to Virtual Reality Activities and other games at this centre. If the customer is a minor, his/her parent or guardian will be required to fill in the Consent & Waiver Form.
                                   </td>
                               </tr>


                               <tr>
                                   <td>
                                       9. Consent of the parent/legal guardian is required in order to purchase tickets/bookings for minors.
                               </tr>

                               <tr>
                                   <td>
                                       10. Minimum age limit which needs to be followed would vary for each Gameplay/ VR experience and can be confirmed with our Gaming Associates. Same is also displayed at each game area.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       11. Waiting time for the Gameplays/ VR experiences available at the centre may vary based on the number of bookings at a particular time or on a particular day.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       12. Children below the age of 14 years, accompanying Players or Visitors should not be left unattended. They should be supervised by a parent/guardian at all times within the Microgravity premises. Microgravity shall have no responsibility for the security or care of any such unattended children in the Microgravity premises. If the Player is accompanied by a child below the age of 14 years, he/she shall not be allowed to participate in any game, unless there is someone (not being a staff member of Microgravity) to supervise the child. If the Player purchases a ticket inspite of being accompanied by a child below the age of 14 years, such a Player shall not be entitled to a refund or credits for the same.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       13. The Participant agrees to pay the cost of, or indemnify and hold harmless Microgravity Ventures Private Limited (MVPL) and authorises MVPL to take all steps it considers reasonably necessary to protect the participant’s welfare in the event of his/her personal injury, including the administration of any emergency medical treatment and ambulance transportation. (Legal)
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       14. In the event any Player and / or Visitor causes any physical injury to another person at the Microgravity premises, Microgravity shall not be responsible for such action. Further, if any Player or Visitor (who is not a minor) damages any equipment at the Microgravity premises as a result of irresponsible, deliberate or reckless behaviour, the Player and / or Visitor causing such incident shall be liable to pay Microgravity for such damages. If a Player or Visitor (who is a minor) damages any equipment at the Microgravity premises, the parent/guardian of such Player or Visitor shall be liable to pay Microgravity for such damages.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       15. MICROGRAVITY VENTURES PVT LTD shall not be responsible for the actions of other Players, Visitors or any other third parties at the Microgravity premises. If a dispute arises between Players or their Visitors, MICROGRAVITY VENTURES PVT LTD shall have no responsibility or obligation to participate, mediate or indemnify any disputing party. Both the parties would be asked to leave the Microgravity premises to resolve their differences outside such premises.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       16. In case of a gaming event where the Player has already made payment for the same, if the Player’s entry at the Microgravity premises or use of any Microgravity product at such premises is restricted due to unexpected closure of the premises or technical issues in the Microgravity product, MVPL shall initiate a refund as per its  cancellation and refund policy in effect at such point in time. However, if the Microgravity premises have been shut down pursuant to a Force Majeure Event, MVPL shall not be liable to provide a refund of the ticket amount.
                                       “Force Majeure Event” shall mean and include any event beyond MVPL’s control, including (i) an Act of God including but not limited to flood, hurricane, cyclone, typhoon, drought, earthquake, volcanic activity, outbreak of infectious diseases which has an impact of frustrating the performance of this Agreement, and any other acts of God which are natural calamity; (ii) transportation strike for a continuous period of seven (7) Business days; (ii) nuclear, chemical or biological contamination; (iii) war, civil commotion or terrorist act; (iv) any act of State or other exercise of a sovereign, judicial or executive prerogative by Government of India, or any competent authority resulting in the appropriation of the assets of MVPL or affecting the ability of MVPL to open the premises.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       17. Microgravity Ventures Pvt Ltd management reserves the right to change the pricing and terms and conditions without any notice.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       18. No two Promotional codes (issued by MVPL) can be combined by the Player.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       19. Microgravity Ventures Pvt Ltd reserves the right to change, alter, modify and discontinue any promotional offers, Contest prizes and other freebies offered without prior notice.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       20. All images & terminology used in all communications related to MICROGRAVITY VENTURES PVT LTD are for creative, descriptive and representation purposes only.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       21. Gift vouchers cannot be exchanged for cash, refunded or replaced.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       22. Promotional codes cannot be exchanged for cash.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       23. MICROGRAVITY VENTURES PVT LTD would levy a charge of Rs. 100 in case of the gaming card not being available or lost.
                                   </td>
                               </tr>

                               <tr>
                                   <td>
                                       24.  Government taxes are applicable on all activities/gameplays.
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


</div>

@endsection


@section('script')



@endsection
