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
            <div class="nav__logo-bar">
                <a href="index.html" class="nav__logo">WEBIOPEDIA</a>
                <h6 class="nav__sub-logo">Berita Terbaru Setiap Hari</h6>
            </div>
            <ul class="nav__items">
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg" alt="Avatar 1">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
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

    <section class="singlepost">
        <div class="back">
            <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="back-arrow"><path fill="none" d="M0 0h24v24H0V0z" opacity=".87"></path><path d="M16.62 2.99c-.49-.49-1.28-.49-1.77 0L6.54 11.3c-.39.39-.39 1.02 0 1.41l8.31 8.31c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.38 12l7.25-7.25c.48-.48.48-1.28-.01-1.76z"></path></svg>
            </a>
        </div>
        <div class="container singlepost__container">
            <h2>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ipsa!</h2>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar2.jpg" alt="Avatar 2">
                </div>
                <div class="post__author-info">
                    <h5>By: Jane Doe</h5>
                    <small>June 10, 2022 - 07:23</small>
                </div>
                <div class="post__respon-post">
                    <svg class="post__respons-like" width="24" xmlns="http://www.w3.org/2000/svg" id="like" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M14.5 25.892a.997.997 0 0 1-.707-.293l-9.546-9.546c-2.924-2.924-2.924-7.682 0-10.606 2.808-2.81 7.309-2.923 10.253-.332 2.942-2.588 7.443-2.479 10.253.332 2.924 2.924 2.924 7.683 0 10.606l-9.546 9.546a.997.997 0 0 1-.707.293zM9.551 5.252a5.486 5.486 0 0 0-3.89 1.608 5.505 5.505 0 0 0 0 7.778l8.839 8.839 8.839-8.839a5.505 5.505 0 0 0 0-7.778 5.505 5.505 0 0 0-7.778 0l-.354.354a.999.999 0 0 1-1.414 0l-.354-.354a5.481 5.481 0 0 0-3.888-1.608z"></path></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 16 16" id="comment"><path fill="#212121" d="M1 4.5C1 3.11929 2.11929 2 3.5 2H12.5C13.8807 2 15 3.11929 15 4.5V9.5C15 10.8807 13.8807 12 12.5 12H8.68787L5.62533 14.6797C4.99168 15.2342 4 14.7842 4 13.9422V12H3.5C2.11929 12 1 10.8807 1 9.5V4.5ZM3.5 3C2.67157 3 2 3.67157 2 4.5V9.5C2 10.3284 2.67157 11 3.5 11H5V13.8981L8.31213 11H12.5C13.3284 11 14 10.3284 14 9.5V4.5C14 3.67157 13.3284 3 12.5 3H3.5Z"></path></svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 16 16" id="dislike"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.5 1.5h-4v7h4M4.5 8.5l2 3.5v2.5H8A1.5 1.5 0 0 0 9.5 13V9.5H14A1.5 1.5 0 0 0 15.5 8V6l-1.604-3.609a1.5 1.5 0 0 0-1.371-.891H4.5v7z"></path></svg>
                </div>
            </div>
            <div class="singlepost__thumbnail">
                <img src="./images/blog33.jpg" alt="Blog 33">
            </div>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id illo animi mollitia eaque sed molestias molestiae. Delectus voluptate voluptatum aliquam voluptates. Minima dolore unde, architecto ratione aliquam odit. Natus ratione laborum deleniti ex nostrum id enim aliquam optio sed aut?
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id illo animi mollitia eaque sed molestias molestiae. Delectus voluptate voluptatum aliquam voluptates. Minima dolore unde, architecto ratione aliquam odit. Natus ratione laborum deleniti ex nostrum id enim aliquam optio sed aut?
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laboriosam molestiae iusto natus commodi veniam, voluptate officia odit quas cumque magni veritatis dicta nam? Magnam, nihil veniam sit expedita fugit assumenda consequatur enim deleniti maxime atque molestiae, voluptates laborum. At blanditiis, debitis fugit alias facere quaerat optio maiores impedit soluta sed ex, tempora est quibusdam corporis, quas asperiores aperiam obcaecati velit?
            </p>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id illo animi mollitia eaque sed molestias molestiae. Delectus voluptate voluptatum aliquam voluptates. Minima dolore unde, architecto ratione aliquam odit. Natus ratione laborum deleniti ex nostrum id enim aliquam optio sed aut?
            </p>
        </div>
    </section>

    <!-- ================================ END OF SINGLE POST ================================= -->

    <footer>
        <div class="footer__socials">
            <a href="" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="" target="_blank"><i class="uil uil-twitter"></i></a>
            <a href="" target="_blank"><i class="uil uil-linkedin"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Nasional</a></li>
                    <li><a href="">Ekonomi</a></li>
                    <li><a href="">Teknologi</a></li>
                    <li><a href="">Sport</a></li>
                </ul>
            </article>

            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Trending Topik</a></li>
                    <li><a href="">Berita Terkini</a></li>
                </ul>
            </article>

            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>

            <article>
                <h4>Support</h4>
                <ul>
                    <li>
                        <a href="">Phone</a>
                        <p>+62 711 247 555</p>
                    </li>
                    <li>
                        <a href="">Mail</a>
                        <p>info.webiopedia@gmail.com</p>
                    </li>
                    <li>
                        <a href="">Address</a>
                        <p>
                            Jl. Letjend pol. Sumarto No. 127, Watumas, Purwanegara, Kec. Purwokerto Utara, Kab. Banyumas, Jawa Tengah.
                        </p>
                    </li>
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

