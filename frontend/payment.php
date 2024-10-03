<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include 'db.php';

$plan = $_GET['plan'];
// print_r($plan);exit;
// Check if user is logged in
if (isset($_SESSION["Login"]) && is_array($_SESSION["Login"])) {
    // Retrieve user's name and email from session
    $name = $_SESSION["Login"]["fullname"];
    $email = $_SESSION["Login"]["email"];
} else {
    // If user is not logged in, redirect to login page
    header("location: login.php");
    exit;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $bank_name = strtoupper($_POST['bank_name']);
    $account_number = $_POST['account_number'];
    $type = $_POST['type']; // Retrieving from hidden field
    $valid = $_POST['valid']; // Retrieving from hidden field
    $amount = $_POST['amount']; // Retrieving from hidden field

    // Sanitize and validate input (for demonstration, you can add more validation)
    $name = mysqli_real_escape_string($con, $name);
    $email = mysqli_real_escape_string($con, $email);
    $bank_name = mysqli_real_escape_string($con, $bank_name);
    $account_number = mysqli_real_escape_string($con, $account_number);
    // $type = mysqli_real_escape_string($con, $type);
    // $valid = mysqli_real_escape_string($con, $valid);
    $amount = mysqli_real_escape_string($con, $amount);
$valid2 = '';
if($_POST['valid'] == 'W'){
    $valid2 = 'One Week';
}elseif ($_POST['valid'] == 'M'){
    $valid2 = 'One Month';
}else{
    $valid2 = 'One Year';
}
// print_r($valid2);exit;
    // Insert data into payment table
    $sql = "INSERT INTO payment (name, email, bank_name, account_num, amount, type, duration) 
            VALUES ('$name', '$email', '$bank_name', '$account_number', '$amount', '$type', '$valid')";
    if ($con->query($sql) == TRUE) {
        // Send email notification
        $to_email = $email;
        $subject = "Registration Successful";
        $body = "Dear $name,\n\nThank you for your payment for access to our practice page. We're excited to have you onboard!\n\nYour plan is $type And it's Valid for $valid2.\n\nPayment Amount:$amount \n\nBank Name: $bank_name \n\nRegards,\nCode Canvas Team";
        $headers = "From: codecanvas2024@gmail.com";
        
        if (mail($to_email, $subject, $body, $headers)) {
            $msg .= ". Email notification sent.";
        } else {
            $msg .= ". Failed to send email notification.";
        }
        // Redirect to payment_process.php with form fields
        echo "<form id='redirectForm' action='payment_process.php' method='post'>";
        echo "<input type='hidden' name='name' value='$name'>";
        echo "<input type='hidden' name='email' value='$email'>";
        echo "<input type='hidden' name='bank_name' value='$bank_name'>";
        echo "<input type='hidden' name='account_number' value='$account_number'>";
        echo "<input type='hidden' name='type' value='$type'>";
        echo "<input type='hidden' name='valid' value='$valid'>";
        echo "<input type='hidden' name='amount' value='$amount'>";
        echo "</form>";
        echo "<script>document.getElementById('redirectForm').submit();</script>";
        exit;
      } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
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
            /* margin-bottom: 30px; */
        }
        form {
            margin-top: 30px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* Loader Styles */
        .loader {
            display: none;
            border: 6px solid #f3f3f3;
            border-top: 6px solid #3498db;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 2s linear infinite;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
.acss{
    text-align: right;
    display: inline;
}
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Payment</h2>
            </div>
            <div class="col-sm-6 acss">
                <a href="home.php" style="text-align:right;">Back to CodeCanvas</a>
            </div>
        </div>
        <div class="loader" id="loader"></div>
        <form method="post" id="form">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($name); ?>" required>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required>
            <label for="bank_name">Bank Name:</label>
            <input type="text" id="bank_name" name="bank_name" required>
            <label for="account_number">Account Number:</label>
            <input type="text" id="account_number" name="account_number" required>
            <label for="type">Subscription Plan Types :</label>
            <select id="type" name="type" onchange="updatetypeAndAmount()">
                <option value="">--Select Subscription Plan Types--</option>
                <option value="Trial" <?php if(isset($plan) && $plan == "xx1"){ echo 'selected'; }?>>Free / Trial</option>
                <option value="Premium" <?php if(isset($plan) && $plan == "x2x"){ echo 'selected'; }?>>Premium</option>
                <option value="Platinum" <?php if(isset($plan) && $plan == "3xx"){ echo 'selected'; }?>>Platinum</option>
            </select>
            <label for="valid">Validity Of Plan :</label>
            <select id="valid" name="valid" onchange="updateValidityAndAmount()">
                <option value="">--Select Validity Of Plan--</option>
                <option value="W" <?php if(isset($plan) && $plan == "xx1"){ echo 'selected'; }?>>One Week</option>
                <option value="M" <?php if(isset($plan) && $plan == "x2x"){ echo 'selected'; }?>>One Month</option>
                <option value="Y" <?php if(isset($plan) && $plan == "3xx"){ echo 'selected'; }?>>One Year</option>
            </select>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" placeholder="100" onchange="updateAmount()" value="<?php if(isset($plan) && $plan == "xx1"){
            echo '0'; }
            elseif(isset($plan) && $plan == "x2x"){
                echo '240';
            } 
            else{
                echo '2800';
            }?>">
            
            <input type="submit" value="Pay Now" onclick="showLoader(event)">
            
        </form>
    </div>
    <script>
function updateValidityAndAmount() {
    var typeSelect = document.getElementById("type");
    var validSelect = document.getElementById("valid");
    var amountInput = document.getElementById("amount");
    var selectedType = typeSelect.value;
    var selectedValid = validSelect.value;

    // If the type is changed
    if (selectedType === "Premium") {
        // Set validity to month and amount to 240
        typeSelect.value = "Premium"; 
        amountInput.value = "240"; 
        validSelect.value = "M"; 
    } else if (selectedType === "Platinum") {
        // Set validity to year and amount to 2800
        typeSelect.value = "Platinum"; 
        amountInput.value = "2800"; 
        validSelect.value = "Y";
    } else if (selectedType === "Trial") {
        // Set validity to week and amount to 0 for trial
        typeSelect.value = "Trial"; 
        amountInput.value = "0"; 
        validSelect.value = "W"; 
    }

    // If the validity is changed
    if (selectedValid === "Y") {
        // Set type to Platinum and amount to 2800 for year validity
        typeSelect.value = "Platinum"; 
        amountInput.value = "2800"; 
        validSelect.value = "Y"; 
    } else if (selectedValid === "M") {
        // Set type to Premium and amount to 240 for month validity
        typeSelect.value = "Premium"; 
        amountInput.value = "240"; 
        validSelect.value = "M"; 
    } else if (selectedValid === "W") {
        // Set type to Trial and amount to 0 for week validity
        typeSelect.value = "Trial"; 
        amountInput.value = "0"; 
        validSelect.value = "W"; 
    }
}
function updatetypeAndAmount() {
    var typeSelect = document.getElementById("type");
    var validSelect = document.getElementById("valid");
    var amountInput = document.getElementById("amount");
    var selectedType = typeSelect.value;

    // If the type is changed
    if (selectedType === "Premium") {
        // Set validity to month and amount to 240
        typeSelect.value = "Premium"; 
        amountInput.value = "240"; 
        validSelect.value = "M"; 
    } else if (selectedType === "Platinum") {
        // Set validity to year and amount to 2800
        typeSelect.value = "Platinum"; 
        amountInput.value = "2800"; 
        validSelect.value = "Y";
    } else if (selectedType === "Trial") {
        // Set validity to week and amount to 0 for trial
        typeSelect.value = "Trial"; 
        amountInput.value = "0"; 
        validSelect.value = "W"; 
    }

}
function updateAmount() {
    var typeSelect = document.getElementById("type");
    var validSelect = document.getElementById("valid");
    var amountInput = document.getElementById("amount");
    var selectedamu = amountInput.value;

    // If the type is changed
    if (selectedamu !== "0" && selectedamu !== "240" && selectedamu !== "2800" ) {
        alert("Invalid amount. Amount should be either 0, 240, or 2800.");
    } else if (selectedamu === "2800") {
        // Set validity to year and amount to 2800
        typeSelect.value = "Platinum"; 
        amountInput.value = "2800"; 
        validSelect.value = "Y";
    } else if (selectedamu === "240") {
          // Set validity to month and amount to 240
          typeSelect.value = "Premium"; 
        amountInput.value = "240"; 
        validSelect.value = "M"; 
    } else if (selectedamu === "0") {
        // Set validity to week and amount to 0 for trial
        typeSelect.value = "Trial"; 
        amountInput.value = "0"; 
        validSelect.value = "W"; 
    }

}

        function showLoader(event) {
            event.preventDefault();
            document.getElementById("loader").style.display = "block";
            setTimeout(function(){
                document.getElementById("form").submit();
            }, 2000);
        }
    </script>
</body>
</html>
