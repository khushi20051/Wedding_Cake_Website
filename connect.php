<?php
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Address = $_POST['Address'];
$Phone = $_POST['Phone'];
$Date = $_POST['Date'];
$Time = $_POST['Time'];
$Taste= $_POST['Taste'];
$Kg = $_POST['Kg'];
// database connection
$conn = new mysqli('localhost','root','','khushi');
if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);
}else{
    $stmt =$conn->prepare("insert into order(Name,Email,Address,Phone,Date,Time,Taste,Kg)values
    (?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssss",$Name,$Email,$Address,$Phone,$Date,$Time,$Taste,$Kg);
    $stmt->execute();
    echo"order is sucessfully...";
    $stmt->close();
    $conn->close();
}
?>