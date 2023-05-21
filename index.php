<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Restaurant Quai Antique</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <link rel="stylesheet" href="Home.css">

  <!-- Liens Bootsrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="./CSS/Acceuil.css">
  <link rel="stylesheet" href="./CSS/Menu.css">
  <link rel="stylesheet" href="./CSS/Gallerie.css">
  <link rel="stylesheet" href="./CSS/Avis.css">
      
  

</head>

<body>
  
    <!--START  Header-->

    <header >
        <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
                
                <a class="navbar-brand" href="#"><img src="./images/logo.png" alt="Logo" width="250" height="100" class="d-inline-block align-text-top"></a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#Acceuil">Acceuil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Menu">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Gallerie">Gallerie</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Avis">Avis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Contact.php">Contact</a>
                        </li>
                        
                        
                        

                        <form class="d-flex" class= "auto mb-2 mb-lg-0" id="reserver">
                            <button class="btn btn-light" type="submit"><a href="Testlog.php">Connexion</a></button>
                        </form>
                    </ul>
                </div>
                
            </div>
            
        </nav>
        
    </header>

    <!--END  Header-->


    <section class="home" id="home"> 
          <!-- Swiper -->
            
            <h1 class="text-center">Nos plats specials</h1>
          <div class="swiper mySwiper">
            <div class="swiper-wrapper">

              <div class="swiper-slide">
                <div class="content">
                    
                    <h2>Spicy noodles</h2>
                    <p id="swiper">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                    
                </div>
                <div class="image">
                    <img src="https://img.freepik.com/free-photo/chicken-steak-with-lemon-tomato-chili-carrot-white-plate_1150-25887.jpg?size=626&ext=jpg">
                </div>
              </div>

              <div class="swiper-slide">
                <div class="content">
                    
                    <h2>Spicy noodles</h2>
                    <p id="swiper">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                    
                </div>
                <div class="image">
                    <img src="https://img.freepik.com/free-photo/chicken-steak-with-lemon-tomato-chili-carrot-white-plate_1150-25887.jpg?size=626&ext=jpg">
                </div>
              </div>

              <div class="swiper-slide">
                <div class="content">
                    
                    <h2>Spicy noodles</h2>
                    <p id="swiper">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati fugit dolores dolorem suscipit voluptatibus</p>
                    
                </div>
                <div class="image">
                    <img src="https://img.freepik.com/free-photo/chicken-steak-with-lemon-tomato-chili-carrot-white-plate_1150-25887.jpg?size=626&ext=jpg">
                </div>
              </div>

            </div>


            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
        
        <!-- Swiper JS -->
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="./JS/Script.js"></script>
        
    </section>  

    <hr class="divider"/>

    <!--Menu Carte-->

    <section id="Menu">
        <div class="card text-center">
            <div class="card-header">
               <h3>Menu</h3>
            </div>
            <div class="card-body">
              <h5 class="card-title">Formule Diner</h5>
              <p class="card-text">(Du Lundi au Samedi midi)</p>
              <p class="card-text">Entree + Plat + Dessert 20£</p>
              
            </div>
            <div class="card-body">
                <h5 class="card-title">Formule Dejeuner</h5>
                <p class="card-text">(Du Lundi au Samedi midi)</p>
                <p class="card-text">Entree + Plat ou Plat + Dessert 16£</p>
                
              </div>
            <div class="card-footer text-body-secondary">
               <!-- <a href="#" class="btn btn-primary">Go somewhere</a>-->
                <form class= "auto mb-2 mb-lg-0" id="Contact">
                    <button class="btn btn-outline-success" type="submit"><a href="./Reservation.php">Reserver</a></button>
                </form>
            </div>
        </div>
    </section>
    
    <hr class="divider"/>

    <!--Gallerie-->
    
    <section class="gallery" id="Gallerie">

        <div class="text-center">
            <h5 >Gallerie </h5>
            <p> inscris toi et connecte toi pour Découvre d'avantage nos menu avec les nouveautées et profitez de nombreux d'avantages ! </p>
        </div>   

        <div class="container">
            <div class="row">
                <div class="gallery-filter">
                    <span class="filter-item active" data-filter="all">All</span>
                    <span class="filter-item" data-filter="burgers">Burgers</span>
                    <span class="filter-item" data-filter="snacks">Snacks</span>
                    <span class="filter-item" data-filter="salade">Salade</span>
                    <span class="filter-item" data-filter="boissons">Boissons</span>
                    <span class="filter-item" data-filter="dessert">Dessert</span>
                    
                </div>
            </div>
    
            <div class="tab-content">
    
                <!-- Burgers gallery item start -->
    
                <div class="tab-pane fade show active" id="tab2" role="tabpanel">
                    <div class="row">
                        <div class="gallery-item burgers">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/b1.png" class="img-fluid" alt="...">
                                        <div class="price">5.90 €</div>
                                        <div class="caption">
                                            <h4>Classic</h4>
                                            <p>Sandwich: Burger, Salade, Tomate, Cornichon</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item burgers">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/b3.png" class="img-fluid" alt="...">
                                        <div class="price">6.90 €</div>
                                        <div class="caption">
                                            <h4>Big</h4>
                                            <p>Sandwich: Double Burger, Fromage, Cornichon, Salade</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item burgers">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/b4.png" class="img-fluid" alt="...">
                                        <div class="price">5.90 €</div>
                                        <div class="caption">
                                            <h4>Chicken</h4>
                                            <p>Sandwich: Poulet Frit, Tomate, Salade, Mayonnaise</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item burgers">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/b5.png" class="img-fluid" alt="...">
                                        <div class="price">6.50 €</div>
                                        <div class="caption">
                                            <h4>Fish</h4>
                                            <p>Sandwich: Poisson, Salade, Mayonnaise, Cornichon</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item burgers">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/b6.png" class="img-fluid" alt="...">
                                        <div class="price">7.50 €</div>
                                        <div class="caption">
                                            <h4>Double Steak</h4>
                                            <p>Sandwich: Double Burger, Fromage, Bacon, Salade, Tomate</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Burgers gallery item end -->
    
    
                <!-- Snacks gallery item Start -->
    
                <div class="tab-pane fade show active" id="tab3" role="tabpanel">
                    <div class="row">
    
                        <div class="gallery-item snacks">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/s1.png" class="img-fluid" alt="...">
                                        <div class="price">3.90 €</div>
                                        <div class="caption">
                                            <h4>Frites</h4>
                                            <p>Pommes de terre frites</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item snacks">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/s2.png" class="img-fluid" alt="...">
                                        <div class="price">3.40 €</div>
                                        <div class="caption">
                                            <h4>Onion Rings</h4>
                                            <p>Rondelles d'oignon frits</p>
                                            
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
    
                        <div class="gallery-item snacks">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/s3.png" class="img-fluid" alt="...">
                                        <div class="price">5.90 €</div>
                                        <div class="caption">
                                            <h4>Nuggets</h4>
                                            <p>Nuggets de poulet frits</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item snacks">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/s4.png" class="img-fluid" alt="...">
                                        <div class="price">3.50 €</div>
                                        <div class="caption">
                                            <h4>Nuggets Fromage</h4>
                                            <p>Nuggets de fromage frits</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item snacks">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/s5.png" class="img-fluid" alt="...">
                                        <div class="price">5.90 €</div>
                                        <div class="caption">
                                            <h4>Ailes de Poulet</h4>
                                            <p>Ailes de poulet Barbecue</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Snacks gallery item END -->
    
                
    
                <!-- Salades gallery item Start -->
    
                <div class="tab-pane fade show active" id="tab4" role="tabpanel">
                    <div class="row">
                        <div class="gallery-item salade">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/sa1.png" class="img-fluid" alt="...">
                                        <div class="price">8.90 €</div>
                                        <div class="caption">
                                            <h4>César Poulet Pané</h4>
                                            <p>Poulet Pané, Salade, Tomate et la fameuse sauce César</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item salade">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/sa2.png" class="img-fluid" alt="...">
                                        <div class="price">8.90 €</div>
                                        <div class="caption">
                                            <h4>César Poulet Grillé</h4>
                                            <p>Poulet Grillé, Salade, Tomate et la fameuse sauce César</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item salade">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/sa3.png" class="img-fluid" alt="...">
                                        <div class="price">5.90 €</div>
                                        <div class="caption">
                                            <h4>Salade Light</h4>
                                            <p>Salade, Tomate, Concombre, Maïs et Vinaigre balsamique</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item salade">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/sa4.png" class="img-fluid" alt="...">
                                        <div class="price">7.90 €</div>
                                        <div class="caption">
                                            <h4>Poulet Pané</h4>
                                            <p>Poulet Pané, Salade, Tomate et la sauce de votre choix</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item salade">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/sa5.png" class="img-fluid" alt="...">
                                        <div class="price">7.90 €</div>
                                        <div class="caption">
                                            <h4>Poulet Grillé</h4>
                                            <p>Poulet Grillé, Salade, Tomate et la sauce de votre choix</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Salades gallery item END -->
    
    
                <!-- Boissons gallery item Start -->
    
                <div class="tab-pane fade show active" id="tab5" role="tabpanel">
                    <div class="row">
                        <div class="gallery-item boissons">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/bo1.png" class="img-fluid" alt="...">
                                        <div class="price">1.90 €</div>
                                        <div class="caption">
                                            <h4>Coca-Cola</h4>
                                            <p>Au choix: Petit, Moyen ou Grand</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item boissons">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/bo2.png" class="img-fluid" alt="...">
                                        <div class="price">1.90 €</div>
                                        <div class="caption">
                                            <h4>Coca-Cola Light</h4>
                                            <p>Au choix: Petit, Moyen ou Grand</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item boissons">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/bo3.png" class="img-fluid" alt="...">
                                        <div class="price">1.90 €</div>
                                        <div class="caption">
                                            <h4>Coca-Cola Zéro</h4>
                                            <p>Au choix: Petit, Moyen ou Grand</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item boissons">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/bo4.png" class="img-fluid" alt="...">
                                        <div class="price">1.90 €</div>
                                        <div class="caption">
                                            <h4>Fanta</h4>
                                            <p>Au choix: Petit, Moyen ou Grand</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item boissons">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/bo5.png" class="img-fluid" alt="...">
                                        <div class="price">1.90 €</div>
                                        <div class="caption">
                                            <h4>Sprite</h4>
                                            <p>Au choix: Petit, Moyen ou Grand</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item boissons">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/bo6.png" class="img-fluid" alt="...">
                                        <div class="price">1.90 €</div>
                                        <div class="caption">
                                            <h4>Nestea</h4>
                                            <p>Au choix: Petit, Moyen ou Grand</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Boissons gallery item END -->
    
    
                <!-- Dessert gallery item Start -->
    
                <div class="tab-pane fade show active" id="tab6" role="tabpanel">
                    <div class="row">
    
                        <div class="gallery-item dessert">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/d1.png" class="img-fluid" alt="...">
                                        <div class="price">4.90 €</div>
                                        <div class="caption">
                                            <h4>Fondant au chocolat</h4>
                                            <p>Au choix: Chocolat Blanc ou au lait</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item dessert">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/d2.png" class="img-fluid" alt="...">
                                        <div class="price">2.90 €</div>
                                        <div class="caption">
                                            <h4>Muffin</h4>
                                            <p>Au choix: Au fruits ou au chocolat</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item dessert">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/d3.png" class="img-fluid" alt="...">
                                        <div class="price">2.90 €</div>
                                        <div class="caption">
                                            <h4>Beignet</h4>
                                            <p>Au choix: Au chocolat ou à la vanille</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item dessert">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/d4.png" class="img-fluid" alt="...">
                                        <div class="price">3.90 €</div>
                                        <div class="caption">
                                            <h4>Milkshake</h4>
                                            <p>Au choix: Fraise, Vanille ou Chocolat</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    
                        <div class="gallery-item dessert">
                            <div class="gallery-item-inner">
                                <div class="col-md-6 col-lg-12">
                                    <div class="img-thumbnail">
                                        <img src="images/d5.png" class="img-fluid" alt="...">
                                        <div class="price">4.90 €</div>
                                        <div class="caption">
                                            <h4>Sundae</h4>
                                            <p>Au choix: Fraise, Caramel ou Chocolat</p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <!-- Desserts gallery item start -->
    
            </div>
        </div>
        <script src="./JS/Gallerie.js"></script>

        <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-outline-success" type="submit"><a href="Reservation.php">Reserver !</a></button>
            <p class="text-center">Nos recette évoluent, n'hésite pas à t'inscrire pour mieux déguster ! :)</p>
        </div>
    </section>

    <hr class="divider" />
    <!-- Start Avis clients-->

    <section id="Avis">
        <div class="rev-section">

            <h6 class="title">Our Guests Love Us</h6>
            <p class="note">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil laboriosam possimus perferendis non error neque.</p>
            
            <div class="reviews">
            
            <div class="review">
               <div class="head-review">
                  <img src="https://img.freepik.com/icones-gratuites/homme_318-188877.jpg?size=626&ext=jpg" width="250px">
               </div>
               <div class="body-review">
                  <div class="name-review">Nathan D.</div>
                  <div class="place-review">Germany</div>
                    
                  <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
               </div>
            </div>
            <div class="review">
               <div class="head-review">
                  <img src="https://img.freepik.com/icones-gratuites/homme_318-188877.jpg?size=626&ext=jpg" width="250px">
               </div>
               <div class="body-review">
                  <div class="name-review">Mary Will</div>
                  <div class="place-review">Paris</div>
                  
                  <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
               </div>
            </div>
            <div class="review">
               <div class="head-review">
                  <img src="https://img.freepik.com/icones-gratuites/homme_318-188877.jpg?size=626&ext=jpg" width="250px">
               </div>
               <div class="body-review">
                  <div class="name-review">Kevin Tuck</div>
                  <div class="place-review">New York</div>
                  
                  <div class="desc-review">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Obcaecati eligendi suscipit illum officia ex eos.</div>
               </div>
            </div>
            
        </div>
            
    </div>

    </section>

    <footer class="bg-dark text-white pt-5 pb-4" id="footer">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-upercase mb-4 font-wheight-bold">Notre restaurant</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, aperiam? Expedita perferendis excepturi voluptatem exercitationem, facilis nam in numquam tempore voluptas sapiente neque enim qui dolore alias, cum aspernatur perspiciatis?</p>
                </div>

                <div class="class=col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-upercase mb-4 font-wheight-bold">Horaires d'ouvertures</h5>
                    <p>Lundi, Mardi, jeudi, vendredi<br/> 12h 14h <br/>19h 22h</p>
                    <p>Mercredi Fermé</p>
                    <p>Samedi 19h 23h 
                    <p>Dimanche 12h 14h</p>
                    
                </div>

                <!--<div class="class=col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h5 class="text-upercase mb-4 font-wheight-bold ">Notre restaurant</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid totam labore et, nisi suscipit aperiam. Quo itaque veniam fuga blanditiis, culpa eos saepe ratione dicta pariatur nisi repellat! Ab, maxime!</p>
                </div>-->

                <div class="class=col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-upercase mb-4 font-wheight-bold">Adresse de notre restaurant</h5>
                    <p>
                        <i class="fa fa-home mr-3"></i> 75 rue de paris 75000 Paris
                    </p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> quai_antique@gmail.com
                    </p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> 01.02.03.04.5
                    </p>
                    <p>
                        <i class="fa fa-print mr-3"></i> quai_antique@gmail.com
                    </p>

                </div>
            </div>
            <hr class="mb-4">
            <div class="row align-item-center">
                <div class="col-md-7 col-lg-12">
                    <p>Copyright C | tous droits reservées 2023</p>

                </div>

            </div>
        </div>

    </footer>



</body>

</html>
