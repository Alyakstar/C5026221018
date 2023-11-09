<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "{{asset('/ets-src/GitHub-Mark-removebg-preview.png')}}">
    <link rel="stylesheet" href="{{asset('/ets-src/style.css')}}">
    <title>Welcome to Alya's Profile!</title>
    <script src="{{asset('/ets-src/scriptxalya.js')}}"></script>
</head>

<body>
    <div class = "home">
        <nav>
            <div class = "nav-content">
                <div class = "logo">
                    <a href = "#">
                        (*ฅ́˘ฅ̀*) .｡.:*♡
                    </a>
                </div>
                <ul>
                    <li> <a href = "#profile"> PROFILE </a></li>
                    <li> <a href = "#activity"> ACTIVITY </a></li>
                    <li> <a href = "#funfact"> FUNFACT </a></li>
                    <li> <a href = "#favorite"> FAVORITE </a></li>
                    <li> <a href = "#contact"> CONTACT </a></li>
                </ul>
            </div>
        </nav>
        <div class="content flex col align-center">
            <p>Hi! Its's me...</p>
            <h1>ALYA CALLYSTA <br> NUGRAHA</h1>

            <div class="btn_1 flex perfect_center">
                <a href="#profile">
                    <button href="#profile">
                        Get to Know Me!
                    </button>
                </a>
            </div>
        </div>
    </div>

    </div>
    <div class="profile flex col justify-center" id="profile">
        <h1>PROFILE</h1>
        <div class="content2 flex justify-evenly">
            <div class="vid_profile">
                <video controls src="{{asset('/ets-src/video profil.mov')}}" alt="">
            </div>
            <div class="biodata">
                <table>
                    <tr>
                        <td>
                            Nickname :
                        </td>
                        <td>
                            Alyak
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Gender :
                        </td>
                        <td>
                            Female
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Place, Date of Birth :
                        </td>
                        <td>
                            Surabaya, 3 Juli 2004
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Age :
                        </td>
                        <td>
                            19 Years Old
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Nationality :
                        </td>
                        <td>
                            Indonesia
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Religion :
                        </td>
                        <td>
                            Islam
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Height/Weight :
                        </td>
                        <td>
                            157 cm/52 kg
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hobby :
                        </td>
                        <td>
                            Dance
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="activity" id="activity">
        <h1>ACTIVITY</h1>
        <div class="content3 flex justify-evenly">
            <div class="content_card flex col align-center">
                <div class="img_activity">
                    <div class="flip-box flex align-center">
                        <div class="flip-box-inner">

                            <div class="img_front">
                                <img src="{{asset('/ets-src/sisfor.JPG')}}" alt="">
                            </div>
                            <div class="img_back">
                                <img class="img_back_img" src="{{asset('/ets-src/flip sisfor.JPG')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>
                <p><i>Studying in the
                        Information
                        Systems
                        department at ITS.</i> </p>
            </div>
            <div class="content_card flex col align-center">
                <div class="img_activity">
                    <div class="flip-box flex align-center">
                        <div class="flip-box-inner">

                            <div class="img_front">
                                <img src="{{asset('/ets-src/corp.JPG')}}" alt="">
                            </div>
                            <div class="img_back">
                                <img class="img_back_img" src="{{asset('/ets-src/flip corp.JPG')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>

                <p><i>a Staff in the
                        Corporation
                        Department at
                        TDC ITS.
                    </i> </p>
            </div>
            <div class="content_card flex col align-center">
                <div class="img_activity">
                    <div class="flip-box flex align-center">
                        <div class="flip-box-inner">

                            <div class="img_front">
                                <img src="{{asset('/ets-src/mabacup.JPG')}}" alt="">
                            </div>
                            <div class="img_back">
                                <img class="img_back_img" src="{{asset('/ets-src/flip mabacup.JPG')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>

                <p><i>an Expert Staff in
                        the Fundraising
                        Subdivision at
                        MABACUP 2023</i> </p>
            </div>
            <div class="content_card flex col align-center">
                <div class="img_activity">
                    <div class="flip-box flex align-center">
                        <div class="flip-box-inner">

                            <div class="img_front">
                                <img src="{{asset('/ets-src/tsf.JPG')}}" alt="">
                            </div>
                            <div class="img_back">
                                <img class="img_back_img" src="{{asset('/ets-src/flip tsf.JPG')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>

                <p><i>a HoSD in the
                        Fundraising
                        Subdivision at
                        TSF 2023
                    </i> </p>
            </div>
            <div class="content_card flex col align-center">
                <div class="img_activity">
                    <div class="flip-box flex align-center">
                        <div class="flip-box-inner">

                            <div class="img_front">
                                <img src="{{asset('/ets-src/ise!.JPG')}}" alt="">
                            </div>
                            <div class="img_back">
                                <img class="img_back_img" src="{{asset('/ets-src/flip ise!.JPG')}}" alt="">
                            </div>

                        </div>
                    </div>
                </div>

                <p><i>a Staff in the
                        Fundraising
                        Subdivision
                        at ISE! 2023</i> </p>
            </div>

        </div>
    </div>

    <div class="funfact" id="funfact">
        <h1>FUNFACT</h1>
        <div class="content4 flex align-center ">
            <div class="content4_1 flex col align-center">
                <p><i>I used to be afraid of garlic,<br>
                    onions, and shallots.</i>
                    </p>
                <img src="{{asset('/ets-src/takut bawang-removebg-preview.png')}}" alt="">
            </div>
            <div class="content4_2">
                <p><i>I like to smell the bottom of the <br>
                    plate before eating.</i></p>
            </div>
        </div>
    </div>
    <div class="favorite" id="favorite">
        <h1>FAVORITE</h1>
        <div class="content5 flex justify-evenly">
            <div class="card_content5">
                <p><i>Food</i></p>
                <img src="{{asset('/ets-src/kepiting asam manis (2).jpe')}}" alt="">
                <p><i>Sweet & Sour Crab</i></p>
            </div>
            <div class="card_content5">
                <p><i>Drink</i></p>
                <img src="{{asset('/ets-src/susu sapi murni.jpg')}}" alt="">
                <p><i>Pure cow's milk</i></p>
            </div>
            <div class="card_content5">
                <p><i>Boy</i></p>
                <img src="{{asset('/ets-src/jisung.jpg')}}" alt="">
                <p><i>Jisung NCT</i></p>
            </div>
        </div>

    </div>
    <div class="contact flex align-center col" id="contact">
        <div class="social_media flex justify-end">
            <a href="https://instagram.com/callystaalya_37?igshid=OGQ5ZDc2ODk2ZA%3D%3D&utm_source=qr">
                <img src="{{asset('/ets-src/ig-removebg-preview.png')}}" alt="">
            </a>
            <a href="https://www.facebook.com/alya.callysta?mibextid=LQQJ4d">
                <img src="{{asset('/ets-src/fb-removebg-preview.png')}}" alt="">
            </a>
            <a href="http://wa.me/6281131133888">
                <img src="{{asset('/ets-src/wa-removebg-preview.png')}}" alt="">
            </a>
        </div>
        <div class="content6 flex col perfect_center">
            <h1>CONTACT ME!</h1>
            <p>type your email here :</p>
            <input id="input_email"  placeholder="email@gmail.com..." >
            <button id="submit_email" type="submit">Submit</button>
        </div>
    </div>

    <footer>
        <marquee>
            ♥*♡∞:｡.｡♥*♡∞:｡.｡♥*♡∞:｡.｡♥*♡∞:｡.｡♥*♡∞:｡.｡♥*♡∞:｡.｡♥*♡∞:｡.｡5026221018_alya.callysta@gmail.com ♥*♡∞:｡.｡♥*♡∞:｡.｡♥*♡∞:｡.｡♥*♡∞:｡.｡♥*♡∞:｡.｡♥*♡∞:｡.｡
        </marquee>
    </footer>

    <div class="tugas-pertemuan-10">
        <a href="hello" target="_blank" style="color: Black">|😀 HTML 1 😀|</a>
        <a href="style" target="_blank" style="color: black">😁 HTML 2 😁|</a>
        <a href="link" target="_blank" style="color: Black"> 😶‍🌫️ HTML 3 😶‍🌫️|</a>
        <a href="reddog" target="_blank" style="color: Black">🥰 Tugas Replika Linktree 🥰|</a>
        <a href="whatmakeusdiff" target="_blank" style="color: Black">🥸 Tugas Bootstrap 🥸|</a>
        <a href="js1" target="_blank" style="color: Black">🥳 JavaScript 1 🥳|</a>
        <a href="js2" target="_blank" style="color: Black">😱 JavaScript 2 😱|</a>
        <a href="responsive1" target="_blank" style="color: Black">🫣 Latihan Responsive 1 🫣|</a>
        <a href="responsive2" target="_blank" style="color: Black">😵 Latihan Responsive 2 😵|</a>
    </div>


</body>

</html>
