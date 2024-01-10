#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id_user   Int  Auto_increment  NOT NULL ,
        firstname Varchar (255) NOT NULL ,
        lastname  Varchar (255) NOT NULL ,
        email     Varchar (255) NOT NULL ,
        password  Varchar (255) NOT NULL ,
        role      Varchar (20) NOT NULL
	,CONSTRAINT user_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categorie
#------------------------------------------------------------

CREATE TABLE categorie(
        id_categorie   Int  Auto_increment  NOT NULL ,
        name_categorie Varchar (255) NOT NULL
	,CONSTRAINT categorie_PK PRIMARY KEY (id_categorie)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: recipe
#------------------------------------------------------------

CREATE TABLE recipe(
        id_recipe    Int  Auto_increment  NOT NULL ,
        name_recipe  Varchar (255) NOT NULL ,
        description  Text NOT NULL ,
        price        Float NOT NULL ,
        take_away    Varchar (10) NOT NULL ,
        id_categorie Int NOT NULL ,
        id_user      Int
	,CONSTRAINT recipe_PK PRIMARY KEY (id_recipe)

	,CONSTRAINT recipe_categorie_FK FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie)
	,CONSTRAINT recipe_user0_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: images
#------------------------------------------------------------

CREATE TABLE images(
        id_image   Int  Auto_increment  NOT NULL ,
        name_image Varchar (255) NOT NULL ,
        id_user    Int
	,CONSTRAINT images_PK PRIMARY KEY (id_image)

	,CONSTRAINT images_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: buffet
#------------------------------------------------------------

CREATE TABLE buffet(
        id_buffet          Int  Auto_increment  NOT NULL ,
        name_buffet        Varchar (255) NOT NULL ,
        description_buffet Text NOT NULL ,
        price              Float NOT NULL ,
        id_user            Int
	,CONSTRAINT buffet_PK PRIMARY KEY (id_buffet)

	,CONSTRAINT buffet_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: hourly
#------------------------------------------------------------

CREATE TABLE hourly(
        id_hourly Int  Auto_increment  NOT NULL ,
        name_day  Varchar (50) NOT NULL ,
        hourly_am Varchar (50) NOT NULL ,
        hourly_pm Varchar (50) NOT NULL ,
        id_user   Int
	,CONSTRAINT hourly_PK PRIMARY KEY (id_hourly)

	,CONSTRAINT hourly_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: day_menu
#------------------------------------------------------------

CREATE TABLE day_menu(
        id_day_menu Int  Auto_increment  NOT NULL ,
        entre       Varchar (255) NOT NULL ,
        plat        Varchar (255) NOT NULL ,
        id_user     Int
	,CONSTRAINT day_menu_PK PRIMARY KEY (id_day_menu)

	,CONSTRAINT day_menu_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: contact
#------------------------------------------------------------

CREATE TABLE contact(
        id_contact         Int  Auto_increment  NOT NULL ,
        lastname           Varchar (50) NOT NULL ,
        firstname          Varchar (50) NOT NULL ,
        email              Varchar (255) NOT NULL ,
        phone              Varchar (10) NOT NULL ,
        date_reservation   Date NOT NULL ,
        hourly_reservation Varchar (20) NOT NULL ,
        commentary         Text NOT NULL ,
        id_buffet          Int
	,CONSTRAINT contact_PK PRIMARY KEY (id_contact)

	,CONSTRAINT contact_buffet_FK FOREIGN KEY (id_buffet) REFERENCES buffet(id_buffet)
)ENGINE=InnoDB;

