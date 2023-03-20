<?php
    if(isset($_POST['home'])){ 
        header('Location:Home.php?');  
    }
    else if(isset($_POST['books'])){ 
        header('Location:History.php?');  
    }
    else if(isset($_POST['profile'])){ 
        header('Location:Profile.php?');  
    }
    else if(isset($_POST['wish'])){ 
        header('Location:Wish.php?');  
    }
    else if(isset($_POST['now'])){ 
        header('Location:Now.php?');  
    }
    else if(isset($_POST['history'])){ 
        header('Location:History.php?');  
    }
    else if(isset($_POST['choice'])){ 
        header('Location:Home.php?');  
    }
    else if(isset($_POST['recent'])){ 
        header('Location:Update.php?');  
    }
    else if(isset($_POST['wish1'])){ 
        header('Location:AddWish.php?');  
    }
    else if(isset($_POST['now1'])){ 
        header('Location:AddNow.php?');  
    }
    else if(isset($_POST['history1'])){ 
        
        header('Location:AddHistory.php?');  
    }
    else if(isset($_POST['search']) && isset($_POST['title'])){
        session_start();    
        $title = $_POST['title'];
        session_start();
        $_SESSION['title'] = $title;
        header('Location:Search.php?');  
    }
    else{
        echo "Submit button is not set";
    }
?>
