<?php

if (isset($_POST['genre'])) {
    if ( isset($_POST['catogory']) && isset($_POST['genre'])) {
        session_start();    
        $email = $_SESSION['email'];
        $catogory = $_POST['catogory'];
        $genre = $_POST['genre'];
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM genre WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO genre(email, catogory, genre) values(?, ?, ?)";
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
                $stmt->bind_param("sss", $email, $catogory, $genre);
                if ($stmt->execute()) {
                    header('Location:Home.php?');                   
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "You already chose your genra using this Account.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }
}
else {
    echo "Submit button is not set";
}
?>