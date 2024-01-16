<?php
require('dbconnect.php');
//echo $_POST["fname"]. "<br>" . $_POST["lname"];

$id = $_POST ['id'];
$fname = $_POST ['fname'];
$lname = $_POST ['lname'];
$homenumber = $_POST ['homenumber'];
$subdistrict = $_POST ['subdistrict'];
$district = $_POST ['district'];
$province = $_POST ['province'];
$zipcode = $_POST ['zipcode'];


$sql = "UPDATE tbl_customer SET 
firstName = :fname , 
surname = :lname , 
houseNo = :homenumber ,
subDistrict = :subdistrict,
district = :district , 
province = :province , 
zipcode = :zipcode
Where customerID=:id";


$stmt = $conn->prepare($sql);

/*
$stmt->bindParam(':id', $_POST['id']);
$stmt->bindParam(':fname', $_POST['fname']);
$stmt->bindParam(':lname', $_POST['lname']);
$stmt->bindParam(':homenumber', $_POST['homenumber']);
$stmt->bindParam(':subdistrict', $_POST['subdistrict']);
$stmt->bindParam(':district', $_POST['district']);
$stmt->bindParam(':province', $_POST['province']);
$stmt->bindParam(':zipcode', $_POST['zipcode']);
*/
if ($stmt->execute()):
    $message = 'Update Suscessfully';
else :
    $message = 'Update Fail';
endif;
echo $message;

?>