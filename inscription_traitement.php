<?php 

    //require_once 'config.php'; // On inclu la connexion à la bdd

    define('HOST', 'localhost');
    define('DB_NAME', 'u508042746_Quai_Antique');
    define('USER', 'u508042746_root');
    define('PASS', 'Root1891');

    //$isSuccess = false;

    try 
    {
        $conn = new PDO ("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS,);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } 


    catch (PDOException $e) 
    {
        echo $e;
    }

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_retype']))
    {
        // Patch XSS
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);

        // On vérifie si l'utilisateur existe
        $check = $conn->prepare('SELECT pseudo, email, password FROM utilisateur WHERE email = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();

        $email = strtolower($email); // on transforme toute les lettres majuscule en minuscule pour éviter que Foo@gmail.com et foo@gmail.com soient deux compte différents ..
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen($pseudo) <= 100){ // On verifie que la longueur du pseudo <= 100
                if(strlen($email) <= 100){ // On verifie que la longueur du mail <= 100
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            //$cost = ['cost' => 12];
                            //$password = password_hash($password, PASSWORD_BCRYPT, $cost);

                            //$options = ['cost' => 12];
                            //$hashpass = password_hash($password, PASSWORD_BCRYPT, $options);

                            
                            // On stock l'adresse IP
                            //$ip = $_SERVER['REMOTE_ADDR']; 
                            
                            // On insère dans la base de données
                            $insert = $conn->prepare('INSERT INTO utilisateur(pseudo, email, password) VALUES(:pseudo, :email, MD5(:password))');
                            $insert->execute(array(
                                'pseudo' => $pseudo,
                                'email' => $email,
                                'password' => $password,
                                //'ip' => $ip,
                                
                            ));
                            // On redirige avec le message de succès
                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                    }else{ header('Location: inscription.php?reg_err=email'); die();}
                }else{ header('Location: inscription.php?reg_err=email_length'); die();}
            }else{ header('Location: inscription.php?reg_err=pseudo_length'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }
?>