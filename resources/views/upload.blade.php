<div>
    <h1>Upload Image</h1>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" id="">
        <button>upload file</button>
    </form>

</div>
