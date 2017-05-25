<?php
if($_POST)
{
    $to_email       = "myemail@gmail.com"; //Recipient email, Replace with own email here
    $from_email     = 'noreply@gmail.com'; //from mail, it is mandatory with some hosts and without it mail might endup in spam.

$post = [
    'name' => 'name',
    'day' => 'day',
    'codes' => 'codes',
    'phone' => 'phone',
    'gender'   => 1,
    'day' => 'day',
    'month' => 'month',
    'year' => 'year'
];

    //Sanitize input data using PHP filter_var().
    // $user_name      = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    // $user_email     = filter_var($_POST["user_email"], FILTER_SANITIZE_EMAIL);
    // $country_code   = filter_var($_POST["country_code"], FILTER_SANITIZE_NUMBER_INT);
    // $phone_number   = filter_var($_POST["phone_number"], FILTER_SANITIZE_NUMBER_INT);
    // $subject        = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
    // $message        = filter_var($_POST["msg"], FILTER_SANITIZE_STRING);


   //email body
    $message_body = $message."\r\n\r\n-".$user_name."\r\nEmail : ".$user_email."\r\nPhone Number : (".$country_code.") ". $phone_number ;
    
    //proceed with PHP email.
    $headers = 'From: '. $from_email .'' . "\r\n" .
    'Reply-To: '.$user_email.'' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    
    $send_mail = mail($to_email, $subject, $message_body, $headers);
    
    if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
        die($output);
    }else{
        $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .' Thank you for your email'));
        die($output);
    }
}
?>