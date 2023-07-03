<head>
        <title>Create Account</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/form.css">
</head>
<body>
    <div class="create-background">
        <div class="create-container">
        <a href="/test"><img src="/test/images/logo.png" style="width:200px;heigh:150px;margin:auto;"></a>
            <h1>CREATE ACCOUNT</h1>
            <br>
            <?php
                if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
                    $conn = mysqli_connect('localhost', 'root', '', 'test');

                    if (!$conn) {
                        die('Connection failed: ' . mysqli_connect_error());
                    }

                    $email = mysqli_real_escape_string($conn, $_POST['email']);
                    $password = mysqli_real_escape_string($conn, $_POST['password']);
                    $hashed_password = md5 ($password);
                    $query = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";

                    if (mysqli_query ($conn, $query)) {
                        echo 'Account created successfully. ';
                        echo '<a href="/test/account/login.php">Login here</a>';
                    }
                    else {
                        echo 'Error creating account: ' . mysqli_error($conn);
                    }

                    mysqli_close($conn);
                }
            ?>
                <form method="POST">
                    <label for="email">Email</label><br>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="password">Password</label><br>
                    <input type="password" id="password" name="password" required><br><br>
                    
                    <button type="submit" class="login-btn">CREATE</button>
                </form>
                <br>
                <a href="login.php">Already have an account? Click here to login</a>
                <br><br>
                <?php include("../includes/footer.php") ?>
        </div>
    </div>
</body>
