<?php

$con=mysqli_connect('localhost','root');
if($con){
    echo"successfully";
}
else{
    echo"not connection";
}
mysqli_select_db($con,'cakes');
@$name=$_POST['name'];
@$email=$_POST['email'];
@$address=$_POST['address'];
@$phone=$_POST['phone'];
@$date=$_POST['date'];
@$time=$_POST['time'];
@$cake=$_POST['cake'];
$sql="insert cake( name, email, address, phone, date, time, cake) values ('$name','$email','$address','$phone','$date','$time','$cake')";
// $sql="insert into cake(name, email, address, phone,date, time, cake, weight)  values('$name','$email','$address','$phone','$date','$time','$cake','$weight')";

mysqli_query($con,$sql);



?>