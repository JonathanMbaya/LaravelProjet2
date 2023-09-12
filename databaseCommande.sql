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

ALTER TABLE users ADD CONSTRAINT fk_title_nft FOREIGN KEY (nft_obtains)  REFERENCES nft_data(title_nft);


-- Insérer les données dans la base de données

-- Inserer les données de la table  nft_data

INSERT INTO nfts (id,title,artist, description, url, standard, prix, image,category)
 VALUES
 (  1,
    "Monumental",
   "galbarkan",
   "3D digital artwork by Gal Barkan, Galaxy Eggs Genesis collection",
   "https://superrare.com/address/0xb932a70a57673d89f4acffbe830e8ed7f75fb9e0",
    "ERC-721",
    1.236,
    "images/nft-01.jpg",
    "collectible"),

 (  2,
    "Dream Eater",
    "n8",
    "Adobe Medium,3D scans, AI, C4D, Octane.  ",
    "https://superrare.com/address/0xb932a70a57673d89f4acffbe830e8ed7f75fb9e0",
    "ERC-721",
    2.5,
    "images/nft-02.jpg",
    "collectible"),

 (  3,
    "THE DIP",
    "bigcomic",
    "I fear no man, no beast, no evil, or DIP brother. When Hulk Hogan buys the dip. Digital painting",
    "https://superrare.com/address/0x895e2058bd2a5ecb659956954eced21151f96731",
    "ERC-721",
    1.494,
    "images/nft-03.jpg",
    "collectible"),

    (4,
    "LUPPY Bc#2384",
    "LUPPYNFTOFFICIAL",
    "LUPPY is a collection of 10,000 NFTs created by artists and web 3.0 enthusiasts living in Paris, Dubai and Japan. It is a unique digital collection on the Ethereum blockchain. LUPPY will bring its holders 'Luck' and 'Happiness' and also they will gain access to the membership community, get special gifts and information and participate in exclusive events. LUPPY will also launch a clothing brand and work on creating its own Metaverse in the near future.",
    "https://etherscan.io/address/0x495f947276749ce646f68ac8c248420045cb7b5e",
    "ERC-1155",
    0.73,
    "images/nft-04.jpg",
    "collectible"),

    (5,
    "PREMINT Collector Pass",
    "B52A42",
    "As a PREMINT Collector Pass holder, you will get access to an evolving collector dashboard and features to keep you on top of the hottest mints. For more info see https://collectors.premint.xyz/",
    "https://etherscan.io/address/0xe0176ba60efddb29cac5b15338c9962daee9de0c",
    "ERC-721",
    0.294,
    "images/nft-05.jpg",
    "utilitaire"),

    (6,
    "#63057",
    "OthersideDeployer",
    "Otherdeed is the key to claiming land in Otherside. Each have a unique blend of environment and sediment — some with resources, some home to powerful artifacts. And on a very few, a Koda roams.",
    "https://etherscan.io/address/0x34d85c9cdeb23fa97cb08333b511ac86e1c4e258",
    "ERC-721",
    1.09,
    "images/nft-06.jpg",
    "metaverse"),

    (7,
    "Yokai Kingdom Genesis #5789",
    "YokaiKingdomTeam",
    "Yokai Kingdom is a web3 game universe, built on the Ethereum blockchain and inspired by rich, ancient Japanese mythology. 8,888 Genesis hero NFT trading cards is based on Oni (鬼), a fearsome yōkai spirit. Each is the key to unlock the Yokai Kingdom metaverse, including the tactical card game ONI’s QUEST",
    "https://etherscan.io/address/0x35b0ecc952cef736c12a7ef3a830f438f67912b3",
    "ERC-721",
    0.0249,
    "images/nft-07.jpg",
    "jeux video online"),

    (8,
    "Yokai Kingdom Genesis #4345",
    "YokaiKingdomTeam",
    "Yokai Kingdom is a web3 game universe, built on the Ethereum blockchain and inspired by rich, ancient Japanese mythology. 8,888 Genesis hero NFT trading cards is based on Oni (鬼), a fearsome yōkai spirit. Each is the key to unlock the Yokai Kingdom metaverse, including the tactical card game ONI’s QUEST",
    "https://etherscan.io/address/0x35b0ecc952cef736c12a7ef3a830f438f67912b3",
    "ERC-721",
     0.1,
    "images/nft-08.jpg",
    "jeux video online"),

    (9,
    "BoredApeYachtClub #6582",
    "Bored Ape Yacht Club",
    " ",
    "https://etherscan.io/tx/0x999d620fb7a24cfa20a56c25eca894d438b63eb585f5874918feae3d42f6b133",
    "ERC-721",
    60.5527,
    "images/nft-09.jpg",
    "collectible"),

    (10,
    "Pigments #588",
    "Darien_Brito",
    "Pigments is an exploration of colour and spatial distortion. Each instance is an abstract representation aimed at evoking a micro or macro-environment; from unknown substances, or oil in a canvas, to nebular formations. The pieces are animated, meant to be experienced live. The piece can run endlessly, with infinite output. To run it smoothly you need a capable GPU. If this proves to be too computationally intensive, or if you prefer a static view, feel free to press the spacebar.",
    "https://etherscan.io/address/0xa7d8d9ef8d8ce8992df33d8b8cf4aebabd5bd270",
    "ERC-721",
    3,
    "images/nft-10.jpg",
    "collectible"),

    (11,
    "Droid AK0B61",
    "crea_st",
    "1/1 Edition. 2160 x 2700px",
    "https://superrare.com/address/0xb932a70a57673d89f4acffbe830e8ed7f75fb9e0",
    "ERC-721",
    0.652,
    "images/nft-11.jpg",
    "collectible"),

    (12,
    "World #6090",
    "NFT Worlds",
    "NFT Worlds are generative worlds with geography, resource & feature data stored on chain. NFT Worlds can be played, explored and built in. You can sync changes you make to your world so they reflect on your NFT. Feel free to use NFT Worlds in any way you want. Learn more at nftworlds.com",
    "https://etherscan.io/address/0xbd4455da5929d5639ee098abfaa3241e9ae111af",
    "ERC-721",
    500,
    "images/nft-12.jpg",
    "metaverse"),

    (13,
    "Heart of London Deed (Ancient)",
    "0D24DE",
    "This Deed allows you to claim the Heart of London Land NFT in Legacy's one and only London Land drop. With only one available, the Heart of London is the unstoppable force in Legacy. Benefit from unrivalled influence!",
    "https://etherscan.io/address/0xbd4455da5929d5639ee098abfaa3241e9ae111af",
    "ERC-1155",
    3,
    "images/nft-13.webp",
    "jeux video online"),

    (14,
    "#0217",
    "Admit One",
    "Admit One is a 1,000 member private group of Web3 enthusiasts, builders, and thought leaders. The NFT acts as the entry ticket to this diverse and dynamic community. Do dope shit with dope people. To learn more please read the manifesto.",
    "https://etherscan.io/address/0xd2a077ec359d94e0a0b7e84435eacb40a67a817c",
    "ERC-721",
    4.69,
    "images/nft-14.jpg",
    "utilitaire"),

    (15,
    "Global Pass",
    "ETHJETS",
    "Enjoy your entry into the world of private jet travel. The Global Pass is perfect for those who fly occasionally but still want to enjoy a taste of the perks of a frequent flyer.",
    "https://etherscan.io/address/0x7229600b699dd90b8e7be0575d02db58f409d2cb",
    "ERC-1155",
    0.53,
    "images/nft-15.jpg",
    "utilitaire");



-- Inserer les données de la table Catégory
INSERT INTO category(name)
 VALUES ("Collectible"),
("Metaverse"),
("Utilitaire"),
("Jeux vidéo online");

