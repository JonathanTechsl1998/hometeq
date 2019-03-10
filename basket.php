<?php
    &copy; Copyright Jonathan Chanuka Gurusinghe - <?php echo date('Y') ?>
session_start();
// database
include('db.php');

$pagename="Template"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("headfile.html"); //include header layout file

echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

if (isset($_POST["h_prodid"])) {
	
$newprodid = $_POST['h_prodid'];
$reququantity = $_POST['prodQuantity'];

//echo "<p><b>Id of selected product: ".$newprodid."</b></p>";
//echo "<p><b>Quantity of selectedrpoduct: ".$reququantity."</b></p>";

//create a new cell in the basket session array. Index this cell with the new product id.
//Inside the cell store the required product quantity
$_SESSION['basket'][$newprodid]=$reququantity;
//echo "<p>The doc id ".$newdocid." has been ".$_SESSION['basket'][$newdocid];
echo "<p>1 item added";

} else {
	echo "Current basket unchanged";
}
echo "<br/>";
echo"<table><tr><th>Product Name</th><th>Price</th><th>Quantity</th><th>Subtotal</th><th></th></tr>";
$total = 0;
if(isset($_SESSION['basket'])){
	
		foreach($_SESSION['basket'] as $index => $value){
			$SQL="select * from Product WHERE prodId = ".$index;
			$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
			
			$arrayp= array();
			while ($row = mysqli_fetch_assoc($exeSQL))
				$arrayp[] = $row;
			
			echo"<tr>";
				
				foreach ($arrayp as $user) {
				echo "<td>".$user["prodName"]."</td>";
				echo "<td>£ ".$user["prodPrice"]."</td>";
				echo "<td>".$value."</td>";
				echo "<td><</td>";
				
				$subTotal = $user["prodPrice"] * $user["prodQuantity"];
				echo "<td>£ ".$subTotal."</td>";
				
				$total += $subTotal;
			}
			echo"</tr>";
		}
		
		
}
echo '<tr><td colspan="3" style="text-align:right;"><b>Total</b></td><td><b>£ '.$total.'</td></b></tr>';
echo"</table>";
echo '<a href="clearbasket.php">CLEAR BASKET</a><br>';

echo 'New hometeq customers: <a href="signup.php">signup</a><br>';
echo 'Returning hometeq customers: <a href="login.php">Login</a><br>';

include("footfile.html"); //include head layout
echo "</body>";
?>
