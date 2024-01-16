<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php
require('dbconnect.php');
//echo $_POST["fname"]. "<br>" . $_POST["lname"];

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
$stmt->bindParam(':id', $_POST['id']);
$stmt->bindParam(':fname', $_POST['fname']);
$stmt->bindParam(':lname', $_POST['lname']);
$stmt->bindParam(':homenumber', $_POST['homenumber']);
$stmt->bindParam(':subdistrict', $_POST['subdistrict']);
$stmt->bindParam(':district', $_POST['district']);
$stmt->bindParam(':province', $_POST['province']);
$stmt->bindParam(':zipcode', $_POST['zipcode']);

if ($stmt->execute()):
    $message = 'Update Suscessfully';
else :
    $message = 'Update Fail';
endif;
echo $message;

?>
<div class="container">
    <h1 class="text-center"><a href="cusSelect.php" class= "btn btn-primary">กลับสู่ข้อมูลลูกค้า</a ></h1>
</div><br>