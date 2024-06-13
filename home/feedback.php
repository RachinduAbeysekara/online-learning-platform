<?php


$con = mysqli_connect('localhost', 'root', '','alphaLearner_db');


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];


$sql = "INSERT INTO `feedbacks` (`id`, `firstname`, `lastname`, `email`, `message`) 
        VALUES ('0', '$firstname', '$lastname', '$email', '$message')";


$rs = mysqli_query($con, $sql);

if($rs)
{

    echo '<script>';
           echo  "alert('Your message has been sent successfully !')";
         echo  '</script>';

}

else{
    echo '<script>';
    echo  "alert('Failed to sent !')";
  echo  '</script>';
}

?>