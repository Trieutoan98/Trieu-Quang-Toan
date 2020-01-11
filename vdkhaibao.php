<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Demo php</title>
	<style>
		h1{color: red;}
	</style>
</head>
<body>
	<?php 

         echo " xin chao";
         print("<h1>xin chao php</h1>");

    ?>
</body>
</html>


<?php
	//khai bao bien 
	$x = 2020;
	var_dump($x); //var_dump tra vekieu du lieu va gia tri
 ?>
 
 <?php 
 	$x ="2018"; //$x dang o dang chuoi
 	$x = (int)$x;
 	var_dump($x);
  ?>

<?php
	$x ="3.14128"; //$x dango dang chuoi
	$x = is_int($x);
	var_dump($x); 
 ?>

 <?php 
 	$x="3.141218"; //$x o dang chuoi
 	$x=(float)$x;
 	var_dump($x);
  ?>
  
  <?php 
  	$x ="3.14128"; //$x dang o dang chuoi
  	$x = is_float($x);
   ?>
   
 <?php
 $x = "3.14";//$x dang o dang chuoi.
 $x = is_float($x);
 var_dump($x); 
 ?>
 <?php 
  $x = 1234567;
  $x = (string)$x;
  var_dump($x);
 ?>
 <?php 
  $x = "3.14";
  $x = is_string($x);
  var_dump($x);
  ?>
  <?php
   $hwc  = array("html","css","jquery",1024);
   echo $hwc[0]; 
  ?>
  <?php
   $hwc  = array("html","css","jquery",1024);
   var_dump($hwc); 
  ?>
  <?php
   $hwc  = array("html","css","jquery",1024);
   $hwc = is_array($hwc);
   var_dump($hwc); 
  ?>
  <?php
  $x = true;
  var_dump($x); 
   ?>
   <?php 
   $x = 1234566;
   $x = (boolean)$x;
   var_dump($x);
   ?>
   <?php 
    $hwc  = array("html","css","jquery",1024);
    $hwc = is_bool($hwc);
    var_dump($hwc);
   ?>
    <?php 
     class myclass
     {
     	function do_myclass(){
     		echo "Doing here.";
     	}
     }
     $obj = new myclass;
     $obj -> do_myclass();
      ?>
    <?php 
     $x = "2020";
     $x = null;
     var_dump($x);
    ?>