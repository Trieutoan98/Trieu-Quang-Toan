<?php 
//if(bie thuc dieu kien){
	//doan code duoc thuc thi khi bieu thuc  dieu kien 
	//co gia tri la true }
	$today ="thu hai";


if ($today =="thu hai") {
	echo"hom nay la thu hai";
	echo"<br>";
}
 $today=($today== 2) ? 2 : 3;
 echo $today;
 echo "<br>";
 $n=10;
 $so=($n%2==0)?"le" :"chan";
 echo $so;
 echo "<br>";
 ?>



 <?php 
 $today ="Thu Bay";
 switch ($today) {
case "Chu Nhat":
	echo "Nhay Cuoi Tuan";
	break;
	case "Thu Bay":
		echo "Ngay cuoi Tuan";
		break;
	case "Thu Hai":
		echo "Ngay Dau Tuan";
		break;
	default;
	echo "Ngay trong Tuan Khong Phai La Dau Tuan";
	break;
 }
echo "<br>";
  ?>



  <?php 
/*while (bieu thuc dieu kien) {
	//code trong vong lap...
}*/
$i = 1;
while ($i <= 10) {
	echo $i ++;
}
echo "<br>";
?>



<?php 
//kiem tra so nguyen to
$n=7;
$i=2;
while ($i< sqrt($n)) {
	if ($n%$i==0) {
		echo "Khong Phai La Nguyen To";
		exit;
	}
	$i++;
}
echo "$n La So Nguyen To";
echo "<br>";
 ?>



 <?php 
/*foreach ($array as $valuxe){
	//code trong vong lap
}*/
$car_brands =array("Toyota", "Honda", "Suzuki");
foreach ($car_brands as $value) {
	echo "{$value}<br>";
}
?>
