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
                            <form class="form-1">
                                <div class="form-field">



                                    <select id="star-rating{{$key}}" class="example-pill" name="rating" autocomplete="off" onchange="return ApplyFilters({{json_encode($slot_data)}},this.id,{{json_encode($data['$get_sub_product_family'])}});">

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