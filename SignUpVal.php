<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['username']) && isset($_POST['email']) 
        && isset($_POST['password']) && isset($_POST['age']) && isset($_POST['gender'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO register(username, email, password, age, gender) values(?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum == 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssis", $username, $email, $password, $age, $gender);
                if ($stmt->execute()) {
                    session_start();
                    $_SESSION['email'] = $email;
                    if(isset($_POST['remember'])){
                        $cookie_name = 'email';
                        $cookie_valuen = $_REQUEST['email'];
                        $cookies_expire = time()+60*60*24*7;
                        setCookie($cookie_name, $cookie_value, $cookie_expire);
                    }
                    header('Location:Genra.php?');                        
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo
                "<script> alert('Someone already registers using this email'); </script>";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo 
        "<script> alert('All field are required.'); </script>";
        die();
    }
}
else {
    echo 
    "<script> alert('Submit button is not set.'); </script>";
}
?>


