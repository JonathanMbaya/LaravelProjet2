-- Créer la base de données

CREATE DATABASE projet_exam_lara
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


--  Créer la table catégorie

CREATE TABLE `category` (
    `category_name` VARCHAR(100),
    PRIMARY KEY (`category_name`)
    ) ENGINE=InnoDB ;


-- Ajouter les  noms des catégories

INSERT INTO category (category_name)
VALUES ('Collectible'),('metaverse'),('utilitaire'),('jeux vidéo online');



--  Créer la table user


CREATE TABLE users (
    `user_id` INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    `user_name` VARCHAR(100),
    `email` varchar(255) NOT NULL,
    `password` varchar(100) NOT NULL,
    `portefeuille` float,
    `nft_obtains` varchar(100),
    `created_at` datetime
)
ENGINE=InnoDB;



--  Créer la table nft


CREATE TABLE nft_data(
    `title_nft` VARCHAR(100) PRIMARY KEY,
    `artiste` VARCHAR (100),
    `proprietaire` varchar(100),
    `description` TEXT,
    `url` TEXT,
    `standard` varchar(10),
    `prix` float,
    `image` varchar(255) ,
    `category` varchar(100)
)
ENGINE=InnoDB;


-- On rajoutera les contraintes de clés étrangères

ALTER TABLE users ADD CONSTRAINT fk_title_nft FOREIGN KEY (nft_obtains)  REFERENCES nft_data(title_nft);;
