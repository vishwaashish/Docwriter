
  <?php
 
 if(isset($_POST["employee_id"]))  
 {  
      $output = '';
      session_start();
      $user= $_SESSION['username'];   
      $connect = mysqli_connect("localhost", "root", "", "texteditor");  
      $query = "SELECT * FROM $user WHERE id = '".$_POST["employee_id"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive bg-dark ">  
           <table class="table table-borderless bg-dark text-white" >';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="20%"><label>Title:</label></td>  
                     <td width="80%">'.$row["title"].'</td>  
                </tr>  
                <tr>  
                     <td width="20%"><label>Description:</label></td>  
                     <td width="80%">'.$row["description"].'</td>  
                </tr>  
                
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
 }  
 ?>