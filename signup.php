<?php
    &copy; Copyright Jonathan Chanuka Gurusinghe - <?php echo date('Y') ?>
session_start();
$pagename="Sign up"; //Create and populate a variable called $pagename
echo '<link rel="stylesheet" type="text/css" href="css/mystylesheet.css">'; //Call in stylesheet
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">';
echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>';
echo '<title>'.$pagename.'</title>'; //display name of the page as window title
echo "<body>";
include ("src/headfile.html"); //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page
//display random text

echo '<form action="/signup_process" style="form-group" method="post">
	<div class="container-fluid">
	<label>First Name:</label>
	<div class="form-group">
		<input type="text" name="fname" class="form-control"/>
	</div>
	<label>Last Name:</label>
	<div class="form-group">
		<input type="text" name="sname" class="form-control"/>
	</div>
	<label>Address:</label>
	<div class="form-group">
		<input type="text" name="address" class="form-control"/>
	</div>
	<label>Postcode:</label>
	<div class="form-group">
		<input type="text" name="postcode" class="form-control"/>
	</div>
	<label>Telephone number:</label>
	<div class="form-group">
		<input type="text" name="telno" class="form-control"/>
	</div>
	<label>Email address:</label>
	<div class="form-group">
		<input type="email" name="email" class="form-control"/>
	</div>
	<label>Password:</label>
	<div class="form-group">
		<input type="password" name="password" class="form-control"/>
	</div>
	<button type="submit" class"btn btn-primary">Submit</button>
	</div >
	</div>
</form>	';



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
