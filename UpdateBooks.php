<!DOCTYPE html>
<html>
<head>
    <title>Update Books</title>
    <style>
        .common p {
            text-align: left;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url(SignUp.webp);
            background-size: cover;
            background-position: center;
        }

        .common {
            width: 1450px;
            box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
            background: #ffff;
            padding: 20px;
            margin: 1.5% auto 0;
            text-align: center;
        }
        
        .common h1 {
            color: #1c8adb;
            margin-bottom: 30px;
        }

        .common h2 {
            text-align: left;
        }

        .split {
            width: 725px;
            box-shadow: 0 0 3px 0 rgba(0,0,0,0.3);
            background: #ffff;
            padding: 18px;
            margin: 10% auto 0;
            text-align: center;
            height: 100%;
            position: fixed;
            top: 0;
            
            
        }

        .left {

            left: 23px;
            width: 30%;
        }

        .right {
            right: 23PX;
            width: 70%;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .input-box {
            border-radius: 20px;
            padding: 20px;
            margin: 15px 0;
            width: 100%;
            border: 1px solid #999;
            outline: none;
        }

        .button1 {
            color: #fff;
            width: 70%;
            padding: 15px;
            border-radius: 20px;
            font-size: 20px 0;
            margin: 1px 0;
            border: none;
            outline: none;
            cursor: pointer;
            background-color: #1c8adb;
            text-align: center;
        }

        img {
            width: 100px;
            margin-top: -20px;
            background-position: center;
        }
    </style>
</head>

<body>
    <form action="UpdateBooksVal.php" method="POST">
        <div class="common">
            <tr>
                <img src="Logo.PNG" />
            </tr>
            <h1>Update Book</h1>
        <div class="split left">
            <table>
                <tr>
                    <td><p>Book Title :</p></td>
                    <td><input type="text" name="title" class="input-box"  maxlength="40" placeholder="Enter Title" required></td>
                </tr>
                <tr>
                    <td><p>Author Name :</p></td>
                    <td><input type="text" name="author" class="input-box" maxlength="20" placeholder="Enter Author Name" required></td>
                </tr> 
            </table>
            <table>
                <h2> Select Catogory<h2>
                <tr>
                     <p>
                     <input type="radio" name="catogory" value="mg"> Middle Grade
                     <input type="radio" name="catogory" value="ya"> Young Adult 
                     <input type="radio" name="catogory" value="ad"> Adult  
                    </p>
                </tr>
            </table>
            <h2> Select Genre<h2>
            <table>
                <hr>
                <tr> <button type="submit" name="genre" class="button1" value="th">Thriller</button> </tr>
                <tr> <button type="submit" name="genre" class="button1" value="fa">Fantasy</button> </tr>
                <tr> <button type="submit" name="genre" class="button1" value="sf">Science Fiction</button> </tr>
                <tr> <button type="submit" name="genre" class="button1" value="ro">Romance</button> </tr>
            </table>
        </div>

        <div class="split right">
            <table>
            <table class="center">
            <tr><td><textarea rows="30" cols="140" name="story" ></textarea></td></tr>
            </table>
        </div>
    </form>
    

</body>
</html>