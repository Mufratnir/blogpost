<?php
define( "RECIPIENT_NAME", "Email" );
define( "RECIPIENT_EMAIL", "email@email.com" );
$name = $_POST ['name'];
$email = $_POST['Email'];
$subject = $_POST['subject'];
$textarea = $_POST['message'];

$success = false;
$name = isset( $_POST['name'] ) ? preg_replace( "/[^\s\S\.\-\_\@a-zA-Z0-9]/", "", $_POST['username']) : "";
$email = isset( $_POST['Email'] ) ? preg_replace( "/[^\.\-\_\@a-zA-Z0-9]/", "", $_POST['email'] ) : "";
$subject = isset( $_POST['subject'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['subject'] ) : "";
$textarea = isset( $_POST['message'] ) ? preg_replace( "/(From:|To:|BCC:|CC:|Subject:|Content-Type:)/", "", $_POST['message'] ) : "";

if ( $name && $email && $subject && $textarea) {
  $recipient = RECIPIENT_NAME . " <" . RECIPIENT_EMAIL . ">";
  $headers = "From: " . $name . "";
  $msgBody = " Email: ". $email  ." Message: " . $textarea . "";
  $success = mail( $recipient, $headers, $msgBody );

  header('Location: contact.php?message=Successfull');
  exit;
}else{

    header('Location: contact.php?message=Failed');    
}

?>