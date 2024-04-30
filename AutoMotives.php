<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto-motives</title>
    <!-- <link rel="stylesheet" href="styling.css"> -->
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
        <h2>Asset Registration</h2>
        <hr>
        <div class="content">
            <div class="input_box">
                <label>NAME / DESCRIPTION: <input type="text" name="Name" ></label>
            </div>
            <div class="input_box">
                <label>ASSET ID:    <input type="text" name="ID" ></label>
            </div>
            <div class="input_box">
                <label>PLACE OF DEPLOYMENT: <input type="text" name="Place_of_deployment" ></label>
            </div>
            <div class="input_box">
                <label>DEPLOYED DEPARTMENT: <input type="text" name="Department" id=""></label>
            </div>
            <div class="input_box">
                <label>PERSON INCHARGE: <input type="text" name="PersonIncharge" id=""></label>
            </div>
            <div class="input_box">
                <label>PERSON'S ID: <input type="text" name="PersonId" id=""></label>
            </div>
            <div class="input_box">
                <label>CONTACT: <input type="text" name="Contact" id=""></label>  
            </div>           
            <div class="input_box">
                <label>DATE OF ACQUISITION : <input type="datetime-local" name="Date" ></label>
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