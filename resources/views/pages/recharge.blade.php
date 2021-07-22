@extends('layouts.layout')

@section('styles')
   <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>
	<link rel="stylesheet" type="text/css" href="/css/neweve.css"/>


   <style>
       .loading{
           width: 100%;
           height: 100%;
           display: flex;
           position: fixed;
           justify-content: center;
           align-items: center;
           background: rgba(0, 0, 0, 0.7);
           z-index: 999999;
           top: 0;
       }

       .loading div{
           text-align: center;
           margin-top: 1em;
       }

       .loading p{
           color: #ffffff;
           font-size: 1.5em;
           padding: 0em 1em 0em 1em;
           font-weight: 700;
           margin: 0;
       }
   </style>


@endsection
@section('content')

    <div class="loading" style="visibility: hidden;">

        <div>
            <img src="/images/loading.gif" alt="" />
            <p style="color: #ffffff;margin-top: 1rem;">Your booking is under process... .. .</p>
        </div>

    </div>

	
	<section class="medialisting-thumb">
		<div class="container gamingrecharge">
			<div class="row">


                @if(isset($data['get_recharge_data']))

                    @foreach($data['get_recharge_data'] as $key=>$get_recharge_data_value)


                        <?php


                            $ran = array("gametypeone","gametypetwo","gametypethree","gametypefour");
                            $random = $ran[mt_rand(0, count($ran) - 1)];


                        ?>


                        <div class="col-md-4">
                            <div class="cardcommon {{$random}}">

                                <input type="hidden" class="productid_value" name="_productid_value" value="{{$get_recharge_data_value['_productid_value']}}">
                                <input type="hidden" class="amount" name="amount" value="{{$get_recharge_data_value['amount']}}">
                                <input type="hidden" class="transactioncurrencyid_value" name="_transactioncurrencyid_value" value="{{$get_recharge_data_value['_transactioncurrencyid_value']}}">
                                <input type="hidden" class="productpricelevelid" name="productpricelevelid" value="{{$get_recharge_data_value['productpricelevelid']}}">


                                <img src="/images/mglogo.png" alt="Micogravity Ventures Gaming Arena" style="width: 96px;filter: brightness(0%) invert(1);z-index: 3;position: absolute;left: 4px;">
                                <div class="midcont">
                                <h4>Game Card {{$get_recharge_data_value['amount']}}</h4>
                                    <p class="gmprice">Rs. {{$get_recharge_data_value['amount']}} </p>
                                    <p class="stausgamesd"><b>Selected</b></p>
                                </div>
                            </div>
                        </div>

                    @endforeach

                @endif
				

				
			</div>


					<div class="mobkm" style="text-align: center;">

						<a href="javascript:void(0);" class="btn know-more" data-toggle="modal" data-target="#exampleModal">Recharge</a>
                    </div>
					
		</div>
	</section>
	
	
	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
       <h4>Are you sure you want to recharge this Gaming Card ?</h4>
		<div class="text-center">


            <form action="/recharge" method="post">
                {{ csrf_field() }}

                <input type="hidden" id="recharge_data" name="recharge_data" value="">
                <button type="submit" id="recharge_yes"  class="btn know-more">Yes</button>
            </form>


			<button type="button" class="btn know-more btn-secondary" data-dismiss="modal" style="background: #333833;color: #fff; border: none; border: 2.2px solid #333833;">No</button>
		</div>
      </div>
     
    </div>
  </div>
</div>


	
@endsection

@section('script')
 <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.5.7/slick.min.js"></script>

<script>

	$('.cardcommon ').click(function(){
        var data = {};

        var item=$(this).parent();
        var amount = $(this).find('.amount').val();
        var productid_value = $(this).find('.productid_value').val();
        var transactioncurrencyid_value = $(this).find('.transactioncurrencyid_value').val();
        var productpricelevelid = $(this).find('.productpricelevelid').val();

        data['amount'] = amount;
        data['productid_value'] = productid_value;
        data['transactioncurrencyid_value'] = transactioncurrencyid_value;
        data['productpricelevelid'] = productpricelevelid;

        $('#recharge_data').val(JSON.stringify(data));

        $('html, body').animate({
            scrollTop: $(".mobkm").offset().top-100
        }, 2000);

        $('.col-md-4').removeClass('active');
        item.addClass("active");

	});

</script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('.all-games').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '80px',
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }

                ]

            });
        });

    </script>

    <script type="text/javascript">

        $(document).ready(function(){

            $('.events').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: true,
                            centerMode: true,
                            centerPadding: '80px',
                            slidesToShow: 1
                        }
                    }

                ]

            });
        });

    </script>

    <script type="text/javascript">

        $(document).ready(function(){
            $('.media').slick({
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });

    </script>

    <script>

        if(navigator.userAgent.indexOf('Mac') > 0) {
            $('body').addClass('mac-os');
        }
        if(navigator.userAgent.indexOf('Safari') > 0) {
            $('body').addClass('safari');
        }
        if(navigator.userAgent.indexOf('Chrome') > 0) {
            $('body').addClass('chrome');
        }

    </script>


     <script>

         $('#recharge_yes').click(function (e) {

             $('.loading').css('visibility', 'initial');

             // e.preventDefault();
             //
             // var recharge_data = $('#recharge_data').val();
             //
             // $.ajaxSetup({
             //     headers: {
             //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             //     }
             // });
             //
             // $.ajax({
             //
             //     type:'POST',
             //
             //     url:'/recharge',
             //
             //     data:{"recharge_data":recharge_data},
             //     beforeSend: function() {
             //         $('#recharge_yes').attr('disabled', true);
             //         $('.loading').css('visibility', 'initial');
             //
             //     },
             //     complete: function() {
             //         $('#recharge_yes').attr('disabled', false);
             //         $('.loading').css('visibility', 'hidden');
             //         $('.wait').remove();
             //     },
             //     success:function(data){
             //
             //         console.log(data);
             //     }
             //
             // });



         });


     </script>

  

@endsection
