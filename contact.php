<?php
if (isset($_POST['submit'])) {
    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

        $to = "adjanaman@hotmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $fullname = $_POST["fullname"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $message = $fullname . " wrote the following:" . "\n\n" . $_POST['message'] . "\r\n" . "Phone number: " . $phone .  "\r\n" . "Address: " . $address;
        $message2 = "Here is a copy of your message " . $fullname . "\n\n" . $_POST['message'];
        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        // mail($to,$message,$headers);
        // mail($from,$message2,$headers2);
        // header("Location :thanks.html ") // sends a copy of the message to the sender
        // echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
        // You can also use header('Location: thank_you.php'); to redirect to another page.
        // You cannot use header and echo together. It's one or the other.
        $message_sent = true;
    }
}
