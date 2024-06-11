-- Étape 1: Vérifier et insérer les valeurs manquantes dans la table `favoris`
INSERT INTO `favoris` (`itemsid`)
SELECT 27 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 27);
INSERT INTO `favoris` (`itemsid`)
SELECT 28 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 28);
INSERT INTO `favoris` (`itemsid`)
SELECT 29 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 29);
INSERT INTO `favoris` (`itemsid`)
SELECT 30 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 30);
INSERT INTO `favoris` (`itemsid`)
SELECT 37 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 37);
INSERT INTO `favoris` (`itemsid`)
SELECT 38 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 38);
INSERT INTO `favoris` (`itemsid`)
SELECT 40 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 40);
INSERT INTO `favoris` (`itemsid`)
SELECT 41 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 41);
INSERT INTO `favoris` (`itemsid`)
SELECT 42 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 42);
INSERT INTO `favoris` (`itemsid`)
SELECT 43 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 43);
INSERT INTO `favoris` (`itemsid`)
SELECT 45 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 45);
INSERT INTO `favoris` (`itemsid`)
SELECT 46 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 46);
INSERT INTO `favoris` (`itemsid`)
SELECT 47 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 47);
INSERT INTO `favoris` (`itemsid`)
SELECT 51 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 51);
INSERT INTO `favoris` (`itemsid`)
SELECT 53 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 53);
INSERT INTO `favoris` (`itemsid`)
SELECT 54 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 54);
INSERT INTO `favoris` (`itemsid`)
SELECT 55 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 55);
INSERT INTO `favoris` (`itemsid`)
SELECT 57 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 57);
INSERT INTO `favoris` (`itemsid`)
SELECT 58 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 58);
INSERT INTO `favoris` (`itemsid`)
SELECT 59 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 59);
INSERT INTO `favoris` (`itemsid`)
SELECT 63 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 63);
INSERT INTO `favoris` (`itemsid`)
SELECT 65 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 65);
INSERT INTO `favoris` (`itemsid`)
SELECT 66 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 66);
INSERT INTO `favoris` (`itemsid`)
SELECT 67 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 67);
INSERT INTO `favoris` (`itemsid`)
SELECT 68 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 68);
INSERT INTO `favoris` (`itemsid`)
SELECT 70 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 70);
INSERT INTO `favoris` (`itemsid`)
SELECT 71 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 71);
INSERT INTO `favoris` (`itemsid`)
SELECT 72 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 72);
INSERT INTO `favoris` (`itemsid`)
SELECT 73 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 73);
INSERT INTO `favoris` (`itemsid`)
SELECT 74 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 74);
INSERT INTO `favoris` (`itemsid`)
SELECT 75 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 75);
INSERT INTO `favoris` (`itemsid`)
SELECT 76 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 76);
INSERT INTO `favoris` (`itemsid`)
SELECT 77 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 77);
INSERT INTO `favoris` (`itemsid`)
SELECT 78 FROM DUAL WHERE NOT EXISTS (SELECT 1 FROM `favoris` WHERE `itemsid` = 78);

-- Étape 2: Insérer les nouvelles lignes dans la table `items`
INSERT INTO `items` (`id`, `name`, `description`, `price`, `image`, `brand`, `size`, `category`, `state`, `color`) VALUES
(27, 'TAG Heuer x Kith Formule 1', 'cc', 3087, '5.png', 36, 34, 11, 3, 32),
(28, 'New Era 59 Fifty Casquette', 'ghjk', 109, 'Capture d’écran 2024-06-05 à 00.07.03.jpg', 37, 34, 11, 1, 3),
(29, 'Nike NOCTA Glide Drake', 'des', 250, '1.jpg', 2, 23, 1, 4, 2),
(30, 'Nike Shox Ride 2 SP Supreme', 'cece', 200, '2.jpg', 2, 1, 1, 4, 2),
(37, 'Jordan 4 university blue', 'd&#039;d&#039;', 460, 'Capture d’écran 2024-06-05 à 00.22.01.jpg', 6, 17, 1, 3, 1),
(38, 'Jordan 1 Retro Low OG SP Travis Scott', 'rvr', 356, 'Capture d’écran 2024-06-05 à 00.22.28.jpg', 2, 15, 1, 3, 5),
(40, 'Nike Hot Step 2 Drake NOCTA', 'ee', 212, 'Capture d’écran 2024-06-05 à 00.23.32.jpg', 2, 20, 1, 4, 1),
(41, 'Jordan 1 basse rétro  Travis Scott', 'rrr', 1156, 'Capture d’écran 2024-06-05 à 00.37.33.jpg', 2, 19, 1, 3, 7),
(42, 'Jordan 1 projet spécial Travis Scott', 'hjkl', 854, 'Capture d’écran 2024-06-05 à 00.37.06.jpg', 2, 11, 1, 2, 1),
(43, 'Nike SB Dunk bois de rose', 'aa', 139, 'Capture d’écran 2024-06-05 à 00.36.44.jpg', 2, 12, 1, 1, 4),
(45, 'Nike SB Dunk Low Futura Laboratories', 'zz', 683, 'Capture d’écran 2024-06-05 à 00.35.22.jpg', 2, 17, 1, 1, 3),
(46, 'Sweat à capuche Nike Sportswear Tech Fleece', ',;:', 86, 'Capture d’écran 2024-06-05 à 03.31.37.jpg', 2, 1, 9, 3, 7),
(47, 'Sweat à capuche Nike Sportswear Tech Fleece', 'cvbn,', 75, 'Capture d’écran 2024-06-05 à 03.32.28.jpg', 2, 1, 9, 1, 4),
(51, 'Sweat à capuche Nike Sportswear Tech Fleece', 'tyjk', 125, 'Capture d’écran 2024-06-05 à 03.29.16.jpg', 2, 3, 9, 2, 7),
(53, 'Short Nike Sportswear Tech Fleece', 'f', 76, 'Capture d’écran 2024-06-05 à 03.20.43.jpg', 2, 5, 9, 5, 32),
(54, 'Sweat à capuche Nike Sportswear Tech Fleece', 's', 160, 'Capture d’écran 2024-06-05 à 03.21.20.jpg', 2, 7, 9, 1, 1),
(55, 'Sweat à capuche Nike Sportswear Tech Fleece', 'g', 100, 'Capture d’écran 2024-06-05 à 03.21.58.jpg', 2, 1, 9, 4, 3),
(57, 'Jogging  Nike Sportswear Tech Fleece', 'h', 100, 'Capture d’écran 2024-06-05 à 03.30.32.jpg', 2, 1, 9, 1, 1),
(58, 'Jogging  Nike Sportswear Tech Fleece', 'g', 63, 'Capture d’écran 2024-06-05 à 03.33.02.jpg', 2, 4, 9, 5, 3),
(59, 'Jogging  Nike Sportswear Tech Fleece', 'Gcc', 80, 'Capture d’écran 2024-06-05 à 03.31.05.jpg', 2, 7, 9, 1, 1),
(63, 'Sweat à capuche Nike Sportswear Tech Fleece', 'f', 128, 'Capture d’écran 2024-06-05 à 03.23.41.jpg', 2, 1, 9, 1, 1),
(65, 'Housse Sony PlayStation PS5 Digital', 'Edition Noir minuit', 500, 'Capture d’écran 2024-06-05 à 04.36.05.png', 38, 34, 11, 1, 1),
(66, 'Console Sony PlayStation 5 PS5', 'Slim Digital Edition (prise US)', 585, 'Capture d’écran 2024-06-05 à 04.35.44.png', 38, 34, 11, 1, 2),
(67, 'Console Sony PlayStation 5', 'édition Blu-ray prise américaine', 600, 'Capture d’écran 2024-06-05 à 04.35.26.png', 38, 34, 11, 1, 2),
(68, 'Cheetos', 'h', 4.99, 'Capture d’écran 2024-06-05 à 04.57.51.jpg', 39, 31, 10, 1, 1),
(70, 'Cheetos', 'k', 10, 'Capture d’écran 2024-06-05 à 04.58.26.jpg', 39, 32, 10, 1, 1),
(71, 'Butter Beer', 'b', 24, 'Capture d’écran 2024-06-05 à 04.59.49.jpg', 40, 33, 10, 1, 1),
(72, 'JELLY BELLY Harry', 'Harry Potter Magical Sweets', 5.99, 'Capture d’écran 2024-06-05 à 05.00.08.jpg', 41, 31, 10, 1, 1),
(73, 'Jelly Belly', 'l', 4.99, 'Capture d’écran 2024-06-05 à 04.59.30.jpg', 42, 30, 10, 1, 1),
(74, 'Saucony ProGrid Triumph 4 Gorpcore', 'h', 106, 'Capture d’écran 2024-06-05 à 05.22.16.jpg', 43, 16, 4, 1, 1),
(75, 'Saucony ProGrid Triumph 4 Gorpcore Greige', 'k', 109, 'Capture d’écran 2024-06-05 à 05.22.42.jpg', 43, 11, 4, 1, 33),
(76, 'BOTTINE PLATEFORME GOTHIQUE', 'j', 79, 'Capture d’écran 2024-06-05 à 05.39.35.jpg', 44, 18, 3, 1, 1),
(77, 'GOTHIQUE BOTTE', 'k', 110, 'Capture d’écran 2024-06-05 à 05.40.27.jpg', 44, 14, 3, 1, 1),
(78, 'CHAUSSURE GOTHIQUE 2024', 'h', 120, 'Capture d’écran 2024-06-05 à 05.38.17.jpg', 44, 24, 3, 1, 1);
    