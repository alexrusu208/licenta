<?php include('server.php'); ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <title>Hotel</title>
        <?php include('./views/head.php') ?>
        <link href="src/css/lightbox.css" rel="stylesheet" />
   </head>
   <body>
   <?php include('./views/preloader.php') ?>
    <header>
        <?php include('./views/header.php') ?>
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/roomspage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <h2>Photo Gallery</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Room Start -->
        <section class="room-area r-padding1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!--font-back-tittle  -->
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="assets/img/rooms/room1.jpg" data-lightbox="picture1"><img src="assets/img/rooms/room1.jpg" alt=""></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="assets/img/rooms/room2.jpg" data-lightbox="picture2"><img src="assets/img/rooms/room2.jpg" alt=""></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="assets/img/rooms/room3.jpg" data-lightbox="picture3"> <img src="assets/img/rooms/room3.jpg" alt=""></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="assets/img/rooms/room4.jpg" data-lightbox="picture4"><img src="assets/img/rooms/room4.jpg" alt=""></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                                <a href="assets/img/rooms/room5.jpg" data-lightbox="picture5"><img src="assets/img/rooms/room5.jpg" alt=""></a>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <!-- Single Room -->
                        <div class="single-room mb-50">
                            <div class="room-img">
                               <a href="assets/img/rooms/room6.jpg" data-lightbox="picture6"> <img src="assets/img/rooms/room6.jpg" alt=""></a>
                            </div>
                           
                        </div>
                    </div>
                </div>

            </div>

        </section>
        <!-- Room End -->
    </main>

   <footer>
     <?php include('./views/footer.php') ?>
   </footer>
    <?php include('./views/js.php') ?>
    <script src="src/js/lightbox.js"></script>
    </body>
</html>