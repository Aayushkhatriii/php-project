<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <p>Hello, <?php echo htmlspecialchars($_SESSION['Username']); ?>! You have successfully logged in.</p>
    <a href="logout.php">Logout</a>
</body>
</html>