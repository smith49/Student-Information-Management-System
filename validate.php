<!DOCTYPE html>
<html>
<?php
 
include_once('config.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"]== "POST") {
     
    $username = test_input($_POST["Roll"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['id'] == $username) &&
            ($user['password'] == $password)) {
                header("Location: adminpage.php");
        }
        
        }
			echo "Wrong user";
			echo '<a href="Error.php">page 1</a>';
            echo "<script language='javascript'>";
            
            echo "</script>";
            die();
    
}
 
?>
<a href="Error.php">
</a>

