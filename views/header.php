        <div class="header-area header-sticky">
            <div class="main-header ">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                               <a href="index.php"><img src="assets/img/logo/Arinne.jpg" alt=""></a>
                            </div>
                        </div>
                    <div class="col-xl-8 col-lg-8">
                            <!-- main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">                                                                                                                                     
                                        <li><a href="index.php">Home</a></li>
                                        <li><a href="informations.php">Info</a></li>
                                        <li><a href="workshops.php">Workshops</a></li>
                                        <!-- <li><a href="blog.php">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="blog.php">Blog</a></li>
                                                <li><a href="single-blog.php">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                        <li><a href="rooms.php">Rooms</a></li>    
                                        <li><a href="gallery.php">Gallery</a></li>                                                                                                                     
                                        <li><a href="contact.php">Contact</a></li>
                                        <li><a href="reservations.php">Reservations</a></li>
                                        <li> <?php if (!isset($_SESSION["username"])): ?>
                                        <a href="index.php?logout='0'">Login</a></li>
                                        <?php endif ?>
                                        <?php if (isset($_SESSION["username"])): ?>
                                            <?php if ($_SESSION["username"] == 'admin') : ?>
                                                <li><a href="adminpage.php">Booked Rooms</a><li>
                                                <?php endif ?>
                                        <li><a href="index.php?logout='1'">Logout</a></li>
                                        <?php endif ?>
                                    </ul>
                                </nav>
                            </div>
                        </div>             
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
       