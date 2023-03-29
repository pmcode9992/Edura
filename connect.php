<?php
$user_name=$_POST['user_name'];
$Gender=$_POST['Gender'];
$Mobile=$_POST['Mobile'];
$Email=$_POST['Email'];
$AADHAR=$_POST['AADHAR'];
$PAN=$_POST['PAN'];
$Income=$_POST['Income'];
$conn= new mysqli('localhost','root','Doggosmas1812','test');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(user_name, Gender, Mobile, Email, AADHAR, PAN, Income) values(?, ?, ?, ?, ?, ?,?)");
    $stmt->bind_param("ssssssi", $user_name, $Gender, $Mobile, $Email, $AADHAR, $PAN, $Income);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration successfully...";
    $stmt->close();
    $conn->close();
}
?>