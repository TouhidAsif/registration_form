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
				   <h2>View Page</h2>
				
          				<p class="msg"> 
          				 Welcome:<font color='re' size='3'>
                             <?php echo $_SESSION['admin_name'];?>
                  </font>

          				</p>
                       <center>
                        <font color='yellow' size='4'>
                          <?php echo @$_GET['deleted'];?>
                          <?php echo @$_GET['updated'];?>
                          <?php echo @$_GET['logged'];?>
                        </font>
                       </center>
              				 <table align='center' width='800' border='4'>
                          
                          <tr>
                           <th align='center' bgcolor='yellow' colspan='12'><h1>Viewing all Records</h1></th>
                          </tr>

                           <tr align='center'>

                           <th>Serial</th>
                           <th>Name</th>
                           <th>Id</th>
                           <th>Session</th>
                           <th>Department</th>
                           <th>Delete</th>
                           <th>Edit</th>
                        
                          </tr>
                              
                                <?php
                                $conn = mysql_connect("localhost","root","");
                                $db = mysql_select_db('Students',$conn);

                                 $que = "select * from u_reg";
                                 $run = mysql_query($que);
                                 $i=1;

                                 while ($row=mysql_fetch_array($run))
                                  {
                                    $u_id=$row['id'];
                                    $st_name=$row['st_name'];
                                    $st_id=$row['st_id'];
                                    $st_session=$row['st_session'];
                                    $st_dept=$row['st_dept'];
                                 
                                ?>
                                <tr align='center'>
                           <td><?php echo  $i;$i++;?></td>
                           <td><?php echo  $st_name;?></td>
                           <td><?php echo  $st_id;?></td>
                           <td><?php echo  $st_session;?></td>
                           <td><?php echo  $st_dept;?></td>
                           <td><a href='delete.php?del=<?php echo $u_id;?>'>Delete</a></td>
                           <td><a href='edit.php?edit=<?php echo $u_id;?>'>Edit</a></td>
 
                          </tr>

                          <?php }?>

                        
                       </table></br></br>


                       <form action='view.php' method='get'>
                        Search a Record:<input type='text' name='search'/>
                        <input type='submit' name='submit' value='Find Now'/>  
                       </form>
                       <?php

                       if (isset($_GET['search'])) {
                         $search_record = $_GET['search'];
                         $query2 = "select * from u_reg where st_name='$search_record' OR st_id='$search_record'";
                         $run2 = mysql_query($query2);
                         while ($row2=mysql_fetch_assoc($run2)) 
                         {
                            $name123=$row2['st_name'];
                             $id123=$row2['st_id'];
                              $session123=$row2['st_session'];
                               $dept123=$row2['st_dept'];
                       ?>
                       <table width='800' bgcolor='yellow' align='center' border='2'>
                          <tr align='center'>

                            
                           <th>Name</th>
                           <th>Id</th>
                           <th>Session</th>
                           <th>Department</th>
      
                          </tr>
                        <tr align='center'>
                           <td><?php echo $name123;?></td>
                           <td><?php echo $id123;?></td>
                           <td><?php echo $session123;?></td>
                           <td><?php echo $dept123;?></td>
                        </tr>


                       </table>
                       <?php }}?>
                                       
        </div>
				<div class="footer">
                <h3>http//www.nstu/all_dept.com</h3>

        </div>

	    </div>
 </body>
 </html>
 