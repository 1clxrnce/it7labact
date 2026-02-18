<!DOCTYPE html>
<html>
<head>
    <title>ayco</title>
    <script src="validation.js"></script>
</head>
<body>
    <h2>GET Method Form</h2>
    <form method="GET" action="" onsubmit="return validateForm('get')">
        <input type="text" name="get_name" placeholder="Enter your name">
        <button type="submit">Submit GET</button>
    </form>

    <?php
    if (isset($_GET['get_name'])) {
        echo "<p>GET Result: Hello, " . htmlspecialchars($_GET['get_name']) . "!</p>";
    }
    ?>

    <hr>

    <h2>POST Method Form</h2>
    <form method="POST" action="" onsubmit="return validateForm('post')">
        <input type="text" name="post_name" placeholder="Enter your name">
        <button type="submit">Submit POST</button>
    </form>

    <?php
    if (isset($_POST['post_name'])) {
        echo "<p>POST Result: Hello, " . htmlspecialchars($_POST['post_name']) . "!</p>";
    }
    ?>
</body>
</html>
