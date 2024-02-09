<?php

$connection = mysqli_connect('localhost','root','','rakeshphotopoint');

if(isset($_GET['send'])){

    $Name = $_POST['Name'];
    $Phone_no = $_POST['Phone_no'];
    $Email_ID = $_POST['Email_ID'];
    $Topic = $_POST['Topic'];
    $Message = $_POST['Massage'];

    $request = "INSERT INTO data (Name, Phone_no, Email_ID, Topic, Massage) VALUES ('$Name','$Phone_no','$Email_ID','$Topic','$Massage')";

     mysqli_query($connection, $request);
     header('location: connect.php');
     exit(); // Make sure to exit after redirect

} else {
    echo 'Something went wrong, please try again';
}
?>