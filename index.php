<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\assets\images\css\style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="\assets\js\script.js"></script>
</head>

<body style="height:1500px;  background-color:rgb(33,32,32);">

    <div class="sidenav">
        <input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">

        <ul id="myMenu" style="list-style-type:disc; text-align:start; font-size:medium">
        </ul>
        <a href="#about" style="text-align:center;">Popular</a>
        <a href="#services" style="list-style-type:disc; text-align:left; font-size: 20px;">
            <li>Game-Game dari From Software Dihapus dari Steam</li>
        </a>
        <a href="#clients" style="list-style-type:disc; text-align:start; font-size: 20px;">
            <li>Game-Game dari From Software Dihapus dari Steam</li>
        </a>
        <a href="#contact" style="list-style-type:disc; text-align:start; font-size: 20px;">
            <li>Game-Game dari From Software Dihapus dari Steam</li>
        </a>
    </div>


    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
            <div id="main-left">
                <span style="font-size:30px;cursor:pointer; color:white;" onclick="openNav()">&#9776;</span>
            </div>

            <div id="mySidenav" class="sidenav-left">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="#">About</a>
                <a href="#">Services</a>
                <a href="#">Clients</a>
                <a href="#">Contact</a>
            </div>

            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="paklo\index.php" style="color:white">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color:white">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="color:white">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="http://nikosilabest-216.com">Home</a></li>
                            <li><a class="dropdown-item" href="#">Category</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="flex-container">
        <div class="flex-basis-fifty">
            <div class="flex-container flex-wrap " style="position:relative">
                <img src="assets/images/thermite.png" style="height:500px; width: 100%;" alt="">
                <div class="hi-title" style="background:transparent; color:white; ">Naotsugu12 MVP? Always Has Been</div>
            </div>
            <div class="flex-container flex-wrap " style="position: relative;">
                <img src="assets/images/v.png" style="height:250px; width: 50%; " alt="">
                <div class="sub-title" style="background:transparent; color:white; font-size:20px ">Review Valorant: Bayar Pakai Mental!</div>

                <img src="assets/images/himan.png" style="height:250px; width: 50%; " alt="">
                <div class="sub-title-right" style="background:transparent; color:white; font-size:20px; ">Review Hitman III: Sang Pembunuh Plontos Kembali Beraksi!</div>
            </div>
        </div>
        <div class="flex-basis-fifty">
            <div class="flex-container flex-wrap">
                <img src="assets/images/mira.png" style="height:250px; width: 50%; " alt="">
                <div class="hi-title-smol" style="background:transparent; color:white; font-size:20px ">Review Rainbow Six Siege: Gameplay Taktis Tingkat Tinggi!</div>

                <img src="assets/images/wicah.png" style="height:250px; width: 50%; " alt="">
                <div class="hi-title-smol2" style="background:transparent; color:white; font-size:20px ">Review The Witcher 3: Lebih Dari Sebuah Game</div>

                <img src="assets/images/sekiro.png" style="height:250px; width: 50%; " alt="">
                <div class="mid-title-smol" style="background:transparent; color:white; font-size:20px ">Review Sekiro: Sang Shinobi Seperempat Robot</div>

                <img src="assets/images/tokyo2.png" style="height:250px; width: 50%; " alt="">
                <div class="mid-title-smol2" style="background:transparent; color:white; font-size:20px ">Review GhostWire-Tokyo: Jujutsu Kaisen Berbentuk Game?!</div>

                <img src="assets/images/wd.png" style="height:250px; width: 50%; " alt="">
                <div class="bot-title" style="background:transparent; color:white; font-size:20px ">Review Watch Dogs Legion: Konsep Fantastis Eksekusi Manis</div>

                <img src="assets/images/YK2.png" style="height:250px; width: 50%; " alt="">
                <div class="bot-title2" style="background:transparent; color:white; font-size:20px ">Review Yakuza Kiwami 2: Amukan Sang Naga!</div>

            </div>
        </div>
    </div>

    <div class="flex-container" style="margin-top: 30px;">
        <div class="flex-basis-fifty">
            <div class="flex-container flex-wrap">
                <img src="assets/images/bak.png" style="height:700px; width: 150%;" alt="">
                <div style="position: absolute; text-align:end; background:transparent; color:white;"><strong><a class="text-a" href="\elo\"> Review Batman Arkham Knight: Berakhirnya Kisah Sang Kelelawar!</a></div>
            </div>
        </div>
    </div>
    <div id="list">
        <div class="flex-container contain-game" style="margin-top: 30px;">
            <div class="flex-basis-fifty">
                <div class="flex-container flex-wrap">
                    <img src="assets/images/toa.png" style="height:400px; width: 100%;" alt="">
                </div>
            </div>

            <div class="flex-basis-fifty" style="background-color: rgb(33, 32, 32);">
                <div class="flex-container flex-wrap " style="margin-left: 60px;">
                    <a class="text-a" href="">Tales Of Arise Dapatkan Adaptasi Anime!</a>
                    <div style="background-color: transparent; color:grey; font-size: 20px; font-style: normal;">Seberapa banyak
                        dari anda yang telah memainkan Tales of Arise?<br>Seri Tales adalah seri besutan developer kawakan Jepang, Bandai Namco.
                        Seri ini menjadi salah satu JRPG paling sukses di dunia dan kabar baiknya adalah permintaan yang sejak dahulu didengung-dengungkan
                        oleh para penggemar yaitu mengangkat kisah dari tales series menjadi anime akhirnya terwujud! </div>
                </div>
            </div>
        </div>

        <div class="flex-container contain-game" style="margin-top: 30px;">
            <div class="flex-basis-fifty">
                <div class="flex-container flex-wrap">
                    <img src="assets/images/aloy.png" style="height:400px; width: 100%;" alt="">

                </div>
            </div>

            <div class="flex-basis-fifty" style="background-color: rgb(33, 32, 32);">
                <div class="flex-container flex-wrap " style="margin-left: 60px;">
                    <a class="text-a" href="">Penjualan Horizon Zero Dawn Tembus 20 Juta Kopi</a>
                    <div style="background-color: transparent; color:grey; font-size: 20px; font-style: normal;">
                        Memperkenalkan sebuah judul baru ke gamer bukanlah pekerjaan yang mudah. Terlepas dari apakah sang developer punya sepak terjang solid ataupun tidak, memastikan gamer menaruh perhatian untuknya, apalagi jika ia datang dengan konsep yang cukup unik memang butuh kerja keras ekstra. Untungnya, Guerrilla Games yang memutuskan untuk berpindah dari Killzone untuk Horizon Zero Dawn untuk aksi dunia post post-apocalyptic berhasil melakukannya. Seminggu menuju sang seri sekuel, judul ini akhirnya menyentuh angka milestone baru.
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-container contain-game" style="margin-top: 30px;">
            <div class="flex-basis-fifty">
                <div class="flex-container flex-wrap">
                    <img src="assets/images/aloy.png" style="height:400px; width: 100%;" alt="">

                </div>
            </div>

            <div class="flex-basis-fifty" style="background-color: rgb(33, 32, 32);">
                <div class="flex-container flex-wrap " style="margin-left: 60px;">
                    <a class="text-a" href="">Penjualan Horizon Zero Dawn Tembus 20 Juta Kopi</a>
                    <div style="background-color: transparent; color:grey; font-size: 20px; font-style: normal;">
                        Memperkenalkan sebuah judul baru ke gamer bukanlah pekerjaan yang mudah. Terlepas dari apakah sang developer punya sepak terjang solid ataupun tidak, memastikan gamer menaruh perhatian untuknya, apalagi jika ia datang dengan konsep yang cukup unik memang butuh kerja keras ekstra. Untungnya, Guerrilla Games yang memutuskan untuk berpindah dari Killzone untuk Horizon Zero Dawn untuk aksi dunia post post-apocalyptic berhasil melakukannya. Seminggu menuju sang seri sekuel, judul ini akhirnya menyentuh angka milestone baru.
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-container contain-game" style="margin-top: 30px;">
            <div class="flex-basis-fifty">
                <div class="flex-container flex-wrap">
                    <img src="assets/images/aloy.png" style="height:400px; width: 100%;" alt="">

                </div>
            </div>

            <div class="flex-basis-fifty" style="background-color: rgb(33, 32, 32);">
                <div class="flex-container flex-wrap " style="margin-left: 60px;">
                    <a class="text-a" href="">Penjualan Horizon Zero Dawn Tembus 20 Juta Kopi</a>
                    <div style="background-color: transparent; color:grey; font-size: 20px; font-style: normal;">
                        Memperkenalkan sebuah judul baru ke gamer bukanlah pekerjaan yang mudah. Terlepas dari apakah sang developer punya sepak terjang solid ataupun tidak, memastikan gamer menaruh perhatian untuknya, apalagi jika ia datang dengan konsep yang cukup unik memang butuh kerja keras ekstra. Untungnya, Guerrilla Games yang memutuskan untuk berpindah dari Killzone untuk Horizon Zero Dawn untuk aksi dunia post post-apocalyptic berhasil melakukannya. Seminggu menuju sang seri sekuel, judul ini akhirnya menyentuh angka milestone baru.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button id="btn1">Hide/Show Video</button>

    <iframe id="vid" style="margin-top: 30px;" width="1880" height="1000" src="https://www.youtube.com/embed/EG057IQHkBs"></iframe>


    <div class="grid-container">
        <div class="item1">
            <h1><strong> Gaming Gear</strong></h1>
            <ul style="list-style-type:disc; text-align:start">
                <li><a class="text-a" href="">Review ROG Falchion: Design Minimalis Fungsi Maksimalis</a></li>
                <li><a class="text-a" href="">Review Razer Viper Mini: Pahlawan Pengguna Claw Grip</a></li>
                <li><a class="text-a" href="">Review Rexus Daxa M71 Classic: Keyboard Paling Ramah</a></li>
            </ul>
        </div>

        <div class="item2">
            <h1><strong> Top List</strong></h1>
            <ul style="list-style-type:disc; text-align:start">
                <li><a class="text-a" href="">Upcoming Games Release: April 2022</a> </li>
                <li><a class="text-a" href="">Upcoming Games Release: Maret 2022</a> </li>
                <li><a class="text-a" href="">Upcoming Games Release: Februari 2022</a> </li>
            </ul>
        </div>
    </div>








    <div class="center">
        <div class="pagination" style="margin-left:40%">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>





    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">NaoPlay <i>Gaming At Its Finest</i> Website Review, Berita, dan Hype Gaming Anda.</p>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                        <li><a href="">PC Games</a></li>
                        <li><a href="">PlayStation</a></li>
                        <li><a href="">Gaming Gear</a></li>
                        <li><a href="">Top List</a></li>
                        <li><a href="">Time Machine</a></li>
                        <li><a href="">Mobile Games</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3">
                    <h6>Links</h6>
                    <ul class="footer-links">
                        <li><a href="">About Us</a></li>
                        <li><a href="">Contact Us</a></li>
                        <li><a href="">Contribute</a></li>
                        <li><a href="">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
                        <a href="#">Scanfcode</a>.
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>

<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
        document.getElementById("main-left").style.marginLeft = "250px";
        document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
        document.getElementById("main-left").style.marginLeft = "0";
        document.body.style.backgroundColor = "rgb(33, 32, 32)";
    }
</script>


</html>