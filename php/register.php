<?php 
include '../db/connect.php';


// Example function to insert a user
function insertUser($firstName, $lastName, $email, $password) {
    global $collection;
    $result = $collection->insertOne([
        'firstName' => $firstName,
        'lastName' => $lastName,
        'email' => $email,
        'password' => ($password) // Example of password hashing
    ]);
    return $result->getInsertedCount() == 1;
}

// Example function to find a user by email and password
function findUser($email, $password) {
    global $collection;
    return $collection->findOne([
        'email' => $email,
        'password' => ($password)
    ]);
}

include '../db/connect.php';


if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);


     $checkEmail="SELECT * From `users` where email='$email'";
     $result=$conn->query($checkEmail);
     if($result->num_rows>0){
        echo "Email Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,email,password)
                       VALUES ('$firstName','$lastName','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }


   

}

if(isset($_POST['signIn'])){
   $email=$_POST['email'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE email='$email' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['email']=$row['email'];
    header("Location: profile.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>