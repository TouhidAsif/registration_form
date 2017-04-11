  <?php
session_start();
if (!$_SESSION['admin_name']) {
  header('location:admin.php?error=you are not an administrator..!');
}

 ?>
  <html>
 <head>
 	<title>php ooplog</title>
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
				   <h2>Register</h2>
				<p class="msg"> 
          				 <?php
 $conn = mysql_connect("localhost","root","");
 $db = mysql_select_db('Students',$conn);
if(isset($_POST['submit']))
{
     $student_name = $_POST['st_name'];
     $student_id = $_POST['st_id'];
     $student_session = $_POST['st_session'];
     $student_dept = $_POST['st_dept'];

     if($student_name==''){
      echo "<script>window.open('registration.php?name=Name is Required'.'_self')</script>";
      exit();
     }
       if($student_id==''){
      echo "<script>window.open('registration.php?id=Id is Required'.'_self')</script>";
      exit();
     }
       if($student_session==''){
      echo "<script>window.open('registration.php?session=Session is Required'.'_self')</script>";
      exit();
     }
       if($student_dept=='null'){
      echo "<script>window.open('registration.php?dept=Department is Required'.'_self')</script>";
      exit();
     }

$que="insert into u_reg(st_name,st_id,st_session,st_dept) values('$student_name','$student_id','$student_session','$student_dept')";
if(mysql_query($que)){
   echo "<center><b>The Following data has been inserted into our Database</b></center>";
   echo "<table align='center' border='4'>
   <tr>
    <td>$student_name</td>
    <td>$student_id</td>
    <td>$student_session</td>
    <td>$student_dept</td>
   </tr>

   </table>";
}
   }

 ?>

          				</p>

              				<div class="login_reg">

                               <form actiuon="registraion.php" method="post">
                                 <table>
                                    <tr>
                                        <td>Students Name:</td>
                                        <td><input type="text" name="st_name"/>
                                           <?php echo @$_GET['name'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Students ID:</td>
                                        <td><input type="text" name="st_id"/>
                                        <?php echo @$_GET['id'];?>
                                      </td>
                                    </tr>
                                     <tr>
                                        <td>Student Session:</td>
                                        <td><input type="text" name="st_session"/>
                                          <?php echo @$_GET['session'];?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Student Department:</td>
                                        <td>
                                         <select name="st_dept">
                                            <option value='null'>select_dept</option>
                                            <option value='CSTE'>CSTE</option>
                                            <option value='PHARMACY'>PHARMACY</option>
                                            <option value='ACCE'>ACCE</option>
                                            <option value='FIMS'>FIMS</option>
                                            <option value='MBG'>MBG</option>
                                            <option value='ESH'>ESH</option>
                                            <option value='FTS'>FTS</option>
                                            <option value='MATH'>MATH</option>
                                            <option value='ICE'>ICE</option>
                                            <option value='ENGLISH'>ENGLISH</option>
                                            <option value='BBA'>BBA</option>
                                            <option value='ECONOMICS'>ECONOMICS</option>
                                         </select>
                                         <?php echo @$_GET['dept'];?>
                                        </td>
                                    </tr>
                                      
                                    <tr>
                                       <td colspan="2">
                                         <span style="float:right;">
                                          <input type="submit" name="submit" value="Submit"/>
                                          <input type="reset" value="Reset"/>
                                           </span>
                                       </td>
                                    </tr>


                                 </table>
                               </form>
                                
                          				</div>
                                      <div class="back">
                                            <a href="admin.php"><img src="img/back.png" alt="back"></a>
                                            
                                      </div>
        </div>
				<div class="footer">
                <h3>http//www.nstu/all_dept.com</h3>

        </div>

	    </div>
 </body>
 </html>
 