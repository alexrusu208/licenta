    <?php 
        session_start();
        $username = "";
        $email = "";
        $errors = array();
       
        
        
        //connect to the database
        $db = mysqli_connect('localhost', 'root', '', 'registration');
        
        if (isset($_POST['register'])){
                $username = $_POST['username']; 
                $email = $_POST['email'];
                $password_1 = $_POST['password_1'];

                $sql_username = "SELECT * FROM users WHERE username = '$username'";
                $sql_email = "SELECT * FROM users WHERE email = '$email'";
                $res_username = mysqli_query($db, $sql_username);
                $res_email = mysqli_query($db, $sql_email);

                if(mysqli_num_rows($res_username) > 0){
                    $name_error = "Username already taken.";
                }else if(mysqli_num_rows($res_email) > 0){
                    $email_error = "Email already exists.";
                }else{ 
                    $password = md5($password_1); // password encrypt before saving password to database
                    $sql = "INSERT INTO users (username, email, password) 
                            VALUES ('$username', '$email', '$password')";
                    mysqli_query($db, $sql);
                    echo '<script>alert("Registration succesful!")</script>';
                    // $_SESSION['username'] = $username;
                    // $_SESSION['success'] = "You are now logged in";
                    // header('location: index.php'); //redirect to homepage
                }
                
        }

        //Login
        if (isset($_POST['login'])){
        
                $username = $_POST['username']; 
                $password = $_POST['password'];
                

                // If the fields are not complete following errors will apear

                if (empty($username)) {
                    array_push($errors, "Username is required");
                }
                if (empty($password)) {
                    array_push($errors, "Password is required");
                }
                    if (count($errors) == 0 ){
                        $password = md5($password); //encrypting
                        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
                        $result = mysqli_query($db, $query);
                        if (mysqli_num_rows($result) == 1){
                            //user logged in
                            $_SESSION['username'] = $username;
                            $_SESSION['success'] = "You are now logged in";
                            header('location: index.php'); //redirect to homepage                    
                        }else{
                            echo '<script>alert("Username or password incorrect.")</script>';
                        
                        }
                    }
        
                
        }

        // Book certain room
        
        if (isset($_POST['book_now'])){
            $session_username = $_SESSION['username'];
            $select_user = "SELECT * FROM users WHERE username = '$session_username'";
            $run_user = mysqli_query($db, $select_user);
            if (!$run_user) {
                printf("Error: %s\n", mysqli_error($db));
                exit();
            }
            $row_user = mysqli_fetch_array($run_user);
            $saved_id = $row_user['id_user'];
            $check_in_date = $_POST['check_in_date'];
            $check_out_date = $_POST['check_out_date'];
            $roomNr = $_POST['room_nr'];
            $check_reservation = "SELECT * FROM reservation WHERE
                                  ((check_in_date <= '$check_in_date' AND check_out_date >= '$check_out_date') 
                                  OR ('$check_in_date' BETWEEN check_in_date AND check_out_date) 
                                  OR ('$check_out_date' BETWEEN check_in_date AND check_out_date))
                                  AND room_nr = '$roomNr'";
            $res_reservation = mysqli_query($db, $check_reservation);
            
            $row_nr = mysqli_num_rows($res_reservation);

            

            if($row_nr > 0){
                echo '<script>alert("This room is already booked between the dates you selected.")</script>';
            }else {
                $sql = "INSERT INTO reservation (check_in_date, check_out_date, room_nr, id_user) 
                            VALUES ('$check_in_date', '$check_out_date', '$roomNr', '$saved_id')";
                mysqli_query($db, $sql);
                echo '<script>alert("Your reservation was succesfully registered. See you at Arrine!")</script>';
            }
        
            
        }
    
        //Logout
        if (isset($_GET['logout'])) {
            session_destroy();
            unset($_SESSION['username']);
            header('location: login.php');
        }
 
 ?>