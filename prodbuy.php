<?php
    &copy; Copyright Jonathan Chanuka Gurusinghe - <?php echo date('Y') ?>
include ("db.php");
$pagename="A Smart buy for a Smart Home"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=css/mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("src/headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
 //retrieve the product id passed from previous page using the GET method and the $_GET superglobal variable //applied to the query string u_prod_id
//store the value in a local variable called $prodid
    $prodid=$_GET['u_prod_id'];
//display the value of the product id, for debugging purposes
    echo "<p>Selected product Id: ".$prodid;

    //create SQL to retrieve data
$SQL = "select prodid,prodName,prodPicNameLarge,prodDescripLong,prodPrice from Product";

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
    echo "<img src=images/".$arrayp['prodPicNameLarge']." height=200 width=200></a>";

    echo "</td>";
    echo "<td style='border: 0px'>";
    echo "<p><h5>".$arrayp['prodName']."</h5>";
    echo "</td>";
    echo "</tr>";
    }
    echo "</table>";

    echo "<p>Number to be purchased: ";
//create form made of one text field and one button for user to enter quantity //the value entered in the form will be posted to the basket.php to be processed echo "<form action=basket.php method=post>";
    echo '<select name="p_quantity" id="">';
    echo '<option></option>';
	foreach($arrayp as $i){
		print_r();
	}
    echo '</select>';
    echo "<input type=submit value='ADD TO BASKET'>";
//pass the product id to the next page basket.php as a hidden value
    echo "<input type=hidden name=h_prodid value=".$prodid.">"; echo "</form>";
//display random text
    echo "<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
labore et dolore magna aliqua. Non consectetur a erat nam at lectus urna. Cras pulvinar mattis nunc sed
blandit libero volutpat sed cras. Nunc aliquet bibendum enim facilisis gravida neque convallis a cras.
Nunc consequat interdum varius sit. Nam aliquam sem et tortor consequat. Magna sit amet purus gravida.
Non sodales neque sodales ut etiam sit. Tortor consequat id porta nibh venenatis. Ornare arcu odio ut
sem nulla pharetra diam. Tincidunt ornare massa eget egestas purus. Pulvinar mattis nunc sed blandit
libero volutpat sed. Nulla malesuada pellentesque elit eget. Varius quam quisque id diam vel quam
elementum pulvinar. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Vestibulum lectus
mauris ultrices eros in. Faucibus in ornare quam viverra. Hac habitasse platea dictumst vestibulum
rhoncus. Parturient montes nascetur ridiculus mus. Dui accumsan sit amet nulla facilisi morbi tempus
iaculis urna.";
include("src/footfile.html"); //include head layout
echo "</body>";
?>
