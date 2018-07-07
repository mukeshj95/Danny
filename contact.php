<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
ini_set('allow_url_fopen',true);
//Load Composer's autoloader
require 'vendor/autoload.php';
header('Content-Type: application/json');
$error = FALSE;
$errors = array();
$data = "";
$secret = "6Le5ElkUAAAAANRlBrFpoc6yVAZVnhvKhGOhD3Gt";
$ip = $_SERVER['REMOTE_ADDR'];
$captcha = $_POST['g-recaptcha-response'];
unset($_POST['g-recaptcha-response']);

foreach ($_POST as $key => $value) {
    if (empty($value)) {
        $error = TRUE;
        $errors[$key] = ucwords($key) . ' could  not be blank.';
    } else {
        $data .= ucwords($key) . ' : ' . $value . '<br/><br/>';
    }
}
$verify_url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret}&response={$captcha}&ip={$ip}";
//echo file_get_contents($verify_url);
$response = json_decode(file_get_contents($verify_url));
if (!$response->success) {
    $error = TRUE;
    $errors['g-recaptcha-response'] = 'Invailid Captcha';
}


if (!$error) {
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
//Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP(TRUE);                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'malones.videos@trishulla.com';                 // SMTP username
        $mail->Password = '!winToday';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
//Recipients
        $mail->setFrom('malones.videos@trishulla.com', 'Inteligemini');
        $mail->addAddress('nikhil@trishulla.com');     // Add a recipient
        $mail->addAddress('nikhil@intelligemini.com');     // Add a recipient
        $mail->addAddress('keenan@intelligemini.com');     // Add a recipient
        $mail->addAddress('kdg3050@gmail.com');     // Add a recipient
        $mail->addAddress('amitverma.181@gmail.com');     // Add a recipient
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Inteligemini Contact Form';
        $mail->Body = $data;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo json_encode(array('success' => TRUE, 'error' => $errors));
    } catch (Exception $e) {
        $errors[] = 'Mail could not be send due to tecnical error ! please try again latter.';
        echo json_encode(array('success' => FALSE, 'error' => $errors));
    }
} else {
    echo json_encode(array('success' => FALSE, 'error' => $errors));
}
?>
