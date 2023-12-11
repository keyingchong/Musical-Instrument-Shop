<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/site.webmanifest">
        <script type="text/javascript"> (function () {
                var css = document.createElement('link');
                css.href = 'https://use.fontawesome.com/releases/v5.13.0/css/all.css';
                css.rel = 'stylesheet';
                css.type = 'text/css';
                document.getElementsByTagName('head')[0].appendChild(css);
            })();</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <title>Log In</title>
        <style>
            html,body{
                height: 100%;
                margin: 0px;
                padding: 0px;
                background: linear-gradient(90deg, rgba(204,153,255,1) 0%, rgba(255,153,204,1) 50%, rgba(255,153,153,1) 100%);
            }

            input:-webkit-autofill {
                -webkit-box-shadow: 0 0 0 30px #3f455a inset;
                -webkit-text-fill-color: #e3829a;
            }

            .login-form{
                border-top: 2px solid #EA5C54;
                position: absolute;
                width: 350px;
                height: 500px;
                top: 40%;
                left: 48%;
                margin-top: -150px;
                margin-left: -150px;
                background-color: #35394a; 
                border-radius: 15px;
            }

            .login{
                font-size: 30px;
                color: #d2d5df;
                text-align: center;
                font-family: 'Dosis', sans-serif;
                margin-top: 100px;
                margin-bottom: 30px;
                text-transform: uppercase;
            }

            input[type='text'], input[type='password']{
                color: #e3829a;
                border: none;
                outline: none;
                border-top: 2px solid #555c77;
                width: 240px;
                background-color: #3f455a;
                padding: 12px 55px; 
            }

            .form-grp:nth-child(2){
                border-bottom: 2px solid #555c77;
            }

            ::-webkit-input-placeholder{
                color: #73778c;
                padding-left: 5px;
            }

            input[type='submit']{
                border: 2px solid #dc6180;
                outline:none;
                color: #dc6180;
                border-radius: 50px;
                background: transparent;
                padding: 10px 50px;
                font-size: 12px;
                margin-top: 60px;
                margin-left: 25px;
            }

            input[type='submit']:hover{
                color: white;
                background: #dc6180;
                cursor: pointer;
                transition-duration: .2s;
            }

            .fp{
                text-decoration: none;
                color: #abadba;
                font-size: 15px;
                float: right;
                padding-right: 30px;
                -webkit-tap-highlight-color: transparent;
                transition: 0.2s;
                margin-top: 70px;
            }

            .fp:hover {
                color: #d4d4d4;
            }

            .error {
                position: absolute;
                left:0;
                right:0;
                word-spacing: 3px;
                color: #e3829a;
                margin-top: 10px;
                text-align: center;
                letter-spacing: 0.5px;
            }

            i.fas{
                position: relative;
                top: 33px;
                left: 20px;
            }

            .fa-user-edit, .fa-lock-open {
                color: transparent;
            }

            @media only screen and (max-width: 700px){
                .login-form{
                    width: 300px;
                    top: 35%;
                    left: 50%;
                }
                input[type='text'], input[type='password']{
                    width: 190px;
                }
                input[type='submit']{
                    padding: 8px 40px;
                }
                .error{
                    font-size: 13px;
                }
                .fp{
                    font-size: 13px;
                    margin-top: 69px;
                    padding-right: 20px;
                }
            }

        </style>

    </head>
    <body>

        <form action="adminForm.php" method="POST" class="login-form">
            <h3 class="login">login</h3>
            <div class='form-grp'>
                <div style="height:40px;">
                    <i class="fas fa-user fa-sm" style="font-size:18px;"></i>
                    <i class="fas fa-user-edit fa-sm" style="font-size:18px;"></i>
                    <input type="text" id="name" name="username" placeholder="Email" value='<?= (isset($_GET['username']) ? $_GET['username'] : "") ?>'>
                </div>

                <div>
                    <i class="fas fa-lock fa-sm" style="font-size:18px;"></i>
                    <i class="fas fa-lock-open" style="font-size:18px;"></i>
                    <input type="password" id="password" placeholder="Password" name="password" value="">
                </div>
            </div>

            <div class="error">
                <?= (isset($_GET['loginErr'])) ? $_GET['loginErr'] : "" ?>
            </div>
            <div>
                <input type="submit" name="login" value="LOG IN">
                <a href="ForgotPassword.php" class="fp">Forgot Password?</a>
            </div>
        </form>

        <script>
            $(document).ready(function () {
                $(".error").each(function () {
                    var listItem = $(this),
                            text = listItem.text().replace(/\./g, '<br>');

                    listItem.html(text);
                });
            });
        </script>

        <script>
            $(document).ready(function () {
                $("#name").focus(function () {
                    $(".fa-user").css("color", "transparent");
                    $(".fa-user-edit").css("color", "black").css("left", "0px");
                }).blur(function () {
                    $(".fa-user").css("color", "black");
                    $(".fa-user-edit").css("color", "transparent");
                });

                $("#password").focus(function () {
                    $(".fa-lock").css("color", "transparent");
                    $(".fa-lock-open").css("color", "black").css("left", "0px");
                }).blur(function () {
                    $(".fa-lock").css("color", "black");
                    $(".fa-lock-open").css("color", "transparent");
                });
            });

        </script>
    </body>
</html>
