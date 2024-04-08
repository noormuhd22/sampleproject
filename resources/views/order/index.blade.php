



@extends("layout.theme")
@section("post")
<style>
    .status{
        color: green;
    }
</style>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">User ID</th>
            <th scope="col">Address</th>
            <th scope="col">City</th>
            <th scope="col">State</th>
            <th scope="col">Pincode</th>
            <th scope="col">Mobile</th>
            <th scope="col">Total Price</th>
            <th scope="col">Payment ID</th>
            <th scope="col">Date</th>
            <th scope="col">Status</th>
            <th scope="col">Edit</th>
        </tr>
    </thead>
    <tbody>
        @foreach($order as $orders)
        <tr>
            <td>{{ $orders->name }}</td>
            <td>{{ $orders->userid}}</td>
            <td>{{ $orders->address }}</td>
            <td>{{ $orders->city}}</td>
            <td>{{ $orders->state }}</td>
            <td>{{ $orders->pincode }}</td>
            <td>{{ $orders->mobile }}</td>
            <td>{{ $orders->totalprice }}</td>
            <td>{{ $orders->paymentid }}</td>
            <td>{{ $orders->added_date }}</td>
            <td class="status">@if ($orders->status == 0)
                processing
                @elseif ($orders->status ==1)
                confirmed
            @endif</td>
            <td>
                <a href="{{ route('order.view', ['id' => $orders->id]) }}">
                    <button class='btn btn-primary'>View</button>
                </a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>



@endsection