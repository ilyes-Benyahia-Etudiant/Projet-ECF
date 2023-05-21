<?php

    define('HOST', 'localhost');
    define('DB_NAME', 'u508042746_Quai_Antique');
    define('USER', 'u508042746_root');
    define('PASS', 'Root1891');


    $isSuccess = false;

    try 
    {
        $conn = new PDO ("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS,);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } 


    catch (PDOException $e) 
    {
        echo $e;
    }

    
    if (isset($_POST['envoyer']))
    {
        $firstname = $_POST['firstname'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        
        $sql = ("INSERT INTO `contact_form`(`firstname`, `name`, `email`, `phone`, `message`) VALUES (:firstname, :name, :email, :phone, :message)");
        $stmt = $conn->prepare($sql);
        
        
        $stmt->bindParam(':firstname', $firstname);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':message', $message);
            $stmt->execute();
        
    }

    if ($_SERVER["REQUEST_METHOD"]== "POST")  
    {
        $firstname = verifyInput($_POST["firstname"]);
        $name = verifyInput($_POST["name"]);
        $email = verifyInput($_POST["email"]);
        $phone = verifyInput($_POST["phone"]);
        $message = verifyInput($_POST["message"]);
        $isSuccess = true;

        if(empty($firstname))
        {
            $firstnameError = "Veuillez saisir votre Prenom";
            $isSuccess = false;
        }

        
        if(empty($name))
        {
            $nameError = "Veuillez saisir votre Nom";
            $isSuccess = false;
        }

        if(empty($email))
        {
            $emailError = "Veuillez saisir votre email";
            $isSuccess = false;
        }

        if(empty($phone))
        {
            $phoneError = "Veuillez saisir votre Telephone";
            $isSuccess = false;
        }

        if(empty($message))
        {
            $messageError = "Veuillez saisir votre message";
            $isSuccess = false;
        }

        if(!isEmail($email))
        {
            $emailError = "Veuillez saisir un email valide !";
            $isSuccess = false;
        }

        if(!isPhone($phone))
        {
            $phoneError = "Veuillez saisir un numero valide !";
            $isSuccess = false;
        }

        if($isSuccess)
        {
            // Envoi email
        }
    }

    function isEmail($var)
    {
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }

    function isPhone($var)
    {
        return preg_match("/^[0-9 ]*$/", $var);
    }


    function verifyInput($var)
    {
        $var = trim($var);
        $var = stripslashes($var);
        $var = htmlspecialchars($var);

        return $var;
    }


?>


<!DOCTYPE html>
<html>
<head>

    <title>Contactez-moi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>-->
     <!-- Liens Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    
    <link rel="stylesheet" href="./CSS/styleContact.css">

</head>
<body>
        <!--START  Header-->

        <header >
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                
                <img src="./images/logo.png" alt="Logo" width="250" height="100" class="d-inline-block align-text-top">
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Acceuil</a>
                        </li>

                        <form class="d-flex" class= "auto mb-2 mb-lg-0" id="reserver">
                            <button class="btn btn-outline-success" type="submit"><a href="ConnexionIndex.php">Connexion</a></button>
                        </form>
                    </ul>
                </div>
                
            </div>
            
        </nav>
        
    </header>

    <!--END  Header-->

        <div class="container">
            <div class="divider"></div>
            <div class="container">
                <h2>Contactez-moi</h2>
            </div>
            <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER ['PHP_SELF']); ?>" role="form">
                <div class="row">
                    <div class="col-lg-6">
                        <label for="firstname" class="form-label">Prénom <span class="blue">*</span></label>
                        <input id="firstname" type="text" name="firstname" class="form-control" placeholder="Votre prénom" value="<?PHP echo $firstname; ?>">
                        <p class="comments"><?php echo $firstnameError; ?></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="name" class="form-label">Nom <span class="blue">*</span></label>
                        <input id="name" type="text" name="name" class="form-control" placeholder="Votre Nom" value="<?PHP echo $name; ?>">
                        <p class="comments"><?php echo $nameError; ?></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="email" class="form-label">Email <span class="blue">*</span></label>
                        <input id="email" type="text" name="email" required class="form-control" placeholder="Votre Email">
                        <p class="comments"><?php echo $emailError; ?></p>
                    </div>
                    <div class="col-lg-6">
                        <label for="phone" class="form-label">Téléphone</label>
                        <input id="phone" type="text" name="phone" required class="form-control" placeholder="Votre Téléphone" value="<?PHP echo $phoneError; ?>">
                        <p class="comments"><?php echo $phoneError; ?></p>
                    </div>
                    <div>
                        <label for="message" class="form-label">Message <span class="blue">*</span></label>
                        <textarea id="message" name="message" class="form-control" placeholder="Votre Message" rows="4"><?PHP echo $message; ?></textarea>
                        <p class="comments"><?php echo $messageError; ?></p>
                    </div>
                    <div>
                        <p class="brown"><strong>* Ces informations sont requises.</strong></p>
                    </div>
                    <div>
                        <input type="submit" class="button1" value="Envoyer" name="envoyer">
                    </div>    
                </div>
                <p class="thank-you" style="display:<?php if($isSuccess) echo 'block'; else echo 'none'; ?>">Votre message a bien été envoyé. Merci de m'avoir contacté !</p>
                
            </form>
        </div>
</body>
</html>