<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href='../style/theme.css'>
</head>
<body>
<?php include('../includes/header.php'); ?>
<?php include('../includes/navigation.php'); ?>
    
    <div class="page-wrapper">
        <h1>CONTACT US</h1>
        <div class="container">
            <div class="box left">
            <h2>Leave Us A Message</h2>
                <form action="submitMessage.php" method="post">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" maxlength="100">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" maxlength="128">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" maxlength="50">
                    <label for="message">Message</label><br>
                    <textarea id="message" name="message"></textarea>
                    <input type="submit" value="Submit">
                </form>
            </div>
            <div class="box right">
                <h2> Our Location </h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d254988.8236719711!2d101.619504!3d3.040892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb4854c46920b%3A0x2bd37d172270131e!2sLove18C%20Sdn%20Bhd!5e0!3m2!1sen!2smy!4v1679929813912!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
            </div>
        </div>
        <div class="container">
            <div class="box">
            <pre style="margin:0px;"> <h2 style="margin: 0px">Our Customer Service</h2>
<strong>Address:</strong>
Beryl’s Chocolate & Confectionery Sdn. Bhd. (506002-U)
Beryl's Marketing Sdn. Bhd. (345473-U)
2, Jalan Raya 7/1,
Kawasan Perindustrian Seri Kembangan,
43300 Seri Kembangan,
Selangor Darul Ehsan, Malaysia

<strong>Tel:</strong> +(60)3-8943 6136
<strong>Fax:</strong> +(60)3-8958 6021
<strong>Email:</strong> <a href="mailto:beryls@berylschocolate.com"> beryls@berylschocolate.com </a>
            </pre>
            </div>
        </div>


    </div>
<?php include('../includes/footer.php'); ?>
</body>
</html>