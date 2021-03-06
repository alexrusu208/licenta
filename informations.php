<?php include('server.php'); ?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <title>Arinne</title>
        <?php include('./views/head.php') ?>
   </head>

   <body>
        <?php include('./views/preloader.php') ?>
    <header>
        <?php include('./views/header.php') ?>
    </header>
    <main>

        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/informations.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>About</span>
                                <h2>Arinne</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <!-- Make customer Start-->
        <section class="make-customer-area customar-padding fix">
            <div class="container-fluid p-0">
                <div class="row">
                   <div class="col-xl-5 col-lg-6">
                        <div class="customer-img mb-120">
                            <img src="assets/img/customer/customer1.png" class="customar-img1" alt="">
                            <img src="assets/img/customer/customer2.png" class="customar-img2" alt="">
                            <div class="service-experience heartbeat">
                                <h3>Relaxing,<br>Activities for you<br>and your children</h3>
                            </div>
                        </div>
                   </div>
                    <div class=" col-xl-4 col-lg-4">
                        <div class="customer-caption">
                            <h2>Arinne is a seaside hotel with modern and luxurious rooms for everyone's taste.</h2>
                            <div class="caption-details">
                                <p class="pera-dtails">During summer, in addition to accommodation, you can take part in workshops for both children and adults.</p>
                                <p>This way you can choose between relaxing or spending time, taking part to creative and interactive activities held by our workshops, learning new and interesting things during this activities.</p>
                                <a href="./workshops.php" class="btn more-btn1">Learn More <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Make customer End-->

        <!-- Dining Start -->
        <div class="dining-area d-padding">
            <!-- Single Left img -->
            <div class="single-dining-area left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption">
                                <h3>Restaurant</h3>
                                <p>In our restaurant the breakfast is included in the room price.<br>
                                   You cand also eat lunch in our hotel but the price is not included in the price of the room.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <!-- single Right img -->
            <div class="single-dining-area right-img">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <h3>Spa and swimming pool</h3>
                                <p>Arinne also has a SPA area where you can spend your time relaxing<br>
                                        In addition, the hotel swimming pool is open 24 hours a day</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
        <!-- Dining End -->


        <!-- Gallery img Start-->
        <div class="gallery-area g-padding fix">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="gallery-active owl-carousel">
                                    <div class="gallery-img">
                                        <a href="#"><img src="assets/img/gallery/gallery1.jpg" alt=""></a>
                                    </div>
                                    <div class="gallery-img">
                                        <a href="#"><img src="assets/img/gallery/gallery2.jpg" alt=""></a>
                                    </div>
                                    <div class="gallery-img">
                                        <a href="#"><img src="assets/img/gallery/gallery3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Gallery img End-->

        

    </main>
    <footer>
        <?php include('./views/footer.php') ?>
    </footer>
	<?php include('./views/js.php') ?>     
    </body>
</html>