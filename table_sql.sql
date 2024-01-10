CREATE TABLE user (
    id_user INT AUTO_INCREMENT PRIMARY KEY ,
    firstname VARCHAR(50) NOT NULL ,
    lastname VARCHAR(50) NOT NULL ,
    email VARCHAR(255) NOT NULL ,
    password VARCHAR(255) NOT NULL ,
    role VARCHAR(20)
);

INSERT INTO user (firstname, lastname, email, password, role) VALUES ('MAZE', 'kévin', 'kekeproject@hotmail.fr', 'azerty0889', 'admin');

CREATE TABLE categorie (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY ,
    name_categorie VARCHAR(20)
);

CREATE TABLE recipe (
    id_recipe INT AUTO_INCREMENT PRIMARY KEY ,
    name_recipe VARCHAR(255) NOT NULL ,
    description TEXT ,
    price FLOAT(10) ,
    take_away VARCHAR(10) ,
    id_user INT ,
    id_categorie INT,
    FOREIGN KEY (id_user) REFERENCES user (id_user),
    FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie)
);

CREATE TABLE day_menu (
    id_day_menu INT AUTO_INCREMENT PRIMARY KEY,
    entre VARCHAR(255) NOT NULL ,
    plat VARCHAR(255) NOT NULL ,
    dessert VARCHAR(255) NOT NULL ,
    id_user INT ,
    FOREIGN KEY (id_user) REFERENCES user (id_user)
);

CREATE TABLE images (
    id_image INT AUTO_INCREMENT PRIMARY KEY ,
    nmae_image VARCHAR(255) NOT NULL ,
    id_user INT,
    FOREIGN KEY (id_user) REFERENCES user (id_user)
);

CREATE TABLE buffet (
    id_buffet INT AUTO_INCREMENT PRIMARY KEY ,
    name_buffet VARCHAR(255) NOT NULL ,
    description_buffet TEXT ,
    price FLOAT(10) ,
    id_user INT ,
    FOREIGN KEY (id_user) REFERENCES user (id_user)
);

CREATE TABLE hourly (
    id_hourly INT AUTO_INCREMENT PRIMARY KEY ,
    name_day VARCHAR(10) ,
    hourly_am VARCHAR(10) ,
    hourly_pm VARCHAR(10) ,
    id_user INT ,
    FOREIGN KEY (id_user) REFERENCES user (id_user)
);

CREATE TABLE contact (
    id_contact INT AUTO_INCREMENT PRIMARY KEY ,
    lastname VARCHAR(50) NOT NULL ,
    firstname VARCHAR(50) NOT NULL ,
    email VARCHAR(255) NOT NULL ,
    phone VARCHAR(10),
    date_reservation DATE NOT NULL ,
    hourly_reservation VARCHAR (20) NOT NULL ,
    commentary TEXT ,
    id_buffet INT ,
    FOREIGN KEY (id_buffet) REFERENCES buffet (id_buffet)
);

CREATE TABLE opinion (
    id_opinion INT AUTO_INCREMENT PRIMARY KEY ,
    firstname VARCHAR(50) NOT NULL ,
    opinion_text TEXT ,
    note INT NOT NULL ,
    verify VARCHAR(10) ,
    id_user INT NULL ,
    FOREIGN KEY (id_user) REFERENCES user (id_user)
);