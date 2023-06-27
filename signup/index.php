<!DOCTYPE html>
<html>
<head>
    <title>Create An Account</title>
    <link rel='stylesheet' href='../style/theme.css'>
    <script src="CreateAccountCheck.js"></script>
</head>
<body>
    
    <?php include('../includes/header.php')?>
    <?php include('../includes/navigation.php'); ?>
    <div class="page-wrapper">
        <div class="container">
        
            <form onsubmit="return validate()" method="post" action="createAccount.php">
            <div class="title">
                <h1>Create New Customer Account</h1><br>
            </div>
                <div class= "box">
                    <h2> PERSONAL INFORMATION </h2>
                    <div id="fn-input">
                        <label for="firstName">First Name</label>
                        <input type="text" id="firstName" name="firstName" required maxlength="50">
                        <div class=error-message></div>
                    </div>
                    <div id="ln-input">
                        <label for="lastName">Last Name</label>
                        <input type="text" id="lastName" name="lastName" required maxlength="50">
                        <div class=error-message> </div>
                    </div>
                    <div id="ph-input">
                        <label for="phoneNum">Phone Number</label>
                        <input type="text" id="phoneNum" name="phoneNum" required maxlength="15" minlength="7">
                        <div class=error-message> </div>
                    </div>
                </div>
                <div class= "box">
                    <h2> SIGN-IN INFORMATION </h2>
                    <div id="email-input">
                        <label for="Email">Email Address</label>
                        <input type="email" id="Email" name="Email" required>
                        <div class=error-message></div>
                        <?php if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }
                        if(isset($_SESSION['signup-error-message'])) {
                            // If there is, display it in a div element
                            echo '<div id="signup-error-message" class="error-message" style="display:block;">'.$_SESSION['signup-error-message'].'</div>';
                            // Clear the error message from the session variable
                            unset($_SESSION['signup-error-message']); 
                        }?>
                    </div>
                    <div id=Password-input>
                        <label for="Password">Password</label>
                        <input type="password" id="Password" name="Password" required minlength="8">
                    </div>
                    <div id=Conf-Password-input>
                        <label for="Con-Pass">Confirm Password</label>
                        <input type="password" id="Con-Pass" name="Con-Pass" required minlength="8">
                        <div class=error-message> </div>
                    </div>
                    <input type="checkbox" id="terms" name="terms" value="True" required> 
                    <label for="terms" class=checkboxtext> I have read and agree to our Terms. See the terms of our <a href="../extras/policy.php">privacy policy</a><label><br>
                    <input type="submit" value="Create Account" >
                </div>
            </form>

        </div>
    </div>
    <?php include('../includes/footer.php'); ?>
</body>
</html>