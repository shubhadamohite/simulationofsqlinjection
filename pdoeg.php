<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>SQL Injection Sample</title>
</head>
<body>

<div style=" width: 1230px; padding: 85px; background-color:white; border-style: solid; height: 400px">
<?php
    
    
    
    if(isset($_POST['loginBtn'])) {
        $dsn = "mysql:host=localhost;dbname=inject";
        $user = "root";
        $passwd = "";
        
        $db_connection = new PDO($dsn, $user, $passwd);
        
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT name FROM emp_details WHERE name = :username and password=:password" ;
        $query = $db_connection->prepare($sql);
        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        
        $query->execute();
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $result = $query->fetchColumn();
        
        
        if(is_string($result)){
        
        echo '<h1 style="border-style:inset; height: 100px"> Welcome '.$result.' ! </h1>';
            
            echo "<br>";
            
        
            
            $sql = "SELECT email
            FROM emp_details
            WHERE name = :username and password=:password" ;
            $query = $db_connection->prepare($sql);
            $query->bindParam(':username', $username);
            $query->bindParam(':password', $password);
            
            $query->execute();
           
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $result1 = $query->fetchColumn();
            echo '<h3 style="border-style:outset;">'.$result1.' </h3>';

        
        }
        else{
            echo '<div style=" width: 1000px; padding: 85px; background-color:white; border-style: solid; height: 100px; background-color:yellow"><h1>'."~~No user exists, please register to continue!".'</h1></div>';
        }
        
    }
    
  
    ?>



<div >


</div>



</div>
</div>
</body>
</html>

