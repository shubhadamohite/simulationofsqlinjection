<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title>SQL Injection Sample</title>
   </head>
   <body style="background-color:#cce6ff">

<div style=" width: 1230px; padding: 85px; background-color:white;border-style: solid;height:400px;">
<div style="text-align:center; background-color:white; ">
         <div >
<h1 style="text-align:center; padding-top: 40px">SQL Injection Attack Simulation</h1>
            <h2 style="text-align:center; margin-top:50px">Employee Login</h2>
         </div>

<div style="text-align:center;">
         <div>
            <div >
               <form method="post" action="pdoeg.php">
                  <div>
                     <label style="font-size:25px;" >User Name</label>
                     <input type="text"  placeholder="User Name" name="username" style="height: 40px;font-size:25px; width: 200px">
                  </div>
                  <div>
                     <label style="font-size:25px;" >Password</label>
                     <input type="password" placeholder="Password" name="password" style="height: 40px;font-size:25px; width: 200px; margin-top:20px;">
                  </div>
                  <div style="padding-bottom:120px">
                  <button type="submit"  name="loginBtn" style="height: 30px; width: 200px; margin-top: 30px; position: absolute; left:650px;font-size:25px; background-color:#d6f5f5 ">Login Here</button>
                  </div>
                
               </form>
              
            </div>
         </div>
      </div>
</div>
</div>
<div>
<h3 style="margin-left:20px">
Developed by Shubhada Mohite <br/> For Network and Information Security Lab <br/> 4958 
</h3>
</div>
   </body>
</html>
