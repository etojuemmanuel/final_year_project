
<?php
 $con = mysqli_connect("localhost", "root","", "assets");
 if ($con) {
       echo "";
 }else {
       echo "Database not conntected";
 }
 $x = $_GET['data'];

// the update command for other assets below

                  $a = $_POST['Name'];
                  $b = $_POST['ID'];
                  $c = $_POST['Place_of_deployment'];        
                  $d = $_POST['Department'];
                  $e = $_POST['PersonIncharge'];
                  $f = $_POST['PersonId'];
                  $i = $_POST['Contact'];
                  $j = $_POST['Date']; 
                  $k = $_POST['status'];  
                
                    $sqluo = "update others SET Name='$a', ID='$b', Place_of_deployment='$c',
                    Department='$d', PersonIncharge='$e', 
                    PersonId='$f', Contact='$i', Date='$j', status='$k'
                   WHERE ID='$b'";
                   $result=mysqli_query($con,$sqluo); 

                  // the update command for auto motives assets below 
                  $a = $_POST['Name'];
                  $b = $_POST['ID'];
                  $c = $_POST['Place_of_deployment'];        
                  $d = $_POST['Department'];
                  $e = $_POST['PersonIncharge'];
                  $f = $_POST['PersonId'];
                  $i = $_POST['Contact'];
                  $j = $_POST['Date'];  
                  $k = $_POST['status']; 
                                   
                 $sqlum = "update motives SET Name='$a', ID='$b', Place_of_deployment='$c',
                 Department='$d', PersonIncharge='$e', 
                 PersonId='$f', Contact='$i', Date='$j', status='$k' 
                 WHERE ID='$b'";                           
                 $result=mysqli_query($con,$sqlum);     


            //      the update command for the electronics
                 
                 $a = $_POST['Electronic_Type'];
                 $b = $_POST['ElectronicId'];
                 $c = $_POST['ElectronicName'];
                 $d = $_POST['Location'];
                 $e = $_POST['Department'];
                 $f = $_POST['Person_Incharge'];
                 $i = $_POST['PersonsId'];
                 $j = $_POST['Contact'];
                 $k = $_POST['Date_Of_Creation']; 
                 $l = $_POST['status']; 

                 $sqlue = "update electronics SET Electronic_Type='$a', ElectronicId='$b', ElectronicName='$c',
                    Location='$d', Department='$e', Person_Incharge='$f', 
                    PersonsId='$i', Contact='$j', Date_Of_Creation='$k', status='$l'
                    WHERE ElectronicId='$b'"; 
                  $result=mysqli_query($con,$sqlue);
                  
                  // the update for funiture below
                  $a = $_POST['Funiture_type'];
                  $b = $_POST['FunitureId'];
                  $c = $_POST['name'];
                  $d = $_POST['Place_of_deployment'];
                  $e = $_POST['Department'];
                  $f = $_POST['Person_Incharge'];
                  $i = $_POST['ID'];
                  $j = $_POST['Contact'];
                  $k = $_POST['Date'];
                  $l = $_POST['status']; 

                  $sqluf = "update funiture SET Funiture_type='$a', FunitureId='$b', name='$c',
                    Place_of_deployment='$d', Department='$e', Person_Incharge='$f', 
                    ID='$i', Contact='$j', Date='$k', status='$l' 
                    WHERE FunitureId='$b'";
                    $result=mysqli_query($con,$sqluf);
                    
                  //   update for housing
                        $a = $_POST['Ownership'];
                        $b = $_POST['HousingId'];
                        $c = $_POST['HousePurpose'];
                        $d = $_POST['HouseLocation'];
                        $e = $_POST['HouseOccupants'];
                        $f = $_POST['ResidentId'];
                        $i = $_POST['ResidentName'];
                        $j = $_POST['ResidentContact'];
                        $k = $_POST['DateOfCreaton'];
                        $l = $_POST['status'];  

                    $sqlh = "update housing SET Ownership='$a', HousingId='$b', HousePurpose='$c',
                    HouseLocation='$d', HouseOccupants='$e', ResidentId='$f', 
                    ResidentName='$i', ResidentContact='$j', DateOfCreaton='$k', status='$l'
                    where HousingId='$b'";
                    
                    $result=mysqli_query($con,$sqlh);
                
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
                                          Succussfully updated
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
                              <meta charset="UTF-8">
                              <meta name="viewport" content="width=device-width, initial-scale=1.0">
                              <title>Document</title>
                              <link rel="stylesheet" href="popup.css">
                              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
                        </head>
                        <body>
                              <div class="popup center">
                                    <div class="icon">
                                          <i class="fa fa-check"></i>
                                    </div>
                                    <div class="title">
                                          Update failed
                                    </div>
                                    <div class="description">
                                          cross-check connetions and try again                                          
                                    </div>
                                    <div class="dismissbtn">
                                          <button onClick="history.go(-1)">Dismiss</button>
                                    </div>
                              </div>
                        </body>
                  <?php                      
                                  
                 }
              

                     
    ?>