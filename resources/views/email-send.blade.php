

 @include('common.header');
 <div class="d-flex justify-content-center">
<div class="card w-25 border border-primary">
    <div class="card-header text-center bg-info text-white">Add Details Send Email</div>

    <div class="card-body bg-warning">
    <form action="send-mail" method="post">
    @csrf
        <div class="row">
            <div class="">
                <label for="to" class="text-white">Email</label>
                <input type="text" name="to" id="to" placeholder="Enter Email Address" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="">
                <label for="Sub" class="text-white">Subject</label>
                <input type="text" name="subject" id="Sub" placeholder="Enter Email Subject" class="form-control">
            </div>
        </div>
        <div class="row">
            <div class="">
                <label for="msg" class="text-white">Message</label>
                <textarea name="message" id="msg" class="form-control" placholder="Enter Email Message"></textarea>

            </div>
        </div>
        <div class="d-flex justify-content-center">
        <button class="btn btn-sm btn-success mt-2">Email Send</button>
      </div>
      </form>
    </div>
</div>
</div>
@include('common.footer',['foot'=>"This is my footer"]);

