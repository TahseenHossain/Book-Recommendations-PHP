<?php
    session_start();    
    $email = $_SESSION['email'];
    $title = $_SESSION['title'];
    $author = $_SESSION['author'];
    $catogory = $_SESSION['catogory'];
    $genre = $_SESSION['genre'];
    $history = "r";
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "test";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    if ($conn->connect_error) {
        die('Could not connect to the database.');
    }
    else { 
            $DELETE = "DELETE FROM readh WHERE title= '$title' and email= '$email' ";
            if ($conn->query($DELETE) === TRUE) {
                header('Location:Search.php?');
            } 
            else {
                echo $stmt->error;
            }
            $Insert = "INSERT INTO readh(email, history, title, author, catogory, genre) values('$email', '$history', '$title', '$author', '$catogory', '$genre')";
            if ($conn->query($Insert) === TRUE) {
                header('Location:Home.php?');
            } 
            else {
                echo $stmt->error;
            }
            $stmt->close();
            $conn->close();
        }

?>
