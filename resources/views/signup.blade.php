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

<section class="register about">
    <div class="left left-signin">
        <h1>WebioPedia</h1>
        <p>Berita Terbaru Setiap Hari</p>
    </div>
    <div class="right">
        <h2>Sign Up</h2>
        <p>Register untuk menikmati konten sesuai dengan preferensi anda dan dapatkan keuntungan lainnya.</p>
        <div class="alert__message error">
            <p>This is an error message</p>
        </div>
        <form action="">
            <input type="text" placeholder="First Name">
            <input type="text" placeholder="Last Name">
            <input type="text" placeholder="Username">
            <input type="email" placeholder="Email">
            <input type="password" placeholder="Create Password">
            <input type="password" placeholder="Confirm Password">
            <div class="form__control">
                <label for="avatar">User Avatar</label>
                <input type="file" id="avatar">
            </div>
            <button type="submit" class="btn">Sign In</button>
            <small class="small">Sudah punya akun? <a href="{{url ('/signin') }}">Login disini!</a></small>
        </form>
    </div>
</section>

</body>
</html>
