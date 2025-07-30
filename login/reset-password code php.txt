<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = ''

//creating connecting
if (!$conn)
{
    die ("connetion faile: " .$conn->connection_error);
}
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = $_POST["email"];
    //check if email exist in the database
    $query "SELECT * FROM users WHERE 
    email = '$email'";

    $result = $conn->query($query);

    if ($result->numq_rows > 0 )
    {
        //generate password reset token
        $token = bin2hex(random_bytes(32));
           $query = "UPDATE users SET
           password_reset_token = '$token' WHERE email = '$email'"
           $conn->query($query);\
           //send password reset email
           $to = $email;
           $subject = "Password Reset";
           $body = "Click the following link to reset your password: http://example.com/reset-password.php?token=$token";
           mail($to, $subject,$body);
           echo "Password reset link sent to your email.";
    }
    else{
        echo "Email not found.";
    }
}
$conn->close();
?>