
<!DOCTYPE html>
<html>
<head>
    <title>Subscription Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        form {
            width: 300px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        span.error {
            color: red;
            font-size: 14px;
            margin-bottom: 10px;
            display: block;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<?php
include("Testdb.php");

$name = $email = $plan = "";
$name_err = $email_err = $plan_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_err = "Please enter your name.";
    } else {
        $name = $_POST["name"];
    }

    if (empty($_POST["email"])) {
        $email_err = "Please enter your email address.";
    } else {
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_err = "Invalid email format.";
        }
    }

    if (empty($_POST["plan"])) {
        $plan_err = "Please select a subscription plan.";
    } else {
        $plan = $_POST["plan"];
    }

    if (empty($name_err) && empty($email_err) && empty($plan_err)) {
        $sql = "INSERT INTO SUBSCRIPTION (CUSTOMER_NAME, EMAIL, SUBSCRIPTION_PLAN) VALUES (?, ?, ?)";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("sss", $param_name, $param_email, $param_plan);
            $param_name = $name;
            $param_email = $email;
            $param_plan = $plan;
            if ($stmt->execute()) {
                echo "<script>alert('Subscription added successfully.')</script>";
            } else {
                echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
            $stmt->close();
        }
    }
    $conn->close();
}
?>

<h2>Subscription Form</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div>
        <label>Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error"><?php echo $name_err; ?></span>
    </div>
    <div>
        <label>Email:</label>
        <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error"><?php echo $email_err; ?></span>
    </div>
    <div>
        <label>Subscription Plan:</label>
        <select name="plan">
            <option value="">Select</option>
            <option value="Basic">Basic</option>
            <option value="Premium">Premium</option>
            <option value="Enterprise">Enterprise</option>
        </select>
        <span class="error"><?php echo $plan_err; ?></span>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
</form>

</body>
</html>
















