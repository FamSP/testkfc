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

   <h1 class="text-center">ข้อมูลลูกค้า</h1>
    <?php
    require('dbconnect.php');
    $sql = "SELECT * FROM tbl_customer ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    ?>    
    <table style="width:100%" class= "table">
        
<Tr>
    <thead class="thead-dark">
<th>CustomerID</th>
<th>Firstname</th>
<th>Surname</th>
<th>HouseNO</th>
<th>SubDistrict</th>
<th>District</th>
<th>province</th>
<th>Zipcode</th>
<th></th>
    </thead>
</Tr>
<?php
while ($result = $stmt->fetch(PDO::FETCH_NUM) ){
?> 
<tr>
<td>
    <a href="cusEditdelete.php?id=<?php echo $result [0]; ?>" >
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
<a href="cusEditupdate.php?custpmerid=<?php echo $result [0]; ?>" class= "btn btn-danger" > แก้ไข</a>
</td>

</tr>
<?php } ?>
    </table>

   <a href="cusEditInsert.php" class= "btn btn-primary">เพิ่มข้อมูลลูกค้า</a>
   </div>

</body>

</html>