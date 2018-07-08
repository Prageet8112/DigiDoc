<?php  
 require('db_connect.php');
echo "6";
if (isset($_POST['inputFirstName']) and isset($_POST['inputEmail4'])){
echo "7";	
// Assigning POST values to variables.
$name = $_POST['inputFirstName'];
$email = $_POST['inputEmail4'];
$pnumber = $_POST['inputPhoneNumber'];

// CHECK FOR THE RECORD FROM TABLE
//$query = "SELECT * FROM `user_login` WHERE username='$username' and Password='$password'";

$query = "INSERT INTO appointment (name, email, pnumber) VALUES('$name', '$email', '$pnumber')";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));

if ($result){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
}
}
echo "8";
?>