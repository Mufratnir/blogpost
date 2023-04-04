<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if (empty($_POST ['name']) ||empty($_POST['Email']) || empty($_POST['subject']  ) ||empty($_POST['field'])) {
	die ("Please fill out all fields");
}
$name = $_POST ['name'];
$email = $_POST['Email'];
$subject = $_POST['subject'];
$textarea = $_POST['field'];




$data = array($name,$email,$subject,$textarea);
$file = fopen('users.csv', 'a');
 if (fputcsv($file, $data) === false){
  die ("Error Writing For File");
 }
fclose($file);
}
?>
<!DOCTYPE html><!--  This site was created in Webflow. https://www.webflow.com  -->
<!--  Last Published: Tue Apr 04 2023 02:57:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="642a467e8fbcbe3ccbe71beb" data-wf-site="642a4037625193028765df5d">
<head>
  <meta charset="utf-8">
  <title>contact</title>
  <meta content="contact" property="og:title">
  <meta content="contact" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/assignment-f4b2af.webflow.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["PT Sans:400,400italic,700,700italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navber w-nav">
    <div class="nav-container">
      <div class="navigation-left">
        <a href="#" class="nav-23-nav-logo-wrapper w-nav-brand"><img src="images/Navber-23-Logo.svg" loading="lazy" alt=""></a>
      </div>
      <div class="navigation-right">
        <nav role="navigation" class="nav-menu w-nav-menu">
          <a href="index.html" class="nav-link w-nav-link">Home</a>
          <a href="blog.html" class="nav-link w-nav-link">Blog</a>
          <a href="contact.html" aria-current="page" class="nav-link w-nav-link w--current">Contact</a>
        </nav>
      </div>
      <div data-w-id="9cc709bd-85fc-88f7-4a76-82de48234242" class="menu-button w-nav-button">
        <div class="menu-line-wrapper">
          <div class="menu-line top"></div>
          <div class="menu-line middle"></div>
          <div class="menu-line last"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-area section wf-section">
    <div class="contact-wrapper">
      <h1 class="heading-size-h3 mg-bottom-40-px">Send Us a Message</h1>
      <div class="contact-from-block w-form">
        <form action="contact.php"  method="post" class="contact-from">
          <div id="w-node-_1c563c51-8b56-8366-3e7e-db15a253c2de-cbe71beb" class="field-block width350-px">
            <label for="name" class="field-label">Name</label>
            <input type="text" class="input w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter your full name" id="name" required=""></div>
          <div id="w-node-_1c563c51-8b56-8366-3e7e-db15a253c2e2-cbe71beb" class="field-block width350-px">
            <label for="Email-2" class="field-label">Email Address</label>
            <input type="email" class="input w-input" maxlength="256" name="Email" data-name="Email" placeholder="Enter your email address" id="Email" required=""></div>
          <div id="w-node-_1c563c51-8b56-8366-3e7e-db15a253c2e6-cbe71beb">
            <label for="field-3" class="field-label">Select type</label>
            <input type="text" class="input w-input" maxlength="256" name="subject" data-name="subject" placeholder="Example Text" id="subject" required=""></div>
          <div id="w-node-_1c563c51-8b56-8366-3e7e-db15a253c2ea-cbe71beb" class="field-block text-area">
            <label for="field" class="field-label">Message</label>
            <textarea placeholder="Write your message" maxlength="5000" id="field" name="field" required="" data-name="field" class="massage-text-area w-input"></textarea>
          </div><input type="submit" value="Submit" data-wait="Please wait..." id="w-node-_1c563c51-8b56-8366-3e7e-db15a253c2ee-cbe71beb" class="primary-button w-button">
        </form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=642a4037625193028765df5d" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>