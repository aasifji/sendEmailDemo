@include('common.header');
<div class="container">
    <div class="d-flex justify-content-end mt-2 mb-2">
    <a href="{{url('/')}}" class="btn btn-primary btn-lg rounded ">Add New</a>
    </div>
<table class="table table-striped table-bordered dataTable table-dark text-center">
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Country</th>
            <th>City</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Date Of Birth</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    @forelse($customer as $customer_data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <!-- <td>{{ $customer_data->id }}</td> -->
            <td>{{ $customer_data->name }}</td>
            <td>{{ $customer_data->country }}</td>
            <td>{{ $customer_data->city }}</td>
            <td>{{ $customer_data->gender }}</td>
            <td>{{ $customer_data->address }}</td>
            <td>{{ $customer_data->dob }}</td>
            <td>
                <a href="{{ url('delete/' . $customer_data->id) }}" class="btn btn-danger btn-sm">
                    <span class="fa fa-trash"></span>
                </a>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="8" class="">No data found</td>
        </tr>
    @endforelse
</tbody>

</table>
</div>
    @include('common.footer',['foot'=>"This is my footer"]);
