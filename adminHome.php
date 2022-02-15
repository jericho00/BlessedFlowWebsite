<?php
session_start();
if (isset($_SESSION['password']) && isset($_SESSION['username']))

?>
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
                <!-- <img src="shopping cart.png" alt="shopping cart" href = '#' width="50" height="50" class="shoppingcart"> -->
                <a href="#" onclick="show('orderpage')"> <img src="shopping cart.png" alt="shopping cart" href = '#' width="50" height="50" class="shoppingcart"></a>
            </div>
            <nav>
            <div id='navbar-container'>
                <img src="Homeicon.png" class = "icon" id = "homeIcon" width="50px" height="40px"> <a class='navBar' href='#' onclick="show('home')">Home</a> <br> <br>
                
                <img src="loginIcon.png" class = "icon" id = "homeIcon" width="50px" height="40px"> <a class='navBar' href="index.php">Logout</a> <br> <br>
                
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

        

            </div>
            <div id = "orderpage" style="display: none">
                
                <div>
                    <table style="width:100%">
                        <tr>
                        <th>Name & Location</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        </tr>

                        <tr>
                        <td id="SlimCapOrder"></td>
                        <td>Mineral</td> 
                        <td>PHP 25</td>
                        <td>2</td>
                        </tr>
                        <tr>
                        <td>lorem</td>
                        <td>Alaklinne</td>
                        <td>PHP 35</td>
                        <td>10</td>
                        </tr>
                        <tr>
                        <td>Lorem</td>
                        <td>Slim Container</td> 
                        <td>PHP 200</td>
                        <td>1</td>
                        </tr>
                        <tr>
                        <td>Lorem</td>
                        <td>Round Container</td>
                        <td>PHP 200</td>
                        <td>2</td>
                        </tr>
                    </table>
                </div>
            

            
                
                <!-- <div id="paymentmode">
                    <center><span>PAYMENT MODE</span><br></center><br>
                    <input type="radio" class="paymentoption" name="paymentOption"><span>GCASH</span><br><br>
                    <input type="radio" class="paymentoption" name="paymentOption"><span>Cash on Delivery</span><br><br>
                    <span>Total:</span><br><br>
                    <input type="button" value="Check Out" class="button checkout" id="checkout">
                </div>
                <divx></div> -->

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
                
            </script>

            
        </div>

    </body>

</html>
    
