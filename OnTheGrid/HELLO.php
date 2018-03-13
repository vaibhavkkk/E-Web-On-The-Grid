<?php
     $Servername='mysql.hostinger.in';
     $User='u477353913_2012';
     $PASS='aA09876';
     $databasename='u477353913_2012';
     $conn = new mysqli($Servername, $User, $PASS, $databasename);
     $data=$_GET['data'];
     $QUERY="INSERT INTO  `DATA` (  `DATA` ) VALUES ("HELLO")";
     mysqli_query($conn,$QUERY);
     mysqli_close($conn);
     echo $data;
?>