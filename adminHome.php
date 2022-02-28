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
                <img src="customer_records.png" class = "icon" id = "homeIcon" width="45px" height="40px"> <a class='navBar' href='#' onclick="show('records')">Records</a> <br> <br>
                
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
                    <thead>
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
                    </thead>
                        <?php
                        include "db.php";
                        
                       
                        $sql = "SELECT  users.name, users.house_no, users.street, users.subdiv, users.brgy, users.city, users.phone_no, product_table.prod_name, product_table.price from users INNER JOIN product_table";
                        $result = $conn-> query($sql);
                        
                        

                        if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) 
                            {
                            ?>
                            <tbody>
                            <tr>
                                
                                <td><?php echo $row["name"];?></td>
                                <td><?php echo $row["house_no"]; ?></td>
                                <td><?php echo $row["street"]; ?></td>
                                <td><?php echo $row["subdiv"]; ?></td>
                                <td><?php echo $row["brgy"]; ?></td>
                                <td><?php echo $row["city"]; ?></td>
                                <td><?php echo $row["phone_no"]; ?></td>
                                <td><?php echo $row["prod_name"]; ?></td>
                                <td><?php echo $row["price"]; ?></td>
                            <t/body>
                                <?php
                            }?>
                            <?php 
                        }?>
                        <?php
                        // else {
                        //     echo "0 result";
                        // }

                        // ?>
                        
                        
                    </table>
                </div>
            
               
            <div>

                <div id = "records" style="display: none">
                    <table style="width:100%">
                      
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>House No</th>
                        <th>Street</th>
                        <th>Subdivision</th>
                        <th>Barangay</th>
                        <th>City</th>
                        <th>Phone No</th>
                        
                        </tr>
                        <?php
                        include "db.php";

                        $sql = "SELECT id, name, house_no, street, subdiv, brgy, city, phone_no from users";
                        $result = $conn-> query($sql);

                        if ($result-> num_rows > 0) {
                            while ($row = $result-> fetch_assoc()) {
                                
                                echo "<tr><td>". $row["id"]. "</td><td>". $row["name"]. "</td><td>". $row["house_no"]. "</td><td>". $row["street"]. "</td><td>". $row["subdiv"].
                                 "</td><td>". $row["brgy"]. "</td><td>". $row["city"]. "</td><td>". $row["phone_no"]. "</td><td>"?>
                                 <a href="deletion.php?delete=<?php echo $row['id']?>"> =<button type="button" id="delete" value="delete" class="button Orderbutton">Delete</button> </a>"</td></tr>";
                                 <?php
                            }
                            echo "</table>";
                        }
                        else {
                            echo "0 result";
                        }

                        

                        ?>
                        
                        
                    </table>
                </div>
            
                
               

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