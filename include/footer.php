<?php session_start(); ?> 
<div class="footer">
<?php
if($_POST['check1'] || $_POST['check2'] || $_POST['check3'] || $_POST['check4'] || $_POST['check5'] || $_POST['check6'] ){
$_SESSION['footer'] = $_POST;
}
echo "<br/>";
if($_SESSION['footer']){
foreach($_SESSION['footer'] as $key=>$value){
    if($value == 'index'){
    echo "<a href=".$value.".php>Start</a>"; 
    }else{
    echo "<a href=".$value.".php>$value</a>";
    }
}
}
?>
</div>
</body>
</html>