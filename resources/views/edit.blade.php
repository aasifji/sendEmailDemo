@include('common.header');
<div class="container">
    <div class="card">
    <div class="card-header text-center fw-bold text-white bg-info"><span class="text-uppercase">Update</span> @lang('lang.My Form')</div>

    <div class="card-body">
    <form action="/edit-customer/{{$data->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <div class="row">
            <div class="col-sm-3">
                <label for="name">Name</label>
                <input type="text" name="customer_name" id="name" class="form-control" value="{{$data->name}}">
            </div>
            <div class="col-sm-3">
                <label for="email" >Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{$data->email}}">
            </div>
            <div class="col-sm-3">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" value="{{$data->gender}}">
                <option value="" disabled selected>Select Gender</option>

                    <option value="M">Male</option>
                    <option value="F">Female</option>
                    <option value="O">Other</option>
                </select>
            </div>
            <div class="col-sm-3">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" class="form-control" maxlength="200" value="{{$data->address}}">
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-sm-3">
                <label for="country">Country</label>
                <input type="text" name="country" id="country" class="form-control" maxlength="200" value="{{$data->country}}">
            </div>
            <div class="col-sm-3">
                <label for="city">City</label>
                <input type="text" name="city" id="city" class="form-control" value="{{$data->city}}">
            </div>

            <div class="col-sm-3">
                <label for="dob">DOB</label>
                <input type="date" name="date_b" id="dob" class="form-control" max="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>"  value="{{$data->dob}}">
            </div>
            <div class="col-sm-3">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" value="{{$data->password}}">
            </div>

        </div>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success mt-2">Update</button>&nbsp;
        <a href="/list" class="btn btn-danger mt-2">Cancel</a>

        </div>
        </form>
    </div>

    </div>
</div>
@include('common.footer',['foot'=>"This is my footer"]);

