<?php
    &copy; Copyright Jonathan Chanuka Gurusinghe - <?php echo date('Y') ?>
//include to connect to db
include ("db.php");

//create and populate variable name called $pagename
$pagename="Make your home smart"; //Create and populate a variable called $pagename

echo "<link rel=stylesheet type=text/css href=css/mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("src/headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

//create SQL to retrieve data
$SQL = "select prodid,prodName,prodPicNameSmall from Product";

$exeSQL=mysqli_query($dbconnect, $SQL) or die (mysqli_error());
echo "<table style='border: 0px'>";
//create an array of records (2 dimensional variable) called $arrayp.
//populate it with the records retrieved by the SQL query previously executed.
//Iterate through the array i.e while the end of the array has not been reached, run through it
while ($arrayp=mysqli_fetch_array($exeSQL))
 {
    echo "<tr>";
    echo "<td style='border: 0px'>";
    //make the image into an anchor to prodbuy.php and pass the product id by URL (the id from the array)
    echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodid'].">";
//display the small image whose name is contained in the array
    echo "<img src=images/".$arrayp['prodPicNameSmall']." height=200 width=200></a>";

    echo "</td>";
    echo "<td style='border: 0px'>";
    echo "<p><h5>".$arrayp['prodName']."</h5>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
include("src/footfile.html"); //include head layout
echo "</body>";
?>
