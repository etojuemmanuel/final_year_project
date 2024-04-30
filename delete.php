<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deletion page</title>
    <link rel="stylesheet" href="styling.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>
    <?php
     $x = $_GET['data'];
    
        $con= mysqli_connect('localhost','root','','assets');
        
        $qrdh = "delete from housing where HousingId='$x'";
        $result1 = mysqli_query($con, $qrdh);
        $qrdf = "delete from funiture where FunitureId='$x'";
        $result1 = mysqli_query($con, $qrdf);
        $qrde = "delete from electronics where ElectronicId='$x'";
        $result1 = mysqli_query($con, $qrde);
        $qrdm = "delete from motives where ID='$x'";
        $result1 = mysqli_query($con, $qrdm);
        $qrdo= "delete from others where ID='$x'";
        $result1 = mysqli_query($con, $qrdo);


        if ($result1) {
            ?>
                        <head>
                              <link rel="stylesheet" href="popup.css">
                              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
                        </head>
                        <body>
                              <div class="popup center">
                                    <div class="icon">
                                          <i class="fa fa-check"></i>
                                    </div>
                                    <div class="title">
                                          Succussfully Deleted
                                    </div>
                                    <div class="description">
                                          check the table to confirm                                          
                                    </div>
                                    <div class="dismissbtn">
                                          <button onClick="history.go(-2)">Dismiss</button>
                                    </div>
                              </div>
                        </body>
                                                      
                        <?php
        }else {
            ?>
            <head>
                  <link rel="stylesheet" href="popup.css">
                  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
            </head>
            <body>
                  <div class="popup center">
                        <div class="icon">
                              <i class="fa fa-check"></i>
                        </div>
                        <div class="title">
                              Not deleted
                        </div>
                        <div class="description">
                              check connections to confirm                                          
                        </div>
                        <div class="dismissbtn">
                              <button onClick="history.go(-2)">Dismiss</button>
                        </div>
                  </div>
            </body>
                                          
            <?php
        }
     
    ?>
     
</body>
</html>