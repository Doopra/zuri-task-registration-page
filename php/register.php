<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    //save data into the file
    $fp = fopen("../storage/users.csv","a");

    if(!$fp) { echo 'Error: Cannot open file.';
        exit; 
        }




    $no_rows = count(file("../storage/users.csv"));
    if($no_rows > 1){
        $no_rows = ($no_rows - 1) + 1;
    }

    $form_data = array(
        'username' => $username,
        'email' => $email,
        'password' => $password,

    );
    echo "<div class='justify-content-center'>User Successfully registered</div>";
    


    fputcsv($fp, $form_data);
    
    fclose($fp);
    // echo "OKAY";
}



?>