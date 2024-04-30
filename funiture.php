<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="styling.css"> -->
    <link rel="stylesheet" href="stl.css">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
    <form action="insertion.php" method="post">
        <h2 class="h2">Asset Registration</h2>
        <hr>
        <div class="content">
            <div class="input_box">
                <label>Funiture type:          
                    <select name="Funiture_type" id="">
                        <option  name="Funiture_type">choose one</option>
                        <option  name="Funiture_type" value="Indoor Funiture">Indoor Funiture</option>
                        <option  name="Funiture_type" value="Outdoor Funiture">Outdoor Funiture</option>
                        <option  name="Funiture_type" value="Office Funiture"> Office Funiture</option>
                    </select> 
                </label>         
            </div>
            <div class="input_box">
                <label>Funiture Id: <input type="text" name="FunitureId" id=""></label>
            </div>
            <div class="input_box">
                <label>Funiture Name: <input type="text" name="name" id=""></label>
            </div>
            <div class="input_box">
                <label>Place of Deployment: <input type="text" name="Place_of_deployment" id=""></label>
            </div>
            <div class="input_box">
            <label>Department: <input type="text" name="Department" id=""></label>
            </div>            
            <div class="input_box">
                <label>Person Incharge: <input type="text" name="Person_Incharge" id=""></label>
            </div>
            <div class="input_box">                
                <label>Id: <input type="text" name="ID" id=""></label>
            </div>
            <div class="input_box">
                <label>Contact: <input type="text" name="Contact" id=""></label>
            </div>
            <div class="input_box">
                <label>Date: <input type="datetime-local" name="date" id="">
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