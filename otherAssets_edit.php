
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit other aseets</title>
    <link rel="stylesheet" href="stl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<?php
    $x = $_GET['data'];
    
       
        $con= mysqli_connect('localhost','root','','assets');
        $qr2 = "select * from others where ID='$x'";
        $result1 = mysqli_query($con, $qr2);
        if($result1) {
            $row= mysqli_fetch_assoc($result1);
        }
        
?>
    
    
    <!-- <form action="update.php" method="post" class="form">
        <p><h2>OTHER ASSETS EDIT AND UPDATE FORM</h2></p>
        <p>NAME / DESCRIPTION: <input type="text" name="Name" value="<?php echo $row['Name']?>"></p>
        <p>ASSET ID:    <input type="text" name="ID" value="<?php echo $row['ID']?>"></p>        
        <p>PLACE OF DEPLOYMENT: <input type="text" name="Place_of_deployment" value="<?php echo $row['Place_of_deployment']?>"></p>
        <p>Deployed Department: <input type="text" name="Department" id="" value="<?php echo $row['Department']?>"></p>
        <p>Person Incharge: <input type="text" name="PersonIncharge" id="" value="<?php echo $row['PersonIncharge']?>"></p>
        <p>Person ID: <input type="text" name="PersonId" id="" value="<?php echo $row['PersonId']?>"></p>
        <p>Contact: <input type="text" name="Contact" id="" value="<?php echo $row['Contact']?>"></p>  
        <label>Date OF ACQUISITION : <input type="text" name="Date" value="<?php echo $row['Date']?>"></label>
        <br> <br>
        <input type="submit" value="Submit">
        <br><br>
        <div class="dpb">
            <a href="delete.php?data=<?php echo $row['ID'] ?>" class="delete">Delete</a>
            <a href="print.php?data=<?php echo $row['FunitureId'] ?>" class="print">Print   </a>
            <a href="javascript:history.back()" class="print">Back</a>
        </div>
</form> -->
<div class="container">
    <form action="update.php" method="post">
        <h2>AUTO-MOTIVES EDIT FORM</h2>
        <hr>
        <div class="content">
            <div class="input_box">
                <label>NAME / DESCRIPTION: <input type="text" name="Name" id="ElectronicId"  value="<?php echo $row['Name']?>" required></label>
            </div>
            <div class="input_box">
                <label>ASSET ID:    <input type="text" name="ID" value="<?php echo $row['ID']?>" required></label>
            </div>
            <div class="input_box">
                <label>PLACE OF DEPLOYMENT: <input type="text" name="Place_of_deployment" value="<?php echo $row['Place_of_deployment']?>" required></label>
            </div>
            <div class="input_box">
                <label>DEPLOYED DEPARTMENT: <input type="text" name="Department" id="" value="<?php echo $row['Department']?>" required></label>
            </div>
            <div class="input_box">
                <label>PERSON INCHARGE: <input type="text" name="PersonIncharge" id=""  value="<?php echo $row['PersonIncharge']?>" required></label>
            </div>
            <div class="input_box">
                <label>PERSON'S ID: <input type="text" name="PersonId" id="" value="<?php echo $row['PersonId']?>" required></label>
            </div>
            <div class="input_box">
                <label>CONTACT: <input type="text" name="Contact" id="" value="<?php echo $row['Contact']?>" required></label>  
            </div>
            <div class="input_box">
                <label>DATE OF ACQUISITION : <input type="text" name="Date"  value="<?php echo $row['Date']?>" required></label>
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
                <a href="delete.php?data=<?php echo $row['ID'] ?>" >Delete    </a>    
                <a href="print.php?data=<?php echo $row['ID'] ?>" >Print   </a>
                <a href="javascript:history.back()" class="print">Back</a>
             </div>           
        </div>          
    </form>
</div>
    


</body>
</html>