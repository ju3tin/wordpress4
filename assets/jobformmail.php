<?php
if ($_SERVER['REQUEST_METHOD']=="POST"){

   // we'll begin by assigning the To address and message subject
   $email_to="email@domain.com"; // Change to your email
   $subject="Job Application Form"; // Change subject if wished

   // get the sender's name and email address
   // we'll just plug them a variable to be used later
   $from = stripslashes($_POST['field_0'])."<".stripslashes($_POST['field_12']).">";

   // generate a random string to be used as the boundary marker
   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   // now we'll build the message headers
   $headers = "From: $from\r\n" .
   "MIME-Version: 1.0\r\n" .
      "Content-Type: multipart/mixed;\r\n" .
      " boundary=\"{$mime_boundary}\"";

   // here, we'll start the message body.
   // this is the text that will be displayed
   // in the e-mail
   // validation expected data exists
   
    function died($error) {
 
        // your error code can go here
 
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
 
        echo "These errors appear below.<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Please go back and fix these errors.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
     if(!isset($_POST['field_0']) ||
 
        !isset($_POST['field_1']) ||
		
		!isset($_POST['field_2']) ||
 
        !isset($_POST['field_3']) ||
		
		!isset($_POST['field_4']) ||
		
		!isset($_POST['field_5']) ||
		
		!isset($_POST['field_6']) ||
		
		!isset($_POST['field_7']) ||
		
		!isset($_POST['field_8']) ||
		
		!isset($_POST['field_9']) ||
		
		!isset($_POST['field_12']) ||
		
		!isset($_POST['field_13']) ||
 
        !isset($_POST['field_14'])) {
 
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
 
    }
 
     
 
    $field_0 = $_POST['field_0'];
	
	$field_1 = $_POST['field_1'];
	
	$field_2 = $_POST['field_2'];
	
	$field_3 = $_POST['field_3'];
	
	$field_4 = $_POST['field_4'];
	
	$field_5 = $_POST['field_5'];
	
	$field_6 = $_POST['field_6'];
	
	$field_7 = $_POST['field_7'];
	
	$field_8 = $_POST['field_8'];
	
	$field_9 = $_POST['field_9'];
 
    $field_12_from = $_POST['field_12'];
	
	$field_13 = $_POST['field_13'];
	
	$field_14 = $_POST['field_14'];
 
    $message = "Form results.\n\n";
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }  
	
 
    $message .=  "[Full Name] ".clean_string($field_0)."\n";
	
	$message .=  "[Age] ".clean_string($field_1)."\n";
	
	$message .=  "[Address] ".clean_string($field_2)."\n";
	
	$message .=  "[Town/City] ".clean_string($field_3)."\n";
	
	$message .=  "[County] ".clean_string($field_4)."\n";
	
	$message .=  "[Post Code] ".clean_string($field_5)."\n";
	
	$message .=  "[Job] ".clean_string($field_6)."\n";
	
	$message .=  "[Job Hours] ".clean_string($field_7)."\n";
	
	$message .=  "[Experience] ".clean_string($field_8)."\n";
	
	$message .=  "[Available Date] ".clean_string($field_9)."\n";
 
    $message .= "[Email] ".clean_string($field_12_from)."\n";
 
    $message .= "[Phone] ".clean_string($field_13)."\n";
 
    $message .= "[Comment] ".clean_string($field_14)."\n";
	

   // next, we'll build the invisible portion of the message body
   // note that we insert two dashes in front of the MIME boundary 
   // when we use it
   $message = "This is a multi-part message in MIME format.\n\n" .
      "--{$mime_boundary}\n" .
      "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
      "Content-Transfer-Encoding: 7bit\n\n" .
   $message . "\n\n";

   // now we'll process our uploaded files
   foreach($_FILES as $userfile){
      // store the file information to variables for easier access
      $tmp_name = $userfile['tmp_name'];
      $type = $userfile['type'];
      $name = $userfile['name'];
      $size = $userfile['size'];

      // if the upload succeded, the file will exist
      if (file_exists($tmp_name)){

         // check to make sure that it is an uploaded file and not a system file
         if(is_uploaded_file($tmp_name)){
 	
            // open the file for a binary read
            $file = fopen($tmp_name,'rb');
 	
            // read the file content into a variable
            $data = fread($file,filesize($tmp_name));

            // close the file
            fclose($file);
 	
            // now we encode it and split it into acceptable length lines
            $data = chunk_split(base64_encode($data));
         }
 	
         // now we'll insert a boundary to indicate we're starting the attachment
         // we have to specify the content type, file name, and disposition as
         // an attachment, then add the file content.
         // NOTE: we don't set another boundary to indicate that the end of the 
         // file has been reached here. we only want one boundary between each file
         // we'll add the final one after the loop finishes.
         $message .= "--{$mime_boundary}\n" .
            "Content-Type: {$type};\n" .
            " name=\"{$name}\"\n" .
            "Content-Disposition: attachment;\n" .
            " filename=\"{$fileatt_name}\"\n" .
            "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n";
      }
   }
   // here's our closing mime boundary that indicates the last of the message
   $message.="--{$mime_boundary}--\n";
   // now we just send the message
   
   @mail($email_to, $subject, $message, $headers);
      header('Location: redirect.html'); // your custom redirect after submit, replace redirect.html with full path i.e. http://www.yourdomain.com/redirect.html

?>



<!-- include your own success html here - will only show if redirct fails -->
Thank you! <br>
Your submission has been sent.



<?php
 
}
 
?>
