<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();

    //prevent sql injection
    $email = htmlspecialchars(trim(strtolower($_POST["Email"])));
    $password = htmlspecialchars(trim($_POST["password"]));

    //connect to database
    $conn = new mysqli('localhost','root','','chocosmith_users');
    if($conn -> connect_error)
        die("Connection Failed: " . $conn -> connect_error);

    //start querying 
    $stmt = $conn->prepare("SELECT id, firstName, lastName FROM users WHERE email = ? AND password = ?");
    if (!$stmt) {
        // Query preparation failed
        die("Error: " . $conn->error);
    }
    $stmt->bind_param("ss", $email, $password);
    if (!$stmt->execute()) {
        // Query execution failed
        die("Error: " . $stmt->error);
    }

    // Store query
    $stmt->store_result();
    if($stmt->num_rows > 0){
        $stmt->bind_result($id,$firstName, $lastName);
        $stmt->fetch();
        $_SESSION['user_id'] = $id;
        $_SESSION['logged_name'] = $lastName ." ". $firstName;
        $_SESSION['logged_status'] = true;
        $stmt->close();
        $conn->close();
        header("Location: ../home/index.php");
        exit();
    }
    else{
        $_SESSION['login-error-message'] = "Invalid email or password. Please try again.";
        $conn->close();
        header("Location: index.php");
        exit();
    }
}
?>