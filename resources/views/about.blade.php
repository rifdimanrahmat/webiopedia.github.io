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

    <section class="about">
        <div class="left">
            <h1>WebioPedia</h1>
            <p>Berita Terbaru Setiap Hari</p>
            <div class="about__left">
                <h4>Tentang Kami</h4>
                <p>webioPedia adalah salah satu portal baca online yang terkemuka dan berpengaruh. Portal ini didirikan pada tahun 2023 oleh beberapa anak muda dari berbagai penjuru Indonesia.</p>
                <p>webioPedia menyediakan informasi dari berbagai aspek kehidupan di Indonesia, mulai dari pendidikan, otomotif, musik, dan lain sebagainya.</p>
            </div>
        </div>
        <div class="right">
            <img src="./images/blog1.jpg" alt="">
        </div>
    </section>


        

    <script src="./main.js"></script>
    @endsection
</body>
</html>

