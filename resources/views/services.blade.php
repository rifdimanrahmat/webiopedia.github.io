<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Responsive Multipage Blog Website</title>

    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap">
</head>
<body>
    
    <!-- ================================== START OF NAV ========================================= -->
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">EGATOR</a>
            <ul class="nav__items">
                <li><a href="{{url ('/blog') }}">Blog</a></li>
                <li><a href="{{url ('/about') }}">About</a></li>
                <li><a href="{{url ('/servis') }}">Services</a></li>
                <li><a href="{{url ('/contact') }}">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="Avatar 1">
                    </div>
                    <ul>
                        <li><a href="{{url ('/dashboard') }}">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn">
                <i class="uil uil-bars"></i>
            </button>
            <button id="close__nav-btn">
                <i class="uil uil-multiply"></i>
            </button>
        </div>
    </nav>

    <!-- ================================ END OF NAV ================================= -->

    <section class="empty__page">
        <h1>Services Page</h1>
    </section>

    <footer>
        <div class="footer__socials">
            <a href="" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Science & Technology</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>

            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>

            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>

            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>

        <div class="footer__copyright">
            <small>Copyright &copy; 2022 Didi Riwanda</small>
        </div>
    </footer>

    <script src="./main.js"></script>
</body>
</html>

