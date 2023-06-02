<!DOCTYPE html>
<html>

<head>
    <title>PPIM Admin</title>
    </head>
    
    <body>
    <h2>Admin</h2>
        <br/>
        
        <?php
        session_start();
        if($_SESSION['status'] != "login"){
            header("location:../index.php?msg=loginno");
            
        }
        
        ?>
    
        <h4>Welcome, <?php echo $_SESSION['stud_id']; ?>! You have login.</h4>
    <br/><br/>
       
    
    
    </body>
    
    <a href="logout.php">Logout</a>

</html>
