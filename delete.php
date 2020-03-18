


  <?php
 
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';
      session_start();
      $user= $_SESSION['username'];   
      $connect = mysqli_connect("localhost", "root", "", "texteditor");  
      $query = "DELETE FROM $user WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
   
 }  
 ?>
