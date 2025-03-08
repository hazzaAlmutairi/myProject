<?php
if (!isSet($_POST['firstName'])) {
    $firstName = '';
 $lastName = '';
 $email =   '';
}

 
$errors=[
    "firstNameError"=> "",
    "lastNameError"=> "",
    "emailError"=> ""
];
if(isSet($_POST['submit'])){
    $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
 $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
 $email =   mysqli_real_escape_string($conn,$_POST['email']);
 
    if(empty($firstName)){
        $errors["firstNameError"] = "يرجي ادخال اسم الأول ";
      
    }
    if(empty($lastName)){
        $errors["lastNameError"] = "يرجي ادخال اسم العائلة ";
       
    }
   if(empty($email)){
    $errors["emailError"] = "يرجي ادخال البريد الإلكتروني ";
        
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors["emailError"] = "يرجي ادخال بريد الكتروني صحيح ";
        
    }
    if(!array_filter($errors)){
       
        $sql = "INSERT INTO users (firstName,lastName,email) VALUES ('$firstName','$lastName','$email' )";
        if(mysqli_query($conn,$sql)){
            header('location:index.php');
        }else{
         echo 'Error' . mysqli_error($conn);
        }
    }
   

   
   

 }
?>