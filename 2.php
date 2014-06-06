<?php
include('connection.php');
$a=$_REQUEST['city'];
$b=mysql_query("select *from hotelinfo where state='".$a."'");
while($c=mysql_fetch_array($b)){
	
$d=$c['HOTEL_NAME'];
echo "$d";
echo "<br>";



}