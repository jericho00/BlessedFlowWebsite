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
                        <h1>Admin Login</h1>
                        
                    </div>
                    <br><br>

                    <form action="adminLogin.php" method = "post">

                    <?php if (isset($_GET['error'])) { ?> 
                        <p id="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <label for="username" class="textforlogin">Username:</label><br>
                    <input type="text" id="username" name="username" size="70" placeholder="Enter Username"><br><br>
                    
                    <label for="password" class="textforlogin">Password:</label><br>
                    <input type="password" id="password" name="password" size="70" placeholder="Enter Password"><br><br>

                    <a class="signupPage" href="index.php">Go back</a><br><br>

                        <button type ="submit" class="button sign-inButton" value="Sign In">login</button>
                    
                    <img id='Logoicon' class='floatright' src='loginIcon-two.png' alt='water station logo' width="30%" height="45%"/>

                    <img id='loginLogo' class='floatright' src='WaterStationLogo.jpg' alt='water station logo' width="60%" height="60%"/>
                    </form>
                </div>
                
            </div>

            <div id='footer'>
                Copyright &copy; 2020 Blessed Flow Water Refilling Station <br>
                <a href="https://www.facebook.com/BlessedFlowWaterRefillingStation">Blessed Flow Water Refilling Station</a>
                <a href="https://www.facebook.com/BlessedFlowWaterRefillingStation"> <img id="FBlogo" class="floatright" src="./Facebook-logo.png" alt="Faceboook Logo" width="50px" height="30px"></a>
            
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