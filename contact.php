<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["email"]);
  $phone = htmlspecialchars($_POST["phone"]);
  $message = htmlspecialchars($_POST["message"]);

  $to = "decorworld1990@gmail.com, 14shiwam@gmail.com, sanyamraj7@gmail.com";
  $subject = "New Contact Form Submission from $name";
  $body = "You have received a new message from the contact form:\n\n"
        . "Name: $name\n"
        . "Email: $email\n"
        . "Phone: $phone\n"
        . "Message:\n$message";

  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "<script>alert('Thank you! Your message has been sent.'); window.location.href='contact.html';</script>";
  } else {
    echo "<script>alert('Sorry, mail could not be sent. Try again later.'); window.location.href='contact.html';</script>";
  }
}
?>
