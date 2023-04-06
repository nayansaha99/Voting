 <?php
  $conn = new mysqli('localhost', 'root' , 'test' ,'usersform');
  
  if(!$conn)
  {
    echo "connection Denied!" . mysqli_connect_error();
  }



 ?>