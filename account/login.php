<?php
session_start();

if (isset($_SESSION['email'])) {
    header('Location: account.php');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $conn = mysqli_connect('localhost', 'root', '', 'test');

    if (!$conn) {
        die('Connection failed:' . mysqli_connect_error());
    }

    $query = "SELECT * FROM users WHERE email = '$email' AND password='" . md5($password) . "'";
    
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $_SESSION['email'] = $email;

        header('Location: account.php');
        exit();
    }
    else {
        $error = 'Invalid email or password';
    }

    mysqli_close($conn);
}
?>

    <head>
        <title>Login</title>        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../styles/form.css">
    </head>
    <body>
            <div class="login-background">
            <div class="login-container">
            <a href="/test"><img src="/test/images/logo.png" style="width:200px;heigh:150px;margin:auto;"></a>
            <h1>USER LOGIN</h1>
            <br>
            <?php if (isset($error)): ?>
            <p><?php echo $error; ?></p>
            <?php endif; ?>
                <form method="post" action="login.php">
                    <label for="email"></label><br>
                    <input type="email" id="email" name="email" style="background-image:url('/test/images/colormail.png');" required><br><br>
                    <br>

                    <label for="password"></label>
                    <input type="password" id="password"name="password" style="background-image:url('/test/images/key.png');" required>
                    <br><br>
                    <button type="submit" class="login-btn">LOGIN</button>
                </form>
                <br><br>
                <a href="create.php">Not yet have an account? Create here</a>
                <br><br>
                <?php include("../includes/footer.php") ?>
            </div>
        </div>
    </body>
