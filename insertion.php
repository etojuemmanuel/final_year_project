<?php
    $con = mysqli_connect("localhost", "root","", "assets");
   
    // data insertion to the housin table
    $a = $_POST['Ownership'];
    $b = $_POST['HouseId'];
    $c = $_POST['HousePurpose'];
    $d = $_POST['HouseLocation'];
    $e = $_POST['HouseOccupants'];
    $f = $_POST['ResidentId'];
    $i = $_POST['ResidentName'];
    $j = $_POST['Contact'];
    $k = $_POST['date'];
    $l = $_POST['status'];
    
    $qrh= "insert into Housing values('$a', '$b', '$c', '$d', '$e', '$f', '$i', '$j', '$k','$l')";
    $result= mysqli_query($con, $qrh);

    // data insertion to the AutoMotives table
    $a = $_POST['Name'];
    $b = $_POST['ID'];
    $c = $_POST['Place_of_deployment'];
    $d = $_POST['Department'];
    $e = $_POST['PersonIncharge'];
    $f = $_POST['PersonId'];    
    $i = $_POST['Contact'];
    $j = $_POST['Date'];
    $k = $_POST['status'];
    
    $qrm= "insert into motives values('$a', '$b', '$c', '$d', '$e', '$f', '$i', '$j', '$k')";
    $result= mysqli_query($con, $qrm);
    // insertion of data to the other assets table

    $a = $_POST['Name'];
    $b = $_POST['ID'];
    $c = $_POST['Place_of_deployment'];
    $d = $_POST['Department'];
    $e = $_POST['PersonIncharge'];
    $f = $_POST['PersonId'];    
    $i = $_POST['Contact'];
    $j = $_POST['Date'];
    $k = $_POST['status'];
    
    $qro= "insert into others values('$a', '$b', '$c', '$d', '$e', '$f', '$i', '$j', '$k')";
    $result= mysqli_query($con, $qro);



    // the data insertion to electronics table
    
    $a = $_POST['size'];
    $b = $_POST['ElectronicId'];
    $c = $_POST['ElectronicName'];
    $d = $_POST['location'];
    $e = $_POST['Department'];
    $f = $_POST['PersonIncharge'];
    $i = $_POST['PersonsId'];
    $j = $_POST['Contact'];
    $k = $_POST['date'];
    $l = $_POST['status'];
    
    $qre= "insert into electronics values('$a', '$b', '$c', '$d', '$e', '$f', '$i', '$j', '$k', '$l')";
    $result= mysqli_query($con, $qre);

    //the data insertion for funiture
    $a = $_POST['Funiture_type'];
    $b = $_POST['FunitureId'];
    $c = $_POST['name'];
    $d = $_POST['Place_of_deployment'];
    $e = $_POST['Department'];
    $f = $_POST['Person_Incharge'];
    $i = $_POST['ID'];
    $j = $_POST['Contact'];
    $k = $_POST['date'];
    $l = $_POST['status'];
    
    $qrf= "insert into funiture values('$a', '$b', '$c', '$d', '$e', '$f', '$i', '$j', '$k', '$l')";
    $result= mysqli_query($con, $qrf);
    if ($result) {
      
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
                        Succesfully connected
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

    } else {
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
                    No connection established
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


    }
    ?>