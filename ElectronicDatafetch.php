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
        <button><a href="electronics.php" class="nav-link" >Add Client</a></button>
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

    <div class="search">
        <!-- <form action="" method="post">
            <input type="text" name="search" id="" placeholder="search data">
            <button type="submit" name="submit">search</button>
            <button><a href="electronics.php">Add Client</a></button>
        </form> -->
        <div class="container">
            <table class="table" border="2" colore="black" solid>
                <?php
                    if (isset($_POST['submit'])) {
                        $serach = $_POST['search'];
                        $con= mysqli_connect('localhost','root','','assets');
                        $sqls = "select * from electronics where ElectronicId like'%$serach%' OR Electronic_Type like'%$serach%' OR
                        ElectronicName like'%$serach%' OR Location like'%$serach%' OR Department like'%$serach%' or Person_Incharge like'%$serach%'   
                        or  PersonsId like'%$serach%' or Date_of_Creation like'%$serach%' OR Contact like'%$serach%'                                  
                        ";
                        $results= mysqli_query($con, $sqls);
                        if ($results) {
                            if (mysqli_num_rows($results)>0) {
                                echo '<h4>Search results</h4>';                               
                                echo '<tr> 
                                <th>Electronic Type</th>
                                <th>Electronic Id</th> 
                                <th>Electronic Name / Desc</th>
                                <th>Location</th>
                                <th>Department</th>
                                <th>Person Incharge</th>
                                <th>Persons-ID</th>
                                <th>Contact</th>
                                <th>DATE</th>
                                
                             </tr>';
                                
                            while( $row = mysqli_fetch_assoc($results))
                            {
                                ?>
                                <tr> 
                                    <td><?php echo $row['Electronic_Type']?></td>  
                                    <td><a href="electronics_edit.php?data=<?php echo $row['ElectronicId'] ?>"><?php echo $row['ElectronicId']?> </a></td>
                                    <td><?php echo $row['ElectronicName']?></td> 
                                    <td><?php echo $row['Location']?></td>
                                    <td> <?php echo $row['Department']?></td> 
                                    <td><?php echo $row['Person_Incharge']?></td> 
                                    <td><?php echo $row['PersonsId']?></td> 
                                    <td><?php echo $row['Contact']?></td> 
                                    <td><?php echo $row['Date_Of_Creation']?></td>                                     
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
    
    <!-- the end of a search button and begginig of funiture data fetch -->

    <?php
    $con= mysqli_connect('localhost','root','','assets');
    $qr2 = "select * from electronics ORDER BY ElectronicId DESC";
    $result1 = mysqli_query($con, $qr2);

    echo '<h2>Electronic Assets</h2>';
    echo '<table border="2" colore="black" solid>';

    echo '<tr> 
            <th>Electronic Type</th>
            <th>Electronic Id</th> 
            <th>Electronic Name / Desc</th>
            <th>Location</th>
            <th>Department</th>
            <th>Person Incharge</th>
            <th>Persons-ID</th>
            <th>Contact</th>
            <th>DATE</th>
                
        </tr>';
    
   while( $row = mysqli_fetch_assoc($result1))
   {
    ?>
    
    <tr> 
        
                                    <td><?php echo $row['Electronic_Type']?></td>  
                                    <td><a href="electronics_edit.php?data=<?php echo $row['ElectronicId'] ?>"><?php echo $row['ElectronicId']?> </a></td>
                                    <td><?php echo $row['ElectronicName']?></td> 
                                    <td><?php echo $row['Location']?></td>
                                    <td> <?php echo $row['Department']?></td> 
                                    <td><?php echo $row['Person_Incharge']?></td> 
                                    <td><?php echo $row['PersonsId']?></td> 
                                    <td><?php echo $row['Contact']?></td> 
                                    <td><?php echo $row['Date_Of_Creation']?></td>  
    </tr>
   
    <?php
   }
    
   echo '</table>';
  
    ?>
</body>
</html>