<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .empty{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        $empUsername = "";
        $empPassword = "";
        $empEmail = "";

        if($_SERVER['REQUEST_METHOD'] =='POST'){
            $username =secure( $_POST ['Username']);
            $password = secure($_POST ['Password']);
            $email = secure($_POST ['Email']);

            if(empty($username) && empty($password) && empty($email)){
                $empUsername = "Username is required";
                $empPassword = "Password is required";
                $empEmail = "Email is required";
            }
              
            if(empty($username)){
                $empUsername = "Username is required";
            }
            if(empty($password)){
                $empPassword = "Password is required";
            } 
            if(empty($email)){
                $empEmail = "Email is required";
            }
            
            if(!empty($username) && !empty($password) && !empty($email)){
                echo" u kyqe";
            }
        }
        

        function secure($x){
            $x = htmlspecialchars($x);
            $x = trim ($x);
            $x = stripslashes($x);

            return $x;
        }
    
    
    ?>

<p><span class="empty">* Required</span></p>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
			Username: <input type="text" name="Username">
			<span class="empty">*<?php echo $empUsername;?></span><br><br>
			Password: <input type="password" name="Password">
			<span class="empty">*<?php echo $empPassword;?></span><br><br>
			Email: <input type="email" name="Email">
			<span class="empty">*<?php echo $empEmail;?></span><br><br>
			<input type="submit" value="Sign Up">
			<input type="reset" value="Cancel">
		</form>
</body>
</html>