<?php  
 //fetch.php  
 include ("db.php");  
 session_start();
 $user= $_SESSION['username'];
 if(isset($_POST["employee_id"]))  
 {  
      $query = "SELECT * FROM $user WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $row = mysqli_fetch_array($result);  
      echo json_encode($row);  
 }  
 ?>