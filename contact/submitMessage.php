<?php
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim(strtolower($_POST["email"])));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    //connect to database
    $conn = new mysqli('localhost','root','','chocosmith_users');
    if($conn -> connect_error)
        die("Connection Failed: " . $conn -> connect_error);
    $sql="INSERT INTO messages(name,email,subject,message) 
	VALUES('$name','$email','$subject','$message')";
	if($conn->query($sql) === TRUE){
		echo "<script> alert('Message Send Sucessfully');</script>";
        header("Location: index.php");
	}
    else{
		echo "<script> alert('Error :' . $sql.'<br>' .$conn->error </script>";
        //header("Location: index.php");
	}
    
?>