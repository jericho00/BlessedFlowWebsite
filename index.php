<!DOCTYPE html>
<html>
    <head>
        <meta content='text/html ; charset=utf-8'/>
        <title>Blessed Flow Water Refilling Station</title>
        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>
        <div id='container'>
            <div id='logo'>
                <h1 style="color: white; text-shadow: -1px 0 black, 0 1px black, 0 -1px black;">BFWRS Blessed Flow Water Refilling Station</h1>
            </div>   

            <div id='navbar-container'>
            </div>


            <div id='main-container'>
                <div id="login">
                    <div id="Loginheader" style="color: white;">
                        <h1>Login</h1>
                        
                    </div>
                    <br><br>
                    <form action="login.php" method = "post">

                    <?php if (isset($_GET['error'])) { ?> 
                        <p id="error" style = "color: white;"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <label for="username" class="textforlogin">Username:</label><br>
                    <input type="text" id="username" name="username" size="70" placeholder="Enter Username"><br><br>
                    
                    <label for="password" class="textforlogin">Password:</label><br>
                    <input type="text" id="password" name="password" size="70" placeholder="Enter Password"><br><br>

                    <a class="signupPage" href="#" onclick="show('signup')">Do you have an account? Sign up now</a><br><br>
                        <button type ="submit" class="button sign-inButton" value="Sign In">login</button>
                    
                    <img id='Logoicon' class='floatright' src='loginIcon-two.png' alt='water station logo' width="30%" height="45%"/>

                    <img id='loginLogo' class='floatright' src='WaterStationLogo.jpg' alt='water station logo' width="45%" height="45%"/>
                    </form>
                </div>
                
            </div>

            <div id='footer'>
                Copyright &copy; 2020 Blessed Flow Water Refilling Station <br>
                <a href="https://www.facebook.com/BlessedFlowWaterRefillingStation">Blessed Flow Water Refilling Station</a>
                <a href="https://www.facebook.com/BlessedFlowWaterRefillingStation"> <img id="FBlogo" class="floatright" src="./Facebook-logo.png" alt="Faceboook Logo" width="50px" height="30px"></a>
            
            </div>

            <div id="signup" style="display: none;">
                <div id="Signupheader" style="color: white;">
                    <h1>Sign Up</h1>
                </div>
                <div id="details">
                    <h1 style="color: white">Customer Details</h1>
                </div>
                <br>
                <form method="POST" action="getsignup.php">

                <label for="name" class="textforsignup">Name:</label><br>
                <input type="text" id="name" name="name" size="70" placeholder="Name Here" required><br><br>

                <label for="housenumber" class="textforsignup">House Number:</label><br>
                <input type="text" id="housenumber" name="house_no" size="70" placeholder="House No." required><br><br>

                <label for="street" class="textforsignup">Street:</label><br>
                <input type="text" id="street" name="street" size="70" placeholder="Street" required><br><br>
    
                <label for="subdivision" class="textforsignup">Subdivision:</label><br>
                <input type="text" id="subdivision" name="subdiv" size="70" placeholder="Subdivision" required><br><br>

                <label for="barangay" class="textforsignup">Barangay:</label><br>
                <input type="text" id="barangay" name="brgy" size="70" placeholder="Barangay" required><br><br>

                <label for="city" class="textforsignup">City:</label><br>
                <input text="text" id="city" name="city" size="70" placeholder="City" required><br><br>

                <label for="region" class="textforsignup">Region:</label><br>
                <input type="text" id="region" name="region" size="70" placeholder="Region" required><br><br>

                <label for="province" class="textforsignup">Province:</label><br>
                <input type="text" id="province" name="province" size="70" placeholder="Province" required><br><br>
        
                
                <div id = "customerlogin">
                    <h1 style="color: white">Customer Login Info</h1>
                </div>
                
                <br>    
                <label for="Username" class="textforsignup">Username:</label><br>
                <input type="text" id="UsernameCustomer" name="username" size="70" required><br><br>

                <label for="Password" class="textforsignup">Password:</label><br>
                <input type="text" id="passwordCustomer" name="password" size="70" required><br><br>

                <label for="PhoneNumber" class="textforsignup">Phone Number:</label><br>
                <input type="number" id="PhoneNumber" name="phone_no" size="70" placeholder="ex. 09XXXXXXXXX" required><br><br>

                <label for="signupYes"></label><br> <br>
                <div class="SignupYes">
                    <input type="checkbox" id="married" name="signupYes" value="M" required>
                    <label for="signupYes" style="font-size: 1.2em;" >I hereby declare that the information given above is true</label> <br>
                </div><br>
                
                <a class="signupPage" href="index.php">Do you have an account? Sign up now</a><br><br>
                
                <button type = "submit" class="button signupButton">Sign Up</button>
                
                
                </form>
            </div>

            
            <script>
                function show(param_div_id) {
                    document.getElementById('main-container').innerHTML = document.getElementById(param_div_id).innerHTML;
                }

                function on(thisID) {
                    document.getElementById(thisID).style.display = "block"
                }
                function off(thisID){
                    document.getElementById(thisID).style.display = "none"
                }

                
            </script>

        </div>
            
    </body>

</html>