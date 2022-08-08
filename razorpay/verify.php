<?php

require('config1.php');
session_start();
$conn=mysqli_connect($host,$username,$password,$dbname);



require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{
    $razorpay_order_id=$_SESSION['razorpay_order_id'];
    $razorpay_payment_id=$_POST['razorpay_payment_id'];
    $price=$_SESSION['price'];
    $name=$_SESSION['name'];
    $phone=$_SESSION['phone'];
    $email=$_SESSION['email'];
    $isMember=$_SESSION['isMember'];
    if($isMember === true){
    $sql= "INSERT INTO `members` (`razorpay_order_id`, `razorpay_payment_id`, `status`, `email`, `name`, `phone`, `price`) VALUES ( '$razorpay_order_id', '$razorpay_payment_id', 'success', '$email', '$name', '$phone', '$price')";
    }else{
    $sql= "INSERT INTO `donation` (`razorpay_order_id`, `razorpay_payment_id`, `status`, `email`, `name`, `phone`, `price`) VALUES ( '$razorpay_order_id', '$razorpay_payment_id', 'success', '$email', '$name', '$phone', '$price')";
    }
    mysqli_query($conn,$sql);
    $html = "<p>Your payment was successful</p>
             <p>Payment ID: {$_POST['razorpay_payment_id']}</p>";
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
