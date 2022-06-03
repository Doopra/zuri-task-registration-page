<?php
function logout(){
    /*
Check if the existing user has a session
if it does
destroy the session and redirect to login page
*/

if(!$_SESSION["valid_user"]){
    session_destroy();
    unset($_SESSION['valid_user']);
    header("Location: ../forms/login.html");
}

}

logout();
