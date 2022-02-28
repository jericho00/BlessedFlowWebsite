<?php 
session_start();

if ($_SESSION["status"] != true){

    header("Location: index.php");
}
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta content='text/html ; charset=utf-8'/>
        <title>Blessed Flow Water Refilling Station</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <div id='container'>
            <div id='logo'>
                <h1 style="color: white; text-shadow: -1px 0 black, 0 1px black, 0 -1px black;">BFWRS Blessed Flow Water Refilling Station</h1>
                <!-- <img src="shopping cart.png" alt="shopping cart" href = '#' width="50" height="50" class="shoppingcart"> -->
                <a href="#" onclick="show('orderpage')"> <img src="shopping cart.png" alt="shopping cart" href = '#' width="50" height="50" class="shoppingcart"></a>
            </div>
            <nav>
            <div id='navbar-container'>
                <img src="Homeicon.png" class = "icon" id = "homeIcon" width="50px" height="40px"> <a class='navBar' href='#' onclick="show('home')">Home</a> <br> <br>
                <img src="Producticon.jpg" class = "icon" id = "homeIcon" width="40px" height="40px"> <a class='navBar' href='#' onclick="show('product')">Product</a> <br> <br>
                <img src="AboutusIconn.png" class = "icon" id = "homeIcon" width="35px" height="40px"> <a class='navBar' href='#' onclick="show('about')">About Us</a> <br> <br>

                
                <img src="loginIcon.png" class = "icon" id = "homeIcon" width="50px" height="40px"> <a class='navBar' href="logout.php">Logout</a> <br> <br>
                

            </div>
            </nav>
            <div id='main-container'>
                <img id='main-background' class='floatright' src='main-background.jpg' alt='water station background' width="100%" height="956px"/> 
                <a class="HomeText">CLEAN <br> HEALHTY <br> WATER</a>
                <a class="HomeTextBottom">30 STAGES INTENSE FILTRATION</a>


                <div>

                    <img id='WaterStationLogo' class='floatright' src="main-background-two.jpg" alt='water station logo' width="100%" height="960px"/>

                    <img id='WaterStationLogo' class='floatright' src='WaterStationLogo.jpg' alt='water station logo' width="50%" height="400px"/>
                </div>
        
            </div>

            <div id='footer'>
                Copyright &copy; 2020 Blessed Flow Water Refilling Station <br>
                <a href="https://www.facebook.com/BlessedFlowWaterRefillingStation">Blessed Flow Water Refilling Station</a>
                <a href="https://www.facebook.com/BlessedFlowWaterRefillingStation"> <img id="FBlogo" class="floatright" src="./Facebook-logo.png" alt="Faceboook Logo" width="50px" height="30px"></a>
            
            </div>
            
            <div id="home" style="display: none;">
                <img id='main-background' class='floatright' src='main-background.jpg' alt='water station background' width="100%" height="956px"/> 
                <a class="HomeText">CLEAN <br> HEALHTY <br> WATER</a>
                <a class="HomeTextBottom">30 STAGES INTENSE FILTRATION</a>

                <div>

                    <img id='WaterStationLogo' class='floatright' src="main-background-two.jpg" alt='water station logo' width="100%" height="960px"/>

                
                    <img id='WaterStationLogo' class='floatright' src='WaterStationLogo.jpg' alt='water station logo' width="50%" height="400px"/>
                </div>

            </div>

            <div id="product" style="display: none; background-color: #29648A;">
                <div id="productheader" style="color: white;">
                    <h1>PRODUCT</h1>
                </div>
                
                <div id="refill">
                    <h3 id="Refill">REFILL</h3>
                </div>
                
                <div  style="background-color: #29648A">
                     <div id="Mineral">
                    <img id='MineralGlass' class='floatright' src='MineralGlass.jpg' alt='water station' width="200" height="200"/>
                    <span class="MineralText">For Mineral 25 Pesos per Refill</span> <br>
                    <button type="button" value="Mineral" onclick= 'ordered()' class="button Orderbutton" id='Mineralbutton'>ORDER</button>
                    <!-- <input type="button" value="Mineral" class="button Orderbutton" id='Mineralbutton' onclick= "ordered()">ORDER -->
                </div>

                <div id="Alkaline">
                    <img id='AlkalineGlass' class='floatright' src='AlkalineGlass.jpg' alt='water station' width="325" height="200"/>
                    <span class="AlkalineText">For Alkaline 35 Pesos per Refill</span>
                    <button type="button" value="Alkaline" onclick= 'ordered()' class="button Orderbutton" id='Alkalinebutton'>ORDER</button>
                    <!-- <input type="button" value="ORDER" class="button Orderbutton" id='Alkalinebutton' onclick = ""> -->
                </div>
                </div>
               
                
                <div id="newcontainer">
                    <h3 id="NewContainer">NEW CONTAINER</h3>
                </div>
                <div style="background-color: #29648A; height: 500px;">
                    <div id="Slim">
                        <img id='SlimContainer' class='floatright' src='SlimContainer.jpg' alt='water station' width="250" height="250"/>
                        <span class="SlimText">Slim Container 200 Pesos/pc. </span>
                        <button type="button" value="SlimContainer" onclick= 'ordered()' class="button Orderbutton" id='SlimConbutton'>ORDER</button>
                        <!-- <input type="button" value="ORDER" class="button Orderbutton" id='SlimConbutton'> -->
                    </div>
    
                    <div id="Round">
                        <img id='RoundContainer' class='floatright' src='RoundContainer.png' alt='water station' width="250" height="250"/>
                        <span class="RoundText">Round Container 200 Pesos/pc.</span>
                        <button type="button" value="RoundContainer" onclick= 'ordered()' class="button Orderbutton" id='RoundConbutton'>ORDER</button>
                        <!-- <input type="button" value="ORDER" class="button Orderbutton" id='RoundConbutton'> -->
                    </div>
                </div>
                
                <div id="containerparts">
                    <h3>CONTAINER PARTS</h3>
                </div>
                <div style="background-color: #29648A; height:900px;" >
                    <div id='RoundCapdiv' >
                        <img id='RoundCap' class='floatright' src="RoundCap.jpg" alt="'water station" width="250" height="250">
                        <span class="RoundCapText">Round Cap 25 Pesos/pc.</span>
                        <button type="button" value="Round Cap" onclick= 'ordered()' class="button Orderbutton" id='RoundCapbutton'>ORDER</button>
                        <!-- <input type="button" value="ORDER" class="button Orderbutton" id='RoundCapbutton'> -->
                        
                    </div>
                    <div id='SlimCapdiv'> 
                        <img id='SlimCap' src="SlimCap.jpg" alt="'water station" width="250" height="250">
                        <span class="SlimCapText">Slim Cap 25 Pesos/pc.</span>
                        <button type="button" value="Slim Cap" onclick= 'ordered()' class="button Orderbutton" id='SlimCapbutton'>ORDER</button>
                        <!-- <input type="button" value="ORDER" class="button Orderbutton" id='SlimCapbutton' onclick="SlimCapOrder()"> -->
                        
                    </div>
                    <div id='SlimBigdiv'>
                        <img id='SlimBig' src="SlimBigCap.jpg" alt="'water station" width="250" height="250">
                        <span class="SlimBigText">Slim Big cap 35 Pesos/pc.</span>
                        <button type="button" value="Slim Big Cap" onclick= 'ordered()' class="button Orderbutton" id='SlimBigCapbutton'>ORDER</button>
                        <!-- <input type="button" value="ORDER" class="button Orderbutton" id='SlimBigCapbutton' onclick="SlimBigOrder()"> -->
                    </div>
                    <div id='SlimFaucetdiv'>
                        <img id='SlimFaucet' src="SlimFaucet.jpg" alt="'water station" width="250" height="250">
                        <span class="SlimFaucetText">Faucet 50 Pesos/pc.</span>
                        <button type="button" value="Slim Faucet" onclick= 'ordered()' class="button Orderbutton" id='SlimFaucetbutton'>ORDER</button>
                        <!-- <input type="button" value="ORDER" class="button Orderbutton" id='SlimFaucetbutton'> -->
                    </div>
                </div>
                

            </div>

            <div id="about" style="display: none;">
                <div id="Aboutheader" style="color: white;">
                    <h1>About Us</h1>
                </div>
                <map name="BFmap" >
                    
                     <area shape="circle" coords= "472,254,19" id="Frontpic" alt="Frontpic" onmouseover="on('BF-frontpic')" onmouseout="off('BF-frontpic')" onmousemove="return onmove(event, 'BF-frontpic')" href="https://goo.gl/maps/6ikwXtcx4weeKWzn6">
                </map>    

                <img src="./location_maps.png" alt="BFmap" id="map" usemap="#BFmap" style="border: 1px solid rgba(17, 40, 172, 0.897); border-radius: 1px\px;">
                
                <div id="BF-frontpic">
                    <div id="Frontpic">
                    <img src="./BFfrontpic.jpg" alt="BF-frontpic.jpg" class="image" >
                    </div>
                </div>

                <div id="schedule">
                <p2>Address <br>
                    B4 L11 E Ragas St. Tangco Subdivision Sta. Ana Pateros, Metro Manila
                    <br>
                    Business Hours <br>
                    7:00 am - 5:00 pm Monday to Saturday
                </p2>
                </div>

                <div id="story">
                    <p>Blessed Flow is a water refilling station stationed at Pateros, Metro Manila was estabished on September of 2020.
                         The business offers all the drinking water services possible, from refilling to new containers and parts.
                          Devilery for customer is free of charge and we deliver to locations; Pateros, Pasig San Joaquin, Pasig Kalawaan and Makati Comembo.
                           We replace our filters every week and does water testing every month to ensure that we are providing the best mineral and alkaline
                            drinking water to our customers.</p>
                </div>
            </div>

            <div id="login" style="display: none;">
                <div id="Loginheader" style="color: white;">
                    <h1>Login</h1>
                    
                </div>
                <br><br>
                <form action="login.php" method = "post">
                <?php if (isset($_GET['error'])) { ?>
     		        <p class="error"><?php echo $_GET['error']; ?></p>
     	        <?php } ?>
                <label for="username" class="textforlogin">Username:</label><br>
                <input type="text" id="username" name="username" size="70" placeholder="Enter Username"><br><br>
                <label for="password" class="textforlogin">Password:</label><br>
                <input type="text" id="password" name="password" size="70" placeholder="Enter Password"><br><br>
                <a class="signupPage" href="#" onclick="show('signup')">Do you have an account? Sign up now</a><br><br>
                    <button type ="submit">login</button>
                <input type="button" value="Sign In" class="button sign-inButton">
                </form>
                <img id='Logoicon' class='floatright' src='loginIcon-two.png' alt='water station logo' width="30%" height="45%"/>

                <img id='loginLogo' class='floatright' src='WaterStationLogo.jpg' alt='water station logo' width="45%" height="45%"/>
            </div>

            <div id="signup" style="display: none;">
                <div id="Signupheader" style="color: white;">
                    <h1>Sign Up</h1>
                </div>
                <div id="details">
                    <h1 style="color: white">Customer Details</h1>
                </div>
                <br>
                <label for="name" class="textforsignup">Name:</label><br>
                <input type="text" id="name" name="name" size="70" placeholder="Name Here"><br><br>
                <label for="housenumber" class="textforsignup">House Number:</label><br>
                <input type="text" id="housenumber" name="housenumber" size="70" placeholder="House No."><br><br>
                <label for="street" class="textforsignup">Street:</label><br>
                <input type="text" id="street" name="street" size="70" placeholder="Street"><br><br>
    
                <label for="subdivision" class="textforsignup">Subdivision:</label><br>
                <input type="text" id="subdivision" name="subdivision" size="70" placeholder="Subdivision"><br><br>
                <label for="barangay" class="textforsignup">Barangay:</label><br>
                <input type="text" id="barangay" name="barangay" size="70" placeholder="Barangay"><br><br>
                <label for="city" class="textforsignup">City:</label><br>
                <input text="text" id="city" name="city" size="70" placeholder="City"><br><br>
                <label for="region" class="textforsignup">Region:</label><br>
                <input type="text" id="region" name="region" size="70" placeholder="Region"><br><br>
                <label for="province" class="textforsignup">Province:</label><br>
                <input type="text" id="province" name="province" size="70" placeholder="Province"><br><br>
        
                
                <div id = "customerlogin">
                    <h1 style="color: white">Customer Login Info</h1>
                </div>
                
                <br>    
                <label for="Username" class="textforsignup">Username:</label><br>
                <input type="text" id="UsernameCustomer" name="Username" size="70" ><br><br>
                <label for="Password" class="textforsignup">Password:</label><br>
                <input type="text" id="passwordCustomer" name="passwordCustomer" size="70"><br><br>
                <label for="passwordConfirm" class="textforsignup">Confirm Passsword:</label><br>
                <input type="text" id="passwordConfirm" name="passwordConfirm" size="70" ><br><br>
                <label for="PhoneNumber" class="textforsignup">Phone Number:</label><br>
                <input type="number" id="PhoneNumber" name="PhoneNumber" size="70" placeholder="ex. 09XXXXXXXXX"><br><br>

                <label for="signupYes"></label><br> <br>
                <div class="SignupYes">
                    <input type="checkbox" id="married" name="signupYes" value="M">
                    <label for="signupYes" style="font-size: 1.2em;">I hereby declare that the information given above is true</label> <br>
                </div><br>
                <input type="button" value="Sign Up" class="button signupButton" href="#" onclick="show('authentication')">
                
            </div>

            <!-- <div id="authentication" style="display: none; background-color: #29648A;">
                <div id="authentication-bar">
                    <h1 style="color: white;" >Customer Authentication</h1>
                </div>
                <div id="To-verify" >
                    <br><br>
                    <label for="Verification" class="textforsignup">Code: </label>
                    <input type="number" id="Verification" name="Verification" size="70" ><br><br>

                    <a id="OTP" href="#">RESEND OTP</a> <br><br>

                    <input type="button" id="Verify" value="Verify" class="button verifyButton" href="#" onclick="show('')">
                </div>
                 -->


            </div>
            <div id = "orderpage" style="display: none">
                
                <div>
                    
                    <table style="width:100%">
                        <tr>
                        <th>Name</th>
                        <th>House No</th>
                        <th>Street</th>
                        <th>Subdivision</th>
                        <th>Barangay</th>
                        <th>City</th>
                        <th>Phone No</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        </tr>
                        <?php
                        include "db.php";
                        include "functions.php";
                        $user_data = check_login($conn);
                        // if(isset($_POST['request'])) {
                        //     $request = $_POST['request'];
                        //     $query = "UPDATE users SET product_table.prod_name = '$request'";
                        //     $result = mysqli_query($conn, $query);
                            
                        // if(isset($_POST['username'])){
                        // $username = $_POST['username'];
                        // echo $username;
                        // if (isset($_POST['username'])) {

                        
                        $sql = "SELECT * from users" ;
                        $result1 = $conn-> query($sql);
                        
                        if ($result1-> num_rows > 0) {
                            while ($row = $result1-> fetch_assoc()) {?>

                                <tr>
                                    <td><?php echo $row["name"] ?></td>
                                    <td><?php echo $row["house_no"] ?></td>
                                    <td><?php echo $row["street"]?></td>
                                    <td><?php echo $row["subdiv"]?></td>
                                    <td><?php echo $row["brgy"]?></td>
                                    <td><?php echo $row["city"]?></td>
                                    <td><?php echo $row["phone_no"]?></td>
                                    
                                </tr>
                                <?php
                            }
                            echo "</table>";
                        }
                        else {
                            echo "0 result";
                        }

                //     }
                // }

                        ?>
                        <?php
                        // include "db.php";
                        //     if(isset($_SESSION['username'])){
                        //         $usename = $_SESSION['username'];
                        //         $query = "SELECT house_no, street, subdiv, brgy, city, region, province FROM users WHERE username = '$usename' GROUP BY username";
                        //         $result = mysqli_query($conn, $query);
                        //         if($result && mysqli_num_rows($result) > 0){
                        //             while($row = mysqli_fetch_array($result)){
                        //                 echo "<tr><td>".$row['house_no']."</td><td class='toUpperCase'>".$row['street']."</td><td class='toUpperCase'>".$row['subdiv']."</td><td class='toUpperCase'>".$row['brgy']."</td><td class='toUpperCase'>".$row['city']."</td><td class='toUpperCase'>".$row['region']."</td><td class='toUpperCase'>".$row['province']."</td></tr>";
                        //             }
                        //         }
                        //         else{
                        //             echo "fail";
                        //         }
                        //     }
                        // ?>
                        
                    </table>
                </div>
            

                <div id="ContainerOrder">
                    <div id="SlimCapOrder">

                    </div>
                </div>
               





                
                <div id="paymentmode">
                    <center><span>PAYMENT MODE</span><br></center><br>
                    <input type="radio" class="paymentoption" name="paymentOption"><span>GCASH - No. xxxxxxxxxxx </span><br><br>
                    <input type="radio" class="paymentoption" name="paymentOption"><span>Cash on Delivery</span><br><br>
                    <span>Total:</span><br><br>
                    <input type="button" value="Check Out" class="button checkout" id="checkout">
                </div>
                <divx></div>
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

                function onmove(e, thisID){
                    var x = e.pageX;
                    var y = e.pageY;
                    var mouse = document.getElementById(thisID);
                    mouse.style.left = x - 550 + 'px';
                    mouse.style.top = y + 'px';
                }
                function SlimCapOrder(){
                    document.getElementById("ContainerOrder").innerHTML = "Hello World";
                }
                function SlimBigOrder(){
                    document.getElementById("ContainerOrder").innerHTML = "Hello World";
                }
                

                function ordered(){
                    $("#Mineralbutton, #Alkalinebutton, SlimConbutton, RoundConbutton, RoundCapbutton, SlimCapbutton, SlimBigCapbutton, SlimFaucetbutton").click(function() {
                        var val = $(this).val();
                        alert(val);
                       
                        $.ajax({
                            url:"firstpage.php",
                            type:"POST",
                            data:'request=' + val,
                            beforeSend: function(){
                                $("#container").html("<span>Working...</span>");
                            },
                            success: function(data){
                                $("#container").html(data);
                            }
                        });
                    });
                    // alert("Order Placed, Checkout in Shopping Cart");
                    // alert(#Mineralbutton);
                }

                <?php ?>
            </script>

            
        </div>



      
    </body>

</html>
    
