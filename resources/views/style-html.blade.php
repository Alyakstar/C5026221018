<html>

<head>
    <title>
        Alya pacarnya jisung
    </title>

    <link rel = "stylesheet" href = "{{asset('/kelas-src/mystyle.css')}}">

    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            color : blueviolet;

        }
        p, div{
            text-align : center;
        }

        .salam {
            font-size : larger;
            color : pink;
            text-align : right;
            font-weight : bold;
            text-transform : uppercase;

        }

        .jisung {
            text-decoration : underline;
            color : greenyellow;

        }


    </style>

</head>

<body>
    <!-- inline CSS, digunakan jika hanya 1 bagian di 1 halaman yang bebrbeda-->
    Hallo <b style = "color: red; text-decoration: underline; font-size : 100; text-shadow : 2px 2px 5px rgb(0, 0, 0);" >Apa</b> kabar?
    <!-- Inpage CSS< digunakan jika yang berbeda hanya di 1 halaman-->
    <div  class = "jisung salam";>
        Hallo Apa Kabar?
    </div>
    <!-- external File, digunakan untuk glovbal 1 situs-->
    <span class = "sembunyi";>
        Hallo Apa Kabar?
    </span>
    <p>
        Hallo Apa Kabar?
    </p>
</body>
</html>
