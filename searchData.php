<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seach results</title>
</head>
<body>
    <?php
    $con= mysqli_connect('localhost','root','','assets');
        $data=$_GET['data'];
        echo $data;  
       
        $qr2 = "select * from housing where HousingId='$x'";
        $result1 = mysqli_query($con, $qr2);
        if($result1) {
            $row= mysqli_fetch_assoc($result1);
        }
    ?>

</body>
</html>