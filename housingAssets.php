<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Housing assets</title>
    <link rel="stylesheet" href="stl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        $con = mysqli_connect("localhost", "root","", "assets");
    ?>
        

<div class="container">
    <form action="insertion.php" method="post">
        <h2 class="h2">Asset Registration</h2>
        <hr>
        <div class="content">
            <div class="input_box">
                <lable>House ID or Number: <input type="text" name="HouseId" id="HouseId" required></lable>
            </div>
            <div class="input_box">
                <lable>Housing Ownership:   
                    <select name="Ownership" id="" required>
                        <option name="Ownership" value="none">select one</option>            
                        <option  name="Ownership" value="Rental">Rental</option>
                        <option  name="Ownership" value="Permanent">Permanent</option>
            
                    </select>
                </lable>     
            </div>
            
            <div class="input_box">
                    <lable>Housing Purpose:     
                        <select  id="" name="HousePurpose" required>
                            <option name="HousePurpose" value="none">select one</option>
                            <option name="HousePurpose" value="Office">Office</option>
                            <option name="HousePurpose" value="Residential">Residential</option>
                
                        </select>
                    </lable>            
            </div>
            <div class="input_box">
                <label>House Occupant:
                    <select required  id="" name="HouseOccupants" required>
                        <option name="HouseOccupants" value="none">select one</option>
                        <option name="HouseOccupants" value="Office">Offices</option>
                        <option name="HouseOccupants" value="Residential">Residential</option>                        
                    </select>
                </label>            
            </div><div class="input_box">
                <label>Location: <input required type="text" name="HouseLocation" id="ResidentId" required></label>
            </div>  
            <div class="input_box">
                <label>Resident ID: <input required type="text" name="ResidentId" id="ResidentId" required></label>
            </div>            
            <div class="input_box">
                <label>Resident Name: <input required type="text" name="ResidentName" id="ResidentName" required></label>
            </div>
            <div class="input_box">                
                <label>Resident Contact: <input required type="tel" name="Contact" id="contact" required></label>
            </div>
            <div class="input_box">
                <label>Date Of Creation: <input required type="datetime-local" name="date" id="timeOfcreation" required></label>
            </div>    
            <div class="input_box" >
                <label>STATUS   
                    <select name="status" class="custome_select">
                        <option value="Runing" name="status">Runing</option>
                        <option value="Spoilt" name="status">Spoilt</option>
                    </select>
                </label>
            </div>        
             <div class="button_container">
                <button type="submit">Submit</button>
                <!-- <input type="submit" value=""> -->
            </div>            
        </div>          
    </form>
</div>
    

</body>
</html>