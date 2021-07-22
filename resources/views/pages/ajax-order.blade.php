 <div>
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#order</th>
                <th scope="col">Total Amount</th>
                <th scope="col">Last</th>
                <th scope="col">Invoice</th>
            </tr>
            </thead>
            <tbody>

            @foreach($my_orders->value as $key=>$my_orders_data)

                <tr>
                    <td scope="row">{{$my_orders_data->ordernumber}}</td>
                    <td>{{$my_orders_data->totalamount}}</td>
                    <td>Otto</td>
                    <td>
                        <a href="#">invoice</a>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

    <input type="hidden" id="next_link" name="next_link" value="{{array_values((array)$my_orders)[2]}}">

    <div class="text-center">
        <button class="btn know-more" id="load-more">Load More</button>
    </div>