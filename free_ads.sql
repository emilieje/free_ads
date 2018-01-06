-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 15 Octobre 2017 à 23:21
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `free_ads`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `catégorie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`id`, `id_user`, `titre`, `description`, `prix`, `catégorie`, `image`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(33, 9, 'Machine a laver', 'Iudicavit ut iudicavit quidem Apollo dicta iudicavit quem ipsum illius istum Apollo ut iam cave sapientissimum Apollo habetote laudantur iudicavit anteponas laudantur Apollo ut facta iam huius ut laudantur ne.', 350, 'Electroménager', 'https://boulanger.scene7.com/is/image/Boulanger/bfr_overlay?layer=comp&$t1=&$product_id=Boulanger/8007842624816_h_f_l_0&wid=400&hei=400', NULL, NULL, '2017-10-14 21:41:16', '2017-10-14 21:41:16'),
(34, 9, 'Voiture', 'Stationibus modi novum quia modo tractus et extimas quia Mesopotamiae cuncta si aliquando flexo partes subsederat agrariis partes si Mesopotamiae huius Mesopotamiae sueti Mesopotamiae temptatum itinere omnes quod aliquando partes Mesopotamiae stationibus subsederat cogitabat subsederat crebro huius commentum omnes subsederat parumque subsederat praetenturis extimas impetrasset erat erat inquietari subsederat extimas.', 50000, 'Voiture', 'https://www.nissan-cdn.net/content/dam/Nissan/nissan_europe/vehicles/gt-r/r35/2_minor_change/overview/17TDIeulhd_GTRHelios008.jpg.ximg.l_full_m.smart.jpg', 'https://www.nissan-cdn.net/content/dam/Nissan/in/vehicles/GTR/R35/2_Monor_Changes/Overview/17TDIuslhd_GTRHelios050_ebg_sml.png.ximg.s_12_m.smart.png', NULL, '2017-10-14 21:46:34', '2017-10-14 21:46:34'),
(35, 5, 'Dentifrice qui arrachee', 'Magnentio discreta multa admissum tempus nota a impium glabro ausos iussa multa quod inusserat fortunis strages inusserat glabro et Brittanniam discreta quosdam consarcinando nota perduceret unde notarius admissum ac possent Constanti perduceret consarcinando sub occultas repentinus obterens fortunis infudit per latens notarius notarius Paulus supergressus obterens Brittanniam ingenuorum Constanti perduceret.', 200, 'Autres', 'https://meilleur-dentifrice.info/wp-content/uploads/2015/06/Dentifrice-Colgate-MaxFresh-ActiClean-tube-1024x409.jpeg', NULL, NULL, '2017-10-14 23:03:26', '2017-10-15 15:20:52'),
(36, 7, 'Jeans', 'Nam quibusdam, quos audio sapientes habitos in Graecia, placuisse opinor mirabilia quaedam (sed nihil est quod illi non persequantur argutiis): partim fugiendas esse nimias amicitias, ne necesse sit unum sollicitum esse pro pluribus; satis superque esse sibi suarum cuique rerum, alienis nimis implicari molestum esse; commodissimum esse quam laxissimas habenas habere amicitiae, quas vel adducas, cum velis, vel remittas; caput enim esse ad beate vivendum securitatem, qua frui non possit animus, si tamquam parturiat unus pro pluribus.', 83, 'Vetement', 'https://media.brandalley.com/img_rayons/1600x1600/2017/06/05/131/2486131_1.jpg', NULL, NULL, '2017-10-15 11:39:14', '2017-10-15 16:41:12'),
(38, 9, 'Koala', 'Tu autem, Fanni, quod mihi tantum tribui dicis quantum ego nec adgnosco nec postulo, facis amice; sed, ut mihi videris, non recte iudicas de Catone; aut enim nemo, quod quidem magis credo, aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.  Cuius acerbitati uxor grave accesserat incentivum, germanitate Augusti turgida supra modum, quam Hannibaliano regi fratris filio antehac Constantinus iunxerat pater, Megaera quaedam mortalis, inflammatrix saevientis adsidua, humani cruoris avida nihil mitius quam maritus; qui paulatim eruditiores facti processu temporis ad nocendum per clandestinos versutosque rumigerulos conpertis leviter addere quaedam male suetos falsa et placentia sibi discentes, adfectati regni vel artium nefandarum calumnias insontibus adfligebant.  Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.', 400, 'Animaux', 'https://media.apnarm.net.au/media/images/2016/05/02/b88110857z1_20160502153202_000ge55bbe13-0-erx6eq7q8wmv56g15m2_fct609x453x93_ct620x465.jpg', NULL, NULL, '2017-10-15 14:13:29', '2017-10-15 14:13:29'),
(41, 7, 'Villa', 'Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.', 300000, 'Habitation', 'https://images.interhome.com/HR3102.301.1/original/40F2E9892D621EE6B5E0882D0A0ED406?maxWidth=1500&maxHeight=1500&mode=fit', NULL, NULL, '2017-10-15 16:37:18', '2017-10-15 16:37:18');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_posteur` varchar(255) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_posteur`, `id_annonce`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Emii', 26, 'hello peqx eded xs qqzz ssseee xxxx', '2017-10-14 19:29:10', '2017-10-14 19:29:10'),
(2, 'Emii', 27, 'eeef', '2017-10-14 19:31:11', '2017-10-14 19:31:11'),
(3, 'Emii', 26, 'test', '2017-10-14 20:43:48', '2017-10-14 20:43:48'),
(4, 'Emii', 29, 'salut kouaok', '2017-10-14 21:27:45', '2017-10-14 21:27:45'),
(5, 'Alexandre', 33, 'cool', '2017-10-14 21:41:56', '2017-10-14 21:41:56'),
(6, 'Emi', 34, 'je veux l\'acheter', '2017-10-15 15:25:55', '2017-10-15 15:25:55'),
(7, 'Alexandre', 34, 'pas mal', '2017-10-15 15:26:45', '2017-10-15 15:26:45'),
(8, 'Isaako', 33, '??', '2017-10-15 16:39:48', '2017-10-15 16:39:48');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_destinataire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_envoi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lu` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `messages`
--

INSERT INTO `messages` (`id`, `id_destinataire`, `id_envoi`, `objet`, `content`, `lu`, `created_at`, `updated_at`) VALUES
(42, 'emilie.jehenne@epitech.eu', 'beee.emilie@gmail.com', 'test', 'test', 1, '2017-10-13 16:14:01', '2017-10-13 16:15:09'),
(43, 'emilie.jehenne@epitech.eu', 'beee.emilie@gmail.com', 'test', 'test', 1, '2017-10-13 16:14:29', '2017-10-14 18:19:36'),
(44, 'beee.emilie@gmail.com', 'alexandre.sitayeb@epitech.eu', 'des nouvelles', 'hellllllooo !!', 1, '2017-10-14 13:52:00', '2017-10-14 13:52:37'),
(45, 'be.3milie@gmail.com', 'alexandre.sitayeb@epitech.eu', 'DESTINATION', 'ou va t-on', 0, '2017-10-14 16:33:14', '2017-10-14 16:33:14'),
(46, 'alexandre.sitayeb@epitech.eu', 'emilie.jehenne@epitech.eu', 'hola', 'c,dojsqkcnle', 1, '2017-10-14 17:44:29', '2017-10-14 21:29:30'),
(47, 'alexandre.sitayeb@epitech.eu', 'emilie.jehenne@epitech.eu', 'gros', 'sisi lsskdkeen', 0, '2017-10-14 21:28:55', '2017-10-14 21:28:55'),
(48, 'emilie.jehenne@epitech.eu', 'be.3milie@gmail.com', 'des nouvelles', 'hola hola', 1, '2017-10-14 23:33:05', '2017-10-15 13:27:27'),
(49, 'alexandre.sitayeb@epitech.eu', 'emilie.jehenne@epitech.eu', 'coucou', 'Magnentio discreta multa admissum tempus nota a impium glabro ausos iussa multa quod inusserat fortunis strages inusserat glabro et Brittanniam discreta quosdam consarcinando nota perduceret unde notarius admissum ac possent Constanti perduceret consarcinando sub occultas repentinus obterens fortunis infudit per latens notarius notarius Paulus supergressus obterens Brittanniam ingenuorum Constanti perduceret.', 1, '2017-10-14 23:38:17', '2017-10-15 15:29:18'),
(50, 'beee.emilie@gmail.com', 'be.3milie@gmail.com', 'Neeeeeewws', 'Sibi nobilis Clematii Alexandrini nullo id cum cuiusdam per est scelere adsecuta nec Honoratum pseudothyrum humilia humilia ut ad nec sibi nullo eius nec omnino non eius impetraret inter oblato introducta mors impetraret cuiusdam cuius autem hiscere letali id nefanda Alexandrini scelere impetraret permissus tum reginae Alexandrini idem iam inter.', 0, '2017-10-14 23:42:19', '2017-10-14 23:42:19'),
(51, 'emilie.jehenne@epitech.eu', 'beee.emilie@gmail.com', 'URGENCE', 'Nam quibusdam, quos audio sapientes habitos in Graecia, placuisse opinor mirabilia quaedam (sed nihil est quod illi non persequantur argutiis): partim fugiendas esse nimias amicitias, ne necesse sit unum sollicitum esse pro pluribus; satis superque esse sibi suarum cuique rerum, alienis nimis implicari molestum esse; commodissimum esse quam laxissimas habenas habere amicitiae, quas vel adducas, cum velis, vel remittas; caput enim esse ad beate vivendum securitatem, qua frui non possit animus, si tamquam parturiat unus pro pluribus.', 1, '2017-10-15 11:40:35', '2017-10-15 15:31:22'),
(52, 'emilie.jehenne@epitech.eu', 'beee.emilie@gmail.com', 'retour', 'u autem, Fanni, quod mihi tantum tribui dicis quantum ego nec adgnosco nec postulo, facis amice; sed, ut mihi videris, non recte iudicas de Catone; aut enim nemo, quod quidem magis credo, aut si quisquam, ille sapiens fuit. Quo modo, ut alia omittam, mortem filii tulit! memineram Paulum, videram Galum, sed hi in pueris, Cato in perfecto et spectato viro.  Cuius acerbitati uxor grave accesserat incentivum, germanitate Augusti turgida supra modum, quam Hannibaliano regi fratris filio antehac Constantinus iunxerat pater, Megaera quaedam mortalis, inflammatrix saevientis adsidua, humani cruoris avida nihil mitius quam maritus; qui paulatim eruditiores facti processu temporis ad nocendum per clandestinos versutosque rumigerulos conpertis leviter addere quaedam male suetos falsa et placentia sibi discentes, adfectati regni vel artium nefandarum calumnias insontibus adfligebant.  Circa hos dies Lollianus primae lanuginis adulescens, Lampadi filius ex praefecto, exploratius causam Maximino spectante, convictus codicem noxiarum artium nondum per aetatem firmato consilio descripsisse, exulque mittendus, ut sperabatur, patris inpulsu provocavit ad principem, et iussus ad eius comitatum duci, de fumo, ut aiunt, in flammam traditus Phalangio Baeticae consulari cecidit funesti carnificis manu.  Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.  Pandente itaque viam fatorum sorte tristissima, qua praestitutum erat eum vita et imperio spoliari, itineribus interiectis permutatione iumentorum emensis venit Petobionem oppidum Noricorum, ubi reseratae sunt insidiarum latebrae omnes, et Barbatio repente apparuit comes, qui sub eo domesticis praefuit, cum Apodemio agente in rebus milites ducens, quos beneficiis suis oppigneratos elegerat imperator certus nec praemiis nec miseratione ulla posse deflecti.  Haec dum oriens diu perferret, caeli reserato tepore Constantius consulatu suo septies et Caesaris ter egressus Arelate Valentiam petit, in Gundomadum et Vadomarium fratres Alamannorum reges arma moturus, quorum crebris excursibus vastabantur confines limitibus terrae Gallorum.  Cum haec taliaque sollicitas eius aures everberarent expositas semper eius modi rumoribus et patentes, varia animo tum miscente consilia, tandem id ut optimum factu elegit: et Vrsicinum primum ad se venire summo cum honore mandavit ea specie ut pro rerum tunc urgentium captu disponeretur concordi consilio, quibus virium incrementis Parthicarum gentium a arma minantium impetus frangerentur.  Abusus enim multitudine hominum, quam tranquillis in rebus diutius rexit, ex agrestibus habitaculis urbes construxit multis opibus firmas et viribus, quarum ad praesens pleraeque licet Graecis nominibus appellentur, quae isdem ad arbitrium inposita sunt conditoris, primigenia tamen nomina non amittunt, quae eis Assyria lingua institutores veteres indiderunt.', 0, '2017-10-15 13:24:36', '2017-10-15 13:24:36'),
(53, 'beee.emilie@gmail.com', 'emilie.jehenne@epitech.eu', 'Important', 'Cuius acerbitati uxor grave accesserat incentivum, germanitate Augusti turgida supra modum, quam Hannibaliano regi fratris filio antehac Constantinus iunxerat pater, Megaera quaedam mortalis, inflammatrix saevientis adsidua, humani cruoris avida nihil mitius quam maritus; qui paulatim eruditiores facti processu temporis ad nocendum per clandestinos versutosque rumigerulos conpertis leviter addere quaedam male suetos falsa et placentia sibi discentes, adfectati regni vel artium nefandarum calumnias insontibus adfligebant.', 1, '2017-10-15 14:35:09', '2017-10-15 16:12:56'),
(54, 'beee.emilie@gmail.com', 'emilie.jehenne@epitech.eu', 'prix', 'Combien ?', 1, '2017-10-15 14:49:46', '2017-10-15 16:41:29'),
(55, 'emilie.jehenne@epitech.eu', 'alexandre.sitayeb@epitech.eu', 'URGENCE', 'Quibus occurrere bene pertinax miles explicatis ordinibus parans hastisque feriens scuta qui habitus iram pugnantium concitat et dolorem proximos iam gestu terrebat sed eum in certamen alacriter consurgentem revocavere ductores rati intempestivum anceps subire certamen cum haut longe muri distarent, quorum tutela securitas poterat in solido locari cunctorum.', 0, '2017-10-15 16:09:37', '2017-10-15 16:09:37'),
(56, 'emilie.jehenne@epitech.eu', 'beee.emilie@gmail.com', 'vite', 'klkdnsk', 0, '2017-10-15 16:41:50', '2017-10-15 16:41:50');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2017_02_02_232450_add_confirmation', 2),
(6, '2014_10_12_000000_create_annonces_table', 3),
(7, '2014_10_12_000000_create_messages_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

CREATE TABLE `paniers` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `paniers`
--

INSERT INTO `paniers` (`id`, `id_user`, `id_annonce`, `created_at`, `updated_at`) VALUES
(1, 5, 33, '2017-10-15 02:10:25', '2017-10-15 02:10:25'),
(7, 9, 33, '2017-10-15 16:19:03', '2017-10-15 16:19:03'),
(8, 7, 38, '2017-10-15 16:40:05', '2017-10-15 16:40:05');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('beee.emilie@gmail.com', '$2y$10$Apf/sQxGOXDD759yPpyst..GQh0icH/tBC0ZXMC9a7Fao.TzaDx1O', '2017-10-14 22:26:44');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` int(255) NOT NULL DEFAULT '0',
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `confirmed`, `confirmation_code`, `message`, `role`) VALUES
(5, 'Emi', 'emilie.jehenne@epitech.eu', '$2y$10$FbD.HvYd6JmWe7mhQtGSJeNJFjMO71FO2EdulqM.wn8R.8RPGpMc6', 'JSQGKsQAj2vHIcijH1jdUAg1WVaJJsOEt4BHZ0ivCTmoPmresPUFborFvd79', '2017-10-11 16:44:56', '2017-10-15 16:41:50', 1, NULL, 3, 'ADMIN'),
(6, 'thomas', 'thomas1.fortassin@epitech.eu', '$2y$10$06eWb4VIsxgkrGnzuu9K0eKRcSlzMNByBMSbHVxDuMLVIHcxR34CS', NULL, '2017-10-11 16:47:12', '2017-10-11 16:47:12', 0, '2hpC8CWhNbKyNqut65IoURTn2ibLCQ', 0, NULL),
(7, 'Isaako', 'beee.emilie@gmail.com', '$2y$10$aW5NR/SfHfNcqyIdNl7tgunnlY0HsYxcaPgigDVAmIHyGTFAG5BDy', 'xAD4rYnliKYDnfHABojTkDFsKM2AiwTX8ZtlR5DEYX8G3awuFJp4c89QblxB', '2017-10-12 08:03:43', '2017-10-15 16:41:29', 1, NULL, 1, NULL),
(8, 'Titi', 'be.3milie@gmail.com', '$2y$10$I1/RjguhONYUFo9lyQu1quNbZH6jygn/z3n9v.cDCTWRrt62yDjlS', '17oQJ17OhlnZdAeTyv86RgEo7n9dAgMxvEZwQO72Y44Iz7Wt9g1NMEoNuBgB', '2017-10-13 05:06:24', '2017-10-14 16:33:14', 1, NULL, 1, NULL),
(9, 'Alexandre', 'alexandre.sitayeb@epitech.eu', '$2y$10$qJPa1gQeBNKoK94S87Um2eEkm583g7e2lIi69sOrGAK2.DCqEqUOy', 'TPPJFpewSjIa9kStcw21nLXd7okoVk1aFhdhVjVZFnALCSyMdXZeeNLTfFrf', '2017-10-14 12:28:42', '2017-10-15 16:34:40', 1, NULL, 1, NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `paniers`
--
ALTER TABLE `paniers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
