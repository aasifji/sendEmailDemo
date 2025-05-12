<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
</head>
<body>
@include('common.header');
<h1 class="text-center">Get Student Data</h1>
<div class="d-flex justify-content-center">
<table class="table table-bordered mt-4 w-75" id="students-table">
    <thead>
        <tr class="text-center">
            <th class="bg-primary text-white">ID.</th>
            <th class="bg-primary text-white">Name</th>
            <th class="bg-primary text-white">Email</th>
            <th class="bg-primary text-white">Image</th>
        </tr>
    </thead>
    <tbody>

    </tbody>
</table>
<script>
    $(document).ready(function(){
        $.ajax({
            type:"get",
            url:"{{route('getstudents')}}",
            success: function(data){
                console.log(data );
                if(data.students.length > 0){
                    for(let i=0;i<data.students.length;i++){
                        let img = data.students[i]['file'];
                        $("#students-table").append(`<tr>
                        <td>`+(i+1) +`</td>
                        <td>`+(data.students[i]['name']) +`</td>
                        <td>`+(data.students[i]['email']) +`</td>
                        <td>
                        <img src="{{asset('storage/`+img+`') }}" alt="`+img+`"/>
                        </td>
                        </tr>`)
                    }

                }
                else{
                    $("#students-table").append("<tr><td colspan='4'>Data Not Found</td></tr>")
                }

            },error:function(err){
                console.log(err.responseText);
            }
        })
    })
</script>
</div>
@include('common.footer',['foot'=>"This is my footer"]);
</body>
</html>

