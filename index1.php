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
            <li class="active">
                <a href="index1.php" >
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
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
    <?php
        $con= mysqli_connect('localhost','root','','assets');
        $sql1 =  "select * from others";
        $sqlo =  "select * from others where status='Spoilt'";
        $results= mysqli_query($con, $sql1);
        $rowcounto=mysqli_num_rows($results);
        $sql2 =  "select * from electronics";
        $sqle =  "select * from electronics where status='Spoilt'";
        $results= mysqli_query($con, $sql2);
        $rowcounte=mysqli_num_rows($results);
        $sql3 =  "select * from funiture";
        $sqlf =  "select * from funiture where status='Spoilt'";
        $results= mysqli_query($con, $sql3);
        $rowcountf=mysqli_num_rows($results);
        $sql4 =  "select * from motives";
        $sqlm =  "select * from motives where status='Spoilt'";
        $results= mysqli_query($con, $sql4);
        $rowcountm=mysqli_num_rows($results);
        $sql5 =  "select * from housing";
        $sqlh =  "select * from housing where status='Spoilt'";
        $results= mysqli_query($con, $sql5);
        $rowcounth=mysqli_num_rows($results);


    ?>

    <div class="maincontent">
        <div class="headerwrapper">
            <div class="headertitle">
                <span>Primary</span>
                <h2>Dashboard</h2>
            </div>
            <div class="userinfo">
                <div class="form">
                    <form action="" method="post">
                        <div class="searchbox">
                            <i class="fa-solid fa-search"></i>
                            <input type="text" name="search" id="" placeholder="search">
                        </div>
                    </form>
                </div>
                <img src="./pic.JPG" alt="" >
            </div>
        </div>

        <div class="cardcontainer">
            <h3 class="maintitle">Asset Summary</h3>
            <div class="cardwrapper">
                <div class="paymentcard light_red">
                    <div class="cardheader">
                        <div class="amount">
                            <span class="title">
                                AutoMotives
                            </span>
                            <span class="amountvalue">
                               <?php echo $rowcountm ?>
                            </span>
                        </div>
                        <i class="fas fa-truck icon"></i>
                    </div>
                    <span class="card_detail">
                    Trucks, cycles, automobile...
                    </span>
                </div>
                <div class="paymentcard light_red">
                    <div class="cardheader">
                        <div class="amount">
                            <span class="title">
                                Spoilt Assets
                            </span>
                            <span class="amountvalue">
                               <?php echo $rowcountsa ?>
                            </span>
                        </div>
                        <i class="fas fa-truck icon"></i>
                    </div>
                    <span class="card_detail">
                    Trucks, cycles, automobile...
                    </span>
                </div>
                <!-- the second card starts here -->
                <div class="paymentcard light_blue">
                    <div class="cardheader">
                        <div class="amount">
                            <span class="title">
                                Funiture
                            </span>
                            <span class="amountvalue">
                            <?php echo $rowcountf ?>
                            </span>
                        </div>
                        <i class="fas fa-table icon dark_blue"></i>
                    </div>
                    <span class="card_detail">Tables, desks, chairs etc..</span>
                </div>
                <!-- the third card starts here -->
                <div class="paymentcard light_green">
                    <div class="cardheader">
                        <div class="amount">
                            <span class="title">
                                Electronics
                            </span>
                            <span class="amountvalue">
                            <?php echo $rowcounte ?>
                            </span>
                        </div>
                        <i class="fas fa-laptop icon dark_green"></i>
                    </div>
                    <span class="card_detail">Computers cameras, printers etc</span>
                </div>
                <!-- the fourth card starts here -->
                <div class="paymentcard light_purple">
                    <div class="cardheader">
                        <div class="amount">
                            <span class="title">
                                Others
                            </span>
                            <span class="amountvalue">
                            <?php echo $rowcounto ?>
                            </span>
                        </div>
                        <i class="fas fa-anchor icon dark_purple"></i>
                    </div>
                    <span class="card_detail">Land, utenciles, etc </span>
                </div>
                <div class="paymentcard light_purple">
                    <div class="cardheader">
                        <div class="amount">
                            <span class="title">
                                Housing
                            </span>
                            <span class="amountvalue">
                            <?php echo $rowcounth ?>
                            </span>
                        </div>
                        <i class="fas fa-home icon dark_green"></i>
                    </div>
                    <span class="card_detail">Only houses both rental  and permanent </span>
                </div>
            </div>            
        </div> 
       
        
        <div class="tabularwrapper">
            <h3 class="maintitle">SPOILT ASSETS</h3>
            <form action="" method="POST">'
                    <?php
                       
                    ?>
                    <i class="fa-solid fa-search">
                    </i>
                    <label for="">Choose Table:  
                        <script>
                            function choices(){
                                choice= document.getElementById("selct").value;                                
                            }
                        </script>
                    <select name="search" id="selct" onchange="choices();">
                        <option>funiture</option>                    
                        <option  >electronics</option>
                        <option >housing</option>
                        <option >motives</option>
                        <option >others</option>
                    </select>
                    </label>
                    <button type="submit" name="submit" class="btn btn-outline-success" >search</button>
            </form>
            <div class="tablecontainer">
                <table>                    
                    <?php
                    if (isset($_POST['submit'])) {
                        $search = $_POST['search'];
                         $electronic=mysqli_query($con, "select * from electronics where status='Spoilt'");
                        $se=mysqli_num_rows($electronic);
                        $funiture=mysqli_query($con, "select * from funiture where status='Spoilt'");
                        $sf=mysqli_num_rows($funiture);
                        $others=mysqli_query($con, "select * from others where status='Spoilt'");
                        $so=mysqli_num_rows($others);
                        $motives=mysqli_query($con, "select * from motives where status='Spoilt'");
                        $sm=mysqli_num_rows($motives);
                        $housing=mysqli_query($con, "select * from housing where status='Spoilt'");
                        $sh=mysqli_num_rows($housing);
                        $rowcountsa= $se+$sf+$sh+$sm+$so;
    
                                if ($electronic) {
                                    ?>
                                        <thead>
                                                    <tr>
                                                        <th>Electronic Type</th>
                                                        <th>Electronic Id</th> 
                                                        <th>Name | Description</th>
                                                        <th>Location</th>
                                                        <th>Department</th>
                                                        <th>Person Incharge</th>
                                                        <th>Person's-ID</th>
                                                        <th>Contact</th>
                                                        <th>Date</th> 
                                                        <th>Status</th>  
                                                    </tr>
                                        </thead>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($electronic)) {
                                        ?>                                            
                                            <tbody>
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
                                                    <td><?php echo $row['status']?></td>
                                                </tr>
                                            </tbody>
                                        <?php
                                    }
                                }elseif ($funiture) {
                                        ?>
                                                <thead>
                                                    <tr>
                                                        <th>Funiture Type</th>
                                                        <th>Funiture Id</th> 
                                                        <th>Name/ Desc</th>
                                                        <th>Place of Deployment</th>
                                                        <th>Department</th>
                                                        <th>Person Incharge</th>
                                                        <th>P-ID</th>
                                                        <th>Contact</th>
                                                        <th>DATE</th>
                                                        <th>Status</th>           
                                                    </tr>
                                                </thead>
                                            <?php
                                    while ($row = mysqli_fetch_assoc($funiture)) {
                                        ?>
                                            <tbody>
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
                                                    <td><?php echo $row['status']?></td>   
                                                </tr>
                                            </tbody>
                                        <?php
                                    } 
                                }elseif ($housing) {
                                    ?>
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
                                    while ($row = mysqli_fetch_assoc($housing)) {
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
                                }elseif ($others) {
                                    ?>
                                    <thead>
                                                    <tr>
                                                        <th>NAME/ DESCRIPTION</th>
                                                        <th>ASSET ID</th>                                
                                                        <th>Place_of_deployment</th>
                                                        <th>Department</th>
                                                        <th>Person Incharge</th>
                                                        <th>Persons-ID</th>
                                                        <th>Contact</th>
                                                        <th>DATE</th>
                                                        <th>STATUS</th>
                                                    <tr>
                                        </thead>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($others)) {
                                        ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row['Name']?></td>  
                                                    <td><a href="otherAssets_edit.php?data=<?php echo $row['ID'] ?>"><?php echo $row['ID']?> </a></td>                                     
                                                    <td><?php echo $row['Place_of_deployment']?></td>
                                                    <td> <?php echo $row['Department']?></td> 
                                                    <td><?php echo $row['PersonIncharge']?></td> 
                                                    <td><?php echo $row['PersonId']?></td> 
                                                    <td><?php echo $row['Contact']?></td> 
                                                    <td><?php echo $row['Date']?></td> 
                                                    <td><?php echo $row['status']?></td>   

                                                </tr>
                                            </tbody>
                                        <?php
                                    } 
                                }elseif ($motives) {
                                    ?>
                                        <thead>
                                                    <tr>
                                                        <th>NAME / DESCRIPTION</th>
                                                        <th>ASSET ID</th>                                
                                                        <th>PLACE OF DEPLOYMENT</th>
                                                        <th>DEPARTMENT</th>
                                                        <th>PERSON INCHARGE</th>
                                                        <th>PERSON's-ID</th>
                                                        <th>CONTACT</th>
                                                        <th>DATE</th>
                                                    </tr>
                                        </thead>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($motives)) {
                                        ?>
                                            
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $row['Name']?></td>  
                                                    <td><a href="AutoMotives_edit.php?data=<?php echo $row['ID'] ?>"><?php echo $row['ID']?> </a></td>                                     
                                                    <td><?php echo $row['Place_of_deployment']?></td>
                                                    <td> <?php echo $row['Department']?></td> 
                                                    <td><?php echo $row['PersonIncharge']?></td> 
                                                    <td><?php echo $row['PersonId']?></td> 
                                                    <td><?php echo $row['Contact']?></td> 
                                                    <td><?php echo $row['Date']?></td>
                                                </tr>
                                            </tbody>
                                        <?php
                                    } 
                                }else {
                                    echo"NO match found";
                                }
                    }
                    ?>
                    <tfoot>
                        <tr>
                            <td colspan="7">Total: <?php $rowcounts ?></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
               
    </div>
</body>
</html>