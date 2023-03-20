<?php
   session_start();    
   $email = $_SESSION['email']; 
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        p {
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
            width: 22%;
        }

        .right {
            right: 23PX;
            width: 78%;
            text-align: left;
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
            margin: 25px 0;
            width: 25%;
            border: 1px solid #999;
            outline: none;
        }

        .button {
            color: #fff;
            width: 15%;
            padding: 20px;
            border-radius: 40px;
            font-size: 35px 0;
            margin: 10px 0;
            border: none;
            outline: none;
            cursor: pointer;
            background-color: #1c8adb;
        }

        .button1 {
            color: #fff;
            width: 120%;
            padding: 30px;
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
    <form action="HomeVal.php" method="POST">
        <div class="common">
            <tr>
                <img src="Logo.PNG" />
            </tr>
            <table>
                <tr><button type="submit" class="button" name="home" value="home">Home</button></tr>
                <tr><button type="submit" class="button" name="books" value="books">Books</button></tr>
                <tr><input  type="book" class="input-box" name="title" placeholder="Search Book Title"></tr>
                <tr><button type="submit" class="button" name="search" value="search">Search</button></tr>
                <tr><button type="submit" class="button" name="profile" value="profile">Profile</button></tr>
                <hr>
            </table>
        <div class="split left">
            <table>
                <tr> <td> <button type="submit" name="wish" class="button1" value="wist">Wish List</button> </td> </tr>
                <tr> <td> <button type="submit" name="now" class="button1" value="now">Reading Right Now</button> </td> </tr>
                <tr> <td> <button type="submit" name="history" class="button1" value="history">Reading History</button> </td> </tr>
            </table>
        </div>

        <div class="split right">
            <table>
            <?php
                $host = "localhost";
                $dbUsername = "root";
                $dbPassword = "";
                $dbName = "test";
                $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
                if ($conn->connect_error) {
                    die('Could not connect to the database.');
                }
                $sql = "SELECT title, author FROM readh where email= '$email' and history= 'r'";
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "Title: " . $row["title"]. "<br>";
                        echo "By: " . $row["author"]. "<br>";
                        echo "<br>";
                        echo "<br>";
                    }
                } else {
                echo "0 results";
                }
             mysqli_close($conn);
            ?>
            </table>
                 <hr>

        </div>
        </div>
    </form>
    

</body>
</html>
