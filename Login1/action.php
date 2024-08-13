<?php
$db_File_Path = __DIR__ . '/database.php';
require $db_File_Path;

if($_SERVER['REQUEST_METHOD']!= 'POST'){
    $error = http_build_query([
        'error' => "invalidrequest",

        'message' => "Invalid Request Method"
    ]);
    header("Location : form.php", $error);
}
else{
    $full = $_POST['full'];
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $confirm = $_POST['confirm'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];


    if(empty($full) || empty($user) || empty($email) || empty($pass) || empty($confirm) || empty($gender) || empty($phone) || empty($country)){
        $error = http_build_query([
            'error' => "invalidrequest",

            'message' => "Empty field(s)"
        
           ]);
           header("Location: form.php?".$error);
    }
    else{
        if($pass != $confirm){
            $error = http_build_query([
                'error' => "invalidrequest",
    
                'message' => "Passwords are not identical"
            
               ]);
               header("Location: form.php?".$error);

        
    
    // $query = "INSERT INTO attendance (fullname, username, password, email, gender,phone, country ) VALUES ('$full' , '$user','$pass', '$email', '$gender', '$phone', '$country')";
    // $result = mysqli_query($connection , $query);
    
    

    }
    else{
          
    $query = "INSERT INTO attendance (fullname, username, password, email, gender,phone, country ) VALUES ('$full' , '$user','$pass', '$email', '$gender', '$phone', '$country')";
    $result = mysqli_query($connection , $query);
    

    }
    }
}