<?php
    //$bdd = new PDO('mysql:host=localhost;dbname=contact_db; charset=utf8', 'root', '');
    $con=mysqli_connect("localhost","u508042746_root","Root1891","u508042746_Quai_Antique"); 
    session_start();
    if(!$_SESSION['user']){
        header('Location:index.php');
    }

    $query = " select * from contact_form ";
    $result = mysqli_query($con,$query);

    
        
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Afficher les membres</title>
     
</head>
<body>

    <div class="container">
            <h1 class="text-logo"><span class="bi-shop"></span> Restaurant Quai Antique - Panel Admin <span class="bi-shop"><a href="./deconnexionAdmin.php" class="btn btn-danger btn-lg">Déconnexion</a></span></h1>
            <h2>Messages :</h2>
            <button type="button" class="btn btn-warning btn-lg"><a href="index.php">Produits/Menu</a></button>
            <button type="button" class="btn btn-warning btn-lg"><a href="membres.php">Afficher  les Membres</a></button>
            <button type="button" class="btn btn-warning btn-lg"><a href="reservation.php">Afficher les Reservations</a></button>
    </div>
    <div class="container">
        
        <table class="table table-striped">
            <tr>
                <th scope="col"> User ID        </th>
                <th scope="col"> Firstname   </th>
                <th scope="col"> Name    </th>
                <th scope="col"> Email     </th>
                <th scope="col"> Phone    </th>
                <th scope="col"> Message     </th>
                <th scope="col"> Edit           </th>
                <th scope="col"> Delete         </th>
            </tr>

            <?php 
                    
                while($row=mysqli_fetch_assoc($result))
                {
                $UserID = $row['id'];
                $UserFirstname = $row['firstname'];
                $UserName = $row['name'];
                $UserEmail = $row['email'];
                $UserPhone = $row['phone'];
                $UserMessage  = $row['message'];
               
            ?>
                <tr>
                    <td><?php echo $UserID ?>    </td>
                    <td><?php echo $UserFirstname ?></td>
                    <td><?php echo $UserName ?> </td>
                    <td><?php echo $UserEmail ?>  </td>
                    <td><?php echo $UserPhone ?>  </td>
                    <td><?php echo $UserMessage ?>  </td>
                    <td><a href="#"><button type="button" class="btn btn-secondary">Edit</button></td>
                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                </tr>        
            <?php 
                }  
            ?>                                                                    
                        
        </table>
            
            
    </div>


    
</body>
</html>