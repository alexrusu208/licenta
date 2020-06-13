<?php include('./server.php');
    if($_SESSION['username'] != 'admin') {
    echo "<script>window.location = 'http://localhost/licenta/sorryadmin.php'</script>";
    exit();
    }
?>
<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <title>Hotel</title>
        <?php include('./views/head.php') ?>	
   </head>
    <body>    
        <?php include('./views/preloader.php') ?>
    <header>
        <?php include('./views/header.php') ?>
    </header>
    <main>
        <div class="content">
            <?php if (isset($_SESSION['succes'])): ?>
                <div class="success">
                    <h3>
                        <?php
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>            
        </div>
        <div class="single-room mb-50">
            <h3><a href="rooms.php">Classic Double Bed</a></h3>
                <div class="per-night">
                    <span><u>$</u>150 <span>/ per night</span></span>
                </div>
        </div>
        <div class="single-room mb-50">
            <h3><a href="rooms.php">Classic Double Bed</a></h3>
                <div class="per-night">
                    <span><u>$</u>150 <span>/ per night</span></span>
                </div>
        </div>
    </main>
    <?php include('./views/js.php') ?>
    </body>
</html>