<?php 
    session_start(); // Démarrage de la session
    

    define('HOST', 'localhost');
    define('DB_NAME', 'u508042746_Quai_Antique');
    define('USER', 'u508042746_root');
    define('PASS', 'Root1891');

    
    try 
    {
        $conn = new PDO ("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS,);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } 


    catch (PDOException $e) 
    {
        echo $e;
    }

    
    
    //if(isset($_POST['email']) && isset($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
    if ($_SERVER["REQUEST_METHOD"]== "POST")  
    {
        $pseudo_administrateur = "admin";
        $password_administrateur = "admin$";

        // Patch XSS
        $email = htmlspecialchars($_POST['email']); 
        $password = htmlspecialchars($_POST['password']);
        
        
        
        
        // On regarde si l'utilisateur est inscrit dans la table utilisateurs
        //$check = $conn->prepare('SELECT pseudo, email, password FROM utilisateur WHERE email = ? ');
        $check = $conn->prepare('SELECT pseudo, email, password FROM `utilisateur` WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        
        


        // Si > à 0 alors l'utilisateur existe
        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                //password_hash('sha256', $password);
                
                if($data['password'] === $password)
                {
                    $_SESSION['user'] = $data['pseudo'];
                    header('Location: landing.php');
                }else header('Location: Connexion_Index?login_err=password');
            }else header('Location: Connexion_Index?login_err=email');
        }else header('Location: Connexion_Index?login_err=already');

        if($data['pseudo'] == $pseudo_administrateur AND $data['password'] === $password_administrateur)
        {
            $_SESSION['user'] = $data['pseudo'];
            header('Location: ./admin/index.php');

        }
         
    }else header('Location: Connexion_Index.php');

?>
            
        