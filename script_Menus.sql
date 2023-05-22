-- Creation database :

CREATE DATABASE burger_code;



-- Creation Table : 


CREATE TABLE categories (
  id int NOT NULL PRIMARY KEY,
  name varchar(100) NOT NULL
)

-- insertion :

INSERT INTO burger_code.categories (id, name) VALUES
('1', 'Menus'),
('2', 'Burgers'),
('3', 'Snacks'),
('4', 'Salades'),
('5', 'Boissons'),
('6', 'Desserts');


-- Creation Table : 


CREATE TABLE items (
  id int NOT NULL PRIMARY KEY auto_increment,
  name varchar(100) NOT NULL,
  description varchar(255) NOT NULL,
  price float NOT NULL,
  image varchar(255) NOT NULL,
  category int(11) NOT NULL,
  FOREIGN KEY (categoryitems)
    REFERENCES categories (id)
)
-----------------------------------------------------------------------------------
-- Liaison entre Table categories et Table items :
-- > par une clé etrangere dans Table items > category au 'id' de table categories


CREATE INDEX Index_category 
ON items
(
    category
)
-----------------------------------------------------------------------------------

-- insertion :

INSERT INTO burger_code.items (id, name, description, price, image, category) VALUES
('Menu Classic', 'Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson', 8.9, 'm1.png', 1),
('Menu Big', 'Sandwich: Double Burger, Fromage, Cornichon, Salade + Frites + Boisson', 10.9, 'm3.png', 1),
('Menu Chicken', 'Sandwich: Poulet Frit, Tomate, Salade, Mayonnaise + Frites + Boisson', 9.9, 'm4.png', 1),
('Menu Fish', 'Sandwich: Poisson, Salade, Mayonnaise, Cornichon + Frites + Boisson', 10.9, 'm5.png', 1),
('Menu Double Steak', 'Sandwich: Double Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson', 11.9, 'm6.png', 1),
('Classic', 'Sandwich: Burger, Salade, Tomate, Cornichon', 5.9, 'b1.png', 2),
('Bacon', 'Sandwich: Burger, Fromage, Bacon, Salade, Tomate', 6.5, 'b2.png', 2),
('Big', 'Sandwich: Double Burger, Fromage, Cornichon, Salade', 6.9, 'b3.png', 2),
('Chicken', 'Sandwich: Poulet Frit, Tomate, Salade, Mayonnaise', 5.9, 'b4.png', 2),
('Fish', 'Sandwich: Poisson Pané, Salade, Mayonnaise, Cornichon', 6.5, 'b5.png', 2),
('Double Steak', 'Sandwich: Double Burger, Fromage, Bacon, Salade, Tomate', 7.5, 'b6.png', 2),
('Frites', 'Pommes de terre frites', 3.9, 's1.png', 3),
('Onion Rings', 'Rondelles oignon frits', 3.4, 's2.png', 3),
('Nuggets', 'Nuggets de poulet frits', 5.9, 's3.png', 3),
('Nuggets Fromage', 'Nuggets de fromage frits', 3.5, 's4.png', 3),
('Ailes de Poulet', 'Ailes de poulet Barbecue', 5.9, 's5.png', 3),
('César Poulet Pané', 'Poulet Pané, Salade, Tomate et la fameuse sauce César', 8.9, 'sa1.png', 4),
('César Poulet Grillé', 'Poulet Grillé, Salade, Tomate et la fameuse sauce César', 8.9, 'sa2.png', 4),
('Salade Light', 'Salade, Tomate, Concombre, Maïs et Vinaigre balsamique', 5.9, 'sa3.png', 4),
('Poulet Pané', 'Poulet Pané, Salade, Tomate et la sauce de votre choix', 7.9, 'sa4.png', 4),
('Poulet Grillé', 'Poulet Grillé, Salade, Tomate et la sauce de votre choix', 7.9, 'sa5.png', 4),
('Coca-Cola', 'Au choix: Petit, Moyen ou Grand', 1.9, 'bo1.png', 5),
('Coca-Cola Light', 'Au choix: Petit, Moyen ou Grand', 1.9, 'bo2.png', 5),
('Coca-Cola Zéro', 'Au choix: Petit, Moyen ou Grand', 1.9, 'bo3.png', 5),
('Fanta', 'Au choix: Petit, Moyen ou Grand', 1.9, 'bo4.png', 5),
('Sprite', 'Au choix: Petit, Moyen ou Grand', 1.9, 'bo5.png', 5),
('Nestea', 'Au choix: Petit, Moyen ou Grand', 1.9, 'bo6.png', 5),
('Fondant au chocolat', 'Au choix: Chocolat Blanc ou au lait', 4.9, 'd1.png', 6),
('Muffin', 'Au choix: Au fruits ou au chocolat', 2.9, 'd2.png', 6),
('Beignet', 'Au choix: Au chocolat ou à la vanille', 2.9, 'd3.png', 6),
('Milkshake', 'Au choix: Fraise, Vanille ou Chocolat', 3.9, 'd4.png', 6),
('Sundae', 'Au choix: Fraise, Caramel ou Chocolat', 4.9, 'd5.png', 6);



---------------------

--- Jointure Tables

SELECT items.id, items.name, items.description, items.price, categories.name AS category FROM items LEFT JOIN categories ON items.category = categories.id ORDER BY items.id 
