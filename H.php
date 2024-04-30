<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
<div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li >
                <a href="index1.php" >
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="active">
                <a href="H.php">
                    <i class="fas fa-home-lg-alt"></i>
                    <span>Housing</span>
                </a>
            </li>
            <li >
                <a href="A.php">
                    <i class="fas fa-truck"></i>
                    <span>AutoMotives</span>
                </a>
            </li>
            <li>
                <a href="E.php">
                    <i class="fas fa-laptop"></i>
                    <span>Electronics</span>
                </a>
            </li>
            <li>
                <a href="F.php">
                    <i class="fas fa-table"></i>
                    <span>Funiture</span>
                </a>
            </li>
            <li>
                <a href="O.php">
                    <i class="fas fa-anchor"></i>
                    <span>Others</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li>
                <a href="#" class="logout">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="maincontent">
        <div class="headerwrapper">
            <div class="headertitle">
                <span>Primary</span>
                <h2>Housing Assets</h2>
                
            </div>
            <button class="menu"><a class="active" href="housingAssets.php"  ><span>Add Asset</span></a></button>
            <div class="userinfo">
                <div class="searchbox">
                    <form action="" method="post">'
                    <button type="submit" name="submit" class="btn btn-outline-success" ><i class="fa-solid fa-search"></i></button>
                        <input type="text" name="search" id="" placeholder="search">
                    </form>
                </div>
                <img src="./pic.JPG" alt="" >
            </div>
        </div>
                <?php
                    if (isset($_POST['submit'])) {
                        $serach = $_POST['search'];
                        $con= mysqli_connect('localhost','root','','assets');
                        $sqls =  "select * from housing where Ownership like'%$serach%' OR HousingId like'%$serach%' OR
                        HousePurpose like'%$serach%' OR HouseLocation like'%$serach%' OR HouseOccupants like'%$serach%' or ResidentId like'%$serach%'   
                        or  ResidentName like'%$serach%' or DateOfCreaton like'%$serach%' OR ResidentContact like'%$serach%'                                  
                        ";
                        $results= mysqli_query($con, $sqls);
                        $rowcounts=mysqli_num_rows($results);
                        if ($results) {
                            if (mysqli_num_rows($results)>0) {
                                ?>
                                    <div class="tabularwrapper">
                                        <h3 class="maintitle">Search Results</h3>
                                        <div class="tablecontainer">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>OWNERSHIP</th>
                                                        <th>HOUSE ID</th> 
                                                        <th>HOUSE PURPOSE</th>
                                                        <th>LOCATION</th>
                                                        <th>OCCUPANT</th>
                                                        <th>RESIDENT ID</th>
                                                        <th>RESIDENT NAME</th>
                                                        <th>PHONE</th>
                                                        <th>DATE OF CREATION</th>                                                  
                                                    </tr>
                                                </thead>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($results)) {
                                                    ?>
                                                        <tbody>
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
                                                        </tbody>
                                                    <?php
                                                } 
                                                ?>                                                    
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="9">Total Results: <?php echo $rowcounts ?></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                <?php
                            }else {
                                ?>
                        
                                <h2 class="headertitle"> Data Not Found </h2>
                                <?php
                              
                            }
                        }
                    }
                ?>

                <!-- the end of search section for automotives and the begging of its body below  -->
                <?php
                   $con= mysqli_connect('localhost','root','','assets');
                   $qr2 = "select * from housing ORDER BY HousingId DESC";
                   $result1 = mysqli_query($con, $qr2);
               
                    $rowcountm=mysqli_num_rows($result1);
                ?>
                                    <div class="tabularwrapper">
                                        <h3 class="maintitle">House Assets</h3>
                                        <div class="tablecontainer">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>OWNERSHIP</th>
                                                        <th>HOUSE ID</th> 
                                                        <th>HOUSE PURPOSE</th>
                                                        <th>LOCATION</th>
                                                        <th>OCCUPANT</th>
                                                        <th>RESIDENT ID</th>
                                                        <th>RESIDENT NAME</th>
                                                        <th>PHONE</th>
                                                        <th>DATE OF CREATION</th> 
                                                        <th>STATUS</th>          
                                                    </tr>
                                                </thead>
                                                <?php
                                                while ($row = mysqli_fetch_assoc($result1)) {
                                                    ?>
                                                        <tbody>
                                                            <tr>
                                                                <td><?php echo $row['Ownership']?></td>  
                                                                <td><a href="housingEdit.php?data=<?php echo $row['HousingId'] ?>"><?php echo $row['HousingId']?> </a></td>
                                                                <td><?php echo $row['HousePurpose']?></td> 
                                                                <td><?php echo $row['HouseLocation']?></td>
                                                                <td> <?php echo $row['HouseOccupants']?></td> 
                                                                <td><?php echo $row['ResidentId']?></td> 
                                                                <td><?php echo $row['ResidentName']?></td> 
                                                                <td><?php echo $row['ResidentContact']?></td> 
                                                                <td><?php echo $row['DateOfCreaton']?></td> 
                                                                <td><?php echo $row['status']?></td> 

                                                            </tr>
                                                        </tbody>
                                                    <?php
                                                } 
                                                ?>                                                    
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="9">Total Results: <?php echo $rowcountm ?></td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
         
        
               
    </div>
</body>
</html>