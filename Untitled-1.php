<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template_01.dwt" codeOutsideHTMLIsLocked="false" -->
<head>

<!-- InstanceBeginEditable name="redirect" -->
<META HTTP-EQUIV=Refresh CONTENT="1; URL=http://melissabrattoni.wix.com/melissabrattoni">
<!-- InstanceEndEditable -->


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<!-- InstanceBeginEditable name="title" -->
<title>Melissa Brattoni</title>
<!-- InstanceEndEditable -->


<link href="style_main.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

<!-- InstanceBeginEditable name="head" -->

<!-- InstanceEndEditable -->

</head>

<body background="images/mb_bg_web.jpg">
	<div class="container_01">
    	<div class="header">
            <div class="title">
            <img src="images/melissabrattoni_logo_02.png" width="" height="54" alt="Melissa Brattoni" /> </div>
      			<div class="nav">        
        			<div class="navbutton"><a href="contact.html">Contact Me</a></div>
                    <div class="navbutton"><a href="videos.html" >Videos</a></div>          
                    <div class="navbutton"><a href="gallery.html">Photo Gallery</a></div>
                    <div class="navbutton"><a href="resume.html">Resume</a></div>
                    <div class="navbutton"><a href="about.html">About Me</a></div>
                    <div class="navbutton"><a href="index.html" >Home</a></div>               
                
         	</div>
   	  	</div>
<!-- InstanceBeginEditable name="body" -->        

<div class="main_body">
    
	<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "michaelkoorey@gmail.com";
 
    $email_subject = "Contact from your website";
 
      
 
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
 
        !isset($_POST['email']) ||
 
        !isset($_POST['comments'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email_from = $_POST['email']; // required
 
    $comments = $_POST['comments']; // required
 
     
 
    $error_message = "Well something happened";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
 
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'The Name you entered does not appear to be valid.<br />';
 
  }
 
 
  if(strlen($comments) < 2) {
 
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Form details below.\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
 
    $email_message .= "Email: ".clean_string($email_from)."\n";
 
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
<!-- include your own success html here -->
 
Thank you for your interest. I will be in touch with you very soon.
 

 
 
 
<?php
 
}
 
?>
    
  
    
      
</div>

<!-- InstanceEndEditable -->
    </div>

        <div class="footer"><br />Melissa Brattoni &copy; 2015
        </div>
        
        
        
 </body>
<!-- InstanceEnd --></html>
