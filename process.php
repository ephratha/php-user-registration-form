<?php
if($_SERVER["REQUEST_METHOD"] != "POST"){ header("Location: register.php"); exit(); }

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = isset($_POST['gender']) ? $_POST['gender'] : "Not selected";
$country = $_POST['country'];
$comment = $_POST['comment'];
$hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];

$error = "";
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) { $error = "Invalid email format."; }
elseif(strlen($password) < 6) { $error = "Password must be at least 6 characters."; }
elseif(empty($hobbies)) { $error = "Please select at least one hobby."; }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Result</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body {
            background: linear-gradient(135deg, #ffd6e7, #fff0f6);
            min-height: 100vh; display: flex; justify-content: center; align-items: center; margin: 0; padding: 20px;
        }
        .container {
            background: white; padding: 40px; width: 720px; border-radius: 20px; box-shadow: 0 20px 40px rgba(0,0,0,0.08);
        }
        h2 { text-align: center; color: #ff4fa3; margin-top: 0; margin-bottom: 25px; }

        .alert { padding: 15px; border-radius: 8px; margin-bottom: 25px; text-align: center; font-size: 14px; font-weight: 500; }
        .alert-success { background: #e7f9ee; color: #1f7a33; border: 1px solid #c3e6cb; }
        .alert-error { background: #fff1f0; color: #cf1322; border: 1px solid #ffa39e; }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #f0f0f0;
        }
        .info-row:last-child { border-bottom: none; }
        .label { font-weight: 600; color: #ff4fa3; width: 30%; }
        .value { color: #444; width: 65%; text-align: right; }
        
        .comment-section { margin-top: 15px; padding-top: 10px; }
        .comment-text { background: #fdfdfd; padding: 12px; border-radius: 8px; font-size: 14px; margin-top: 5px; color: #666; border: 1px solid #f5f5f5; }

        .btn-back {
            display: block; text-align: center; margin-top: 30px; padding: 12px;
            background: #ff4fa3; color: white; text-decoration: none; border-radius: 10px; font-weight: 600; transition: 0.3s;
        }
        .btn-back:hover { background: #ff2f92; transform: translateY(-2px); }
                </style>
</head>
<body>

<div class="container">
    <?php if($error != ""): ?>
        <div class="alert alert-error">
            <strong>Error:</strong> <?php echo $error; ?>
        </div>
        <a href="register.php" class="btn-back" style="background: #f0f0f0; color: #555;">Go back and fix this</a>

    <?php else: ?>
        <div class="alert alert-success">Registration Successful!</div>
        <h2>Submitted Details</h2>
        
        <div class="info-row"><div class="label">Full Name</div><div class="value"><?php echo htmlspecialchars($fullname); ?></div></div>
        <div class="info-row"><div class="label">Email</div><div class="value"><?php echo htmlspecialchars($email); ?></div></div>
        <div class="info-row"><div class="label">Gender</div><div class="value"><?php echo $gender; ?></div></div>
        <div class="info-row"><div class="label">Hobbies</div><div class="value"><?php echo implode(", ", $hobbies); ?></div></div>
        <div class="info-row"><div class="label">Country</div><div class="value"><?php echo $country; ?></div></div>
        <div class="info-row"><div class="label">Password</div><div class="value">••••••••</div></div>

        <div class="comment-section">
            <div class="label">Comment:</div>
            <div class="comment-text">
                <?php echo !empty($comment) ? nl2br(htmlspecialchars($comment)) : "No comment provided."; ?>
            </div>
        </div>

        <a href="register.php" class="btn-back">Done</a>
    <?php endif; ?>
</div>

</body>
</html>