<?php
if (isset($_POST['button']) && isset($_FILES['attachment'])) {

    $from_email = 'amitsinghsekhawat@gmail.com'; //from mail, sender email addrress 
    $recipient_email = 'amitsinghsekhawat@gmail.com'; //recipient email addrress 
    //Load POST data from HTML form 
    $sender_name = $_POST["sender_name"]; //sender name 
   
    $reply_to_email = $_POST["sender_email"]; //sender email, it will be used in "reply-to" header 
    $subject = $_POST["subject"]; //subject for the email 
    $message = $_POST["message"]; //body of the email 
    echo "Name".$sender_name." ".$reply_to_email." ".$subject." ".$message;

    //Get uploaded file data using $_FILES array 
    $tmp_name = $_FILES['attachment']['tmp_name']; // get the temporary file name of the file on the server 
    $file_name = $_FILES['attachment']['name'];  // get the name of the file 
    
    $size = $_FILES['attachment']['size'];  // get size of the file for size validation 
    
    $file_type = $_FILES['attachment']['type'];  // get type of the file 


    //read from the uploaded file & base64_encode content 
//    $handle = fopen($_FILES['attachment']['tmp_name'], "r");  // set the file handle only for reading the file 
//    $content = fread($handle, $size); // reading the file 
//    fclose($handle);                  // close upon completion 
    $encoded_content = chunk_split(base64_encode(file_get_contents($_FILES["attachment"]["tmp_name"])));
    

    $boundary = md5(uniqid(time())); // define boundary with a md5 hashed value 
    //header 
    $headers = "MIME-Version: 1.0\r\n"; // Defining the MIME version 
    $headers .= "From:" . $from_email . "\r\n"; // Sender Email 
    $headers .= "Reply-To: " . $reply_to_email . "\r\n"; // Email addrress to reach back 
    $headers .= "Content-Type: application/octet-stream;\r\n"; // Defining Content-Type 
    $headers .= "boundary = $boundary\r\n"; //Defining the Boundary 

    $body = "--$boundary\r\n";
    $body .= "Content-Type: application/octet-stream;";
    $body .= "Content-Transfer-Encoding:  8bit";
    $body .= $message;

    //attachment 
    $body .= "--$boundary\r\n";
    $body .="Content-Type: $file_type; name=" . $file_name . "\r\n";
    $body .="Content-Disposition: attachment; filename=" . $file_name . "\r\n";
    $body .="Content-Transfer-Encoding:  8bit";
    $body .="X-Attachment-Id: " . rand(1000, 99999) . "\r\n\r\n";
    $body .= $encoded_content;

    $sentMailResult = mail($recipient_email, $subject, $body, $headers);

    if ($sentMailResult) {
	echo "File Sent Successfully.";
	unlink($name); // delete the file after attachment sent. 
    } else {
	die("Sorry but the email could not be sent. 
                    Please go back and try again!");
    }
}
?>
<form enctype="multipart/form-data" method="POST" > 
    <label>Your Name  </label>  <input type="text" name="sender_name" value="sender name" />
    <label>Your Email</label>   <input type="email" name="sender_email" value="amitsinghsekhawat@gmail.com" /> 
    <label>Subject </label>  <input type="text" name="subject" value="subject" /> 
    <label>Message  </label>  <textarea name="message">hello test file</textarea>
    <label>Attachment</label>  <input type="file" name="attachment" />
    <input type="submit" name="button" value="Submit" />
</form> 