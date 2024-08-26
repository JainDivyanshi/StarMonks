<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>StarLogin</title>
</head>
<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#"><img src="logo.png" class="logo"></a><br><br>
            <ul>
                <li><a href="website.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="whatnew.html">What's New</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </header>
        <br><br><br><br><br><hr><br><br>

        <div class="login-container">
        <?php
        session_start(); // Start the session

        include 'sqlconnect.php';

        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Get username and password from the form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // SQL query to check if the credentials exist in the database
            $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = $conn->query($sql);

            // Check if the query returned any rows
            if ($result->num_rows > 0) {
                // Set session variable to indicate user is logged in
                $_SESSION['logged_in'] = true;
                // Redirect to the homepage if the credentials are correct
                header("Location: website.php");
                exit();
            } else {
                // Display error message if credentials are incorrect
                echo "<p>Incorrect username or password. Please try again.</p>";
            }
        }

        // Check if the user is logged in and display logout button
        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']) {
            echo '<form action="logout.php" method="post">
                    <button type="submit" name="logout">Logout</button>
                </form>';
        } else {
            // Display the login form if the user is not logged in
            echo '<div class="login-container">
                    <h2>Login</h2>
                    <form action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '" method="POST">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <button type="submit">Login</button>
                    </form>
                </div>';
        }
        ?>
    </section>
</body>
</html>
