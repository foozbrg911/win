<?php

$firstName = "";
$lastName = "";
$email = "";

$errors = [
    'firstnameerror' => '',
    'lastnameerror' => '',
    'emailerror' => '',
];

if (isset ($_POST['submit'])){
  
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    if (empty($firstName)){
        $errors['firstnameerror'] = 'يرجى ادخال الاسم الاول';           
    }

    if (empty($lastName)){
        $errors['lastnameerror'] = 'يرجى ادخال الاسم الاخير';        
    }

    if (empty($email)){
        $errors['emailerror'] = 'يرجى ادخال البريد الالكتروني';
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['emailerror'] = 'البريد الالكتروني غير صحيح';
    }


    if(!array_filter($errors)){
        $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);


        if(!array_filter($errors)){        
            $sql = "INSERT INTO `users` (`firstName`, `lastName`, `email`) 
                    VALUES ('$firstName', '$lastName', '$email')";

            if(mysqli_query($conn, $sql)){
                header("location:" . $_SERVER['PHP_SELF']);
            } else {
                echo "Error " . mysqli_error($conn);
            }
        }
    }

   
}
?>