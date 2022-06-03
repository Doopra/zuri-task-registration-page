<?php
    
    if(isset($_POST['submit'])){
    $email = $_POST['email'];//finish this line
    $password = $_POST['password']; //finish this

loginUser($username, $password);

}

function loginUser($email, $password){
    /*
        Finish this function to check if username and password \
    from file match that which is passed from the form
    */

 if (isset($_POST['submit']))
{ 
	$email = $_POST['email'];//finish this line
    $password = $_POST['password'];

    $file = file_get_contents("../storage/users.csv");
	
    if(strstr($file, "$email") AND strstr($file, "$password")) 
	{

        session_start();
		$_SESSION["valid_user"] = $_POST["email"];
		

		// Redirect to member page
		Header("Location: ../dashboard.php");
	}
	else
	{
		// Login not successful
		print '<script> alert ("Sorry! You have entered an Invalid Login Id or Password."); window.location="login.php"; </script>';
	}
}
}


