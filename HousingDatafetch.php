<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styling.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<body>  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">HOME</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ElectronicDatafetch.php">ELETRONICS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Automotive_Datafetch.php">AUTO-MOTIVES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="HousingDatafetch.php">HOUSING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="funitureDatafetch.php">FUNITURE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="OtherAssetsDatafetch.php">OTHERS</a>
        </li> 
        <li>
        <button><a href="housingAssets.php" class="nav-link" >Add Client</a></button>
        </li>      
      </ul>      
      <form action="" method="post">
            <div class="search">
            <input type="text" name="search" id="" class="form-control me-2" placeholder="search data">
            <button type="submit" name="submit" class="btn btn-outline-success">search</button>
            </div>            
        </form>
            
    </div>
  </div>
</nav>
  <!-- <!-the end of anvigation page-  --> 
<div class="search">
        
        <br><br>             
        
        <div class="container">
            <table class="table" border="2" colore="black" solid>
                <?php
                    if (isset($_POST['submit'])) {
                        $serach = $_POST['search'];
                        $con= mysqli_connect('localhost','root','','assets');
                        $sqls = "select * from housing where Ownership like'%$serach%' OR HousingId like'%$serach%' OR
                        HousePurpose like'%$serach%' OR HouseLocation like'%$serach%' OR HouseOccupants like'%$serach%' or ResidentId like'%$serach%'   
                        or  ResidentName like'%$serach%' or DateOfCreaton like'%$serach%' OR ResidentContact like'%$serach%'                                  
                        ";
                        $results= mysqli_query($con, $sqls);
                        if ($results) {
                            if (mysqli_num_rows($results)>0) {
                                echo'<h4>Search Results</h4>' ;                               
                                echo '<tr> <th>OWNERSHIP</th>
                                            <th>HOUSE ID</th> 
                                            <th>HOUSE PURPOSE</th>
                                            <th>LOCATION</th>
                                            <th>OCCUPANT</th>
                                            <th>RESIDENT ID</th>
                                            <th>RESIDENT NAME</th>
                                            <th>PHONE</th>
                                            <th>DATE OF CREATION</th>
                                            
                                    </tr>';
                                
                            while( $row = mysqli_fetch_assoc($results))
                            {
                                ?>
                                <tr> 
                                    <td><?php echo $row['Ownership']?></td>  
                                    <td><a href="edit.php?data=<?php echo $row['HousingId'] ?>"><?php echo $row['HousingId']?> </a></td>
                                    <td><?php echo $row['HousePurpose']?></td> 
                                    <td><?php echo $row['HouseLocation']?></td>
                                    <td> <?php echo $row['HouseOccupants']?></td> 
                                    <td><?php echo $row['ResidentId']?></td> 
                                    <td><?php echo $row['ResidentName']?></td> 
                                    <td><?php echo $row['ResidentContact']?></td> 
                                    <td><?php echo $row['DateOfCreaton']?></td>                                     
                                </tr>
                            
                                <?php
                            }                               
                            
                            }else {
                        
                                echo '<h2> Data Not Found </h2>';
                              
                            }
                            
                        } 
                    }
                ?>
            </table>
        </div>
    </div>

    <!-- the end of search button and start of data retrieval for housing sector -->
    <?php
    $con= mysqli_connect('localhost','root','','assets');
    $qr2 = "select * from housing ORDER BY HousePurpose DESC";
    $result1 = mysqli_query($con, $qr2);
    
    echo'<h4>HOUSING ASSETS TABLE</h4>' ; 
    echo '<table border="2" colore="black" solid>';
    echo '<tr> <th>OWNERSHIP</th>
                <th>HOUSE ID</th> 
                <th>HOUSE PURPOSE</th>
                <th>LOCATION</th>
                <th>OCCUPANT</th>
                <th>RESIDENT ID</th>
                <th>RESIDENT NAME</th>
                <th>PHONE</th>
                <th>DATE OF CREATION</th>
                
        </tr>';
    
   while( $row = mysqli_fetch_assoc($result1))
   {
    ?>
    <tr> 
        <td> <?php echo $row['Ownership']?></td> 
        <td><a href="edit.php?data=<?php echo $row['HousingId'] ?>"><?php echo $row['HousingId']?> </a></td>
        <td> <?php echo $row['HousePurpose']?></td> 
        <td><?php echo $row['HouseLocation']?></td>
        <td> <?php echo $row['HouseOccupants']?></td> 
        <td><?php echo $row['ResidentId']?></td> 
        <td><?php echo $row['ResidentName']?></td> 
        <td><?php echo $row['ResidentContact']?></td> 
        <td><?php echo $row['DateOfCreaton']?></td> 
    </tr>
   
    <?php
   }
    
   echo '</table>';
  
    ?>
</body>
</html>