<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_GET["id"]))
{
    $strid = $_GET["id"];
}
echo $strid;
    require "dbconnect.php";
    $sql = "DELETE FROM tbl_customer WHERE customerID=:id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id',$strid);
    $stmt->execute();

    if ($stmt->execute()):
        $message = 'Delete Suscessfully';
    else :
        $message = 'Delete Fail';
    endif;
    echo $message;
?>



</body>
</html>