<?php
 require 'dbConnection.php';

  if (isset($_POST['voteq']) ) {  
      $languag = $_POST['language'];
      $rr = filter_input(INPUT_POST, 'lang');  
       $sql = "UPDATE votes SET num_votes =  (SELECT COUNT(num_votes))+1 WHERE language = " ."'$languag'"; 
        
       $retval = mysqli_query(  $conn ,$sql);
            
            if(! $retval ) {
               die('Could not update data: ' . mysqli_error($conn));
            }
            else{
                echo 'Vote cast successfully';
            } 
 }else
 {
   
   $sql = "SELECT * FROM votes";
   $result = $conn->query($sql);

if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) { 
          array_push($result_array, $row);
    }
}  
 echo json_encode($result_array);
 }
 $conn->close();
  