<?php

if (isset($_POST['genre'])) {
    if (isset($_POST['title']) && isset($_POST['author']) 
        && isset($_POST['catogory']) && isset($_POST['story'])) {
        
        $genre = $_POST['genre'];
        $title = $_POST['title'];
        $author = $_POST['author'];
        $catogory = $_POST['catogory'];
        $story = $_POST['story'];     
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "test";
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT title FROM storyinfo WHERE title = ? LIMIT 1";
            $Insert = "INSERT INTO storyinfo(genre, title, author, catogory, story) values(?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $title);
            $stmt->execute();
            $stmt->bind_result($resulttitle);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;
            if ($rnum >= 0) {
                $stmt->close();
                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssss", $genre, $title, $author, $catogory, $story);
                if ($stmt->execute()) {
                    $_SESSION['genre'] = $genre; 
                    $_SESSION['title'] = $title;
                    $_SESSION['author'] = $author;
                    $_SESSION['catogory'] = $catogory;
                    $_SESSION['story'] = $story; 
                    header('Location:UpdateBooks.php?');                   
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "You have exceeded your limit.";
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



