<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>electronics</title>
</head>
<link rel="stylesheet" href="stl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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
                <label>Electronic Type (Size):   
                    <select name="size" id="" required>
                        <option  value="none">select one</option>            
                        <option  name="size" value="Small SIze">Small size Electronic</option>
                        <option  name="size" value="Medium Size">Medium Size Electronic</option>
                        <option  name="size" value="Large Size">Large Size Electronic</option>            
                    </select>
                </label>            
            </div>
            <div class="input_box">
                <label>Electronic ID: <input type="text" name="ElectronicId" id="ElectronicId"></label>
            </div>
            <div class="input_box">
                <label>Electronic Name: <input type="text" name="ElectronicName" id="ElectronicName"></plabel>
            </div>
            <div class="input_box">
                <label>Deployed Location: <input type="text" name="location" id=""></label>
            </div>
            <div class="input_box">
                <label>Deployed Department: <input type="text" name="Department" id=""></label>
            </div>
            <div class="input_box">
                <label>Person Incharge: <input type="text" name="PersonIncharge" id=""></label>
            </div>
            <div class="input_box">                
                <label>Person ID: <input type="text" name="PersonsId" id=""></label>                  
            </div>
            <div class="input_box">
                <label>Contact: <input type="text" name="Contact" id=""></label>                 
            </div>
            <div class="input_box">
                <label>Date: <input type="datetime-local" name="date" id="timeOfcreation"></label>
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