<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    $firstName = htmlspecialchars(trim($_POST["firstName"]));
    $lastName = htmlspecialchars(trim($_POST["lastName"]));
    $phoneNum = htmlspecialchars(trim($_POST["phoneNum"]));
    $email = htmlspecialchars(trim(strtolower($_POST["Email"])));
    $password = htmlspecialchars(trim($_POST["Password"]));

    //create connection
    $conn = new mysqli('localhost','root','','chocosmith_users');
    if($conn -> connect_error)
        die("Connection Failed: " . $conn -> connect_error);
    //check email repeat in database
    $sql = "SELECT * FROM users where email = '$email'";
    $duplicate = mysqli_query($conn,$sql);
    if(mysqli_num_rows($duplicate))
    {
        $_SESSION['signup-error-message'] = "This Email has registed , try another email or login";
        $conn->close();
        header("Location: index.php");
        exit();
    }
    else{
        $sql="INSERT INTO users (email,password,firstName,lastName,phone_number) VALUES ('$email','$password','$firstName','$lastName','$phoneNum')";
        if($conn->query($sql) === TRUE){
            $conn->close();
            header("Location: ../login/index.php");
            exit();
        }
        else{
            echo "<script> alert('Error :' . $sql.'<br>' .$conn->error </script>";
            $conn->close();
            header("Location: index.php");
            exit();
        }   
    }   
  
}
?>