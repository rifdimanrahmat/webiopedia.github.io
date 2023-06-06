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
    
    @extends('index')
    @section('content')

    <section class="posts">
        <div class="header__blog category__title">
            <h2>Nasional</h2>
        </div>
        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg" alt="Blog 2">
                </div>
                <div class="post__info">
                    <a href="category-posts.html" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar2.jpg" alt="Avatar 2">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog3.jpg" alt="Blog 3">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg" alt="Avatar 3">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog4.jpg" alt="Blog 4">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar4.jpg" alt="Avatar 4">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog5.jpg" alt="Blog 5">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar5.jpg" alt="Avatar 5">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog6.jpg" alt="Blog 6">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar6.jpg" alt="Avatar 6">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog7.jpg" alt="Blog 7">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar7.jpg" alt="Avatar 7">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog8.jpg" alt="Blog 8">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar8.jpg" alt="Avatar 8">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog9.jpg" alt="Blog 9">
                </div>
                <div class="post__info">
                    <a href="" class="category__button">Wild Life</a>
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar9.jpg" alt="Avatar 9">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <!-- ============================== END OF POSTS ============================ -->

    <section class="category__buttons">
        <div class="container category__buttons-container">
            <a href="" class="category__button category__button-nasional">Nasional</a>
            <a href="" class="category__button category__button-sport">Sport</a>
            <a href="" class="category__button category__button-ekonomi">Ekonomi/a>
            <a href="" class="category__button category__button-teknologi">Sains & Teknologi</a>
            <a href="" class="category__button category__button-makanan">Makanan</a>
            <a href="" class="category__button category__button-musik">Musik</a>
        </div>
    </section>
    <!-- ============================== END OF CATEGORY BUTTONS ============================ -->

    
    <script src="./main.js"></script>
    @endsection
</body>
</html>

