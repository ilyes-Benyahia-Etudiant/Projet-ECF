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
        <div class="container admin">
            <div class="row">
                <h1><strong>Liste des messages </strong><!--<a href="insert.php" class="btn btn-success btn-lg"><span class="bi-plus"></span> Ajouter</a></h1>-->
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>User ID</th>
                      <th>Firstname</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Message</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                        require 'Require_DB.php';
                        $db = Database::connect();
                        $statement = $db->query('SELECT contact_form.id, contact_form.firstname, contact_form.name, contact_form.email, contact_form.phone, contact_form.message FROM contact_form');
                        while($contact = $statement->fetch()) {
                            echo '<tr>';
                            echo '<td>'. $contact['id'] . '</td>';
                            echo '<td>'. $contact['firstname'] . '</td>';
                            echo '<td>'. $contact['name'] . '</td>';
                            echo '<td>'. $contact['email'] . '</td>';
                            echo '<td>'. $contact['phone'] . '</td>';
                            echo '<td>'. $contact['message'] . '</td>';
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