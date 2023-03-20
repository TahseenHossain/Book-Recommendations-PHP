<!DOCTYPE html>
<html>
<head>
    <title>Log In Form</title>
    <style>
        p {
            text-align: left;
        }

        body {
            margin: 0;
            padding: 0;
            font-family:sans-serif;
            background-image: url(SignUp.webp);
            background-size: cover;
            background-position: center;
        }

        .log-in-form {
            width: 400px;
            box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
            background: #ffff;
            padding: 20px;
            margin: 6% auto 0;
            text-align: center;
        }

        .log-in-form h1{
            color: #1c8adb;
            margin-bottom: 30px;
        }

        .input-box{
            border-radius: 20px;
            padding: 10px;
            margin: 10px 0;
            width: 100%;
            border: 1px solid #999;
            outline: none;
        }

        .button {
            color: #fff;
            width: 100%;
            padding: 10px;
            border-radius: 20px;
            font-size: 15px 0;
            margin: 10px 0;
            border: none;
            outline: none;
            cursor: pointer;
            background-color: #1c8adb;
}

        img{
            width:100px;
            margin-top: -20px;
        }
    </style>
</head>

<body>
<form action="logInVal.php" method="POST">
    <div class="log-in-form">
        <tr>
            <img src="Logo.PNG"/>
        </tr>
        <h1>Log In Form</h1>
            <table>
                <tr>
                    <td><p>Email :</p></td>
                    <td><input type="email" name="uemail" class="input-box" maxlength="40" placeholder="Enter a valid E-mail" required></td>
                </tr>
                <tr>
                    <td><p>Password :</p></td>
                    <td><input type="password" name="upassword" class="input-box" minlength="5" maxlength="7" placeholder="5-7 Digits" required></td>
                </tr>
                <tr>
                    <td><p><input type="checkbox" name="remember" chacked> Remember Me</p></td>
                </tr>
                <hr>
            </table>
            <table>
                <button type="submit" class="button" name="submit">Log In</button>
            </table>
        </form>
        <form action="SignUpForm.php" method="POST">
            <table>
                <hr>
                <p1 class="or">OR</p1>
                <button type="submit" class="button" name="submit">Sign Up</button>
            </table>
        </form>
    </div>

</body>
</html>
