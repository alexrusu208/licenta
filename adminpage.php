<?php include('./server.php');
    if($_SESSION['username'] != 'admin') {
    echo "<script>window.location = 'http://localhost/licenta/sorryadmin.php'</script>";
    exit();
    }
?>
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
        <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Check in date</th>
      <th scope="col">Check out date</th>
      <th scope="col">Room number</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody >
   <?php include ('./reservations_list.php'); ?>
  </tbody>
</table>
    </main>
    <?php include('./views/js.php') ?>
    </body>
</html>