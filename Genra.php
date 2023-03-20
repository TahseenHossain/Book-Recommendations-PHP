<!DOCTYPE HTML>
<html>
<head>
    <title> Select Genre </title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url(SignUp.webp);
            background-size: cover;
            background-position: center;
        }

        .genra {
            width: 750px;
            box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
            background: #ffff;
            padding: 20px;
            margin: 6% auto 0;
            text-align: center;
        }

        .genra h1 {
            color: #1c8adb;
            margin-bottom: 30px;
            text-align: center;
        }

        .genra h2 {
           color: #1c8adb;
           margin-bottom: 30px;
           text-align: center;
        }

        .button {
            color: #fff;
            width: 35%;
            padding: 20px;
            border-radius: 40px;
            font-size: 35px 0;
            margin: 10px 0;
            border: none;
            outline: none;
            cursor: pointer;
            background-color: #1c8adb;
        }

        img {
            width: 100px;
            margin-top: -20px;
        }


    </style>
</head>
<body>
    <form action="GenraVal.php" method="POST">
    <div class="genra">
        <tr>
        <img src="Logo.PNG"/>
        </tr>
        
        <hr>
            <h2> Select Catogory<h2>
            <table>
                <tr>
                     <h2><input type="radio" name="catogory" value="mg"> Middle Grade </h2> 
                     <h2><input type="radio" name="catogory" value="ya"> Young Adult </h2> 
                     <h2><input type="radio" name="catogory" value="ad"> Adult  </h2>
                </tr>
            </table>

            <h2> Select Genre<h2>
            <table>
                <hr>
                <tr> <button type="submit" name="genre" class="button" value="th">Thriller</button> </tr>
                <tr> <button type="submit" name="genre" class="button" value="fa">Fantasy</button> </tr>
                <tr> <button type="submit" name="genre" class="button" value="sf">Science Fiction</button> </tr>
                <tr> <button type="submit" name="genre" class="button" value="ro">Romance</button> </tr>
            </table>
        </form>
</body>
</html>
