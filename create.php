<?php
 
require('connection.php');

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Page</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-image:url('https://tse3.mm.bing.net/th?id=OIF.lBSZYpVATo%2fFUZA9bfunhg&pid=Api&P=0&h=220') ;
    background-repeat:repeat;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
    
}

.login-container {
    background-color:rgb(224,224,224);
    padding: 1px;
    padding-top: 150px;
    border-radius: 100px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    text-align: left;
    width: 550px;
    height: 800px;
    opacity: 0.9;
}

.login-container .error-msg{
    margin: 10px 0;
    display: block;
    background: crimson;
    color: #fff;
    border-radius: 5px;
    font-size: 16px;
}

.login-container h2 {
    color: #000000;
    padding-top: 50px;
}

.login-form {
    display: flex;
    flex-direction: column;
    margin-top: 20px;
    align-self: left;
    width: 400px;
    padding-left: 50px;
}

.login-form input {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.login-button {
    background-color:rgb(255,128,0);
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 100px;
    height: 50px;
    font-size: 20px;
    
}

.login-container img {
    width: 550px;
    height: 400px;
    margin-right: 10px;
    cursor: pointer;
    
}
    </style>
</head>
<body>
   
    <div class="login-container">
        <h2><center>__Create New Account__</center></h2>
        <form method="POST" action="code.php" class="login-form">
            
            <label for="fname"><b>First name:</b></label>
            <input type="text" name="fname" placeholder="First Name" required><br>

            <label for="lname"><b>Last name:</b></label>
            <input type="text" name="lname" placeholder="Last Name" required><br>

            <label for="password"><b>Username:</b></label>
            <input type="text" name="username" placeholder="Username" required><br>

            <label for="username"><b>Email Address:</b></label>
            <input type="text" name="email" placeholder="Email Address" required><br>

            <label for="password"><b>Password:</b></label>
            <input type="password" name="password" placeholder="Password" required><br>

            <label for="confirm_password"><b>Confirm Password:</b></label>
            <input type="password" name="confirm_password" placeholder="Confirm Password" id="confirm_password" required><br>

            <label for="role"><b>Choose the Role:</b></label>
            <select name="role" id="role">
                <option value="admin">Admin</option>
                <option value="user">User</option>
                
            </select>
            <br><br>
            <center>
            <button type="submit" name="submit" class="login-button">Sign Up</button><br><br>
            <a href="login.php">Already have an account</a>
            </center>
            <?php
            if(isset($_error))
            {
                foreach($error as $error)
                {
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };           
            ?>
        </form>
        
    </div>
    
</body>
</html>