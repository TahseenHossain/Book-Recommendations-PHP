<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['uemail']) && isset($_POST['password'])  && isset($_POST['upassword'])) { 
        $uemail = $_POST['uemail']; 
        $password = $_POST['password'];
        $upassword = $_POST['upassword'];  
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
                $sql = "UPDATE register SET password='upassword' WHERE email = uemail";
                $stmt = $conn->prepare($Select);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->bind_result($resultEmail);
                $stmt->store_result();
                $stmt->fetch();
                $rnum = $stmt->num_rows;
                header('Location:Home.php?');                                  
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



