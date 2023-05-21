
            
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    <title>Log</title>
</head>
<body>

    <?php 
        session_start(); // Démarrage de la session
        //require_once 'config.php'; // On inclut la connexion à la base de données

        define('HOST', 'localhost');
        define('DB_NAME', 'u508042746_Quai_Antique');
        define('USER', 'u508042746_root');
        define('PASS', 'Root1891');

        //define('HOST', 'localhost');
        //define('DB_NAME', 'contact_db');
        //define('USER', 'root');
        //define('PASS', '');

        

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
            $email = $_POST["email"];
            $password = $_POST["password"];
            
            if($email != "" && $password !=="")
            {
                $req = $conn->query("SELECT * FROM utilisateur WHERE email = '$email' AND password = '$password'");
                $rep = $req->fetch();
                
                
                
                if($rep['pseudo'] != false) {
                    // ok !
                    $_SESSION['user'] = $rep['pseudo'];
                    header('Location: Userpage.php');
                }   
                else {
                    $error_msg = "erreur !";
                }
            }

            //if($_GET['admin'] !== 'amdin')
            //{
                //$_SESSION['id'] = 1;
                //header('Location: ./admin/index.php');

            //}
            
            
            
           
            
            
        }
        
        
        
    ?>



        <!--<form method="POST" action="">
            <div class="mb-3">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email">
                
            </div>
            <div class="mb-3">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
            </div>
            
            <button type="submit" value="Se connecter" name="ok">Submit</button>
        </form>
        
        <li class="nav-item">
        <a class="nav-link" href="Log_admin.php">Admin</a>
        </li>
        <p class="text-center"><a href="inscription.php">Inscription</a></p>-->
    
        <Header>
            <nav class="navbar navbar-expand-lg ">
                <div class="container-fluid">
                    
                    <a class="navbar-brand" href="#"><img src="./images/logo.png" alt="Logo" width="250" height="100" class="d-inline-block align-text-top"></a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="index.php">Acceuil</a>
                            </li>
                            
                        </ul>
                    </div>
                    
                </div>
                
            </nav>
        </Header>
    
        <div class="center">
            <form method="POST" action="">
                    <h2>Connexion</h2>
                    <span></span>
                    <div class="txt_field">
                        <label for="email">Email address</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <span></span>
                    
                    <div class="txt_field">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <span></span>
                    <button class="btn btn-primary" type="submit" value="Se connecter"  name="ok">Connexion</button>
            </form>
            <div class="signup_link">
                <p><a href="inscription.php">Inscription</a></p>
            </div>
            <!--<p><a href="inscription.php">Inscription</a></p>-->
            <span class="badge rounded-pill text-bg-warning"><a class="nav-link" href="Log_admin.php">Admin</a></span>
        </div>
    
    

    <style>

        @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Lora&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap');
        
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
        }
        .body{
        margin: 0;
        padding: 0;
        /*background: linear-gradient(120deg,#2980b9, #8e44ad);*/
        height: 100vh;
        overflow: hidden;
        }
        .center{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 400px;
        background: white;
        border-radius: 10px;
        box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
        }
        .center h2{
        text-align: center;
        padding: 20px 0;
        border-bottom: 1px solid silver;
        }
        .center form{
        padding: 0 40px;
        box-sizing: border-box;
        }
        form .txt_field{
        position: relative;
        border-bottom: 2px solid #adadad;
        margin: 30px 0;
        }
        .txt_field input{
        width: 100%;
        padding: 0 5px;
        height: 40px;
        font-size: 16px;
        border: none;
        background: none;
        outline: none;
        }
        /*.txt_field label{
        position: absolute;
        top: 50%;
        left: 5px;
        color: #adadad;
        transform: translateY(-50%);
        font-size: 16px;
        pointer-events: none;
        transition: .5s;
        }*/
        .txt_field span::before{
        content: '';
        position: absolute;
        top: 40px;
        left: 0;
        width: 0%;
        height: 2px;
        background: #2691d9;
        transition: .5s;
        }
        .txt_field input:focus ~ label,
        .txt_field input:valid ~ label{
        top: -5px;
        color: #2691d9;
        }
        .txt_field input:focus ~ span::before,
        .txt_field input:valid ~ span::before{
        width: 100%;
        }
        .pass{
        margin: -5px 0 20px 5px;
        color: #a6a6a6;
        cursor: pointer;
        }
        .pass:hover{
        text-decoration: underline;
        }
        input[type="submit"]{
        width: 100%;
        height: 50px;
        border: 1px solid;
        background: #2691d9;
        border-radius: 25px;
        font-size: 18px;
        color: #e9f4fb;
        font-weight: 700;
        cursor: pointer;
        outline: none;
        }
        input[type="submit"]:hover{
        border-color: #2691d9;
        transition: .5s;
        }
        .signup_link{
        margin: 30px 0;
        text-align: center;
        font-size: 16px;
        color: #666666;
        }
        .signup_link a{
        color: #2691d9;
        text-decoration: none;
        }
        .signup_link a:hover{
        text-decoration: underline;
        }

            
    </style>
    
    


</body>
</html>

