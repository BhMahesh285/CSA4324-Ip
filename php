<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>City Management System</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }
    .container {
        margin: auto;
        max-width: 400px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        margin-top: 50px;
        text-align: center;
    }
    h2 {
        color: #333;
    }
    input[type="text"],
    input[type="password"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        width: 100%;
        background-color: #333;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #555;
    }
    .architecture {
        text-align: center;
        margin-top: 50px;
    }
</style>
</head>
<body>

<!-- Registration Form -->
<div class="container" id="registration">
    <h2>Registration Form</h2>
    <form action="#" method="post" onsubmit="document.getElementById('login').style.display = 'block'; document.getElementById('registration').style.display = 'none'; return false;">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>" required><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : ''; ?>" required><br>
        
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" id="confirm_password" name="confirm_password" value="<?php echo isset($_POST['confirm_password']) ? $_POST['confirm_password'] : ''; ?>" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>" required><br>
        
        <input type="submit" value="Register">
    </form>
</div>

<!-- Login Form -->
<div class="container" id="login" style="display: none;">
    <h2>Login Form</h2>
    <form action="#" method="post" onsubmit="document.getElementById('architecture').style.display = 'block'; document.getElementById('login').style.display = 'none'; return false;">
        <label for="login_username">Username:</label><br>
        <input type="text" id="login_username" name="login_username" value="<?php echo isset($_POST['login_username']) ? $_POST['login_username'] : ''; ?>" required><br>
        
        <label for="login_password">Password:</label><br>
        <input type="password" id="login_password" name="login_password" value="<?php echo isset($_POST['login_password']) ? $_POST['login_password'] : ''; ?>" required><br>
        
        <input type="submit" value="Login">
    </form>
</div>

<!-- Architecture Design -->
<div class="architecture" id="architecture" style="display: none;">
    <h2>Architecture Design</h2>
    <p>Number of Hospitals: 9</p>
    <p>Number of Police Stations: 3</p>
    <p>Number of Petrol Bunks: 6</p>
    <p>Number of Supermarkets: 14</p>
    <p>Number of Schools: 6</p>
    <p>Number of Colleges: 16</p>
    <p>Number of Restaurants: 20</p>
    <p>Number of Cafes: 23</p>
    <p>Number of Bike Showrooms: 9</p>
    <p>Number of Car Showrooms: 6</p>
    <p>Total Buildings: 463</p>
    <!-- Add architectural diagram or description here if available -->
</div>

</body>
</html>
