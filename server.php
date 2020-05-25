    <?php 
        session_start();
        $username = "";
        $email = "";
        $errors = array();
        $check_in_date = date('d/m/y');
        $check_out_date = date('d/m/y');
        $room_nr = "";
        
        
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
            $check_in_date = $_POST['check_in_date'];
            $check_out_date = $_POST['check_out_date'];
            $room_nr = $_POST['room_nr'];

            // $sql_check_in_date = "SELECT * FROM reservation WHERE check_in_date = '$check_in_date'";
            // $sql_check_out_date = "SELECT * FROM reservation WHERE check_out_date = '$check_out_date'";
            // $sql_room_nr = "SELECT * FROM reservation WHERE room_nr = '$room_nr'";
            // $res_check_in_date = mysqli_query($db, $sql_check_in_date);
            // $res_check_out_date = mysqli_query($db, $sql_check_out_date);
            // $res_room_nr = mysqli_query($db, $sql_room_nr);
            
            if("SELECT * FROM reservation WHERE check_in_date >= '$check_in_date' AND check_out_date <= '$check_out_date' AND room_nr = '$room_nr'"){
                echo '<script>alert("This room is already booked between the dates you selected.")</script>';
            }else {
                $sql = "INSERT INTO reservation (check_in_date, check_out_date, room_nr) 
                            VALUES ('$check_in_date', '$check_out_date', '$room_nr')";
                // mysqli_query($db, $sql);
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