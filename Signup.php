<?php include('db.php');?>
<!DOCTYPE <html>
<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div id="Signupheader" style="color: white;">
    <h1>Sign Up</h1>
</div>
<div id="details">
    <h1 style="color: white">Customer Details</h1>
</div>

<form method="POST" action="Signup.php">
    <div class="UserInput">
        <label>Username</label>
        <input type="text" name="username">
    </div>
    <div class="UserInput">
        <label>Password</label>
        <input type="text" name="password">
    </div>
    <div class="UserInput">
        <label>Confirm Password</label>
        <input type="text" name="password1">
    </div>
    <div class="UserInput">
        <label>Phone Number</label>
        <input type="text" name="phonenumber">
    </div>

    <div class="button">
        <button type="submit">Sign Up</button>
    </div>
    <p>
        Already a member? <a href="login.php">Sign In</a>
    </p>

</form>


</body>

</html>

</html>