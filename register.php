<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <style>
        body {
            font-family: 'Inter', sans-serif;
            font-family: 'Roboto', sans-serif;
            
        }
        .container {
            max-width: 400px;
            margin: auto;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 12px;
            background-color: rgba(255, 255, 255, 0.75);
            border: 1px solid rgba(209, 213, 219, 0.3);
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
        }
        .btn-signup {
            background-color: green;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            background-color: green;
            border-radius: 8px;
            cursor: pointer;
        }
        
    </style>
</head>
<body>

<div class="container">
    <h2>Create Account</h2>
    <p>Enter your personal information</p>

    <form action="register_process.php" method="post">
        
        <label for="username">Username</label><br>
        <input type="text" id="username" name="username" placeholder="Enter your username"><br>

        <label for="email">Email</label><br/>
        <input type="text" id="email" name="email" placeholder= "Enter your email"><br>

        
        <label for="password">Password</label><br/>
        <input type="password" id="password" name="password" placeholder= "Enter Password"><br>

        
        <label for="confirmpassword">Confirm Password</label><br/>
        <input type="password" id="confirmpassword" name="confirmpassword" placeholder= "Confirm Password"><br>

        
        <button type="submit" class="btn-signup">Sign up</button><br>
        <p>Already have an account? <a href='/login.php'>Sign in</a></p>
    </form> 
<div> 
</body> 
</html> 

