--- -- Creation Table Formulaire Contact : 

CREATE TABLE contact_form (
  id int NOT NULL PRIMARY KEY auto_increment,
  firstname varchar(250) NOT NULL,
  name varchar(250) NOT NULL,
  email varchar(100) NOT NULL,
  phone varchar(100) NOT NULL,
  message varchar(300) NOT NULL
)


--- -- Creation Table Formulaire Reservation : 

CREATE TABLE tb_resa (
  id int NOT NULL PRIMARY KEY auto_increment,
  Nom varchar(200) NOT NULL,
  Prenom varchar(200) NOT NULL,
  Couverts float NOT NULL,
  Date date NOT NULL,
  Allergique varchar(200) NOT NULL,
  message text NOT NULL,
  btnradio varchar(100) NOT NULL
)

--- -- Creation Table Formulaire insciption/connexion utilisateurs : 

CREATE TABLE utilisateur (
  id int(11) NOT NULL,
  pseudo varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password text NOT NULL,
  ip varchar(20) NOT NULL,
  date_time datetime NOT NULL DEFAULT current_timestamp(),
  user_type varchar(100) NOT NULL
)