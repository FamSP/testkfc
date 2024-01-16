<?php
require('dbconnect.php');
//echo $_POST["fname"]. "<br>" . $_POST["lname"];



$sql = "INSERT INTO tbl_customer VALUES(:id, :fname , :lname , :homenumber ,:subdistrict, :district, :province ,:zipcode)";

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