<?php
$name=$_POST['name'];
$email=$_POST['email'];
$con=mysqli_connect("localhost","root","","ecom") or die("Couldn't connect to databade");
$sql ="insert into hello(name,email)values({'$name'},{'$email'})";
$result=mysqli_query($con,$sql) or die("query failed");
if(mysqli_num_rows($result)>0 ){
    

}
?>