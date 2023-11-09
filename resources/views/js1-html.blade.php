<html>

<head>
    <title> Responsive Web </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function showalert (){
            alert("Selamat ! Anda mendapatkan 100 juta !")
        }

        function changeText() {
            //var tulisanlama = document.getElementById("output");
            var span = document.getElementById("output"); //membaca isi tulisan lama di span
            var textBox= document.getElementById("textbox"); //membaca tulisan yang baru

            textbox.style.color= "red"; //mengubah warna font yang ada di text box menjadi warna merah
            span.innerHTML = textBox.value;
            console.log ("Horeee sudah disini");
            console.log ("isinya text box adalah" + textBox.value);
        }


    </script>
    <script src = "{{asset('/kelas-src/operasi.js 1')}}">
    </script>
</head>

    <body>
        <div class = "container">
            <center>
                <button class = "btn btn-primary" onclick="showalert ()";> klik disini !</button>
            </center>
            <br>
            <button onclick="changeText();" class = "btn btn-success">
            Click Me !</button>
            <span id = "output">
                replace me
            </span>
            <input id = "textbox" type = "text" class = "form-control"/>
            <br>
            <div class = "form-group">
                <label for = "bil1">
                    Bilangan 1
                </label>
                <input type = "number" id = "bil1" placeholder = "Masukkan Bilangan Pertama">
            </div>
            <div class = "form-group">
                <label for = "bil2">
                    Bilangan 2
                </label>
                <input type = "number" id = "bil2" placeholder = "Masukkan Bilangan Kedua">
            </div>
            <div class = "btn-gorup">
                <button type = "button" class = "btn btn-primary">
                    Tambah
                </button>
                <button type = "button" class = "btn btn-primary">
                    Perkalian
                </button>
            </div>
            <div>
                <h3> Hasil Operasi :
                    <div id = "hasil"></div>
                </h3>

            </div>


        </div>
    </body>
</html>
