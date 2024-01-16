<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table, th, td {
  border:1px solid black;
}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
   <div class="container">

   <h1 class="text-center">ข้อมูลลูกค้า </h1>
   <div>
   <a href="cusEditInsert.php" class="btn btn-info float-end">+เพิ่มข้อมูลลูกค้า</a>
   </div><br>
    <?php
    require('dbconnect.php');
    $sql = "SELECT * FROM tbl_customer ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>    
    <table class="table table-striped  table-hover table-responsive table-bordered">
        
<Tr>
    <thead class="thead-dark">
<th width="15%">CustomerID</th>
<th width="15%">Firstname</th>
<th width="10%">Surname</th>
<th width="10%">HouseNO</th>
<th width="15%">SubDistrict</th>
<th width="10%">District</th>
<th width="10%">province</th>
<th width="10%">Zipcode</th>
<th width="5%">Edit</th>
<th width="5%">Delete</th>
    </thead>
</Tr>
<?php
while ($result = $stmt->fetch(PDO::FETCH_NUM) ){
?> 
<tr>
<td>
<?php echo $result[0]; ?>
</td>
<td>
<?php echo $result[1]; ?>
</td>
<td>
<?php echo $result[2]; ?>
</td>
<td>
<?php echo $result[3]; ?>
</td>
<td>
<?php echo $result[4]; ?>
</td>
<td>
<?php echo $result[5]; ?>
</td>
<td>
<?php echo $result[6]; ?>
</td>
<td>
<?php echo $result[7]; ?>
</td>
<td>
<a href="cusEditupdate.php?custpmerid=<?php echo $result [0]; ?>" class= "btn btn-warning" > แก้ไข</a>
</td>
<td>
<a href="cusEditdelete.php?id=<?php echo $result [0]; ?>" class= "btn btn-danger" 
onclick="return confirm('ยืนยันการลบข้อมูล')" > ลบ</a>

</td>

</tr>
<?php } ?>
    </table>
</body>

</html>