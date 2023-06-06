@extends('index')
@section('content')
<section class="search__bar">
        <form class="container search__bar-container" action="">
            <div>
                <i class="uil uil-search"></i>
                <input type="search" name="" placeholder="Search">
            </div>
            <button type="submit" class="btn">Go</button>
        </form>
    </section>

    <!-- ================================ END OF SEACRH ================================= -->

    <section class="posts">
        <div class="header__blog">
            <h2>Trending Topic</h2>
        </div>
        <div class="container posts__container">          
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog2.jpg" alt="Blog 2">
                </div>
                <div class="post__info">
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <a href="category-posts.html" class="category__button category__button-nasional">Nasional</a>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar2.jpg" alt="Avatar 2">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                        <div class="posts__respons">
                            <svg class="post__respons-like" width="24" xmlns="http://www.w3.org/2000/svg" id="like" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M14.5 25.892a.997.997 0 0 1-.707-.293l-9.546-9.546c-2.924-2.924-2.924-7.682 0-10.606 2.808-2.81 7.309-2.923 10.253-.332 2.942-2.588 7.443-2.479 10.253.332 2.924 2.924 2.924 7.683 0 10.606l-9.546 9.546a.997.997 0 0 1-.707.293zM9.551 5.252a5.486 5.486 0 0 0-3.89 1.608 5.505 5.505 0 0 0 0 7.778l8.839 8.839 8.839-8.839a5.505 5.505 0 0 0 0-7.778 5.505 5.505 0 0 0-7.778 0l-.354.354a.999.999 0 0 1-1.414 0l-.354-.354a5.481 5.481 0 0 0-3.888-1.608z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 16 16" id="comment"><path fill="#212121" d="M1 4.5C1 3.11929 2.11929 2 3.5 2H12.5C13.8807 2 15 3.11929 15 4.5V9.5C15 10.8807 13.8807 12 12.5 12H8.68787L5.62533 14.6797C4.99168 15.2342 4 14.7842 4 13.9422V12H3.5C2.11929 12 1 10.8807 1 9.5V4.5ZM3.5 3C2.67157 3 2 3.67157 2 4.5V9.5C2 10.3284 2.67157 11 3.5 11H5V13.8981L8.31213 11H12.5C13.3284 11 14 10.3284 14 9.5V4.5C14 3.67157 13.3284 3 12.5 3H3.5Z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 16 16" id="dislike"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.5 1.5h-4v7h4M4.5 8.5l2 3.5v2.5H8A1.5 1.5 0 0 0 9.5 13V9.5H14A1.5 1.5 0 0 0 15.5 8V6l-1.604-3.609a1.5 1.5 0 0 0-1.371-.891H4.5v7z"></path></svg>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog3.jpg" alt="Blog 3">
                </div>
                <div class="post__info">
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <a href="category-posts.html" class="category__button category__button-ekonomi">Ekonomi</a>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar3.jpg" alt="Avatar 3">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                        <div class="posts__respons">
                            <svg class="post__respons-like" width="24" xmlns="http://www.w3.org/2000/svg" id="like" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M14.5 25.892a.997.997 0 0 1-.707-.293l-9.546-9.546c-2.924-2.924-2.924-7.682 0-10.606 2.808-2.81 7.309-2.923 10.253-.332 2.942-2.588 7.443-2.479 10.253.332 2.924 2.924 2.924 7.683 0 10.606l-9.546 9.546a.997.997 0 0 1-.707.293zM9.551 5.252a5.486 5.486 0 0 0-3.89 1.608 5.505 5.505 0 0 0 0 7.778l8.839 8.839 8.839-8.839a5.505 5.505 0 0 0 0-7.778 5.505 5.505 0 0 0-7.778 0l-.354.354a.999.999 0 0 1-1.414 0l-.354-.354a5.481 5.481 0 0 0-3.888-1.608z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 16 16" id="comment"><path fill="#212121" d="M1 4.5C1 3.11929 2.11929 2 3.5 2H12.5C13.8807 2 15 3.11929 15 4.5V9.5C15 10.8807 13.8807 12 12.5 12H8.68787L5.62533 14.6797C4.99168 15.2342 4 14.7842 4 13.9422V12H3.5C2.11929 12 1 10.8807 1 9.5V4.5ZM3.5 3C2.67157 3 2 3.67157 2 4.5V9.5C2 10.3284 2.67157 11 3.5 11H5V13.8981L8.31213 11H12.5C13.3284 11 14 10.3284 14 9.5V4.5C14 3.67157 13.3284 3 12.5 3H3.5Z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 16 16" id="dislike"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.5 1.5h-4v7h4M4.5 8.5l2 3.5v2.5H8A1.5 1.5 0 0 0 9.5 13V9.5H14A1.5 1.5 0 0 0 15.5 8V6l-1.604-3.609a1.5 1.5 0 0 0-1.371-.891H4.5v7z"></path></svg>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog4.jpg" alt="Blog 4">
                </div>
                <div class="post__info">
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <a href="category-posts.html" class="category__button category__button-sport">Sport</a>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar4.jpg" alt="Avatar 4">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                        <div class="posts__respons">
                            <svg class="post__respons-like" width="24" xmlns="http://www.w3.org/2000/svg" id="like" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M14.5 25.892a.997.997 0 0 1-.707-.293l-9.546-9.546c-2.924-2.924-2.924-7.682 0-10.606 2.808-2.81 7.309-2.923 10.253-.332 2.942-2.588 7.443-2.479 10.253.332 2.924 2.924 2.924 7.683 0 10.606l-9.546 9.546a.997.997 0 0 1-.707.293zM9.551 5.252a5.486 5.486 0 0 0-3.89 1.608 5.505 5.505 0 0 0 0 7.778l8.839 8.839 8.839-8.839a5.505 5.505 0 0 0 0-7.778 5.505 5.505 0 0 0-7.778 0l-.354.354a.999.999 0 0 1-1.414 0l-.354-.354a5.481 5.481 0 0 0-3.888-1.608z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 16 16" id="comment"><path fill="#212121" d="M1 4.5C1 3.11929 2.11929 2 3.5 2H12.5C13.8807 2 15 3.11929 15 4.5V9.5C15 10.8807 13.8807 12 12.5 12H8.68787L5.62533 14.6797C4.99168 15.2342 4 14.7842 4 13.9422V12H3.5C2.11929 12 1 10.8807 1 9.5V4.5ZM3.5 3C2.67157 3 2 3.67157 2 4.5V9.5C2 10.3284 2.67157 11 3.5 11H5V13.8981L8.31213 11H12.5C13.3284 11 14 10.3284 14 9.5V4.5C14 3.67157 13.3284 3 12.5 3H3.5Z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 16 16" id="dislike"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.5 1.5h-4v7h4M4.5 8.5l2 3.5v2.5H8A1.5 1.5 0 0 0 9.5 13V9.5H14A1.5 1.5 0 0 0 15.5 8V6l-1.604-3.609a1.5 1.5 0 0 0-1.371-.891H4.5v7z"></path></svg>
                        </div>
                    </div>
                </div>
            </article>
        </div>

        <div class="header__blog">
            <h2>Berita Terkini</h2>
        </div>

        <div class="container posts__container">
            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog5.jpg" alt="Blog 5">
                </div>
                <div class="post__info">
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <a href="category-posts.html" class="category__button category__button-sport">Sport</a>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar5.jpg" alt="Avatar 5">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                        <div class="posts__respons">
                            <svg class="post__respons-like" width="24" xmlns="http://www.w3.org/2000/svg" id="like" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M14.5 25.892a.997.997 0 0 1-.707-.293l-9.546-9.546c-2.924-2.924-2.924-7.682 0-10.606 2.808-2.81 7.309-2.923 10.253-.332 2.942-2.588 7.443-2.479 10.253.332 2.924 2.924 2.924 7.683 0 10.606l-9.546 9.546a.997.997 0 0 1-.707.293zM9.551 5.252a5.486 5.486 0 0 0-3.89 1.608 5.505 5.505 0 0 0 0 7.778l8.839 8.839 8.839-8.839a5.505 5.505 0 0 0 0-7.778 5.505 5.505 0 0 0-7.778 0l-.354.354a.999.999 0 0 1-1.414 0l-.354-.354a5.481 5.481 0 0 0-3.888-1.608z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 16 16" id="comment"><path fill="#212121" d="M1 4.5C1 3.11929 2.11929 2 3.5 2H12.5C13.8807 2 15 3.11929 15 4.5V9.5C15 10.8807 13.8807 12 12.5 12H8.68787L5.62533 14.6797C4.99168 15.2342 4 14.7842 4 13.9422V12H3.5C2.11929 12 1 10.8807 1 9.5V4.5ZM3.5 3C2.67157 3 2 3.67157 2 4.5V9.5C2 10.3284 2.67157 11 3.5 11H5V13.8981L8.31213 11H12.5C13.3284 11 14 10.3284 14 9.5V4.5C14 3.67157 13.3284 3 12.5 3H3.5Z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 16 16" id="dislike"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.5 1.5h-4v7h4M4.5 8.5l2 3.5v2.5H8A1.5 1.5 0 0 0 9.5 13V9.5H14A1.5 1.5 0 0 0 15.5 8V6l-1.604-3.609a1.5 1.5 0 0 0-1.371-.891H4.5v7z"></path></svg>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog6.jpg" alt="Blog 6">
                </div>
                <div class="post__info">
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <a href="category-posts.html" class="category__button category__button-nasional">Nasional</a>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar6.jpg" alt="Avatar 6">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                        <div class="posts__respons">
                            <svg class="post__respons-like" width="24" xmlns="http://www.w3.org/2000/svg" id="like" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M14.5 25.892a.997.997 0 0 1-.707-.293l-9.546-9.546c-2.924-2.924-2.924-7.682 0-10.606 2.808-2.81 7.309-2.923 10.253-.332 2.942-2.588 7.443-2.479 10.253.332 2.924 2.924 2.924 7.683 0 10.606l-9.546 9.546a.997.997 0 0 1-.707.293zM9.551 5.252a5.486 5.486 0 0 0-3.89 1.608 5.505 5.505 0 0 0 0 7.778l8.839 8.839 8.839-8.839a5.505 5.505 0 0 0 0-7.778 5.505 5.505 0 0 0-7.778 0l-.354.354a.999.999 0 0 1-1.414 0l-.354-.354a5.481 5.481 0 0 0-3.888-1.608z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 16 16" id="comment"><path fill="#212121" d="M1 4.5C1 3.11929 2.11929 2 3.5 2H12.5C13.8807 2 15 3.11929 15 4.5V9.5C15 10.8807 13.8807 12 12.5 12H8.68787L5.62533 14.6797C4.99168 15.2342 4 14.7842 4 13.9422V12H3.5C2.11929 12 1 10.8807 1 9.5V4.5ZM3.5 3C2.67157 3 2 3.67157 2 4.5V9.5C2 10.3284 2.67157 11 3.5 11H5V13.8981L8.31213 11H12.5C13.3284 11 14 10.3284 14 9.5V4.5C14 3.67157 13.3284 3 12.5 3H3.5Z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 16 16" id="dislike"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.5 1.5h-4v7h4M4.5 8.5l2 3.5v2.5H8A1.5 1.5 0 0 0 9.5 13V9.5H14A1.5 1.5 0 0 0 15.5 8V6l-1.604-3.609a1.5 1.5 0 0 0-1.371-.891H4.5v7z"></path></svg>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog7.jpg" alt="Blog 7">
                </div>
                <div class="post__info">
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <a href="category-posts.html" class="category__button category__button-ekonomi">Ekonomi</a>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar7.jpg" alt="Avatar 7">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                        <div class="posts__respons">
                            <svg class="post__respons-like" width="24" xmlns="http://www.w3.org/2000/svg" id="like" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M14.5 25.892a.997.997 0 0 1-.707-.293l-9.546-9.546c-2.924-2.924-2.924-7.682 0-10.606 2.808-2.81 7.309-2.923 10.253-.332 2.942-2.588 7.443-2.479 10.253.332 2.924 2.924 2.924 7.683 0 10.606l-9.546 9.546a.997.997 0 0 1-.707.293zM9.551 5.252a5.486 5.486 0 0 0-3.89 1.608 5.505 5.505 0 0 0 0 7.778l8.839 8.839 8.839-8.839a5.505 5.505 0 0 0 0-7.778 5.505 5.505 0 0 0-7.778 0l-.354.354a.999.999 0 0 1-1.414 0l-.354-.354a5.481 5.481 0 0 0-3.888-1.608z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 16 16" id="comment"><path fill="#212121" d="M1 4.5C1 3.11929 2.11929 2 3.5 2H12.5C13.8807 2 15 3.11929 15 4.5V9.5C15 10.8807 13.8807 12 12.5 12H8.68787L5.62533 14.6797C4.99168 15.2342 4 14.7842 4 13.9422V12H3.5C2.11929 12 1 10.8807 1 9.5V4.5ZM3.5 3C2.67157 3 2 3.67157 2 4.5V9.5C2 10.3284 2.67157 11 3.5 11H5V13.8981L8.31213 11H12.5C13.3284 11 14 10.3284 14 9.5V4.5C14 3.67157 13.3284 3 12.5 3H3.5Z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 16 16" id="dislike"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.5 1.5h-4v7h4M4.5 8.5l2 3.5v2.5H8A1.5 1.5 0 0 0 9.5 13V9.5H14A1.5 1.5 0 0 0 15.5 8V6l-1.604-3.609a1.5 1.5 0 0 0-1.371-.891H4.5v7z"></path></svg>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog8.jpg" alt="Blog 8">
                </div>
                <div class="post__info">
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <a href="category-posts.html" class="category__button category__button-nasional">Nasional</a>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar8.jpg" alt="Avatar 8">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                        <div class="posts__respons">
                            <svg class="post__respons-like" width="24" xmlns="http://www.w3.org/2000/svg" id="like" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M14.5 25.892a.997.997 0 0 1-.707-.293l-9.546-9.546c-2.924-2.924-2.924-7.682 0-10.606 2.808-2.81 7.309-2.923 10.253-.332 2.942-2.588 7.443-2.479 10.253.332 2.924 2.924 2.924 7.683 0 10.606l-9.546 9.546a.997.997 0 0 1-.707.293zM9.551 5.252a5.486 5.486 0 0 0-3.89 1.608 5.505 5.505 0 0 0 0 7.778l8.839 8.839 8.839-8.839a5.505 5.505 0 0 0 0-7.778 5.505 5.505 0 0 0-7.778 0l-.354.354a.999.999 0 0 1-1.414 0l-.354-.354a5.481 5.481 0 0 0-3.888-1.608z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 16 16" id="comment"><path fill="#212121" d="M1 4.5C1 3.11929 2.11929 2 3.5 2H12.5C13.8807 2 15 3.11929 15 4.5V9.5C15 10.8807 13.8807 12 12.5 12H8.68787L5.62533 14.6797C4.99168 15.2342 4 14.7842 4 13.9422V12H3.5C2.11929 12 1 10.8807 1 9.5V4.5ZM3.5 3C2.67157 3 2 3.67157 2 4.5V9.5C2 10.3284 2.67157 11 3.5 11H5V13.8981L8.31213 11H12.5C13.3284 11 14 10.3284 14 9.5V4.5C14 3.67157 13.3284 3 12.5 3H3.5Z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 16 16" id="dislike"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.5 1.5h-4v7h4M4.5 8.5l2 3.5v2.5H8A1.5 1.5 0 0 0 9.5 13V9.5H14A1.5 1.5 0 0 0 15.5 8V6l-1.604-3.609a1.5 1.5 0 0 0-1.371-.891H4.5v7z"></path></svg>
                        </div>
                    </div>
                </div>
            </article>

            <article class="post">
                <div class="post__thumbnail">
                    <img src="./images/blog9.jpg" alt="Blog 9">
                </div>
                <div class="post__info">
                    <h3 class="post__title">
                        <a href="post.html">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt, voluptatem.</a>
                    </h3>
                    <p class="post__body">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam fugit temporibus mollitia pariatur, tempore exercitationem eaque, deserunt doloribus tempora voluptas omnis, laborum sit.
                    </p>
                    <a href="category-posts.html" class="category__button category__button-nasional">Nasional</a>

                    <div class="post__author">
                        <div class="post__author-avatar">
                            <img src="./images/avatar9.jpg" alt="Avatar 9">
                        </div>
                        <div class="post__author-info">
                            <h5>By: John Mills</h5>
                            <small>June 13, 2022 - 10:34</small>
                        </div>
                        <div class="posts__respons">
                            <svg class="post__respons-like" width="24" xmlns="http://www.w3.org/2000/svg" id="like" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path d="M14.5 25.892a.997.997 0 0 1-.707-.293l-9.546-9.546c-2.924-2.924-2.924-7.682 0-10.606 2.808-2.81 7.309-2.923 10.253-.332 2.942-2.588 7.443-2.479 10.253.332 2.924 2.924 2.924 7.683 0 10.606l-9.546 9.546a.997.997 0 0 1-.707.293zM9.551 5.252a5.486 5.486 0 0 0-3.89 1.608 5.505 5.505 0 0 0 0 7.778l8.839 8.839 8.839-8.839a5.505 5.505 0 0 0 0-7.778 5.505 5.505 0 0 0-7.778 0l-.354.354a.999.999 0 0 1-1.414 0l-.354-.354a5.481 5.481 0 0 0-3.888-1.608z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" fill="none" viewBox="0 0 16 16" id="comment"><path fill="#212121" d="M1 4.5C1 3.11929 2.11929 2 3.5 2H12.5C13.8807 2 15 3.11929 15 4.5V9.5C15 10.8807 13.8807 12 12.5 12H8.68787L5.62533 14.6797C4.99168 15.2342 4 14.7842 4 13.9422V12H3.5C2.11929 12 1 10.8807 1 9.5V4.5ZM3.5 3C2.67157 3 2 3.67157 2 4.5V9.5C2 10.3284 2.67157 11 3.5 11H5V13.8981L8.31213 11H12.5C13.3284 11 14 10.3284 14 9.5V4.5C14 3.67157 13.3284 3 12.5 3H3.5Z"></path></svg>
    
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 16 16" id="dislike"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M4.5 1.5h-4v7h4M4.5 8.5l2 3.5v2.5H8A1.5 1.5 0 0 0 9.5 13V9.5H14A1.5 1.5 0 0 0 15.5 8V6l-1.604-3.609a1.5 1.5 0 0 0-1.371-.891H4.5v7z"></path></svg>
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
    @endsection