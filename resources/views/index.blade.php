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

    <div id="bg"></div>
	<div id="modal-kotak" class="modal-kotak">
		<div class="atas">
			<button id="tombol-tutup">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" id="back-arrow"><path fill="none" d="M0 0h24v24H0V0z" opacity=".87"></path><path d="M16.62 2.99c-.49-.49-1.28-.49-1.77 0L6.54 11.3c-.39.39-.39 1.02 0 1.41l8.31 8.31c.49.49 1.28.49 1.77 0s.49-1.28 0-1.77L9.38 12l7.25-7.25c.48-.48.48-1.28-.01-1.76z"></path></svg>
            </button>
		</div>

        <div class="bawah about">
            <div class="left post__thumbnail">
                <img src="./images/blog2.jpg" class="img-comment" alt="">
            </div>
            <div class="right">
                <div class="author-comment">
                    <div class="post__author-avatar">
                        <img src="./images/avatar2.jpg" alt="Avatar 2">
                    </div>
                    <div class="post__author-info">
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quidem quaerat cupiditate, aspernatur unde nam magnam odit sit nisi ipsa.</small>
                    </div>
                </div>

                <div class="author-comment">
                    <div class="post__author-avatar">
                        <img src="./images/avatar3.jpg" alt="Avatar 2">
                    </div>
                    <div class="post__author-info">
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quidem quaerat cupiditate, aspernatur unde nam magnam odit sit nisi ipsa.</small>
                    </div>
                </div>

                <div class="author-comment">
                    <div class="post__author-avatar">
                        <img src="./images/avatar4.jpg" alt="Avatar 2">
                    </div>
                    <div class="post__author-info">
                        <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quidem quaerat cupiditate, aspernatur unde nam magnam odit sit nisi ipsa.</small>
                    </div>
                </div>

                <textarea name="" id="" cols="45" rows="3">Silahkan ketik komentar anda.</textarea>

            </div>
        </div>

        
	</div>
    
    <!-- ================================== START OF NAV ========================================= -->
    @include('header')

    <!-- ================================ END OF NAV ================================= -->

    <main id="main">
        @yield('content')
    </main>

    <!-- ============================== END OF CATEGORY BUTTONS ============================ -->


    @include('footer')


    <script src="./main.js"></script>
    <script src="./jquery-3.7.0.js"></script>
    <script type="text/javascript">
		$(document).ready(function(){
			$('#comment').click(function(){
				$('#modal-kotak , #bg').fadeIn("slow");
			});
			$('#tombol-tutup').click(function(){
				$('#modal-kotak , #bg').fadeOut("slow");
			});
		});
	</script>
</body>
</html>

