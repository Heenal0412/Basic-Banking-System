<?php
   define('db_host', 'localhost');
   define('db_user', 'root');
   define('db_pass', '');
   define('db_name', 'grip');

   $conn=mysqli_connect(db_host,db_user,db_pass,db_name);

   if($conn){
       echo"Successfuly connected to database <br>";
   }
   else{
       echo"Failed to connect to database";
   }
?>