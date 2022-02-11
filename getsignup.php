
<!DOCTYPE <html>
<html>
<head>
    <title>Get Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <?php
    require "db.php";
        $province = $_REQUEST['province'];
        $region = $_REQUEST['region'];
        $city = $_REQUEST['city'];
        $brgy = $_REQUEST['brgy'];
        $subdiv = $_REQUEST['subdiv'];
        $street = $_REQUEST['street'];
        $houseno = $_REQUEST['house_no'];
        $username =  $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $name =  $_REQUEST['name'];
        $phone_no = $_REQUEST['phone_no'];
        
        
        $sql = "INSERT INTO users VALUES ('','$name','$houseno','$street','$subdiv','$brgy','$city','$region','$province','$username', 
            '$password','$phone_no')";

        if(mysqli_query($conn, $sql)){
            
                
                // Function definition
                function function_alert($message) {
                
                // Display the alert box 
                    echo "<script>alert('$message');</script>";
                }
                header("Location: http://localhost/BlessedFlowWebsite/BlessedFlowWebsite/firstpage.php");
                exit();
                // Function call
                function_alert("You have successfully Signed Up Click OK to continue");

                // link($home);
           
        } 
        else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
        // // Function definition
        // function function_alert($message) {
            
        // // Display the alert box 
        //     echo "<script>alert('$message');</script>";
        // }
        
        
        // // Function call
        // function_alert("You have successfully Signed Up Click OK to continue");
        
        ?>
    

        
</body>