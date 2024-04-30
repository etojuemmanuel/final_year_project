<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>funiture assets</title>
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
        <button><a href="funiture.php" class="nav-link" >Add Client</a></button>
        </li>      
      </ul>      
        <form action="" method="post">
                <div class="search">
                <input type="text" name="search" class="form-control me-2" placeholder="search data" aria-label="Search">
                <button type="submit" name="submit" class="btn btn-outline-success" >search</button>           
        
                </div>
        </form>
            
    </div>
  </div>
</nav>
<!-- the end of navigation bar -->
    <div class="search">
        
        <div class="container">
            <table class="table" border="2" colore="black" solid>
                <?php
                    if (isset($_POST['submit'])) {
                        $serach = $_POST['search'];
                        $con= mysqli_connect('localhost','root','','assets');
                        $sqls = "select * from funiture where Funiture_type like'%$serach%' OR FunitureId like'%$serach%' OR
                        name like'%$serach%' OR Place_of_deployment like'%$serach%' OR Department like'%$serach%' or Person_Incharge like'%$serach%'   
                        or  ID like'%$serach%' or Date like'%$serach%' OR Contact like'%$serach%'                                  
                        ";
                        $results= mysqli_query($con, $sqls);
                        if ($results) {
                            if (mysqli_num_rows($results)>0) {
                                
                                echo '<tr> 
                                <th>Funiture Type</th>
                                <th>Funiture Id</th> 
                                <th>Name/ Desc</th>
                                <th>Place of Deployment</th>
                                <th>Department</th>
                                <th>Person Incharge</th>
                                <th>P-ID</th>
                                <th>Contact</th>
                                <th>DATE</th>
                                
                             </tr>';
                                
                            while( $row = mysqli_fetch_assoc($results))
                            {
                                ?>
                                <tr> 
                                    <td><?php echo $row['Funiture_type']?></td>  
                                    <td><a href="edit_funiture.php?data=<?php echo $row['FunitureId'] ?>"><?php echo $row['FunitureId']?> </a></td>
                                    <td><?php echo $row['name']?></td> 
                                    <td><?php echo $row['Place_of_deployment']?></td>
                                    <td> <?php echo $row['Department']?></td> 
                                    <td><?php echo $row['Person_Incharge']?></td> 
                                    <td><?php echo $row['ID']?></td> 
                                    <td><?php echo $row['Contact']?></td> 
                                    <td><?php echo $row['Date']?></td>                                     
                                </tr>;
                            
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
    
    <!-- the end of a search button and begginig of funiture data fetch -->

    <?php
    $con= mysqli_connect('localhost','root','','assets');
    $qr2 = "select * from funiture ORDER BY FunitureId DESC";
    $result1 = mysqli_query($con, $qr2);
   
    echo '<table border="2" colore="black" solid>';
    echo '<h2>FUNITURE ASSETS</h2>';
    echo '<tr> <th>Funiture Type</th>
                <th>Funiture Id</th> 
                <th>Name/ Desc</th>
                <th>Place of Deployment</th>
                <th>Department</th>
                <th>Person Incharge</th>
                <th>P-ID</th>
                <th>Contact</th>
                <th>DATE</th>
                
        </tr>';
    
   while( $row = mysqli_fetch_assoc($result1))
   {
    ?>
    <tr> 
        <td> <?php echo $row['Funiture_type']?></td> 
        <td><a href="edit_funiture.php?data=<?php echo $row['FunitureId'] ?>"><?php echo $row['FunitureId']?> </a></td>
        <td> <?php echo $row['name']?></td> 
        <td><?php echo $row['Place_of_deployment']?></td>
        <td> <?php echo $row['Department']?></td> 
        <td><?php echo $row['Person_Incharge']?></td> 
        <td><?php echo $row['ID']?></td> 
        <td><?php echo $row['Contact']?></td> 
        <td><?php echo $row['Date']?></td> 
    </tr>
   
    <?php
   }
    
   echo '</table>';
  
    ?>
</body>
</html>