@extends('layouts.layout')

@section('styles')

    <link rel="stylesheet" type="text/css" href="/css/games.css"/>
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="/css/reating/demo/styles.css"/>

    <style>
        .col.selectable input {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 80%;
            height: 100%;
            padding: 1px;
            border: none;
            pointer-events: none;
            border-radius: 35px !important;
            padding-left: 16px;
            background-color: #ee100f;
            color: #ffffff;
            font-size: 1.2em;
        }

        .br-theme-bars-pill .br-widget a {
            padding: 20px 20px;
            text-decoration: none;
            font-size: 6.2px;
            margin-left: 2em;
            line-height: 3;
            text-align: center;
            background-image: url(/css/reating/img/star-empty.svg);
            background-size: 100%;
            font-weight: 400;
        }

        .br-theme-bars-pill .br-readonly a {
            cursor: default;
            background-image: url(/css/reating/img/star-empty.svg);
            background-size: 50%;
        }

        .br-theme-bars-pill .br-widget a.br-active,
        .br-theme-bars-pill .br-widget a.br-selected {
            background-image: url(/css/reating/img/star-full.svg);
            background-size: 100%;
            color: white;
        }

        .booking-player-box {
            margin-top: 1.5rem;
        }

        .bookp{
            margin: 2em 0 0 0;
            font-size: 1.2em;
        }

        .bookp1{
            font-size: 1.2em;
            color:red;
        }

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
    <div class="hero-text-booking">
    </div>

    <div class="loading" style="visibility: hidden;">

        <div>
            <img src="/images/loading.gif" alt="" />
            <p style="color: #ffffff;margin-top: 1rem;">Your booking is under process... .. .</p>
        </div>

    </div>

    <section class="container about-us-booking">

        <div class="col-md-12">

            <div class="row booking-form">

                <div class="col selectable">

                    <select id="bay_type" class="form-control" onchange="return ApplyFiltersGD('game');">

                        <option value="">--Select Bay--</option>
                        <option value="bay1" {{$data['bay_type'] =="bay1" ? 'selected="selected"':''}}>Bay 1</option>
                        <option value="bay2" {{$data['bay_type'] =="bay2" ? 'selected="selected"':''}}>Bay 2</option>

                    </select>

                </div>

                <div class="col selectable">

                    <select id="product_type" class="form-control" onchange="return ApplyFiltersGD('game');">

                        <option value="">--Select Product--</option>

                        @if($data['get_golf_products'])

                            @foreach($data['get_golf_products'] as $key=>$get_golf_products)

                                <option value="{{$get_golf_products->ProductID}}" {{$get_golf_products->ProductID == $data['ProductType'] ? 'selected' :''}}>{{$get_golf_products->ProductIDValue}}</option>

                            @endforeach

                        @endif

                    </select>

                </div>

                <div class="col selectable" style="display: none;">
                    <select id="gamename" class="form-control" onchange="return ApplyFiltersGD('game');">

                        @if($data['get_all_games'] != null)

                            @foreach($data['get_all_games'] as $key=>$get_all_games)
                                <option value="{{json_encode($get_all_games)}}" {{$get_all_games->SubProductGUID == $data['SubProductGUID'] ? 'selected' :''}}>{{$get_all_games->SubProductName}}</option>
                            @endforeach

                        @endif

                    </select>

                    <input type="text" id="gni" name="gamename" value="" />

                </div>


                <div class="col">

                    <?php

                    $get_date = explode(' ',$data['date'])

                    ?>

                    <input placeholder="DOB" id="gdate" type="date" class="form-control c-date"   name="txtDate" value="{{$get_date[0]}}" required="required" autofocus="" onchange="return ApplyFiltersGD('date');">

                    
                </div>
            </div>
        </div>

        <div id="scroll-box">

            <p class="bookp">Check for availability of both the bays with your preferred timings:</p>

            <p class="bookp1"></p>

            <div id="slots-data">
                <div id="scroll-box-tab" class="col-md-12  booking-player-box">

                    @if($data['slot_data']->value != null)

                        <?php
                            $count_row = 1;
                        ?>

                        @foreach($data['slot_data']->value as $key => $slot_data)

                            <?php
                                $get_time = explode(' ',$slot_data->mg_name);
                                $get_time = explode('-',$get_time[0]);
                                $get_time_diff1 = explode(':',$get_time[0]);
                                $get_time_diff2 = explode(':',$get_time[1]);
                                $get_time = $get_time_diff2[1]-$get_time_diff1[1];
                            ?>

                            @if($slot_data->_mg_subproduct_value !=null && $data['GameDuration']==$get_time && $data['SubProductGUID'] == $slot_data->_mg_subproduct_value)

                                <ul class="booking-slot star-border-left">
                                    <li class="booking-time">
                                        <p>
                                            <?php
                                                $slot_time  = explode(" ",$slot_data->mg_name);
                                            ?>
                                            {{$slot_time[0]}}
                                        </p>
                                    </li>

                                    <li>

                                        <section class="section" id="section-1">
                                            <form class="form-1">
                                                <div class="form-field">

                                                    <select id="star-rating{{$key}}" class="star-rating" onchange="return ApplyFilters({{json_encode($slot_data)}},this.id,{{json_encode($data['$get_sub_product_family'])}});">
                                                        <option value="">Loading slots…</option>

                                                        @for($i = 1; $i<= $slot_data->mg_playersbooked;$i++)
                                                            <option readonly="" value="{{$i}}" selected="selected">player {{$i}}</option>
                                                        @endfor

                                                        @for($j = 1; $j<= $slot_data->mg_maximumplayersallowed;$j++)
                                                            <option value="{{$j}}">player {{$j}}</option>
                                                        @endfor
                                                    </select>
                                                </div>

                                            </form></section>

                                    </li>

                                </ul>

                            @endif

                            @if($slot_data->_mg_subproduct_value !=null && $data['GameDuration']==$get_time && $data['SubProductGUID'] != $slot_data->_mg_subproduct_value)

                                @if($count_row ==1)
                                    <h3>No Slots Available!</h3>
                                @endif

                                <?php
                                $count_row++;
                                ?>

                            @endif


                            @if($slot_data->_mg_subproduct_value ==null)


                                <ul class="booking-slot star-border-left">
                                    <li class="booking-time">
                                        <p>
                                            <?php
                                                $slot_time  = explode(" ",$slot_data->mg_name);
                                            ?>

                                            {{$slot_time[0]}}
                                        </p>
                                    </li>

                                    <li>

                                        <section class="section" id="section-1">
                                            <form class="form-11">
                                                <div class="form-field">
                                                    <select id="star-rating{{$key}}" class="example-pill" name="rating" autocomplete="off" onchange="return ApplyFilters({{json_encode($slot_data)}},this.id,{{json_encode($data['$get_sub_product_family'])}},{{$key}});" data-slotid="{{$slot_data->mg_slotitemsid}}" data-store-ob-id="{{$slot_data->_mg_store_value}}" data-mg-starttime="{{$slot_data->mg_starttime}}" data-mg-endtime="{{$slot_data->mg_endtime}}" >
                                                        <option value=""></option>
                                                        @for($j = 1; $j<= $slot_data->mg_maximumplayersallowed;$j++)
                                                            <option value="{{$j}}"></option>
                                                        @endfor
                                                    </select>

                                                </div>

                                            </form></section>

                                    </li>

                                </ul>


                            @endif

                        @endforeach

                    @else

                        <h3>No Slots Available!</h3>

                    @endif

                </div>
            </div>
        </div>

        <div class="text-center">

            @if($data['slot_data']->value != null)
                <div style="display: flex;text-align: center;justify-content: center;">
                    <a href=""  class="btn booking-btn" id="add-to-cart">Add to cart</a>
                    <a href="#" id="checkout"  class="btn booking-btn" >Checkout</a>
                </div>
            @endif
        </div>

    </section>

    <div class="result-booking" >
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <span>PLAYERS</span>
                    <h2 id="slot-player">-</h2>
                    <input type="hidden" id="total_player">
                    <input type="hidden" id="slot_object">

                </div>
                <div class="col-sm">
                    <span>TIMINGS</span>
                    <h2 id="slot-timing">-</h2>
                </div>
                <div class="col-sm">
                    <span>TOTAL</span>
                    <h2>&#x20B9;&nbsp;<span id="slot-cost">-</span></h2>
                </div>
            </div>
        </div>
    </div>



    <div class="modal" tabindex="-1" role="dialog" id="mdl">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body" style="text-align: center;">
                    <p style="font-size: 1.4em;">Active booking is under progress.</p>
                </div>
                <div class="modal-footer">

                    <form method="post" action="/cancel/order/data">
                        @csrf
                        <button class="btn btn-success btn-failed1 btn-d" type="submit">Cancel Order</button>
                    </form>


                    <a  style="margin-right: 1em;" href="/wavier-tc" class="btn btn-success btn-failed1">Proceed to booking</a>


                </div>
            </div>
        </div>
    </div>



@endsection

@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js"></script>
    <script src="/css/reating/src/star-rating.js?ver=3.1.5"></script>
    <script>
        var destroyed = false;
        var starratings = new StarRating( '.star-rating', {
            onClick: function( el ) {
                console.log( 'Selected: ' + el[el.selectedIndex].text );
            },
        });
        document.querySelector( '.toggle-star-rating' ).addEventListener( 'click', function() {
            if( !destroyed ) {
                starratings.rebuild();
            }
            else {
                starratings.rebuild();
                destroyed = false;
            }
        });

        $('.star-rating0').click(function(){
            alert('test');
        });

    </script>

    <script>
        if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');
    </script>


    <script>

        var today = new Date().toISOString().split('T')[0];
        document.getElementsByName("txtDate")[0].setAttribute('min', today);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var isFilterApplied = false;
        var ApplyFilters = function(slot_data,element_id,s_p_family,key){

            var get_player = element_id.replace ( /[^\d.]/g, '' );
            var get_product_type = "{{$data['ProductType']}}".replace ( /[^\d.]/g, '' );
            var product_player = get_product_type.charAt(0);
            var product_slot = get_product_type.charAt(3);
            var up_element_id = "#"+element_id;
            var product_type_id = '{{$data['ProductType']}}';

            isFilterApplied = true;

            //logic for product validation

            var total_player  = document.getElementById(element_id);
            total_player = total_player.options[total_player.selectedIndex].value;

            if (total_player >product_player){

                $('.bookp1').html('Not allowed! please select only '+product_player+' player per slot!');
                localStorage.clear();
                $(up_element_id).barrating('clear');
                return false;
            }

            var values = $('.example-pill').map(function() {
                return this.id + " " + (this.value == "" ? "":this.value+" sc ");
            });

            function filterArray ( arr ) {
                var i = arr.length;
                while (i--) {
                    if (arr[i].indexOf('sc') < 0) {
                        arr.splice(i, 1);
                    }
                }
            }

            filterArray( values );

            var values = $(values).map(function() {
                return parseInt(this[11]+this[12],10);
            });

            var clear_empty_value = $.grep(values,function(n){
                return(values);
            });

            var slot_length = values.length;

            var differenceAry = clear_empty_value.slice(1).map(function(n, i) { return n - clear_empty_value[i]; });
            var check_consecutive_number= differenceAry.every(value => value == 1);

            if (slot_length >product_slot || !check_consecutive_number){

                $('.bookp1').html('Not allowed! please select only '+product_slot+' slot and in consecutive!');

                localStorage.clear();
                var convert_num_to_Array = [clear_empty_value];
                    convert_num_to_Array = convert_num_to_Array[0];

                for(var i=0; i <convert_num_to_Array.length; i++) {

                   $("#star-rating"+convert_num_to_Array[i]).barrating('clear');
                }
                return false;
            }

            //logic for product validation ends
                $("#slot-cost").html('-');
                $("#slot-player").html('-');
                $("#slot-timing").html('-');

            $.ajax({

                type:'POST',

                url:'/get-price-golf',

                data:{slot_data:slot_data,total_player:total_player,sub_product_family:s_p_family,product_type_id:product_type_id},

                success:function(data){

                    if (localStorage.getItem(element_id) !== null) {
                        localStorage.removeItem(element_id);
                    }
                    localStorage.setItem(element_id, JSON.stringify(slot_data));
                    console.log(slot_data);
                    $("#slot-cost").html(data.slot_amount);
                    $("#slot-player").html(data.product_name);
                    $("#slot-timing").html(data.slot_date+'<br> '+data.slot_time);
                    $("#total_player").val(data.total_player);
                    $("#slot_object").val(JSON.stringify(slot_data));
                }
            });
        }

        function ApplyFiltersGD(filtertype) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var game_name = document.getElementById("gamename");
            game_name = game_name.options[game_name.selectedIndex].value;
            game_name = JSON.parse(game_name);

            var SubProductGUID = game_name.SubProductGUID;
            var ProductFamilyGUID = game_name.ProductFamilyGUID;
            var StoreGUID = game_name.StoreGUID;

            if (filtertype == "date") {
                var play_date = document.getElementById("gdate");
                play_date = play_date.value;
                play_date = play_date+ " 00:00:00";
            }else{
                var play_date = $('.c-date').val();
            }

            var bay_type = document.getElementById("bay_type");
            bay_type = bay_type.options[bay_type.selectedIndex].value;
            var product_type = document.getElementById("product_type");
            product_type = product_type.options[product_type.selectedIndex].value;
            var url_data = '/booking-golf/'+SubProductGUID+'/'+ProductFamilyGUID+'/'+StoreGUID+'/'+play_date+'/'+product_type+'/'+bay_type;

            $.ajax({

                type:'GET',

                url:url_data,

                data:{SubProductGUID:SubProductGUID,
                    ProductFamilyGUID:ProductFamilyGUID,
                    StoreGUID:StoreGUID},

                success:function(response){
                    document.getElementById('slots-data').innerHTML = response;
                    window.history.pushState("Microgravity", "Details",url_data);
                },

                complete: function() {
                    $.getScript("https://cdnjs.cloudflare.com/ajax/libs/jquery-bar-rating/1.2.2/jquery.barrating.min.js", function() {

                        location.reload(true);

                    });

                }

            });
        }
    </script>

    <script>

        $('#add-to-cart').click(function (e) {
            e.preventDefault();

            var get_product_type = "{{$data['ProductType']}}".replace ( /[^\d.]/g, '' );
            var product_player = get_product_type.charAt(0);
            var product_slot = get_product_type.charAt(3);
            var product_type_id = '{{$data['ProductType']}}';

            var values = $('.example-pill').map(function() {
                return this.id + " " + (this.value == "" ? "":this.value+" sc ");
            });

            function filterArray ( arr ) {
                var i = arr.length;
                while (i--) {
                    if (arr[i].indexOf('sc') < 0) {
                        arr.splice(i, 1);
                    }
                }
            }

            filterArray( values );

            var values = $(values).map(function() {
                return parseInt(this[11]+this[12],10);
            });
            var clear_empty_value = $.grep(values,function(n){
                return(values);
            });
            var slot_length = values.length;
            var differenceAry = clear_empty_value.slice(1).map(function(n, i) { return n - clear_empty_value[i]; });
            var check_consecutive_number= differenceAry.every(value => value == 1);
            var player_values = $('.example-pill').map(function() {
                return (this.value == "" ? "":this.value+" sc ");
            });

            function playerfilterArray ( arr ) {
                var i = arr.length;
                while (i--) {
                    if (arr[i].indexOf('sc') < 0) {
                        arr.splice(i, 1);
                    }
                }
            }

            playerfilterArray( player_values );

            var player_values = $(player_values).map(function() {
                return parseInt(this[0],10);
            });

            var clear_empty_player_value = $.grep(player_values,function(n){
                return(player_values);
            });

            const allEqual = arr => arr.every( v => v === arr[0] );
            var check_equal_slot = allEqual(clear_empty_player_value);

            var check_equal_s = null;
            if (product_player != clear_empty_player_value[0]) {
                check_equal_s = false;
            }else{
                check_equal_s = true;
            }

            var final_check_player_slot = null;
            if (check_equal_s && check_equal_slot) {
                final_check_player_slot = true;
            }else{
                final_check_player_slot = false;
            }

            if (slot_length != product_slot || !final_check_player_slot){
                localStorage.clear();
                alert('Please select '+product_slot+" slots & "+ product_player + " players each slot!" );
                return false;
            }

            //logic for product validation ends

            var values_value_alias = $('.example-pill').map(function() {
                return (this.value == "" ? "":'#')+this.id;
            });

            function filterArraytwo ( arr ) {
                var i = arr.length;
                while (i--) {
                    if (arr[i].indexOf('#') < 0) {
                        arr.splice(i, 1);
                    }
                }
            }

            filterArraytwo( values_value_alias );


            var slotobj = {};
            var slot_array =  [];
            var slot_ob_id;
            var store_ob_id;
            var start_time;
            var end_time;

            values_value_alias.each(function (index, value) {

                slot_ob_id = $(value).attr("data-slotid");
                store_ob_id = $(value).attr("data-store-ob-id");
                start_time = $(value).attr("data-mg-starttime");
                end_time = $(value).attr("data-mg-endtime");

                slotobj = {
                    slot_id: slot_ob_id,
                    store_id: store_ob_id,
                    start_time: start_time,
                    end_time: end_time,
                };
                slot_array.push(slotobj);
            });

            var total_player  = document.getElementById('total_player');
            total_player = total_player.value;

            if(total_player != ""){
                $('#add-to-cart').prop('disabled', false);
            }
            else{
                $('#add-to-cart').prop('disabled', true);
                return false;
            }

            var slot_object  = document.getElementById('slot_object');
            slot_object = slot_object.value;
            var parse_slot_object = $.parseJSON(slot_object);
            var mg_slotitemsid = parse_slot_object['mg_slotitemsid'];
            var mg_store_value = parse_slot_object['_mg_store_value'];
            var slot_cost  = document.getElementById('slot-cost');
            slot_cost = slot_cost.innerHTML;
            var game_name = document.getElementById("gamename");
            game_name = game_name.options[game_name.selectedIndex].value;
            var product_type_name = $("#slot-player").html();
            var play_date = document.getElementById("gdate");
            play_date = play_date.value;

            fbq('track', 'AddToCart');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                type:'POST',
                url:'/golf-cart',
                data:{slot_cost:slot_cost,slot_data:slot_object,
                    total_player:total_player,game_name:game_name,
                    play_date:play_date,product_type_name:product_type_name,slot_array:slot_array},
                beforeSend: function() {
                    $('#add-to-cart').attr('disabled', true);
                    $('.loading').css('visibility', 'initial');                },
                complete: function() {
                    $('#add-to-cart').attr('disabled', false);
                    $('.loading').css('visibility', 'hidden');
                    $('.wait').remove();
                },
                success:function(data){
                    window.location = "/cart";
                }
            });
        });

    </script>

    <script>

        $('#checkout').click(function (e) {
            e.preventDefault();
            var get_product_type = "{{$data['ProductType']}}".replace ( /[^\d.]/g, '' );
            var product_player = get_product_type.charAt(0);
            var product_slot = get_product_type.charAt(3);
            var product_type_id = '{{$data['ProductType']}}';
            var values = $('.example-pill').map(function() {
                return this.id + " " + (this.value == "" ? "":this.value+" sc ");
            });

            function filterArray ( arr ) {
                var i = arr.length;
                while (i--) {
                    if (arr[i].indexOf('sc') < 0) {
                        arr.splice(i, 1);
                    }
                }
            }

            filterArray( values );

            var values = $(values).map(function() {
                return parseInt(this[11]+this[12],10);
            });
            var clear_empty_value = $.grep(values,function(n){
                return(values);
            });
            var slot_length = values.length;
            var differenceAry = clear_empty_value.slice(1).map(function(n, i) { return n - clear_empty_value[i]; });
            var check_consecutive_number= differenceAry.every(value => value == 1);
            var player_values = $('.example-pill').map(function() {
                return (this.value == "" ? "":this.value+" sc ");
            });

            function playerfilterArray ( arr ) {
                var i = arr.length;
                while (i--) {
                    if (arr[i].indexOf('sc') < 0) {
                        arr.splice(i, 1);
                    }
                }
            }

            playerfilterArray( player_values );

            var player_values = $(player_values).map(function() {
                return parseInt(this[0],10);
            });
            var clear_empty_player_value = $.grep(player_values,function(n){
                return(player_values);
            });
            const allEqual = arr => arr.every( v => v === arr[0] );
            var check_equal_slot = allEqual(clear_empty_player_value);
            var check_equal_s = null;
            if (product_player != clear_empty_player_value[0]) {
                check_equal_s = false;
            }else{
                check_equal_s = true;
            }
            var final_check_player_slot = null;

            if (check_equal_s && check_equal_slot) {
                final_check_player_slot = true;
            }else{
                final_check_player_slot = false;
            }

            if (slot_length != product_slot || !final_check_player_slot){
                localStorage.clear();
                alert('Please select '+product_slot+" slots & "+ product_player + " players each slot!" );
                return false;
            }

            //logic for product validation ends
            var values_value_alias = $('.example-pill').map(function() {
                return (this.value == "" ? "":'#')+this.id;
            });

            function filterArraytwo ( arr ) {
                var i = arr.length;
                while (i--) {
                    if (arr[i].indexOf('#') < 0) {
                        arr.splice(i, 1);
                    }
                }
            }

            filterArraytwo( values_value_alias );

            var slotobj = {};
            var slot_array =  [];
            var slot_ob_id;
            var store_ob_id;
            var start_time;
            var end_time;

            values_value_alias.each(function (index, value) {

                slot_ob_id = $(value).attr("data-slotid");
                store_ob_id = $(value).attr("data-store-ob-id");
                start_time = $(value).attr("data-mg-starttime");
                end_time = $(value).attr("data-mg-endtime");

                slotobj = {
                    slot_id: slot_ob_id,
                    store_id: store_ob_id,
                    start_time: start_time,
                    end_time: end_time,
                };
                slot_array.push(slotobj);
            });

            var total_player  = document.getElementById('total_player');
            total_player = total_player.value;

            if(total_player != ""){
                $('#add-to-cart').prop('disabled', false);
            }
            else{
                $('#add-to-cart').prop('disabled', true);
                return false;
            }

            var slot_object  = document.getElementById('slot_object');
            slot_object = slot_object.value;
            var parse_slot_object = $.parseJSON(slot_object);
            var mg_slotitemsid = parse_slot_object['mg_slotitemsid'];
            var mg_store_value = parse_slot_object['_mg_store_value'];
            var slot_cost  = document.getElementById('slot-cost');
            slot_cost = slot_cost.innerHTML;
            var game_name = document.getElementById("gamename");
            game_name = game_name.options[game_name.selectedIndex].value;
            var product_type_name = $("#slot-player").html();
            var play_date = document.getElementById("gdate");
            play_date = play_date.value;

            fbq('track', 'InitiateCheckout');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({

                type:'POST',
                url:'/golf-checkout',
                data:{slot_cost:slot_cost,slot_data:slot_object,
                    total_player:total_player,game_name:game_name,
                    play_date:play_date,product_type_name:product_type_name,slot_array:slot_array},
                beforeSend: function() {
                    $('#checkout').attr('disabled', true);
                    $('.loading').css('visibility', 'initial');
                },
                complete: function() {
                    $('#checkout').attr('disabled', false);
                    $('.loading').css('visibility', 'hidden');
                    $('.wait').remove();
                },
                success:function(data){

                    window.location = "/wavier-tc";
                }
            });

        });

    </script>


    <script>
        $(function() {
            function ratingEnable() {

                $('.example-pill').barrating('show', {
                    theme: 'bars-pill',
                    initialRating: ['10'],
                    showValues: false,
                    showSelectedRating: false,
                    allowEmpty: true,
                    emptyValue: '',
                    onSelect: function(value, text) {
                    }
                });
            }

            function ratingDisable() {
                $('select').barrating('destroy');
            }

            $('.rating-enable').click(function(event) {
                event.preventDefault();

                ratingEnable();

                $(this).addClass('deactivated');
                $('.rating-disable').removeClass('deactivated');
            });

            $('.rating-disable').click(function(event) {
                event.preventDefault();

                ratingDisable();

                $(this).addClass('deactivated');
                $('.rating-enable').removeClass('deactivated');
            });

            ratingEnable();
        });
    </script>

@endsection
