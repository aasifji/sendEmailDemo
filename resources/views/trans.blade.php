@include('common.header');
 <!DOCTYPE html>
<html>
<head>
    <title>Translate Input</title>
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">Translate Data</div>
        <div class="card-body">
            <div class="row">
                <!-- First column -->
                <div class="col-md-6">
                    <label for="english">English</label>
                    <div class="input-group mb-3">
                    <input type="text" id="english" placeholder="Type in English" class="form-control english">
                    <button onclick="translateToPunjabi(this)" class="btn btn-outline-secondary"><img src="https://img.icons8.com/color/48/000000/google-translate.png" alt="Translate" width="20" height="20"></button>
                    </div>
                </div>

                <!-- Second column -->
                <div class="col-md-6">
                    <label for="punjabi">Punjabi</label>
                    <div class="input-group mb-3">
                    <input type="text" id="punjabi" class="form-control punjabi" placeholder="Punjabi translation">

                    </div>
                </div>
            </div>
            <div class="row">
                <!-- First column -->
                <div class="col-md-6">
                    <label for="english">English</label>
                    <div class="input-group mb-3">
                    <input type="text" id="english" placeholder="Type in English" class="form-control english">
                    <button onclick="translateToPunjabi(this)" class="btn btn-outline-secondary"><img src="https://img.icons8.com/color/48/000000/google-translate.png" alt="Translate" width="20" height="20"></button>
                    </div>
                </div>

                <!-- Second column -->
                <div class="col-md-6">
                    <label for="punjabi">Punjabi</label>
                    <div class="input-group mb-3">
                    <input type="text" id="punjabi" class="form-control punjabi" placeholder="Punjabi translation">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@include('common.footer',['foot'=>"This is my footer"]);
<script>
// function translateToPunjabi() {
//     const text = document.getElementById('english').value;

//     fetch(`https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=pa&dt=t&q=${encodeURIComponent(text)}`)
//         .then(res => res.json())
//         .then(data => {
//             const translated = data[0][0][0];
//             document.getElementById('punjabi').value = translated;
//         })
//         .catch(err => {
//             console.error(err);
//             alert("Translation failed.");
//         });
// }


function translateToPunjabi(button) {
    const group = button.closest('.row'); // find the row containing this button
    const englishInput = group.querySelector('.english');
    const punjabiInput = group.querySelector('.punjabi');

    const text = englishInput.value;

    fetch(`https://translate.googleapis.com/translate_a/single?client=gtx&sl=en&tl=pa&dt=t&q=${encodeURIComponent(text)}`)
        .then(res => res.json())
        .then(data => {
            const translated = data[0][0][0];
            punjabiInput.value = translated;
        })
        .catch(err => {
            console.error(err);
            alert("Translation failed.");
        });
}
</script>

</script>

</body>
</html>
