<?php

$get_reservations = "SELECT * FROM reservation";
        $run_reservations = mysqli_query($db, $get_reservations);

        while ($row_reservations = mysqli_fetch_array($run_reservations)) {

            $id_user = $row_reservations['id_user'];
            $get_email = mysqli_query($db, "SELECT * FROM users WHERE id_user = $id_user");
            $row_user = mysqli_fetch_array($get_email);
            $user_email = $row_user['email'];
        
            $id_reservation = $row_reservations['id_reservation'];
            $get_reservation = mysqli_query($db, "SELECT * FROM reservation WHERE id_reservation = $id_reservation");
            $row_reservation = mysqli_fetch_array($get_reservation);
            $check_in_date = $row_reservation['check_in_date'];
            $check_out_date = $row_reservation['check_out_date'];
            $room_nr = $row_reservation['room_nr'];
            
            echo " 
                <tr>
                    <th scope='row'></th>
                    <td>$check_in_date</td>
                    <td>$check_out_date</td>
                    <td>$room_nr</td>
                    <td>$user_email</td>
                    <form method='post' action='#'>
                        <input type='hidden' name='id_reservation' value='$id_reservation'>
                        <td><button type='submit' name='delete-reservation' class='delete-res'>Delete</button></td>
                    </form>
                </tr>
            ";
        }   

?>