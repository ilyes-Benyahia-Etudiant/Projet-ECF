<html>
    <head>
        <title>Burger Code</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="../CSS/Admin.css">
    </head>
<body>
        <div class="container">
            <h1 class="text-logo"><span class="bi-shop"></span> Restaurant Quai Antique - Panel Admin <span class="bi-shop"><a href="./deconnexionAdmin.php" class="btn btn-danger btn-lg">Déconnexion</a></span></h1>
            <h2>Membres inscrits :</h2>
            <button type="button" class="btn btn-warning btn-lg"><a href="index.php">Produits/Menu</a></button>
            <button type="button" class="btn btn-warning btn-lg"><a href="messages.php">Afficher les Messages</a></button>
            <button type="button" class="btn btn-warning btn-lg"><a href="reservation.php">Afficher les Reservations</a></button>
        </div>

        <div class="container admin">
            <div class="row">
                <h1><strong>Liste des membres </strong><!--<a href="insert.php" class="btn btn-success btn-lg"><span class="bi-plus"></span> Ajouter</a></h1>-->
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>User Pseudo</th>
                      <th>User Email</th>
                      <th>User Date</th>
                      <!--<th>Phone</th>
                      <th>Message</th>-->
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        require 'Require_DB.php';
                        $db = Database::connect();
                        $statement = $db->query('SELECT utilisateur.id, utilisateur.pseudo, utilisateur.email, utilisateur.date_time FROM utilisateur');
                        while($membres = $statement->fetch()) {
                            echo '<tr>';
                            echo '<td>'. $membres['id'] . '</td>';
                            echo '<td>'. $membres['pseudo'] . '</td>';
                            echo '<td>'. $membres['email'] . '</td>';
                            echo '<td>'. $membres['date_time'] . '</td>';
                            
                            echo '</td>';
                            echo '</tr>';
                        }
                        Database::disconnect();
                      ?>
                  </tbody>
                </table>
            </div>
        </div>
</body>
</html>