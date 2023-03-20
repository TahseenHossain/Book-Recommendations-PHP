<?php
if(isset($_POST['submit'])){ 
    if (isset($_POST['uemail']) && isset($_POST['upassword'])){
        $email = $_POST['uemail'];
        $password = $_POST['upassword'];
        $utype = "a";
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        $result = mysqli_query($conn, "SELECT * FROM register WHERE email = '$email'");
        $row = mysqli_fetch_assoc($result);
        if(mysqli_num_rows($result) > 0){            
            if($password == $row['password']){
                session_start();
                $_SESSION['email'] = $email;
                
                if(isset($_POST['remember'])){
                        $cookie_name = 'email';
                        $cookie_valuen = $_REQUEST['email'];
                        $cookies_expire = time()+60*60*24*7;
                        setCookie($cookie_name, $cookie_value, $cookie_expire);
                }
                if($utype == $row['type']){
                        header('Location:UpdateBooks.php?'); 
                }
                else{
                    header('Location:Home.php?'); 
                }
                
                 
            }
        else{
        echo
            "<script> alert('Wrong Password'); </script>";
        }
    }
    else{
        echo
        "<script> alert('User Not SignUp'); </script>";
        }
    }
}