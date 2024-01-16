<!DOCTYPE html>
<html lang="en">
<head>
    //<?php
     //require('dbconnect.php');
     //$sql = "SELECT * FROM tbl_customer order by customerID ";
    //$stmt = $conn->prepare($sql);
    //$stmt->execute();
    //?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<?php
if (isset($_GET["custpmerid"]))
{
    $strid = $_GET["custpmerid"];
}

require('dbconnect.php');
$sql = "SELECT * FROM tbl_customer WHERE customerID=:id ";
$stmt = $conn->prepare($sql);
$stmt->bindParam(':id',$strid);
$stmt->execute();

?>
    <div class="container">
    <h1 class="text-center">แก้ไขข้อมูลลูกค้า</h1>
    <form action="cusUpdate.php" method="post">
        <div>
           <select name="id" id="" class="btn btn-secondary dropdown-toggle">
           <?php while ($result = $stmt->fetch(PDO::FETCH_NUM)) {
    ?>
    <option value="<?php echo $result[0] ?>"><?php echo $result[0] ?></option class="form-select">
    
           </select>
        </div class="form-select">
        <div >
            <label for="">ชื่อ</label>
            <input type="text" name="fname" id="" class="form-control" value="<?php echo $result[1] ?>">
        </div class="form-group">
        <div>
            <label for="">นามสกุล</label>
            <input type="text" name="lname" id="" class="form-control" value="<?php echo $result[2] ?>">
        </div class="form-group">
        <div>
            <label for="">เลขที่บ้าน</label>
            <input type="text" name="homenumber" id="" class="form-control" value="<?php echo $result[3] ?>">
        </div class="form-group">
        <div>
            <label for="">ตำบล</label>
            <input type="text" name="subdistrict" id="" class="form-control" value="<?php echo $result[4] ?>">
        </div class="form-group">
        <div>
            <label for="">อำเภอ</label>
            <input type="text" name="district" id="" class="form-control" value="<?php echo $result[5] ?>">
        </div class="form-group">
        <div>
            <label for="">จังหวัด</label>
            <input type="text" name="province" id="" class="form-control" value="<?php echo $result[6] ?>">
        </div class="form-group">
        <div>
            <label for="">รหัสไปรศณี</label>
            <input type="text" name="zipcode" id="" class="form-control"value="<?php echo $result[7] ?>">
        </div class="form-group">
        <?php } ?>
        <br><input type="submit" value="ยืนยัน" class= "btn btn-success" onclick="return confirm('ยืนยันการแก้ไขข้อมูล')" >
            <input type="reset" value="Reset"  class= "btn btn-danger">

    </form>
<br><a href="homepage.php" class= "btn btn-primary">กลับหน้าแรก</a>
    </div>
</body>
</html>