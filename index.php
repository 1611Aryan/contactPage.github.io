<?php
if ($_POST) {
    $message = "";
    if (!$_POST['email']) {
        $message .= "An Email Address is required <br>";
    }
    if (!$_POST['subject']) {
        $message .= "Subject is required <br>";
    }
    if (!$_POST['message']) {
        $message .= "A message is required";
    }
    if ($message == "") {
        $emailTo = "aryan2563737@gmail.com";
        $subject = $_POST['subject'];
        $content = $_POST['message'];
        $header = "From:" . $_POST['email'];
        if (mail($emailTo, $subject, $content, $header)) {
            $message = '<span style="color:green">Your Message has been sent Succesfully</span>';
        }
        else
        $message="Your message couldn't be sent. Try again later";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="design.css">
</head>

<body>
    <div id="errors"><?php echo $message; ?></div>
    <div id="container">
        <h2>Contact Us</h2>
        <form method="post" action="index.php">
            <label class="font">Email Address</label>
            <input class="font" type="email" name="email" id="email" placeholder="Enter Your Email Address">
            <label class="font">Subject</label>
            <input class="font" type="text" name="subject" id="subject">
            <label class="font">Your Message</label>
            <textarea class="font" name="message" rows="6" id="message"></textarea>
            <input class="font" id="submit" type="submit">
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="submit.js"></script>
</body>

</html>