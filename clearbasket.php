<?php
    &copy; Copyright Jonathan Chanuka Gurusinghe - <?php echo date('Y') ?>
$pagename="Template"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file
echo "<h4>$Clear Smaer Basket</h4>"; //display name of the page on the web page
//display random text

session_start(); //to ensure you are using same session
unset($_SESSION['basket']); //destroy the session
header("location:basket.php"); //to redirect back to "index.php" after logging out
exit();

include("footfile.html"); //include head layout
echo "</body>";
?>
