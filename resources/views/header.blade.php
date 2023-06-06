<nav>
        <div class="container nav__container">
            <div class="nav__logo-bar">
                <a href="index.html" class="nav__logo">WEBIOPEDIA</a>
                <h6 class="nav__sub-logo">Berita Terbaru Setiap Hari</h6>
            </div>
            <ul class="nav__items">
                <li><a href="{{ url('/beranda') }}">Home</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="Avatar 1">
                    </div>
                    <ul>
                        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
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