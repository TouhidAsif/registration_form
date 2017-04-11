<?php
 $conn = mysql_connect("localhost","root","");
   $db = mysql_select_db('Students',$conn);

   $delete_record = $_GET['del'];
   $query= "delete from u_reg where id='$delete_record'";
   if (mysql_query($query)) {
    echo "<script>window.open('view.php?deleted=Record Has Been Deleted Successfully!','_self')</script>";
   }

?>