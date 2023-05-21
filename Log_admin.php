<?php

    session_start(); // Démarrage de la session

    //$conn = new mysqli ("localhost","root","","login");
    $conn = mysqli_connect("localhost","u508042746_root", "Root1891","u508042746_Quai_Antique");

    $msg="";

    

    if(isset($_POST['login']))
    {
        $pseudo = $_POST['pseudo'];
        $password = $_POST['password'];
        //$password = sha1($password);
        $userType = $_POST['user_type'];

        

        $sql = "SELECT * FROM utilisateur WHERE pseudo=? AND password=? AND user_type=?";
        $stmt=$conn->prepare($sql);
        $stmt->bind_param("sss",$pseudo,$password,$userType);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array();

        session_regenerate_id();
        $_SESSION['pseudo'] = $row['pseudo'];
        $_SESSION['role'] = $row['user_type'];
        session_write_close();


        
         
    

        //if($result->num_rows==1 && $_SESSION['role']=="user"){
            //header('Location:Userpage.php');
            
            
        //}

        if($result->num_rows==1 && $_SESSION['role']=="admin"){
            header('Location: ./admin/index.php');
            
        }

        else{
            $msg = "Username or password is incorrect";
            
            
        }

    }



?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <title>Login multi user</title>
</head>

<body>
    
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
        
    <div class="container">
        <div class="center">
            <!--<div class="col-lg-5 bs-light mt-5 px-0">-->
                <h1>Login Administrateur</h1>

                <form method="POST" action="" class="p-4">

                    <div class="txt_field">
                        <label for="email">username</label>
                        <input type="pseudo" name="pseudo">
                        
                    </div>


                    <div class="txt_field">
                        <label for="password">Password</label>
                        <input type="password" name="password">
                        
                    </div>



                    <!--<div class="form-check form-check-inline">

                        <label for="userType">user</label>
                        <input class="custom-radio" type="radio" name="user_type" value="user" >
                        
                    </div>-->

                    <div class="form-check form-check-inline">
                        
                        <label class="form-check-label" for="user_type">admin</label>
                        <input class="custom-radio" type="radio" name="user_type" value="admin" checked="checked">
                    </div>



                    
                    <button class="btn btn-warning" type="submit" name="login">login</button>

                    <h5 class="text-danger text-center"><?=$msg; ?></h5>
                </form>

            </div>
        </div>
    </div>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
        *{
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          font-family: "Poppins", sans-serif;
        }
        body{
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
        .center h1{
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