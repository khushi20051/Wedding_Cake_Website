<?php
$con=mysqli_connect('localhost','root','');
if($con){
    echo"successfully";
}
else{
    echo"not connection";
}
mysqli_select_db($con,'cake');
@$Name=$_POST['Name'];
@$Email=$_POST['Email'];
@$Address=$_POST['Address'];
@$Phone=$_POST['Phone'];
@$Date=$_POST['Date'];
@$Time=$_POST['Time'];
@$Taste=$_POST['Taste'];
@$Kg=$_POST['Kg'];

$sql="insert into cakes(id,Name, Email, Address, Phone,Date, Time, Taste, Kg)  values('',$Name','$Email','$Address','$Phone','$Date','$Time','$Taste','$Kg')";
 echo"$sql";
mysqli_query($con,'$sq');



?>