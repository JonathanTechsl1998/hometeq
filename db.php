<?php
    &copy; Copyright Jonathan Chanuka Gurusinghe - <?php echo date('Y') ?>
$dbusername = 'root';
$dbpass = '';
$dbhost = 'localhost';
$dbname = 'w1673675_0';
$dbconnect = mysqli_connect($dbhost,$dbusername,$dbpass,$dbname);

// if the connection fails show error
if(!$dbconnect){
    die('Could not connect'. mysqli_error($dbconnect));
}
//select the database
mysqli_select_db($dbconnect, $dbname);
?>
