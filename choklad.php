<?php
    session_start(); 
    include 'include/header.php';
    include 'include/loginfunction.php';
    include 'include/data.php';
 
    if($_SESSION['email']){
      foreach($listofEachChoclate as $key=>$array){
        echo "<div>";
        echo "<h1>$array[name]</h1>";
        echo "<img src=".$array["image"].">";
        echo "<p>$array[description]</p>";
        echo "<h2>$array[price] kr</h2>";
        echo '<button onclick=\'showProduct()\'>Lägg i varukorg</button>';
        echo "</div>";
      }

    function showProduct(){
        echo 'alert("hej")';
    }
    
    }else{
      include 'include/login.php'; 
    }

    
   

?>