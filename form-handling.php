<?php


if (isset($_POST['submit'])) {#when you press submit
  $name = $_POST['myName'];
  $mailFrom = $_POST['myEmail'];
  $productCodeM = $_POST['male product'];
  $quantity_male = $_POST['quantity'];
  $productCodeF = $_POST['female product'];
  $quantity_female = $_POST['quantity'];
  $comments = $_POST['myExperience'];

  $mailTo = "b1901898@helplive.edu.my";
  $headers = "From: ".$mailFrom;
  $txt = "You have received an e-mail from ".$name.".\n\n".$comments;

  mail( $mailTo, $productCodeM, $quantity_male, $productCodeF, $quantity_female, $txt, $headers);
  header("Location: contact.html?mailsend");
}


?>