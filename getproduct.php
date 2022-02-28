<?php
require "db.php";


$sql2 = "SELECT prod_name, price  FROM product_table";
$result2 = $conn->query($sql2);

if($result2->num_rows > 0){
    while($row = $result2->fetch_assoc()){
        echo "NAME: ". $row["prod_name"]." ". $row["price"]. "<br>";
    }
}else{
    echo "0 results";
}

// if((mysqli_query($conn, $sql2)){}