<?php

    function email_exists($username, $con) 
    {
      $result = mysqli_query ($con,"SELECT admin_id FROM admin where username='$username'");

      if (mysqli_num_rows($result) ==1)
       {
        return true;
      }
      else
      {
        return false;
      }
        
        }
    

    
 ?>