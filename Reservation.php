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


    if(isset($_POST["submit"]))
    {
        $Nom = $_POST["Nom"];
        $Prenom = $_POST["Prenom"];
        $Couverts = $_POST["Couverts"];
        $date = $_POST["date"];
        $Allergique = $_POST["Allergique"];
        $message = $_POST["message"];
        $btnradio = $_POST["btnradio"];
      
    
        $sql =  ("INSERT INTO `tb_resa`(`Nom`, `Prenom`, `Couverts`, `Date`, `Allergique`, `message`, `btnradio`) VALUES (:Nom, :Prenom, :Couverts, :date, :Allergique, :message, :btnradio)");
        $stmt = $conn->prepare($sql);


        $stmt->bindParam(':Nom', $Nom);
        $stmt->bindParam(':Prenom', $Prenom);
        $stmt->bindParam(':Couverts', $Couverts);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':Allergique', $Allergique);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':btnradio', $btnradio);
            $stmt->execute();
        
    }
    
    $message = "";
    $isSuccess = false;


    if ($_SERVER["REQUEST_METHOD"]== "POST")  
    {
      
        $isSuccess = true;
    }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <!-- Bootstrap 5 JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Vanilla Datepicker JS -->
    <script src='https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.1.4/dist/js/datepicker-full.min.js'></script>
    
    <title>Reserver une table</title>
</head>
<style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Lora&family=Montserrat:ital,wght@0,400;0,500;1,400&display=swap');

    .text-center {
      font-family: 'Lora', serif;
      font-size: 30px;
      color: #906427;
    }

    .container {
      margin-top: 50px;
      margin-bottom: 50px;
    }

    label {
      display: block;
      color: white;
    }

    .btn-outline-primary {
      display: block;
      padding: 10px;
      margin: 10px;
      border-radius: 15px;
    }
    .container-fluid {
      margin-top: 30px;
      margin-left: 30px;
      margin-right: 30px;
      
    }

    .btn 
    {        
      font-size: 15px;
      font-weight: bold;
      background-color: #906427;
      font-family: 'Lora', serif;
      color: white;
    }

    .btn-group{
      margin-bottom: 30px;
    }


    .form-label {
      font-family: 'Lora', serif;
      color: #B6AC97;
    }

    .form-check-label {
      color: black;
    }

    .col-12 {
      display: flex;
      justify-content: center;
    }

    .thank-you{
      font-family: 'Hind Madurai', sans-serif;
      background-color:  #906427 ;
      color: aliceblue;
      
    }
    
    
  </style>

<body>

  <div class="container">
    <h2 class="text-center">Reserver une table</h2>
    <form class="" action="" method="post" autocomplete="off">

        <div class="mb-3 col-md-8 col-sm-4">
          <label for="" class="form-label">Nom</label>
          <input type="text" name="Nom" required value="" class="form-control"  placeholder="ecrivez votre nom">
        </div>
        <div class="mb-3 col-md-8 col-sm-4">
          <label for="" class="form-label">Prenom</label>
          <input type="text" name="Prenom" class="form-control" placeholder="ecrivez votre prenom">
        </div>

        <div class="row">
          <div class=" col mb-3 col-md-8 col-sm-4">
            
            <select class="form-select" id="autoSizingSelect" name="Couverts">
              <option selected>Nombre de couverts</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              
            </select>
          </div>
        </div>  

        <div class="row">
          <div class=" col mb-3 col-2">
            <label for="" class="form-label">Date</label>
            <input type="date" name="date" value="date" required value="">
              
          </div>
        </div>  

        <label for="" class="form-label">Avez-vous des allergies ?</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Allergique" value="oui"  id="inlineRadio1"  required>
          <label class="form-check-label" for="inlineRadio1">oui</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="Allergique" value="non" id="inlineRadio2" > 
          <label class="form-check-label" for="inlineRadio2">non</label>
        </div>
        <div class="mb-3 col-md-8 col-sm-4">
          <label for="message" class="form-label">Quel est votre allergie ?</label>
          <textarea class="form-control" name="message" id="message" placeholder="Mentionnez votre allergie" rows="3"><?PHP echo $message; ?></textarea>
        </div>
  
        <div>
          <div>
            <div>
              <label for="" class="form-label">Midi</label>
              <div class="btn-group  d-flex align-content-start flex-wrap" role="group" aria-label="Basic radio toggle button group">
                
                
                <input type="radio" class="btn-check" name="btnradio" value="12h00" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">12h00</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="12h15" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">12h15</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="12h30" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3">12h30</label>

                <input type="radio" class="btn-check" name="btnradio" value="12h45" id="btnradio4" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio4">12h45</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="13h00" id="btnradio5" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio5">13h00</label>

                <input type="radio" class="btn-check" name="btnradio" value="13h15" id="btnradio6" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio6">13h15</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="13h30" id="btnradio7" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio7">13h30</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="13h45" id="btnradio8" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio8">13h45</label>

                <input type="radio" class="btn-check" name="btnradio" value="14h00" id="btnradio9" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio9">14h00</label>
              
              </div>

              <label for="" class="form-label">Soir</label>
              <div class="btn-group  d-flex align-content-start flex-wrap" role="group" aria-label="Basic radio toggle button group">
                
                
                <input type="radio" class="btn-check" name="btnradio" value="19h00" id="btnradio10" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio10">19h00</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="19h15" id="btnradio11" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio11">19h15</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="19h30" id="btnradio12" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio12">19h30</label>

                <input type="radio" class="btn-check" name="btnradio" value="19h45" id="btnradio13" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio13">19h45</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="20h00" id="btnradio14" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio14">20h00</label>

                <input type="radio" class="btn-check" name="btnradio" value="20h15" id="btnradio15" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio15">20h15</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="20h30" id="btnradio16" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio16">20h30</label>
              
                <input type="radio" class="btn-check" name="btnradio" value="20h45" id="btnradio17" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio17">20h45</label>

                <input type="radio" class="btn-check" name="btnradio" value="21h00" id="btnradio18" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio18">21h00</label>
              
              </div>
            </div>
          </div>  

          <div class="col-12">
            <button class="btn btn-success" type="submit" name="submit">Reserver</button>
          </div>  

        </div>

      </div>

      <p class="thank-you text-center" style="display:<?php if($isSuccess) echo 'block'; else echo 'none'; ?>">Votre message a bien été envoyé. Merci de m'avoir contacté !</p>
    </form>

  </div>
  <style>
    

  </style>  

</body>
</html>