<?php
    &copy; Copyright Jonathan Chanuka Gurusinghe - <?php echo date('Y') ?>
include ("db.php");
$pagename="Your signup results"; //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; //Call in stylesheet
echo "<title>".$pagename."</title>"; //display name of the page as window title
echo "<body>";
include ("src/headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text
$empid = $_POST['empID'];
$empfname = $_POST['empFNAME'];
$emppos = $_POST['empPOS'];
$empemail = $_POST['empEMAIL'];
$empcompco = $_POST['empCOMPCO'];
$sql = "INSERT INTO users
(w1673675_empid,w1673675_empfullname,w1673675_empposition,w1673675_email,w1673675_c
ompcode) VALUES ('$empid','$empfname','$emppos','$empemail','$empcompco');";
$rslt = mysqli_query($dbconnect,$sql);
if(!$rslt){
echo '<br/>data is not inserted';
}
else{
// data retrieving from the database
$data = mysqli_query($dbconnect, "SELECT * FROM w1673675_employee ORDER BY
w1673675_empid DESC LIMIT 1");
$printdb = mysqli_fetch_row($data);

//feedback form
echo '<h2>New Employee Confirmation</h2>';
echo '<h5>Your new employee has been added succesfully!</h5>';
echo '<br/>';
echo 'added employee id: '.$printdb[0];

include("src/footfile.html"); //include head layout
echo "</body>";
?>
