<?php 
session_start();
 $user= $_SESSION['username']; 
 include ("db.php");  

 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      
      $title = mysqli_real_escape_string($connect, $_POST["title"]);  
      $description = mysqli_real_escape_string($connect, $_POST["description"]);  
      if($_POST["employee_id"] != '')  
      {  
           $query = "  
           UPDATE $user   
           SET title='$title',   
           description='$description'   
           WHERE id='".$_POST["employee_id"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO $user(title, description)  
           VALUES('$title', '$description');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM $user ORDER BY id DESC";  
           $result = mysqli_query($connect, $select_query);  
           ?> 
                <table class="table borderless h4 text-white">  
                     <tr>  
                         <th width="30%">Title</th>
                         <th >Description</th>   
                         <th width="5%">Edit</th>  
                         <th width="5%">View</th> 
                         <th width="5%">Delete</th>  
                     </tr>  
                     <?php  
                               while($row = mysqli_fetch_array($result))  
                               {  
                               ?>  
                                <tr>  
                                    <td><?php echo $row["title"]; ?></td>  
                                    <td><?php echo $row['description']; ?></td>
                                    <td><input type="button" name="edit" value="Edit" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs edit_data" /></td>  
                                    <td><input type="button" name="view" value="view" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" /></td> 
                                    <td><input type="button" name="delete" value="delete" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs delete" /></td> 
                                </tr>  
                               <?php  
                               }  
                                   
      }  
      
 }  
 ?>