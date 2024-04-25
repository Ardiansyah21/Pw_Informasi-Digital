<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet" />
    <title>Slideshow Otomatis</title>
    @vite('resources/css/app.css')

    <link rel="stylesheet" href="assets/css/page.css">
</head>

<body>

    <div class="slideshow-container">
        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                    <ul class="nav__links">
                        <li class="link"><a href="#">Home</a></li>
                        <li class="link"><a href="#">Destinations</a></li>
                        <li class="link"><a href="#">Contact Us</a></li>
                        <li class="link"><a href="#">Blog</a></li>
                    </ul>
                    <div class="search">
                        <input type="text" placeholder="Search" />
                        <span><i class="ri-search-line"></i></span>
                    </div>
                    <div class="login">
                        <a href="/login"><i class=" ri-user-3-fill"></i></a>
                        Log In
                    </div>
                </nav>
                <div class=" destination__container">
                    <img class="bg__img__1" src="assets/img/bg-dots.png" alt="bg" />
                    <img class="bg__img__2" src="assets/img/bg-arrow.png" alt="bg" />
                    <div class="socials">
                        <span><i class="ri-twitter-fill"></i></span>
                        <span><i class="ri-facebook-fill"></i></span>
                        <span><i class="ri-instagram-line"></i></span>
                        <span><i class="ri-youtube-fill"></i></span>
                    </div>
                    <div class="content">
                        <h1>SMK<br />WIKRAMA<br /><span>BOGOR</span></h1>
                        <p>
                            SMK Wikrama Bogor merupakan sekolah pusat keunggulan
                            yang memiliki 7 kopetensi keahlian terbaik dibidangnya
                        </p>
                        <button class="btn">Tentang wikrama??</button>
                    </div>
                    <div class="destination__grid">
                        <div class="destination__card">
                            <img src="assets/img/kegiatan1.jpeg" alt="destination" />
                            <div class="card__content">
                                <h4>7 kopetensi kehalian</h4>
                                <p>
                                    SMK Wikrama Bogor mempunyai 7 kopetensi keahlian dasar
                                    yang sangat memumpuni di bidang nya sendiri mulai dari IT,
                                    Menejemen perkantoran, dan Pariwisata
                                </p>
                                <button class="btn">Read More</button>
                            </div>
                        </div>
                        <div class="destination__card">
                            <img src="assets/img/kegiatan.jpeg" alt="destination" />
                            <div class="card__content">
                                <h4>Pusat keunggulan</h4>
                                <p>
                                    SMK Wikrama Bogor merupakan sekolah pusat keunggulan
                                    yang telah menjadi contoh bagi sekolah yang lainya
                                    untuk menarapkan metode di SMK Wikrama
                                </p>
                                <button class="btn">Read More</button>
                            </div>
                        </div>
                        <div class="destination__card">
                            <img src="assets/img/kegiatan3.jpg" alt="destination" />
                            <div class="card__content">
                                <h4>Prestasi</h4>
                                <p>
                                    SMK Wikrama Bogor Merupakan sekolah yang memiliki
                                    segudang prestasi yang diaman setiap minggunya menolehkan
                                    prestasi dari berbagi bidang
                                </p>
                                <button class="btn">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                </nav>
                <div class="pl-20 mt-[-50px]">
                    <h1 class="text-2xl font-bold text-white">Tentang SMK Wikrama Bogor</h1>
                </div>
            </div>
        </div>

        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                </nav>
                <div class="pl-20 mt-[-50px]">
                    <h1 class="text-2xl font-bold text-white">Jursan SMK Wikrama Bogor</h1>
                </div>
            </div>
        </div>

        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                </nav>
                <div class="pl-20 mt-[-50px]">
                    <h1 class="text-2xl font-bold text-white">Prestasi SMK Wikrama Bogor</h1>
                </div>
            </div>
        </div>
        <div class="mySlides">
            <div class="container">
                <nav>
                    <div class="nav__logo">
                        <img src="assets/img/wikrama.png" alt="logo" />
                    </div>
                </nav>
                <div class="pl-20 mt-[-50px]">
                    <h1 class="text-2xl font-bold text-white">Kegiatan SMK Wikrama Bogor</h1>
                </div>
            </div>
        </div>
    </div>
    <script src=" assets/js/page.js">
    </script>
</body>

</html>