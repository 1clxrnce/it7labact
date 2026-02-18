<!DOCTYPE html>
<html>
<head>
    <title>GET vs POST Demo</title>
    <script src="validation.js"></script>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; padding: 20px; }
        .form-box { background: #f4f4f4; padding: 20px; margin: 20px 0; border-radius: 8px; }
        input, textarea { width: 100%; padding: 10px; margin: 5px 0; box-sizing: border-box; }
        button { background: #007bff; color: white; padding: 10px 20px; border: none; cursor: pointer; }
        button:hover { background: #0056b3; }
        .result { background: #d4edda; padding: 15px; margin: 10px 0; border-radius: 5px; }
        .error { background: #f8d7da; color: #721c24; padding: 15px; margin: 10px 0; border-radius: 5px; }
        .info { background: #fff3cd; padding: 10px; margin: 10px 0; border-radius: 5px; }
        hr { margin: 40px 0; }
    </style>
</head>
<body>
    <h1>GET vs POST Form Demo</h1>
    
    <!-- GET FORM -->
    <div class="form-box">
        <h2>📤 GET Method</h2>
        <p class="info">Data will appear in the URL</p>
        <form method="GET" action="" onsubmit="return validateForm('get')">
            <input type="text" name="get_name" placeholder="Name" required>
            <input type="email" name="get_email" placeholder="Email" required>
            <input type="number" name="get_age" placeholder="Age (optional)" min="1" max="120">
            <button type="submit">Submit GET</button>
        </form>
    </div>

    <?php
    if (isset($_GET['get_name'])) {
        $errors = [];
        
        if (strlen($_GET['get_name']) < 2) $errors[] = "Name too short";
        if (!filter_var($_GET['get_email'], FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email";
        if (!empty($_GET['get_age']) && ($_GET['get_age'] < 1 || $_GET['get_age'] > 120)) $errors[] = "Invalid age";
        
        if (empty($errors)) {
            echo "<div class='result'>";
            echo "<strong>✅ Form Submitted Successfully!</strong><br>";
            echo "Name: " . htmlspecialchars($_GET['get_name']) . "<br>";
            echo "Email: " . htmlspecialchars($_GET['get_email']) . "<br>";
            echo "Age: " . htmlspecialchars($_GET['get_age']);
            echo "</div>";
        } else {
            echo "<div class='error'><strong>❌ Errors:</strong><br>" . implode("<br>", $errors) . "</div>";
        }
    }
    ?>

    <hr>

    <!-- POST FORM -->
    <div class="form-box">
        <h2>🔒 POST Method</h2>
        <p class="info">Data will be hidden from the URL</p>
        <form method="POST" action="" onsubmit="return validateForm('post')">
            <input type="text" name="post_name" placeholder="Name" required>
            <input type="email" name="post_email" placeholder="Email" required>
            <input type="password" name="post_password" placeholder="Password (min 6 chars)" required>
            <textarea name="post_message" placeholder="Message (optional)" rows="3"></textarea>
            <button type="submit">Submit POST</button>
        </form>
    </div>

    <?php
    if (isset($_POST['post_name'])) {
        $errors = [];
        
        if (strlen($_POST['post_name']) < 2) $errors[] = "Name too short";
        if (!filter_var($_POST['post_email'], FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email";
        if (strlen($_POST['post_password']) < 6) $errors[] = "Password too short";
        if (strlen($_POST['post_message']) > 500) $errors[] = "Message too long";
        
        if (empty($errors)) {
            echo "<div class='result'>";
            echo "<strong>✅ Form Submitted Successfully!</strong><br>";
            echo "Name: " . htmlspecialchars($_POST['post_name']) . "<br>";
            echo "Email: " . htmlspecialchars($_POST['post_email']) . "<br>";
            echo "Password: " . str_repeat('*', strlen($_POST['post_password'])) . "<br>";
            echo "Message: " . htmlspecialchars($_POST['post_message']);
            echo "</div>";
        } else {
            echo "<div class='error'><strong>❌ Errors:</strong><br>" . implode("<br>", $errors) . "</div>";
        }
    }
    ?>
</body>
</html>
