--
-- Base de données : `ShoesDB`
--

-- --------------------------------------------------------

--
-- Structure de la table `Brand`
--

CREATE TABLE `Brand` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Structure de la table `Categorie`
--

CREATE TABLE `Categorie` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Structure de la table `Color`
--

CREATE TABLE `Color` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Structure de la table `Size`
--

CREATE TABLE `Size` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Structure de la table `State`
--

CREATE TABLE `State` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL
);

-- --------------------------------------------------------

--
-- Structure de la table `Favori`
--

CREATE TABLE `Favori` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `userId` INT NOT NULL,
    `itemId` INT NOT NULL,
    FOREIGN KEY (`userId`) REFERENCES `User`(`id`),
    FOREIGN KEY (`itemId`) REFERENCES `Item`(`id`)
);

-- --------------------------------------------------------

--
-- Structure de la table `Item`
--

CREATE TABLE `Item` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    `price` FLOAT NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `brandId` INT NOT NULL,
    `sizeId` INT NOT NULL,
    `categorieId` INT NOT NULL,
    `stateId` INT NOT NULL,
    `colorId` INT NOT NULL,
    FOREIGN KEY (`brandId`) REFERENCES `Brand`(`id`),
    FOREIGN KEY (`sizeId`) REFERENCES `Size`(`id`),
    FOREIGN KEY (`categorieId`) REFERENCES `Categorie`(`id`),
    FOREIGN KEY (`stateId`) REFERENCES `State`(`id`),
    FOREIGN KEY (`colorId`) REFERENCES `Color`(`id`)
);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE `User` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(255) NOT NULL,
    `firstName` VARCHAR(255) NOT NULL,
    `lastName` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(255) NOT NULL,
    `isAdmin` TINYINT DEFAULT NULL
);

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`id`, `name`) VALUES
(1, 'Comme des Garçons'),
(2, 'Nike'),
(3, 'Adidas'),
(4, 'New balance'),
(5, 'Puma'),
(6, 'Jordan'),
(7, 'Under Armour'),
(8, 'The Kooples'),
(9, 'North Face'),
(10, 'Stussy'),
(11, 'Supreme'),
(12, 'Off-White'),
(13, 'BAPE (A Bathing Ape)'),
(14, 'Palace'),
(15, 'Fear of God'),
(16, 'Anti Social Social Club'),
(17, 'Reebok'),
(18, 'Converse'),
(19, 'Yeezy (Kanye West x Adidas)'),
(20, 'Balenciaga'),
(21, 'Gucci\r\n'),
(22, 'Louis Vuitton'),
(23, 'Carhartt WIP\r\n'),
(24, 'Patta'),
(25, 'Dickies\r\n'),
(26, 'Levi\'s\r\n'),
(27, 'Champion\r\n'),
(28, 'Timberland'),
(29, 'Polo'),
(30, 'Kaws'),
(31, 'Docs Martins'),
(32, 'Gregory'),
(33, 'Cortez'),
(34, 'DivinbyDivin'),
(35, 'Ralph Lauren'),
(36, 'Heuer '),
(37, 'New Era'),
(38, 'Playstation'),
(39, 'Cheetos'),
(40, 'Butter Beer'),
(41, 'Harry Potter'),
(42, 'Jelly Belly'),
(43, 'Saucony '),
(44, 'L\'esprit Gothique');


--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Streetwear'),
(2, 'Sportwear'),
(3, 'Gothic'),
(4, 'Gorpcore'),
(5, 'Old money'),
(7, ' Vintage'),
(9, 'Clothings Store'),
(10, 'Food\r\n'),
(11, 'Things\r\n');


--
-- Déchargement des données de la table `colors`
--

INSERT INTO `colors` (`id`, `name`) VALUES
(1, 'Noir'),
(2, 'Blanc'),
(3, 'Bleu'),
(4, 'Rouge'),
(5, 'Jaune'),
(6, 'Orange'),
(7, 'Vert '),
(8, 'Violet'),
(9, 'Rouge-orange\r\n'),
(10, 'Jaune-orange\r\n'),
(11, 'Jaune-vert\r\n'),
(12, 'Bordeaux\r\n'),
(13, 'Cramoisi\r\n'),
(14, 'Écarlate\r\n'),
(15, 'Framboise\r\n'),
(16, 'Grenat\r\n'),
(17, 'Magenta\r\n'),
(18, 'Rouge vif\r\n'),
(19, 'Rouge tomate'),
(20, 'Azur\r\n'),
(21, 'Bleu ciel\r\n'),
(22, 'Bleu marine\r\n'),
(23, 'Bleu roi\r\n'),
(24, 'Cyan\r\n'),
(25, 'Indigo\r\n'),
(26, 'Turquoise'),
(27, 'gris'),
(28, 'marron'),
(29, 'rose'),
(30, 'violet'),
(31, 'Rose'),
(32, 'Gris'),
(33, 'Beige');


--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `usersid`, `itemsid`) VALUES
(35, 13, 1),
(36, 0, 27),
(37, 0, 28),
(38, 0, 29),
(39, 0, 30),
(40, 0, 37),
(41, 0, 38),
(42, 0, 40),
(43, 0, 41),
(44, 0, 42),
(45, 0, 43),
(46, 0, 45),
(47, 0, 46),
(48, 0, 47),
(49, 0, 51),
(50, 0, 53),
(51, 0, 54),
(52, 0, 55),
(53, 0, 57),
(54, 0, 58),
(55, 0, 59),
(56, 0, 63),
(57, 0, 65),
(58, 0, 66),
(59, 0, 67),
(60, 0, 68),
(61, 0, 70),
(62, 0, 71),
(63, 0, 72),
(64, 0, 73),
(65, 0, 74),
(66, 0, 75),
(67, 0, 76),
(68, 0, 77),
(69, 0, 78);


--
-- Déchargement des données de la table `items`
--

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


--
-- Déchargement des données de la table `sizes`
--

INSERT INTO `sizes` (`id`, `name`) VALUES
(1, 'XS'),
(2, 'S'),
(3, 'M'),
(4, 'L'),
(5, 'XL'),
(6, 'XLL'),
(7, 'XLLL'),
(8, '33'),
(9, '34'),
(10, '35'),
(11, '36'),
(12, '37'),
(13, '38'),
(14, '39'),
(15, '40'),
(16, '41'),
(17, '42'),
(18, '43'),
(19, '44'),
(20, '45'),
(21, '46'),
(22, '47'),
(23, '48'),
(24, '49'),
(25, '50'),
(26, '51'),
(27, '52'),
(28, '53'),
(29, '54'),
(30, 'Petits sachets : 10 g à 50 g '),
(31, 'Moyens sachets : 100 g à 500 g'),
(32, 'grands sachets : 1 kg à 5 kg'),
(33, 'Très grands sachets : 10 kg et plus '),
(34, 'Taille Unique');

--
-- Déchargement des données de la table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Neuf avec étiquette'),
(2, 'Neuf sans étiquette'),
(3, 'Très bon état'),
(4, 'Bon état'),
(5, 'satisfaisant');


--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `image`, `firstname`, `lastname`, `phonenumber`, `email`, `mdp`, `admin`) VALUES
(13, 'oui', 'oui', 'non', 'oui', 'oui@gmail.com', '$2y$10$LNfypWfbqTs9nKfxKRv9rupdltwDrjWgNC5PvUjHp2VqUvqkVZP1q', 1),
(14, 'dfhgb', 'ccec', 'cecece', 'xxdx', 'dcdjjd@gmail.com', '$2y$10$l1VgaGbEJt7zlmB0pdDtC.unHbsept7G7mxaMnTpT4jqPjKGQzBjG', 0),
(16, 'zxzxz', 'qxq', 'xqxqx', 'xzxzxz', 'xqxq@gmail.com', '$2y$10$CZseKayG95q/8npRh3BMe.td0uj1wtwZ/OcvbkRzX/X7a1xWbLuxu', 0),
(18, 'ddd', 'xxxx', 'xxxx', 'ddd', 'kiki@gmail.com', '$2y$10$W7wIQbvUMA3f/B2WSPGfcOyIdBYgz0iGa4L2gLmpxzk9EQX23zVvW', 0),
(19, 'ddd', 'xxxx', 'xxxx', 'ddd', 'kikloloi@gmail.com', '$2y$10$zEk2aWHao8Vgt8ktb98j8OGrFLCZ2coQhDf.Qv1wsKehc1aj3dqK.', 0),
(20, 'ouioui', 'ca marche', 'oui oui', 'ouioui', 'ouioui@gmail.com', '$2y$10$Dxm3WTLg/2IkwgkuwvLQxu5F4nGPt.NaazyIkJth2eNTT4yAnyzTS', 0),
(21, 'ouioui', 'ca marche', 'oui oui', 'ouioui', 'ouifjjfui@gmail.com', '$2y$10$TGzQ0OUjCFP1vudhkxdCzuRaScnl8NhPl7wfFHT0p4UHXLjo8xzi.', 0),
(22, 'ouioui', 'ca marche', 'oui oui', 'ouioui', 'ouifhjkjjfui@gmail.com', '$2y$10$hm9bC912PTFLxB1KotBsF.y8IMabkimHY6YzBLSx99TJLuhC2vQRm', 0),
(23, 'd&quot;d&quot;d&quot;d', 'mike', 'd&quot;d&quot;d', 'ed&quot;d&quot;dd&quot;', 'miki@gmail.com', '$2y$10$curEdmbUqcSkKizSJje7LuT3V5wdII5QA1npf1q7FxfLGoT3lX3te', 0),
(24, 'd&quot;d&quot;d&quot;d', 'mike', 'rikiki', 'ed&quot;d&quot;dd&quot;', 'mikiki@gmail.com', '$2y$10$yD/Z8u31qMEoFX1MMLSN/ur/ZIMBs2GlkhrcF05eBCVlblM4mxHPq', 0),
(25, 'ff', 'f&#039;f', '&#039;ff&#039;', 'fff', 'juju@gmail.com', '$2y$10$ZD8vMhCqQfk4SwBarBzyyOLBa7r7HwAAcKd6wh0Sbz8WToI0ulBSK', 0),
(26, 'ff', 'f&#039;f', '&#039;ff&#039;', 'fff', 'judeju@gmail.com', '$2y$10$PY9Au/Zc3u7TFHXG5goo6.d9AVq8u60y82X/2kxgdwVmWOMbmdgEC', 0),
(27, ' f f ', 'mike', 'fghj', ' ff f', 'mike@gmail.com', '$2y$10$SilfwU1x5SBbnfmQT7tvEebLI.SiRFFvlBb4MZPBScEOw3TWSrIbW', 0);
