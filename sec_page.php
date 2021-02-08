<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <title>SQL Injection Sample</title>
   </head>
   <body>

<div style=" width: 1239px;  background-color:white">

<div style="text-align:center;border-style: solid; height:500px; ">
        
<div style="margin-left:10px; margin-right:20px; margin-top:50px; widthL100px" >
           
               <?php
                  if(isset($_POST['loginBtn'])) {
                     $conn = mysqli_connect("localhost", "root", "", "inject");
                     if(!$conn){
                        die("connection error");
                     }
                      
                      //Uncomment the following username & password pair and comment the pair below it to sanitize the user input 
                      
//      $username = mysqli_real_escape_string($conn, $_POST['username']);
//      $password = mysqli_real_escape_string($conn, $_POST['password']);
                      
                     $username = $_POST['username'];
                     $password = $_POST['password'];

                        $verify_sql = "select * from `emp_details` where name='$username' and password='$password'";

                        $result = mysqli_query($conn,$verify_sql);



                        if(mysqli_num_rows($result) > 0){

                           echo '<h2>Admin Logged in!</h2>';
                            echo '<table  width = "100%" border = "1" >';
                            echo '<th>' .'employee id' . '</th>';

                            echo '<th>' .'username' . '</th>';
                            echo '<th>' .'password'. '</th>';
                            echo '<th>' . 'email id' . '</th>';
                         
                            
                            while($row = mysqli_fetch_array($result)){
                         
                                echo '<tr>';
                                echo '<td>' . $row['id'] . '</td>';

                                echo '<td>' . $row['name'] . '</td>';
                                

                                echo '<td>' . $row['password'] . '</td>';
                                echo '<td>' . $row['email'] . '</td>';
                                echo '</tr>';


                            }
                               echo '</table>';
                        
                        }
                        else{
                            echo '<div style=" width: 1000px; padding: 85px; background-color:white; border-style: solid; height: 100px; background-color:yellow"><h1>'."~~No user exists, please register to continue!".'</h1></div>';
                        }
                        mysqli_close($conn);

                     
                  }
               ?>
            </div>
         
    
</div>
</div>
   </body>
</html>
