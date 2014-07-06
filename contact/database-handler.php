<?php 
include('SMTPClass.php');
require_once('../PHPMailer-master/class.phpmailer.php');
include_once '../includes/db_connect.php';
include_once '../includes/functions.php';
sec_session_start();
$use_smtp = '0';
$emailto = 'info@phirani.in';

	// retrieve from parameters
	$emailfrom = isset($_POST["email"]) ? $_POST["email"] :$_SESSION['email'];
	$nocomment = isset($_POST["nocomment"]) ? $_POST["nocomment"] : "";
	$subject = 'Butterfly Diamonds Client Feedback';
	$message = 'The data selected by the vendor is attached below:';
	$message.=" \n";
	$response = '';
	$response_fail = 'There was an error verifying your details.';
	
		// Honeypot captcha
		if($nocomment == '') {
		
			$params = $_POST;
			foreach ( $params as $key=>$value ){
			
				if(!($key == 'datastring' || $key == 'ip' || $key == 'emailsubject' || $key == 'url' || $key == 'emailto' || $key == 'nocomment' || $key == 'v_error' || $key == 'v_email')){
				
					$key = ucwords(str_replace("-", " ", $key));
					
					if ( gettype( $value ) == "array" ){
						$message .= "$key: \n";
						foreach ( $value as $two_dim_value )
						$message .= "...$two_dim_value<br>";
					}else {
						$message .= $value != '' ? "$key: $value\n" : '';
					}
				}
				
			}
			$myfile = fopen("clientmaildata.csv", "w") or die("Unable to open file!");
			fwrite($myfile, $_POST['datastring']);
			fclose($myfile);
		
		$response = sendEmail($subject, $message, $emailto, $emailfrom);
			
		} else {
		
			$response = $response_fail;
		
		}
	//header('Location: ../mail_success.php');
	 echo $response;

// Run server-side validation
function sendEmail($subject, $content, $emailto, $emailfrom) {
	
	$from = $emailfrom;
	$response_sent = 'Thank you. Your message has been received.';
	$response_error = 'Error. Please try again.';
	$subject =  filter($subject);
	$url = "Origin Page: ".$_SERVER['HTTP_REFERER'];
	$ip = "IP Address: ".$_SERVER["REMOTE_ADDR"];
	$message = $content."\n$ip\r\n$url";
	
	//attachment
	$file = "clientmaildata.csv";
    $file_size = filesize($file);
    $handle = fopen($file, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $content = chunk_split(base64_encode($content));
	
	 // // a random hash will be necessary to send mixed content
    // $separator = md5(time());
// 
    // // carriage return type (we use a PHP end of line constant)
    // $eol = "\r\n";
// 	
	// // Validate return email & inform admin
	// $emailto = filter($emailto);
// 
	// // Setup final message
	// $body = wordwrap($message);
	
	$email = new PHPMailer();
$email->From      = $from;
$email->Subject   = $subject;
$email->Body      = $message;
$email->AddAddress($emailto);

$file_to_attach = 'clientmaildata.csv';

$email->AddAttachment( $file_to_attach , 'clientmaildata.csv' );

$mail_sent = $email->Send();
$response = $mail_sent ? $response_sent : $response_error;
	return $response;
// $headers = trim(ob_get_clean());
// 				
		// // Send email
		// $mail_sent = mail($emailto, $subject,$body,$headers);
		// $response = $mail_sent ? $response_sent : $response_error;
// 		
// 	
	// return $response;
// }
}
// Remove any un-safe values to prevent email injection
function filter($value) {
	$pattern = array("/\n/", "/\r/", "/content-type:/i", "/to:/i", "/from:/i", "/cc:/i");
	$value = preg_replace($pattern, "", $value);
	return $value;
}

exit;

?>