<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Form</title>
</head>
<body>
@include('common.header');
<div class="container w-50">
    <span id="output" class="bg-success text-white p-2 rounded m-3" style="display:none"></span>
<div class="card">
    <div class="card-header text-center">Ajax With Form</div>
    <div class="card-body">
        <form action="" id="my-form" method="Post">
            @csrf
         <div class="col">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control">
         </div>
         <div class="col mt-2">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" class="form-control">
         </div>
         <div class="col mt-2">
            <label for="file">File</label>
            <input type="file" name="file" id="file" class="form-control">
         </div>
         <div class="mt-2 d-flex justify-content-center">
         <input type="submit" value="Add Student" id="btnsubmit" class="btn btn-sm btn-success">
         </div>
        </form>

    </div>
</div>
</div>
<script>
    $(document).ready(function(){
        $('#my-form').submit(function(event){
            event.preventDefault();
            var form = $('#my-form')[0];
            var data = new FormData(form);
            $('#btnsubmit').prop("disabled",true)
            $.ajax({
                type:"Post",
                url:"{{route('addstu')}}",
                data:data,
                processData:false,
                contentType:false,
                success:function(data){
                //   alert(data.res);
                $('#output').text(data.res).fadeIn();
                  $("#btnsubmit").prop("disabled",false);
                  $("input[type='text']").val('');
                  $("input[type='email']").val('');
                  $("input[type='file']").val('');
                  setTimeout(() => {
                     $('#output').fadeOut();
                         }, 3000);
                },
                error:function(e){
                    console.log(e.responseText)
                    $("#btnsubmit").prop("disabled",false);
                    $("input[type='text']").val('');
                  $("input[type='email']").val('');
                  $("input[type='file']").val('');

                },
            })
        })
    })
</script>

@include('common.footer',['foot'=>"This is my footer"]);
</body>
</html>
