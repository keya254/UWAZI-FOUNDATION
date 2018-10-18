<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$trainers_id = mysql_real_escape_string($_POST['trainers_id']);
	$uname = mysql_real_escape_string($_POST['uname']);
	$email = mysql_real_escape_string($_POST['email']);
	$pass = md5(mysql_real_escape_string($_POST['pass']));

	$trainers_id = trim($trainers_id);
	$uname = trim($uname);
	$email = trim($email);
	$pass = trim($pass);

	// email exist or not
	$query = "SELECT trainers_id FROM trainers_log WHERE trainers_id='$trainers_id'";
	$result = mysql_query($query);

	$count = mysql_num_rows($result); // if email not found then register

	if($count == 0){

		if(mysql_query("INSERT INTO trainers_log(trainers_id,uname,email,pass) VALUES('$trainers_id','$uname','$email','$pass')"))
		{
			?>
			<script>alert('successfully registered ');</script>
			<?php
		}
		else
		{
			?>
			<script>alert('error while registering you...');</script>
			<?php
		}
	}
	else{
			?>
			<script>alert('Sorry id already exist ...');</script>
			<?php
	}

}