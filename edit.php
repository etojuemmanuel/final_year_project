
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data page</title>
</head>
<link rel="stylesheet" href="stl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body>
<?php
    $x = $_GET['data'];
    
       
        $con= mysqli_connect('localhost','root','','assets');
        $qr2 = "select * from housing where HousingId='$x'";
        $result1 = mysqli_query($con, $qr2);
        if($result1) {
            $row= mysqli_fetch_assoc($result1);
        }
             
        
                     
?>
<div class="container">
    <form action="update.php" method="post">
        <h2 class="h2">Asset Registration</h2>
        <hr>
        <div class="content">
            <div class="input_box">
                <lable>House ID or Number: <input required type="text" name="HouseId" id="HouseId" value="<?php echo $row['HousingId']?>"></lable>
            </div>
            <div class="input_box">
                <lable>Housing Ownership:   
                    <select name="Ownership" id="" required>
                        <option name="Ownership" value="<?php echo $row['Ownership'] ?>"><?php echo $row['Ownership'] ?></option>            
                        <option  name="Ownership" value="Rental">Rental</option>
                        <option  name="Ownership" value="Permanent">Permanent</option>            
                    </select>
                </lable>     
            </div>
            
            <div class="input_box">
                    <lable>Housing Purpose:     
                        <select  id="" name="HousePurpose" required>
                            <option name="HousePurpose"  value="<?php echo $row['HousePurpose'] ?>"><?php echo $row['HousePurpose'] ?></option>
                            <option name="HousePurpose" value="Office">Office</option>
                            <option name="HousePurpose" value="Residential">Residential</option>
                
                        </select>
                    </lable>            
            </div>
            <div class="input_box">
                <label>House Occupant:
                    <select  id="" name="HouseOccupants" required >
                        <option name="HouseOccupants" value="<?php echo $row['HouseOccupants'] ?>"><?php echo $row['HouseOccupants'] ?></option>
                        <option name="HouseOccupants" value="Office">Offices</option>
                        <option name="HouseOccupants" value="Residential">Residential</option>                        
                    </select>
                </label>            
            </div><div class="input_box">
                <label>Location: <input  type="text" name="HouseLocation"  value="<?php  echo $row['HouseLocation']?>" required></label>
            </div>  
            <div class="input_box">
                <label>Resident ID: <input type="text" name="ResidentId"  value="<?php echo $row['ResidentId']?>" required></label>
            </div>            
            <div class="input_box">
                <label>Resident Name: <input type="text" name="ResidentName"  value="<?php echo $row['ResidentName']?>" required></label>
            </div>
            <div class="input_box">                
                <label>Resident Contact: <input type="text" name="ResidentContact"  value="<?php echo $row['ResidentContact']?>" required></label>
            </div>
            <div class="input_box">
                <label>Date Of Creation: <input type="text" name="DateOfCreaton"  value="<?php echo $row['DateOfCreaton']?>" required></label>
            </div>  
            <div class="input_box" >
                <label>STATUS   
                    <select name="status" class="custome_select">
                        <option value="<?php echo $row['status']?>" name="status"><?php echo $row['status']?></option>
                        <option value="Runing" name="status">Runing</option>
                        <option value="Spoilt" name="status">Spoilt</option>
                    </select>
                </label>
            </div>          
            <div class="button_container">
                <button type="submit">Update</button>
                <!-- <input type="submit" value="Update"> -->
            </div>     
            <div class="gender_category">
                <a href="delete.php?data=<?php echo $row['HousingId'] ?>" class="delete">Delete</a>
                <a href="print.php?data=<?php echo $row['HousingId'] ?>" class="print">Print   </a>
                <a href="H.php" class="print">Back</a></div>
            </div>           
        </div>          
    </form>
</div>
   
</body>
</html>