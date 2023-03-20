<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
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
            width: 50%;
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
<form action="ProfileVal.php" method="POST">
    <div class="log-in-form">
        <tr>
            <img src="Logo.PNG"/>
        </tr>
        <h1>Edit Profile</h1>
            <table>
                <tr>
                    <td><p>Email :</p></td>
                    <td><input type="email" name="uemail" class="input-box" maxlength="40" placeholder="Enter a valid E-mail" required></td>
                </tr>
                <tr>
                    <td><p>New Password :</p></td>
                    <td><input type="password" name="password" class="input-box" minlength="5" maxlength="7" placeholder="5-7 Digits" required></td>
                </tr>
                <tr>
                    <td><p>Confirm Password :</p></td>
                    <td><input type="password" name="upassword" class="input-box" minlength="5" maxlength="7" placeholder="5-7 Digits" required></td>
                </tr>
                <hr>
            </table>
            <table>
                <button type="submit" class="button" name="submit">Edit</button>
            </table>
        </form>
    </div>

</body>
</html>
