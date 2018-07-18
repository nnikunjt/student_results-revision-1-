<?php 

$link= substr($_SERVER['REQUEST_URI'],-6 );

 header("location:index.php?roll_no=$link");

 ?>