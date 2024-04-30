<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>seacrh data</title>
</head>
<body>
    <div class="search">
        <form action="" method="post">
            <input type="text" name="search" id="" placeholder="search data">
            <button type="submit" name="submit">search</button>
        </form>
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
                                    '<td><a href="edit.php?data=<?php echo $row['HousingId'] ?>"><?php echo $row['HousingId']?> </a></td>'
                                    <td><?php echo $row['HousePurpose']?></td> 
                                    <td><?php echo $row['HouseLocation']?></td>
                                    <td> <?php echo $row['HouseOccupants']?></td> 
                                    <td><?php echo $row['ResidentId']?></td> 
                                    <td><?php echo $row['ResidentName']?></td> 
                                    <td><?php echo $row['ResidentContact']?></td> 
                                    <td><?php echo $row['DateOfCreaton']?></td>                                     
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
</body>
</html>