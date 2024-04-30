
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit data page</title>
    <link rel="stylesheet" href="stl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<?php
    $x = $_GET['data'];    
       
        $con= mysqli_connect('localhost','root','','assets');
        $qr2 = "select * from funiture where FunitureId='$x'";
        $result1 = mysqli_query($con, $qr2);
        if($result1) {
            $row= mysqli_fetch_assoc($result1);
        }            
        
                     
?>    
   
<div class="container">
    <form action="update.php" method="post">
        <h2>AUTO-MOTIVES EDIT FORM</h2>
        <hr>
        <div class="content">
            <div class="input_box">
                <lable>Funiture type:  
                    <select name="Funiture_type" id="">
                        <option value="<?php echo $row['Funiture_type']?>"><?php echo $row['Funiture_type']?></option>
                        <option name="Funiture_type" value="Office funiture"> Office funiture</option>
                        <option name="Funiture_type" value="OutDoor Funiture">OutDoor Funiture</option>
                        <option name="Funiture_type" value="Indoor funiture">InDoor Funiture</option>
                    </select>
                </lable>
            </div>
            <div class="input_box">
                <label>FunitureId: <input type="text" name="FunitureId" id="" value="<?php echo $row['FunitureId'] ?>"></label>
            </div>
            <div class="input_box">
                <label>Funiture Name: <input type="text" name="name" id="" value="<?php echo $row['name'] ?>"></label>
            </div>
            <div class="input_box">
                <label>Place of Deployment: <input type="text" name="Place_of_deployment" id="" value="<?php echo $row['Place_of_deployment'] ?>"></label>
            </div>
            <div class="input_box">
                <label>Department: <input type="text" name="Department" id="" value="<?php echo $row['Department'] ?>"></label>
            </div>
            <div class="input_box">
                <label>Person Incharge: <input type="text" name="Person_Incharge" id="" value="<?php echo $row['Person_Incharge'] ?>"></label>
            </div>
            <div class="input_box">
                <label>Id: <input type="text" name="ID" id="" value="<?php echo $row['ID'] ?>"></label>  
            </div>
            <div class="input_box">
                <label>Contact: <input type="text" name="Contact" id="" value="<?php echo $row['Contact'] ?>"></label>
            </div>
            <div class="input_box">
                <label>Date: <input type="text" name="Date" id="" value="<?php echo $row['Date'] ?>"></label>
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
                <a href="delete.php?data=<?php echo $row['FunitureIdD'] ?>" >Delete    </a>    
                <a href="print.php?data=<?php echo $row['FunitureId'] ?>" >Print   </a>
                <a href="javascript:history.back()" class="print">Back</a>
             </div>           
        </div>          
    </form>
</div>
    


</body>
</html>