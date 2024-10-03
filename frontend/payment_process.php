<?php
session_start();
include 'db.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields (you may add more validation as needed)
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $amount = isset($_POST["amount"]) ? $_POST["amount"] : "";
    $bank_name = isset($_POST["bank_name"]) ? $_POST["bank_name"] : "";
    $type = isset($_POST["type"]) ? $_POST["type"] : "";
    $valid = isset($_POST["valid"]) ? $_POST["valid"] : "";
    $valid1 = ($valid == 'W') ? "Week" : (($valid == 'M') ? "Month" : "Year");

    // Perform payment processing here (this is just a basic example)
    // You would typically integrate with a payment gateway like PayPal, Stripe, etc.

    // For demonstration purposes, let's assume the payment is successful
    $payment_status = "success";

    // Check payment status
    if ($payment_status == "success") {
        // Payment successful
        // You can perform any additional actions here (e.g., update database, send confirmation email, etc.)
        $message = "Payment successful! Thank you, ".$name.", for your payment of Rs. ".$amount.". Your active plan is ".$type.". It is Valid for ".$valid1;

        // Generate payment receipt content
        $receipt_content = "<h3>Payment Receipt</h3>";
        $receipt_content .= "<p><strong>Name: </strong> $name</p>";
        $receipt_content .= "<p><strong>Email: </strong> $email</p>";
        $receipt_content .= "<p><strong>Bank Name: </strong> $bank_name</p>";
        $receipt_content .= "<p><strong>Paid Amount: Rs.</strong> $amount</p>";
        // You can include more details as needed
        $folder = 'payment/';
        // Save the receipt content to a file
        $file_name = $folder .'payment_receipt_' . date('Y-m-d_H-i-s') . '.txt';
        file_put_contents($file_name, $receipt_content);

        // Redirect to the PDF if payment successful
        if (isset($_GET['pdf'])) {
            header("Location: " . $_GET['pdf']);
            exit;
        }
    } else {
        // Payment failed
        $message = "Payment failed. Please try again later.";
    }
} else {
    // Redirect if the form is not submitted
    header("Location: payment.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Processing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&family=Sono:wght@200;300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-weight: bold;
            margin-bottom: 30px;
        }
        .message {
            margin-top: 30px;
            padding: 20px;
            border-radius: 5px;
            background-color: #d4edda;
            color: #155724;
        }
        .receipt {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 8px;
        }
        .receipt p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- <h2>Payment Processing</h2> -->
        <?php if (isset($message)) : ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
        <?php if (isset($file_name)) : ?>
            <div class="receipt">
                <?php echo $receipt_content; ?>
            </div></br>
            <!-- <p>Download your payment receipt: <a href="<?php echo $file_name; ?>" download>Download Receipt</a></p> -->
        <?php endif; ?>
        <a href="prectice.php">Back to Prectice Page</a>
    </div>
</body>
</html>
