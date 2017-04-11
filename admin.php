 <?php
session_start();

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
				   <h2>Admin Panel</h2>
				
          				<p class="msg"> 
          				   <?php

 $conn = mysql_connect("localhost","root","");
   $db = mysql_select_db('Students',$conn);

if (isset($_POST['login'])) {
    $admin_name = $_SESSION['admin_name'] = $_POST['admin_name'];
    $admin_pass = $_POST['admin_pass'];
    

    $query = "select * from login where user_name='$admin_name' AND user_password='$admin_pass'";
    $run = mysql_query($query);

    if (mysql_num_rows($run)>0) {
       echo "<script>window.open('view.php?logged=Logged in Successfully..!','_self')</script>";
    }
    else{

      
       echo "<script>alert ('password or user name is incorrect!')</script>";

    }
}

 ?>

          				</p>

              				<div class="login_reg">

                               <form actiuon="admin.php" method="post">
                                 <table>
                                    <tr>
                                        <td>Admin Name:</td>
                                        <td><input type="text" name="admin_name"/></td>
                                            
                                    </tr>
                                    <tr>
                                        <td>Admin Password:</td>
                                        <td><input type="password" name="admin_pass"/> </td>
                                         </tr>
                                     
                                      
                                    <tr>
                                       <td colspan="2">
                                         <span style="float:right;">
                                          <input type="submit" name="login" value="Login"/>
                                           
                                           </span>
                                       </td>
                                    </tr>


                                 </table>
                               </form>
                                
                          				 <center><?php echo @$_GET['error'];?></center>
        </div>
				<div class="footer">
         <h3>http//www.nstu/all_dept.com</h3>
        </div>

	    </div>
 </body>
 </html>

 