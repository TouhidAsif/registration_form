 <?php
$conn = mysql_connect("localhost","root","");
   $db = mysql_select_db('Students',$conn);

   $edit_record = $_GET['edit'];
   $query = "select * from u_reg where id='$edit_record'";
   $run = mysql_query($query);
   while ($row=mysql_fetch_array($run)) 
   {
        $edit_id=$row['id'];
        $s_name=$row['1'];
        $s_id=$row['2'];
        $s_session=$row['3'];
        $s_dept=$row['4'];        
        }                           
 ?>
  <html>
 <head>
 	<title>Updating students records</title>
  <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
	    <div class="wrapper">
        			<div class="header">
                        <img src="img/logo.jpg"/>
        				    <h3>Students Information System</h3>
        			</div>
                  			<div class="mainmenu">
                                         <ul>
                                    

                            <li><a href="index.php">Home</a></li>
                            <li><a href="view.php">View</a></li>
                            <li><a href="logout.php">Logout</a></li>
                            <li><a href="admin.php">Login</a></li>
                            <li><a href="registration.php">Register</a></li>
                             
                                  </ul>
                  			</div>
				<div class="content">
				   <h2>Updating Form</h2>
				
          				<p class="msg"> 
          				 

          				</p>

              				<div class="login_reg">

                               <form method="post" action="edit.php?edit_form=<?php echo $edit_id;?>"/>
                                 <table>
                                    <tr>
                                        <td>Students Name:</td>
                                        <td><input type="text" name="st_name1" value='<?php echo $s_name;?>'/>
                                         
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Students ID:</td>
                                        <td><input type="text" name="st_id1" value='<?php echo $s_id;?>'/>
                                         
                                      </td>
                                    </tr>
                                     <tr>
                                        <td>Student Session:</td>
                                        <td><input type="text" name="st_session1" value='<?php echo $s_session;?>'/>
                                          
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Student Department:</td>
                                        <td>
                                         <select name="st_dept1">
                                            <option value='<?php echo $s_dept;?>'><?php echo $s_dept;?></option>
                                            <option value='CSTE'>CSTE</option>
                                            <option value='PHARM'>PHARM</option>
                                            <option value='BBA'>BBA</option>
                                            <option value='ECO'>ECO</option>
                                            <option value='ENV'>ENV</option>
                                            <option value='ACCE'>ACCE</option>
                                         </select>
                                         
                                        </td>
                                    </tr>
                                      
                                    <tr>
                                       <td colspan="2">
                                         <span style="float:right;">
                                          <input type="submit" name="update" value="Update"/>
                                          <input type="reset" value="Reset"/>
                                           </span>
                                       </td>
                                    </tr>


                                 </table>
                               </form>
                                
                          				</div>
                                      <div class="back">
                                            <a href="login.php"><img src="img/back.png" alt="back"></a>
                                            
                                      </div>
        </div>
				<div class="footer">
                 <h3>http//www.nstu/all_dept.com</h3>

        </div>

	    </div>
 </body>
 </html>
 
 <?php

if (isset($_POST['update'])) 
{
   $edit_record1 = $_GET['edit_form'];
   $student_name = $_POST['st_name1'];
   $student_id = $_POST['st_id1'];
   $student_session = $_POST['st_session1'];
   $student_dept = $_POST['st_dept1'];

   $query1 = "update u_reg set st_name='$student_name',st_id='$student_id',st_session='$student_session',st_dept='$student_dept' 
              where id='$edit_record1'";
              if (mysql_query($query1)) {
    echo "<script>window.open('view.php?updated=Record Has Been updated Successfully!','_self')</script>";
   }

}


 ?>
 