<!DOCTYPE html>
<html>
	<head>
		<title>Account</title>
		<link rel="stylesheet" href="/test/styles/shop.css">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                font-family: "Poppins", sans-serif;
            }
            
            .login-background {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 100vh;
                text-align: center;
                background-image: linear-gradient(to bottom right,lightyellow, rgb(233, 201, 255));
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: horizontal;
                flex-direction: row;
            }

            .container a{
                position: relative;
                width: 160px;
                height: 60px;
                display: inline-block;
                background: white;
                margin: 10px;
                border-radius: 20px; 
            }

            .container a:before,
            .container a:after{
                content: '';
                position: absolute;
                inset: 0;
                background: red;
                transition: 0.5s;
            }

            .container a:nth-child(1):before,
            .container a:nth-child(1):after{
                background: rgb(86, 230, 122);
                border-radius: 20px; 
            }

            .container a:nth-child(2):before,
            .container a:nth-child(2):after{
                background: rgb(248, 101, 101);
                border-radius: 20px;
            }

            .container a:hover:before{
                inset: -3px;
            }
            .container a:hover:after{
                inset: -3px;
                filter: blur(10px);
            }
            .container a span{
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                display: inline-block;
                background: hsl(273, 64%, 55%);
                z-index: 10;
                display: flex;
                justify-content: center;
                align-items: horizontal;
                font-size: 1.2cm;
                text-transform: uppercase;
                letter-spacing: 2px;
                color: white;
                border: 1px solid #040a29;
                overflow: hidden;
                font-size: 16px;
                text-align:center;
                padding: 1rem 1rem;
                border-radius: 20px; 
            }

            .container a span::before{
                content: '';
                position: absolute;
                top: 0;
                left: -50%;
                width: 100%;
                height: 100%;
                background: rgba(255,255,255,0.075);
                transform: skew(25deg);
            }
            </style>
        <?php
        session_start();

        if (!isset($_SESSION['email'])) {
            header('Location: login.php');
            exit();
        }
        ?>
    </head>
    <body>
    <div class="login-background">
        
        <h1>Welcome, <?php echo $_SESSION['email']; ?>! Ready to shop more?</h1>

        <div class="container">
            <a href="/test/index.php"><span>Yes, go to Home</span></a>
            <a href="logout.php"><span>No, Logout</span></a>
        </div>
    </div>
</body>
<html>