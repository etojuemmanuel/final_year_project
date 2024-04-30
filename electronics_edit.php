<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>electronics</title>
    <link rel="stylesheet" href="stl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <?php
    $con = mysqli_connect("localhost", "root","", "assets");
    $x = $_GET['data'];
    
       
        $con= mysqli_connect('localhost','root','','assets');
        $qr2 = "select * from electronics where ElectronicId='$x'";
        $result1 = mysqli_query($con, $qr2);
        if($result1) {
            $row= mysqli_fetch_assoc($result1);
        }
            
      
                     
?>
    <div class="container">
    <form action="update.php" method="post">
        <h2 class="h2">ELETRONICS EDIT AND UPDATE FORM</h2>
        <hr>
        <div class="content">
            <div class="input_box">
                <label>Electronic Type (Size):   
                    <select name="Electronic_Type" id="" required>
                        <option name="Electronic_Type" value="<?php echo $row['Electronic_Type'] ?>"><?php echo $row['Electronic_Type'] ?></option>
                        <option name="Electronic_Type" value="Small Size">Small Size</option>
                        <option name="Electronic_Type" value="Meduim Size">Medium Size</option>
                        <option name="Electronic_Type" value="Large Size">Large Size</option>           
                    </select>
                </label>            
            </div>
            <div class="input_box">
                <label>Electronic ID: 
                <input type="text" name="ElectronicId" id="ElectronicId" value="<?php echo $row['ElectronicId'] ?>">
                </label>
            </div>
            <div class="input_box">
                <label>Electronic Name: 
                    <input type="text" name="ElectronicName" id="ElectronicName" value="<?php echo $row['ElectronicName'] ?>">
                </label>
            </div>
            <div class="input_box">
                <label>Deployed Location: 
                    <input type="text" name="Location" id="" value="<?php echo $row['Location'] ?>">
            </label>
            </div>
            <div class="input_box">
                <label>Deployed Department: 
                <input type="text" name="Department" id="" value="<?php echo $row['Department'] ?>">
                </label>
            </div>
            <div class="input_box">
                <label>Person Incharge: 
                    <input type="text" name="Person_Incharge" id="" value="<?php echo $row['Person_Incharge'] ?>" >
            </label>
            </div>
            <div class="input_box">                
                <label>Person ID: 
                    <input type="text" name="PersonsId" id="" value="<?php echo $row['PersonsId'] ?>">
            </label>                  
            </div>
            <div class="input_box">
                <label>Contact: <input type="text" name="Contact" id="" value="<?php echo $row['Contact'] ?>"></label>                 
            </div>
            <div class="input_box">
                <label>Date: <input type="text" name=" Date_Of_Creation" id="timeOfcreation" value="<?php echo $row['Date_Of_Creation'] ?>"></label>
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
                <!-- <input type="submit" value=""> -->
            </div>            
            <div class="gender_category">
                <a href="delete.php?data=<?php echo $row['ElectronicId'] ?>">Delete</a>   
                <a href="print.php?data=<?php echo $row['ElectronicId'] ?>" class="print">Print   </a>
                <a href="javascript:history.back()" class="print">Back</a></div>
        </div>          
    </form>
</div>
</body>
</html>