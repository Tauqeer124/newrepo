<?php
$con=mysqli_connect("localhost","root","","ecom") or die("Couldn't connect to databade");
$sql ="select id,name,email from hello";
$result=mysqli_query($con,$sql) or die("query failed");
$output="";
if(mysqli_num_rows($result)>0 ){
$output=<>


}
?>