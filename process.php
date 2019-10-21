<?php
    // Get values passed from form in index.php file
    $username = $_POST['user'];
    $password = $_POST['pass'];
    
    // to prevent mysql injection
    // $username = stripcslashes($username);
    // $password = stripcslashes($password);
    // $username = mysqli_real_escape_string($username);
    // $password = mysqli_real_escape_string($password);
    
    // connect to the server and select database
    $link = mysqli_connect('tethys.cse.buffalo.edu:3306', 'marksiga', '50191895', 'cse442_542_2019_fall_teame_db');
    
    if($link == false){
        die("ERROR: " . mysqli_connect_error());
    }
    echo "Connect Successfully. Host info: " . mysqli_get_host_info($link);
    //Query the database for user
    // $result = mysqli_query("SELECT * FROM `Login` LIMIT 0, 30 ")
    //         or die("Failed to query database ".mysql_error());
    // $row = mysql_fetch_array($result);
    // if ($row['username'] == $username && $row['password'] == $password ){
    //      echo "Login success! Welcome ".$row['username'];
    //     } else {
    //         echo "Failed to login.";
    // }
    $sql = "SELECT * FROM `Login` LIMIT 0, 30 ";
    $result = $link->query($sql);
    while($row = mysqli_fetch_array($result)){
    if ($row['username'] == $username && $row['password'] == $password ){
        echo "Login success! Welcome ".$row['username'];
        header('Location: Timer.html');
    } else {
        echo "Failed to login.";
        header('Location: index.php');
        }
	}
?>