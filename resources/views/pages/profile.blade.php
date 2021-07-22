@extends('layouts.layout')

@section('content')

    <style>
        .frm-margin {
            margin-top: 0;
        }

        .profile-sec .tab-content{
            margin: 2em 0em 2em 0em;
        }

        .profile-sec .tab-content .card{
            margin: 1em 0em 1em 0em;
        }

        .profile-sec .card-header {
            background-color: #fece00;
        }
        .profile-sec .table .thead-dark th {
            color: #5e5328;
            border-color: #fece00;
            background-color: #fece00;
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
        
        .profile-sec .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            position: relative;
            font-weight: 500;
            font-size: 1em;
            background-color: #fece00;
        }

        .profile-sec li.nav-item {
            margin-left: 5px;
            margin-bottom: 0.5rem;
        }
        .profile-sec .nav-link.active{
            background-color: #fece00;
            border-color: #fece00 #fece00 #fece00;
            font-weight: 600
        }
        .profile-sec .form-control{
            background-color: #ffffff;
        }
        .gm_card,.invoice{
            color: black;
            font-weight: 600;
        }
        .gm_card:hover, .invoice:hover{
           color:#fece00;
            text-decoration: none;
        }
        @media screen and (max-width: 768px) {
            .profile-sec .nav-link {
                display: block;
                padding: 0.1rem 0.2rem;
                position: relative;
                font-weight: 500;
                font-size: 1em;
                background-color: #fece00;
            }

            .profile-sec li.nav-item {
                margin-left: 5px;
                margin-bottom: 0rem;
            }
            .profile-sec .nav-link.active{
                background-color: #fece00;
                border-color: #fece00 #fece00 #fece00;
                font-weight: 600
            }

            .tab-content .row {
                margin: 0;
                padding: 0;
            }
        }

    </style>

    <div class="loading" style="visibility: hidden;">

        <div>
            <img src="/images/loading.gif" alt="" />
            <p style="color: #ffffff;margin-top: 1rem;">Generating Invoice... .. .</p>
        </div>

    </div>

    <div class="container frm-margin profile-sec">

        <div class="row">
            <img style="width: 100%;" src="/images/banner1.png" alt="">
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">


                <!-- Nav tabs -->
                <ul class="nav nav-tabs" id="myTab" role="tablist" >
                    <li class=" active nav-item ">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#user-profile" role="tab" aria-controls="user-profile" aria-selected="true">User Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#change-password" role="tab" aria-controls="change-password" aria-selected="false">Change Password</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">My Orders</a>
                    </li>
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Logout</a>--}}
                    {{--</li>--}}
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="user-profile" role="tabpanel" >

                        <div>
                            <p style="color: green;">
                                @if(Session::has('success'))
                                    {{ Session::get('success') }}
                                @endif
                            </p>
                        </div>

                       <div class="col-md-12 row">

                           <div class="col-md-6">
                               <div class="card">
                                   <div class="card-header">Name</div>
                                   <div class="card-body">{{Auth::user()->name}}</div>

                               </div>
                           </div>

                           <div class="col-md-6">
                               <div class="card">
                                   <div class="card-header">Email</div>
                                   <div class="card-body">{{Auth::user()->email}}</div>

                               </div>
                           </div>

                           <div class="col-md-6">
                               <div class="card">
                                   <div class="card-header">Phone No.</div>
                                   <div class="card-body">{{Auth::user()->phone}}</div>

                               </div>
                           </div>

                           <div class="col-md-6">
                               <div class="card">
                                   <div class="card-header">DOB</div>
                                   <div class="card-body">{{date('d-M-Y',strtotime(Auth::user()->dob))}} ({{ Auth::user()->age. ' Yrs' }})</div>

                               </div>
                           </div>

                           <div class="col-md-6">
                               <div class="card">
                                   <div class="card-header">City</div>
                                   <div class="card-body">{{strtoupper(Auth::user()->city)}}</div>

                               </div>
                           </div>

                           <div class="col-md-6">
                               <div class="card">
                                   <div class="card-header">Last Password Change</div>
                                   <div class="card-body">{{ Auth::user()->updated_at->diffForHumans() }}
                                   </div>

                               </div>
                           </div>



                           @if(isset($check_customer_data))

                               <div class="col-md-6">
                                   <div class="card">
                                       <div class="card-header">Game Card ID</div>
                                       <div class="card-body">


                                           @if($check_customer_data->mg_RFIDCard == null)

                                            No gaming card attached!

                                           @else

                                           {{ $check_customer_data->mg_RFIDCard->mg_name }}

                                           @endif


                                       </div>

                                   </div>
                               </div>

                               <div class="col-md-6">
                                   <div class="card">
                                       <div class="card-header">Game Card Value</div>
                                       <div class="card-body">{{ $check_customer_data->mg_gamevalue }}
                                       </div>

                                   </div>
                               </div>
                           @endif

                       </div>
                    </div>
                    <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="profile-tab">


                        <div>

                            <p style="color: red;">
                                @if(Session::has('error'))
                                    {{ Session::get('error') }}
                                @endif
                            </p>

                        </div>

                        <div>
                            <form method="POST" action="{{ route('update-password') }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="old_password" class="col-md-2 col-form-label">{{ __('Current password') }}</label>
                                    <div class="col-md-6">
                                        <input id="old_password" name="old_password" type="password" class="form-control" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="new_password" class="col-md-2 col-form-label">{{ __('New password') }}</label>
                                    <div class="col-md-6">
                                        <input id="new_password" name="new_password" type="password" class="form-control" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password_confirm" class="col-md-2 col-form-label">{{ __('Confirm password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password_confirmation" name="new_password_confirmation" type="password" class="form-control" required
                                               autofocus>
                                    </div>
                                </div>
                                <div class="form-group login-row row mb-0">
                                    <div class="col-md-8 offset-md-2">
                                        <button type="submit" class="btn know-more">
                                            {{ __('Update') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="messages" role="tabpanel" aria-labelledby="messages-tab">

                        <div id="order">

                            @if(isset($my_orders))

                                <div style="overflow-x: auto;">
                                    <table class="table table-bordered table-hover">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">#order</th>
                                            <th scope="col">Created On</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Delivery&nbsp;Date</th>
                                            <th scope="col">Total Amount</th>
                                            <th scope="col">Details</th>
                                            <th scope="col">Invoice</th>
                                        </tr>
                                        </thead>
                                        <tbody id="ord">


                                        @foreach($my_orders->value as $key=>$my_orders_data)

{{--                                            {{dd($my_orders_data)}}--}}
{{----}}
                                            <tr>
                                                <td scope="row">{{$my_orders_data->ordernumber}}</td>
                                                <td>{{\Carbon\Carbon::parse($my_orders_data->createdon)->addMinutes(330)->format('d-m-Y H:i:s')}}</td>
                                                <td scope="row">{{$my_orders_data->description}}</td>

                                                <td>{{\Carbon\Carbon::parse($my_orders_data->requestdeliveryby)->addMinutes(330)->format('d-m-Y')}}</td>


                                                <td>{{$my_orders_data->totalamount}}</td>
                                                <td>


                                                    <a class="gm_card" href="#" data-toggle="modal" data-target="#exampleModal" data-contents="{{json_encode($my_orders_data->order_details)}}"><i class="fa fa-level-down" aria-hidden="true"></i> Get Details</a>
                                                </td>
                                                <td>


 <a target="_blank" href="/invoice-generate-view/{{$my_orders_data->ordernumber}}/{{$my_orders_data->salesorderid}}" class="invoice11" data-contents="{{json_encode($my_orders_data)}}"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Invoice</a>
                                                </td>
                                            </tr>


                                        @endforeach



                                        </tbody>
                                    </table>
                                </div>

                               @if(isset(array_values((array)$my_orders)[2]))
                                <input type="hidden" id="next_link" name="next_link" value="{{array_values((array)$my_orders)[2]}}">

                                <div class="text-center">
                                    <button class="btn know-more" id="load-more">Load More</button>
                                </div>

                                @endif

                            @endif


                        </div>

                    </div>
                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">.3..</div>
                </div>


                <!-- Modal -->
                <div class="modal fade bd-example-modal-lg " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Game Booked</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="overflow-x: auto;">

                                <table class="table table-bordered table-hover">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Qty</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody id="gmd">


                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>


                                    </tbody>
                                </table>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection


@section('script')

    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.3/moment.js"></script>


    <script>if(navigator.userAgent.indexOf('Mac') > 0)
            $('body').addClass('mac-os');if(navigator.userAgent.indexOf('Safari') > 0)
            $('body').addClass('safari');if(navigator.userAgent.indexOf('Chrome') > 0)
            $('body').addClass('chrome');</script>


    <script>
        $('#myTab a').on('click', function (e) {
            e.preventDefault()
            $(this).tab('show')
        })
    </script>

    <script>

        $(function() {
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                history.pushState({}, '', e.target.hash);
            });

            var hash = document.location.hash;
            var prefix = "tab_";
            if (hash) {
                $('.nav-tabs a[href="'+hash.replace(prefix,"")+'"]').tab('show');
            }
        });


    </script>


    <script>

        $('#load-more').click(function (e) {
            e.preventDefault();

            var flag = true;
            var next_link = document.getElementById("next_link").value;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if (flag) {
                $.ajax({

                    type: 'post',

                    url: '/load-more-order',
                    data: {next_link: next_link},
                    beforeSend: function () {
                        $('#load-more').attr('disabled', true);
                        $('.loading').css('visibility', 'initial');
                    },
                    complete: function () {
                        $('#load-more').attr('disabled', false);
                        $('.loading').css('visibility', 'hidden');

                        $('.wait').remove();
                    },
                    success: function (data) {

                        console.log(data);

                        console.log(data.next_link_val);

                        $('#next_link').val(data.next_link_val);

                        var d = [];
                        $.each(data.get_my_orders.value, function (key,val) {
                            var order_id = val['ordernumber'];
                            var totalamount = val['totalamount'];
                            var description = val['description'];
                            var createdon = moment(val['createdon']).add(330, 'minutes').format('DD-MM-YYYY HH:mm:ss');
                            var requestdeliveryby = moment(val['requestdeliveryby']).add(330, 'minutes').format('DD-MM-YYYY');

                            var order_details =JSON.stringify(val['order_details']);
                            var order =JSON.stringify(val);

                            // console.log(val['order_details']);


                            d += "<tr><td scope=\"row\">"+order_id+"</td><td>"+createdon+"</td><td>"+description+"</td><td>"+requestdeliveryby+"</td><td>"+totalamount+"</td><td>  <a class=\"gm_card\" href=\"#\"  data-toggle=\"modal\" data-target=\"#exampleModal\" data-contents=\'"+order_details+"\'><i class=\"fa fa-level-down\" aria-hidden=\"true\"></i> Get Details</a></td><td><a  target=\"_blank\" href=\"/invoice-generate-view/"+order_id+"\" class=\"invoice\" data-contents=\'"+order+"\'><i class=\"fa fa-file-pdf-o\" aria-hidden=\"true\"></i> Invoice</a></td></tr>";
                        });

                        document.getElementById('ord').innerHTML += d;

                    }

                });
            }

        });


        $(document).on('click', '.gm_card', function(){

            var games = $(this).data('contents');

            var d = [];

            $.each(games, function (key,val) {

                console.log(val);
                var productname = val['productname'];
                var quantity = val['quantity'];
                var extendedamount = val['extendedamount'];
                var description = val['description'];
                var mg_orderlinestatus = val['mg_orderlinestatus'];

                var text = "";
                if (mg_orderlinestatus == 1){
                    text = "Fulfilled";
                }
                if (mg_orderlinestatus == 2){
                    text = "Cancelled";
                }
                if (mg_orderlinestatus == 3){
                    text = "Active";
                }

                key = key+1;

                d += "<tr><td scope=\"row\">"+key+"</td><td>"+productname+"</td> <td>"+description+"</td><td>"+quantity+"</td><td>"+extendedamount+"</td><td>"+text+"</td></tr>";
            });



            document.getElementById('gmd').innerHTML = d;


        });

        $(document).on('click', '.invoice', function(e) {

            e.preventDefault();

            var order_details = $(this).data('contents');

            var flag = true;

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if (flag) {
                $.ajax({

                    type: 'post',

                    url: '/invoice-generate',
                    data: {order_details_data: order_details},
                    beforeSend: function () {
                        $('.invoice').attr('disabled', true);
                        $('.loading').css('visibility', 'initial');
                    },
                    complete: function () {
                        $('.invoice').attr('disabled', false);
                        $('.loading').css('visibility', 'hidden');

                        $('.wait').remove();
                    },
                    success: function (data) {
                        window.open(data,'_blank');
                    }

                });
            }


        });



    </script>

@endsection

