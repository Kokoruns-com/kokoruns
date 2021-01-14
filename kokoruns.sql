-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 04:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kokoruns`
--

-- --------------------------------------------------------

--
-- Table structure for table `local_governments`
--

CREATE TABLE `local_governments` (
  `id` int(11) NOT NULL,
  `state_id` varchar(20) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='Local governments in Nigeria.';

--
-- Dumping data for table `local_governments`
--

INSERT INTO `local_governments` (`id`, `state_id`, `name`) VALUES
(1, 'Abia', 'Aba North'),
(2, 'Abia', 'Aba South'),
(3, 'Abia', 'Arochukwu'),
(4, 'Abia', 'Bende'),
(5, 'Abia', 'Ikwuano'),
(6, 'Abia', 'Isiala Ngwa North'),
(7, 'Abia', 'Isiala Ngwa South'),
(8, 'Abia', 'Isuikwuato'),
(9, 'Abia', 'Obi Ngwa'),
(10, 'Abia', 'Ohafia'),
(11, 'Abia', 'Osisioma'),
(12, 'Abia', 'Ugwunagbo'),
(13, 'Abia', 'Ukwa East'),
(14, 'Abia', 'Ukwa West'),
(15, 'Abia', 'Umuahia North'),
(16, 'Abia', 'Umuahia South'),
(17, 'Abia', 'Umu Nneochi'),
(18, 'Adamawa', 'Demsa'),
(19, 'Adamawa', 'Fufure'),
(20, 'Adamawa', 'Ganye'),
(21, 'Adamawa', 'Gayuk'),
(22, 'Adamawa', 'Gombi'),
(23, 'Adamawa', 'Grie'),
(24, 'Adamawa', 'Hong'),
(25, 'Adamawa', 'Jada'),
(26, 'Adamawa', 'Larmurde'),
(27, 'Adamawa', 'Madagali'),
(28, 'Adamawa', 'Maiha'),
(29, 'Adamawa', 'Mayo Belwa'),
(30, 'Adamawa', 'Michika'),
(31, 'Adamawa', 'Mubi North'),
(32, 'Adamawa', 'Mubi South'),
(33, 'Adamawa', 'Numan'),
(34, 'Adamawa', 'Shelleng'),
(35, 'Adamawa', 'Song'),
(36, 'Adamawa', 'Toungo'),
(37, 'Adamawa', 'Yola North'),
(38, 'Adamawa', 'Yola South'),
(39, 'AkwaIbom', 'Abak'),
(40, 'AkwaIbom', 'Eastern Obolo'),
(41, 'AkwaIbom', 'Eket'),
(42, 'AkwaIbom', 'Esit Eket'),
(43, 'AkwaIbom', 'Essien Udim'),
(44, 'AkwaIbom', 'Etim Ekpo'),
(45, 'AkwaIbom', 'Etinan'),
(46, 'AkwaIbom', 'Ibeno'),
(47, 'AkwaIbom', 'Ibesikpo Asutan'),
(48, 'AkwaIbom', 'Ibiono-Ibom'),
(49, 'AkwaIbom', 'Ika'),
(50, 'AkwaIbom', 'Ikono'),
(51, 'AkwaIbom', 'Ikot Abasi'),
(52, 'AkwaIbom', 'Ikot Ekpene'),
(53, 'AkwaIbom', 'Ini'),
(54, 'AkwaIbom', 'Itu'),
(55, 'AkwaIbom', 'Mbo'),
(56, 'AkwaIbom', 'Mkpat-Enin'),
(57, 'AkwaIbom', 'Nsit-Atai'),
(58, 'AkwaIbom', 'Nsit-Ibom'),
(59, 'AkwaIbom', 'Nsit-Ubium'),
(60, 'AkwaIbom', 'Obot Akara'),
(61, 'AkwaIbom', 'Okobo'),
(62, 'AkwaIbom', 'Onna'),
(63, 'AkwaIbom', 'Oron'),
(64, 'AkwaIbom', 'Oruk Anam'),
(65, 'AkwaIbom', 'Udung-Uko'),
(66, 'AkwaIbom', 'Ukanafun'),
(67, 'AkwaIbom', 'Uruan'),
(68, 'AkwaIbom', 'Urue-Offong/Oruko'),
(69, 'AkwaIbom', 'Uyo'),
(70, 'Anambra', 'Aguata'),
(71, 'Anambra', 'Anambra East'),
(72, 'Anambra', 'Anambra West'),
(73, 'Anambra', 'Anaocha'),
(74, 'Anambra', 'Awka North'),
(75, 'Anambra', 'Awka South'),
(76, 'Anambra', 'Ayamelum'),
(77, 'Anambra', 'Dunukofia'),
(78, 'Anambra', 'Ekwusigo'),
(79, 'Anambra', 'Idemili North'),
(80, 'Anambra', 'Idemili South'),
(81, 'Anambra', 'Ihiala'),
(82, 'Anambra', 'Njikoka'),
(83, 'Anambra', 'Nnewi North'),
(84, 'Anambra', 'Nnewi South'),
(85, 'Anambra', 'Ogbaru'),
(86, 'Anambra', 'Onitsha North'),
(87, 'Anambra', 'Onitsha South'),
(88, 'Anambra', 'Orumba North'),
(89, 'Anambra', 'Orumba South'),
(90, 'Anambra', 'Oyi'),
(91, 'Bauchi', 'Alkaleri'),
(92, 'Bauchi', 'Bauchi'),
(93, 'Bauchi', 'Bogoro'),
(94, 'Bauchi', 'Damban'),
(95, 'Bauchi', 'Darazo'),
(96, 'Bauchi', 'Dass'),
(97, 'Bauchi', 'Gamawa'),
(98, 'Bauchi', 'Ganjuwa'),
(99, 'Bauchi', 'Giade'),
(100, 'Bauchi', 'Itas/Gadau'),
(101, 'Bauchi', 'Jama\'are'),
(102, 'Bauchi', 'Katagum'),
(103, 'Bauchi', 'Kirfi'),
(104, 'Bauchi', 'Misau'),
(105, 'Bauchi', 'Ningi'),
(106, 'Bauchi', 'Shira'),
(107, 'Bauchi', 'Tafawa Balewa'),
(108, 'Bauchi', 'Toro'),
(109, 'Bauchi', 'Warji'),
(110, 'Bauchi', 'Zaki'),
(111, 'Bayelsa', 'Brass'),
(112, 'Bayelsa', 'Ekeremor'),
(113, 'Bayelsa', 'Kolokuma/Opokuma'),
(114, 'Bayelsa', 'Nembe'),
(115, 'Bayelsa', 'Ogbia'),
(116, 'Bayelsa', 'Sagbama'),
(117, 'Bayelsa', 'Southern Ijaw'),
(118, 'Bayelsa', 'Yenagoa'),
(119, 'Benue', 'Agatu'),
(120, 'Benue', 'Apa'),
(121, 'Benue', 'Ado'),
(122, 'Benue', 'Buruku'),
(123, 'Benue', 'Gboko'),
(124, 'Benue', 'Guma'),
(125, 'Benue', 'Gwer East'),
(126, 'Benue', 'Gwer West'),
(127, 'Benue', 'Katsina-Ala'),
(128, 'Benue', 'Konshisha'),
(129, 'Benue', 'Kwande'),
(130, 'Benue', 'Logo'),
(131, 'Benue', 'Makurdi'),
(132, 'Benue', 'Obi'),
(133, 'Benue', 'Ogbadibo'),
(134, 'Benue', 'Ohimini'),
(135, 'Benue', 'Oju'),
(136, 'Benue', 'Okpokwu'),
(137, 'Benue', 'Oturkpo'),
(138, 'Benue', 'Tarka'),
(139, 'Benue', 'Ukum'),
(140, 'Benue', 'Ushongo'),
(141, 'Benue', 'Vandeikya'),
(142, 'Borno', 'Abadam'),
(143, 'Borno', 'Askira/Uba'),
(144, 'Borno', 'Bama'),
(145, 'Borno', 'Bayo'),
(146, 'Borno', 'Biu'),
(147, 'Borno', 'Chibok'),
(148, 'Borno', 'Damboa'),
(149, 'Borno', 'Dikwa'),
(150, 'Borno', 'Gubio'),
(151, 'Borno', 'Guzamala'),
(152, 'Borno', 'Gwoza'),
(153, 'Borno', 'Hawul'),
(154, 'Borno', 'Jere'),
(155, 'Borno', 'Kaga'),
(156, 'Borno', 'Kala/Balge'),
(157, 'Borno', 'Konduga'),
(158, 'Borno', 'Kukawa'),
(159, 'Borno', 'Kwaya Kusar'),
(160, 'Borno', 'Mafa'),
(161, 'Borno', 'Magumeri'),
(162, 'Borno', 'Maiduguri'),
(163, 'Borno', 'Marte'),
(164, 'Borno', 'Mobbar'),
(165, 'Borno', 'Monguno'),
(166, 'Borno', 'Ngala'),
(167, 'Borno', 'Nganzai'),
(168, 'Borno', 'Shani'),
(169, 'Cross River', 'Abi'),
(170, 'Cross River', 'Akamkpa'),
(171, 'Cross River', 'Akpabuyo'),
(172, 'Cross River', 'Bakassi'),
(173, 'Cross River', 'Bekwarra'),
(174, 'Cross River', 'Biase'),
(175, 'Cross River', 'Boki'),
(176, 'Cross River', 'Calabar Municipal'),
(177, 'Cross River', 'Calabar South'),
(178, 'Cross River', 'Etung'),
(179, 'Cross River', 'Ikom'),
(180, 'Cross River', 'Obanliku'),
(181, 'Cross River', 'Obubra'),
(182, 'Cross River', 'Obudu'),
(183, 'Cross River', 'Odukpani'),
(184, 'Cross River', 'Ogoja'),
(185, 'Cross River', 'Yakuur'),
(186, 'Cross River', 'Yala'),
(187, 'Delta', 'Aniocha North'),
(188, 'Delta', 'Aniocha South'),
(189, 'Delta', 'Bomadi'),
(190, 'Delta', 'Burutu'),
(191, 'Delta', 'Ethiope East'),
(192, 'Delta', 'Ethiope West'),
(193, 'Delta', 'Ika North East'),
(194, 'Delta', 'Ika South'),
(195, 'Delta', 'Isoko North'),
(196, 'Delta', 'Isoko South'),
(197, 'Delta', 'Ndokwa East'),
(198, 'Delta', 'Ndokwa West'),
(199, 'Delta', 'Okpe'),
(200, 'Delta', 'Oshimili North'),
(201, 'Delta', 'Oshimili South'),
(202, 'Delta', 'Patani'),
(203, 'Delta', 'Sapele, Delta'),
(204, 'Delta', 'Udu'),
(205, 'Delta', 'Ughelli North'),
(206, 'Delta', 'Ughelli South'),
(207, 'Delta', 'Ukwuani'),
(208, 'Delta', 'Uvwie'),
(209, 'Delta', 'Warri North'),
(210, 'Delta', 'Warri South'),
(211, 'Delta', 'Warri South West'),
(212, 'Ebonyi', 'Abakaliki'),
(213, 'Ebonyi', 'Afikpo North'),
(214, 'Ebonyi', 'Afikpo South'),
(215, 'Ebonyi', 'Ebonyi'),
(216, 'Ebonyi', 'Ezza North'),
(217, 'Ebonyi', 'Ezza South'),
(218, 'Ebonyi', 'Ikwo'),
(219, 'Ebonyi', 'Ishielu'),
(220, 'Ebonyi', 'Ivo'),
(221, 'Ebonyi', 'Izzi'),
(222, 'Ebonyi', 'Ohaozara'),
(223, 'Ebonyi', 'Ohaukwu'),
(224, 'Ebonyi', 'Onicha'),
(225, 'Edo', 'Akoko-Edo'),
(226, 'Edo', 'Egor'),
(227, 'Edo', 'Esan Central'),
(228, 'Edo', 'Esan North-East'),
(229, 'Edo', 'Esan South-East'),
(230, 'Edo', 'Esan West'),
(231, 'Edo', 'Etsako Central'),
(232, 'Edo', 'Etsako East'),
(233, 'Edo', 'Etsako West'),
(234, 'Edo', 'Igueben'),
(235, 'Edo', 'Ikpoba Okha'),
(236, 'Edo', 'Orhionmwon'),
(237, 'Edo', 'Oredo'),
(238, 'Edo', 'Ovia North-East'),
(239, 'Edo', 'Ovia South-West'),
(240, 'Edo', 'Owan East'),
(241, 'Edo', 'Owan West'),
(242, 'Edo', 'Uhunmwonde'),
(243, 'Ekiti', 'Ado Ekiti'),
(244, 'Ekiti', 'Efon'),
(245, 'Ekiti', 'Ekiti East'),
(246, 'Ekiti', 'Ekiti South-West'),
(247, 'Ekiti', 'Ekiti West'),
(248, 'Ekiti', 'Emure'),
(249, 'Ekiti', 'Gbonyin'),
(250, 'Ekiti', 'Ido Osi'),
(251, 'Ekiti', 'Ijero'),
(252, 'Ekiti', 'Ikere'),
(253, 'Ekiti', 'Ikole'),
(254, 'Ekiti', 'Ilejemeje'),
(255, 'Ekiti', 'Irepodun/Ifelodun'),
(256, 'Ekiti', 'Ise/Orun'),
(257, 'Ekiti', 'Moba'),
(258, 'Ekiti', 'Oye'),
(259, 'Enugu', 'Aninri'),
(260, 'Enugu', 'Awgu'),
(261, 'Enugu', 'Enugu East'),
(262, 'Enugu', 'Enugu North'),
(263, 'Enugu', 'Enugu South'),
(264, 'Enugu', 'Ezeagu'),
(265, 'Enugu', 'Igbo Etiti'),
(266, 'Enugu', 'Igbo Eze North'),
(267, 'Enugu', 'Igbo Eze South'),
(268, 'Enugu', 'Isi Uzo'),
(269, 'Enugu', 'Nkanu East'),
(270, 'Enugu', 'Nkanu West'),
(271, 'Enugu', 'Nsukka'),
(272, 'Enugu', 'Oji River'),
(273, 'Enugu', 'Udenu'),
(274, 'Enugu', 'Udi'),
(275, 'Enugu', 'Uzo Uwani'),
(276, 'FCT', 'Abaji'),
(277, 'FCT', 'Bwari'),
(278, 'FCT', 'Gwagwalada'),
(279, 'FCT', 'Kuje'),
(280, 'FCT', 'Kwali'),
(281, 'FCT', 'Municipal Area Council'),
(282, 'Gombe', 'Akko'),
(283, 'Gombe', 'Balanga'),
(284, 'Gombe', 'Billiri'),
(285, 'Gombe', 'Dukku'),
(286, 'Gombe', 'Funakaye'),
(287, 'Gombe', 'Gombe'),
(288, 'Gombe', 'Kaltungo'),
(289, 'Gombe', 'Kwami'),
(290, 'Gombe', 'Nafada'),
(291, 'Gombe', 'Shongom'),
(292, 'Gombe', 'Yamaltu/Deba'),
(293, 'Imo', 'Aboh Mbaise'),
(294, 'Imo', 'Ahiazu Mbaise'),
(295, 'Imo', 'Ehime Mbano'),
(296, 'Imo', 'Ezinihitte'),
(297, 'Imo', 'Ideato North'),
(298, 'Imo', 'Ideato South'),
(299, 'Imo', 'Ihitte/Uboma'),
(300, 'Imo', 'Ikeduru'),
(301, 'Imo', 'Isiala Mbano'),
(302, 'Imo', 'Isu'),
(303, 'Imo', 'Mbaitoli'),
(304, 'Imo', 'Ngor Okpala'),
(305, 'Imo', 'Njaba'),
(306, 'Imo', 'Nkwerre'),
(307, 'Imo', 'Nwangele'),
(308, 'Imo', 'Obowo'),
(309, 'Imo', 'Oguta'),
(310, 'Imo', 'Ohaji/Egbema'),
(311, 'Imo', 'Okigwe'),
(312, 'Imo', 'Orlu'),
(313, 'Imo', 'Orsu'),
(314, 'Imo', 'Oru East'),
(315, 'Imo', 'Oru West'),
(316, 'Imo', 'Owerri Municipal'),
(317, 'Imo', 'Owerri North'),
(318, 'Imo', 'Owerri West'),
(319, 'Imo', 'Unuimo'),
(320, 'Jigawa', 'Auyo'),
(321, 'Jigawa', 'Babura'),
(322, 'Jigawa', 'Biriniwa'),
(323, 'Jigawa', 'Birnin Kudu'),
(324, 'Jigawa', 'Buji'),
(325, 'Jigawa', 'Dutse'),
(326, 'Jigawa', 'Gagarawa'),
(327, 'Jigawa', 'Garki'),
(328, 'Jigawa', 'Gumel'),
(329, 'Jigawa', 'Guri'),
(330, 'Jigawa', 'Gwaram'),
(331, 'Jigawa', 'Gwiwa'),
(332, 'Jigawa', 'Hadejia'),
(333, 'Jigawa', 'Jahun'),
(334, 'Jigawa', 'Kafin Hausa'),
(335, 'Jigawa', 'Kazaure'),
(336, 'Jigawa', 'Kiri Kasama'),
(337, 'Jigawa', 'Kiyawa'),
(338, 'Jigawa', 'Kaugama'),
(339, 'Jigawa', 'Maigatari'),
(340, 'Jigawa', 'Malam Madori'),
(341, 'Jigawa', 'Miga'),
(342, 'Jigawa', 'Ringim'),
(343, 'Jigawa', 'Roni'),
(344, 'Jigawa', 'Sule Tankarkar'),
(345, 'Jigawa', 'Taura'),
(346, 'Jigawa', 'Yankwashi'),
(347, 'Kaduna', 'Birnin Gwari'),
(348, 'Kaduna', 'Chikun'),
(349, 'Kaduna', 'Giwa'),
(350, 'Kaduna', 'Igabi'),
(351, 'Kaduna', 'Ikara'),
(352, 'Kaduna', 'Jaba'),
(353, 'Kaduna', 'Jema\'a'),
(354, 'Kaduna', 'Kachia'),
(355, 'Kaduna', 'Kaduna North'),
(356, 'Kaduna', 'Kaduna South'),
(357, 'Kaduna', 'Kagarko'),
(358, 'Kaduna', 'Kajuru'),
(359, 'Kaduna', 'Kaura'),
(360, 'Kaduna', 'Kauru'),
(361, 'Kaduna', 'Kubau'),
(362, 'Kaduna', 'Kudan'),
(363, 'Kaduna', 'Lere'),
(364, 'Kaduna', 'Makarfi'),
(365, 'Kaduna', 'Sabon Gari'),
(366, 'Kaduna', 'Sanga'),
(367, 'Kaduna', 'Soba'),
(368, 'Kaduna', 'Zangon Kataf'),
(369, 'Kaduna', 'Zaria'),
(370, 'Kano', 'Ajingi'),
(371, 'Kano', 'Albasu'),
(372, 'Kano', 'Bagwai'),
(373, 'Kano', 'Bebeji'),
(374, 'Kano', 'Bichi'),
(375, 'Kano', 'Bunkure'),
(376, 'Kano', 'Dala'),
(377, 'Kano', 'Dambatta'),
(378, 'Kano', 'Dawakin Kudu'),
(379, 'Kano', 'Dawakin Tofa'),
(380, 'Kano', 'Doguwa'),
(381, 'Kano', 'Fagge'),
(382, 'Kano', 'Gabasawa'),
(383, 'Kano', 'Garko'),
(384, 'Kano', 'Garun Mallam'),
(385, 'Kano', 'Gaya'),
(386, 'Kano', 'Gezawa'),
(387, 'Kano', 'Gwale'),
(388, 'Kano', 'Gwarzo'),
(389, 'Kano', 'Kabo'),
(390, 'Kano', 'Kano Municipal'),
(391, 'Kano', 'Karaye'),
(392, 'Kano', 'Kibiya'),
(393, 'Kano', 'Kiru'),
(394, 'Kano', 'Kumbotso'),
(395, 'Kano', 'Kunchi'),
(396, 'Kano', 'Kura'),
(397, 'Kano', 'Madobi'),
(398, 'Kano', 'Makoda'),
(399, 'Kano', 'Minjibir'),
(400, 'Kano', 'Nasarawa'),
(401, 'Kano', 'Rano'),
(402, 'Kano', 'Rimin Gado'),
(403, 'Kano', 'Rogo'),
(404, 'Kano', 'Shanono'),
(405, 'Kano', 'Sumaila'),
(406, 'Kano', 'Takai'),
(407, 'Kano', 'Tarauni'),
(408, 'Kano', 'Tofa'),
(409, 'Kano', 'Tsanyawa'),
(410, 'Kano', 'Tudun Wada'),
(411, 'Kano', 'Ungogo'),
(412, 'Kano', 'Warawa'),
(413, 'Kano', 'Wudil'),
(414, 'Katsina', 'Bakori'),
(415, 'Katsina', 'Batagarawa'),
(416, 'Katsina', 'Batsari'),
(417, 'Katsina', 'Baure'),
(418, 'Katsina', 'Bindawa'),
(419, 'Katsina', 'Charanchi'),
(420, 'Katsina', 'Dandume'),
(421, 'Katsina', 'Danja'),
(422, 'Katsina', 'Dan Musa'),
(423, 'Katsina', 'Daura'),
(424, 'Katsina', 'Dutsi'),
(425, 'Katsina', 'Dutsin Ma'),
(426, 'Katsina', 'Faskari'),
(427, 'Katsina', 'Funtua'),
(428, 'Katsina', 'Ingawa'),
(429, 'Katsina', 'Jibia'),
(430, 'Katsina', 'Kafur'),
(431, 'Katsina', 'Kaita'),
(432, 'Katsina', 'Kankara'),
(433, 'Katsina', 'Kankia'),
(434, 'Katsina', 'Katsina'),
(435, 'Katsina', 'Kurfi'),
(436, 'Katsina', 'Kusada'),
(437, 'Katsina', 'Mai\'Adua'),
(438, 'Katsina', 'Malumfashi'),
(439, 'Katsina', 'Mani'),
(440, 'Katsina', 'Mashi'),
(441, 'Katsina', 'Matazu'),
(442, 'Katsina', 'Musawa'),
(443, 'Katsina', 'Rimi'),
(444, 'Katsina', 'Sabuwa'),
(445, 'Katsina', 'Safana'),
(446, 'Katsina', 'Sandamu'),
(447, 'Katsina', 'Zango'),
(448, 'Kebbi', 'Aleiro'),
(449, 'Kebbi', 'Arewa Dandi'),
(450, 'Kebbi', 'Argungu'),
(451, 'Kebbi', 'Augie'),
(452, 'Kebbi', 'Bagudo'),
(453, 'Kebbi', 'Birnin Kebbi'),
(454, 'Kebbi', 'Bunza'),
(455, 'Kebbi', 'Dandi'),
(456, 'Kebbi', 'Fakai'),
(457, 'Kebbi', 'Gwandu'),
(458, 'Kebbi', 'Jega'),
(459, 'Kebbi', 'Kalgo'),
(460, 'Kebbi', 'Koko/Besse'),
(461, 'Kebbi', 'Maiyama'),
(462, 'Kebbi', 'Ngaski'),
(463, 'Kebbi', 'Sakaba'),
(464, 'Kebbi', 'Shanga'),
(465, 'Kebbi', 'Suru'),
(466, 'Kebbi', 'Wasagu/Danko'),
(467, 'Kebbi', 'Yauri'),
(468, 'Kebbi', 'Zuru'),
(469, 'Kogi', 'Adavi'),
(470, 'Kogi', 'Ajaokuta'),
(471, 'Kogi', 'Ankpa'),
(472, 'Kogi', 'Bassa'),
(473, 'Kogi', 'Dekina'),
(474, 'Kogi', 'Ibaji'),
(475, 'Kogi', 'Idah'),
(476, 'Kogi', 'Igalamela Odolu'),
(477, 'Kogi', 'Ijumu'),
(478, 'Kogi', 'Kabba/Bunu'),
(479, 'Kogi', 'Kogi'),
(480, 'Kogi', 'Lokoja'),
(481, 'Kogi', 'Mopa Muro'),
(482, 'Kogi', 'Ofu'),
(483, 'Kogi', 'Ogori/Magongo'),
(484, 'Kogi', 'Okehi'),
(485, 'Kogi', 'Okene'),
(486, 'Kogi', 'Olamaboro'),
(487, 'Kogi', 'Omala'),
(488, 'Kogi', 'Yagba East'),
(489, 'Kogi', 'Yagba West'),
(490, 'Kwara', 'Asa'),
(491, 'Kwara', 'Baruten'),
(492, 'Kwara', 'Edu'),
(493, 'Kwara', 'Ekiti, Kwara State'),
(494, 'Kwara', 'Ifelodun'),
(495, 'Kwara', 'Ilorin East'),
(496, 'Kwara', 'Ilorin South'),
(497, 'Kwara', 'Ilorin West'),
(498, 'Kwara', 'Irepodun'),
(499, 'Kwara', 'Isin'),
(500, 'Kwara', 'Kaiama'),
(501, 'Kwara', 'Moro'),
(502, 'Kwara', 'Offa'),
(503, 'Kwara', 'Oke Ero'),
(504, 'Kwara', 'Oyun'),
(505, 'Kwara', 'Pategi'),
(506, 'Lagos', 'Agege'),
(507, 'Lagos', 'Ajeromi-Ifelodun'),
(508, 'Lagos', 'Alimosho'),
(509, 'Lagos', 'Amuwo-Odofin'),
(510, 'Lagos', 'Apapa'),
(511, 'Lagos', 'Badagry'),
(512, 'Lagos', 'Epe'),
(513, 'Lagos', 'Eti Osa'),
(514, 'Lagos', 'Ibeju-Lekki'),
(515, 'Lagos', 'Ifako-Ijaiye'),
(516, 'Lagos', 'Ikeja'),
(517, 'Lagos', 'Ikorodu'),
(518, 'Lagos', 'Kosofe'),
(519, 'Lagos', 'Lagos Island'),
(520, 'Lagos', 'Lagos Mainland'),
(521, 'Lagos', 'Mushin'),
(522, 'Lagos', 'Ojo'),
(523, 'Lagos', 'Oshodi-Isolo'),
(524, 'Lagos', 'Shomolu'),
(525, 'Lagos', 'Surulere, Lagos State'),
(526, 'Nasarawa', 'Akwanga'),
(527, 'Nasarawa', 'Awe'),
(528, 'Nasarawa', 'Doma'),
(529, 'Nasarawa', 'Karu'),
(530, 'Nasarawa', 'Keana'),
(531, 'Nasarawa', 'Keffi'),
(532, 'Nasarawa', 'Kokona'),
(533, 'Nasarawa', 'Lafia'),
(534, 'Nasarawa', 'Nasarawa'),
(535, 'Nasarawa', 'Nasarawa Egon'),
(536, 'Nasarawa', 'Obi'),
(537, 'Nasarawa', 'Toto'),
(538, 'Nasarawa', 'Wamba'),
(539, 'Niger', 'Agaie'),
(540, 'Niger', 'Agwara'),
(541, 'Niger', 'Bida'),
(542, 'Niger', 'Borgu'),
(543, 'Niger', 'Bosso'),
(544, 'Niger', 'Chanchaga'),
(545, 'Niger', 'Edati'),
(546, 'Niger', 'Gbako'),
(547, 'Niger', 'Gurara'),
(548, 'Niger', 'Katcha'),
(549, 'Niger', 'Kontagora'),
(550, 'Niger', 'Lapai'),
(551, 'Niger', 'Lavun'),
(552, 'Niger', 'Magama'),
(553, 'Niger', 'Mariga'),
(554, 'Niger', 'Mashegu'),
(555, 'Niger', 'Mokwa'),
(556, 'Niger', 'Moya'),
(557, 'Niger', 'Paikoro'),
(558, 'Niger', 'Rafi'),
(559, 'Niger', 'Rijau'),
(560, 'Niger', 'Shiroro'),
(561, 'Niger', 'Suleja'),
(562, 'Niger', 'Tafa'),
(563, 'Niger', 'Wushishi'),
(564, 'Ogun', 'Abeokuta North'),
(565, 'Ogun', 'Abeokuta South'),
(566, 'Ogun', 'Ado-Odo/Ota'),
(567, 'Ogun', 'Egbado North'),
(568, 'Ogun', 'Egbado South'),
(569, 'Ogun', 'Ewekoro'),
(570, 'Ogun', 'Ifo'),
(571, 'Ogun', 'Ijebu East'),
(572, 'Ogun', 'Ijebu North'),
(573, 'Ogun', 'Ijebu North East'),
(574, 'Ogun', 'Ijebu Ode'),
(575, 'Ogun', 'Ikenne'),
(576, 'Ogun', 'Imeko Afon'),
(577, 'Ogun', 'Ipokia'),
(578, 'Ogun', 'Obafemi Owode'),
(579, 'Ogun', 'Odeda'),
(580, 'Ogun', 'Odogbolu'),
(581, 'Ogun', 'Ogun Waterside'),
(582, 'Ogun', 'Remo North'),
(583, 'Ogun', 'Shagamu'),
(584, 'Ondo', 'Akoko North-East'),
(585, 'Ondo', 'Akoko North-West'),
(586, 'Ondo', 'Akoko South-West'),
(587, 'Ondo', 'Akoko South-East'),
(588, 'Ondo', 'Akure North'),
(589, 'Ondo', 'Akure South'),
(590, 'Ondo', 'Ese Odo'),
(591, 'Ondo', 'Idanre'),
(592, 'Ondo', 'Ifedore'),
(593, 'Ondo', 'Ilaje'),
(594, 'Ondo', 'Ile Oluji/Okeigbo'),
(595, 'Ondo', 'Irele'),
(596, 'Ondo', 'Odigbo'),
(597, 'Ondo', 'Okitipupa'),
(598, 'Ondo', 'Ondo East'),
(599, 'Ondo', 'Ondo West'),
(600, 'Ondo', 'Ose'),
(601, 'Ondo', 'Owo'),
(602, 'Osun', 'Atakunmosa East'),
(603, 'Osun', 'Atakunmosa West'),
(604, 'Osun', 'Aiyedaade'),
(605, 'Osun', 'Aiyedire'),
(606, 'Osun', 'Boluwaduro'),
(607, 'Osun', 'Boripe'),
(608, 'Osun', 'Ede North'),
(609, 'Osun', 'Ede South'),
(610, 'Osun', 'Ife Central'),
(611, 'Osun', 'Ife East'),
(612, 'Osun', 'Ife North'),
(613, 'Osun', 'Ife South'),
(614, 'Osun', 'Egbedore'),
(615, 'Osun', 'Ejigbo'),
(616, 'Osun', 'Ifedayo'),
(617, 'Osun', 'Ifelodun'),
(618, 'Osun', 'Ila'),
(619, 'Osun', 'Ilesa East'),
(620, 'Osun', 'Ilesa West'),
(621, 'Osun', 'Irepodun'),
(622, 'Osun', 'Irewole'),
(623, 'Osun', 'Isokan'),
(624, 'Osun', 'Iwo'),
(625, 'Osun', 'Obokun'),
(626, 'Osun', 'Odo Otin'),
(627, 'Osun', 'Ola Oluwa'),
(628, 'Osun', 'Olorunda'),
(629, 'Osun', 'Oriade'),
(630, 'Osun', 'Orolu'),
(631, 'Osun', 'Osogbo'),
(632, 'Oyo', 'Afijio'),
(633, 'Oyo', 'Akinyele'),
(634, 'Oyo', 'Atiba'),
(635, 'Oyo', 'Atisbo'),
(636, 'Oyo', 'Egbeda'),
(637, 'Oyo', 'Ibadan North'),
(638, 'Oyo', 'Ibadan North-East'),
(639, 'Oyo', 'Ibadan North-West'),
(640, 'Oyo', 'Ibadan South-East'),
(641, 'Oyo', 'Ibadan South-West'),
(642, 'Oyo', 'Ibarapa Central'),
(643, 'Oyo', 'Ibarapa East'),
(644, 'Oyo', 'Ibarapa North'),
(645, 'Oyo', 'Ido'),
(646, 'Oyo', 'Irepo'),
(647, 'Oyo', 'Iseyin'),
(648, 'Oyo', 'Itesiwaju'),
(649, 'Oyo', 'Iwajowa'),
(650, 'Oyo', 'Kajola'),
(651, 'Oyo', 'Lagelu'),
(652, 'Oyo', 'Ogbomosho North'),
(653, 'Oyo', 'Ogbomosho South'),
(654, 'Oyo', 'Ogo Oluwa'),
(655, 'Oyo', 'Olorunsogo'),
(656, 'Oyo', 'Oluyole'),
(657, 'Oyo', 'Ona Ara'),
(658, 'Oyo', 'Orelope'),
(659, 'Oyo', 'Ori Ire'),
(660, 'Oyo', 'Oyo'),
(661, 'Oyo', 'Oyo East'),
(662, 'Oyo', 'Saki East'),
(663, 'Oyo', 'Saki West'),
(664, 'Oyo', 'Surulere, Oyo State'),
(665, 'Plateau', 'Bokkos'),
(666, 'Plateau', 'Barkin Ladi'),
(667, 'Plateau', 'Bassa'),
(668, 'Plateau', 'Jos East'),
(669, 'Plateau', 'Jos North'),
(670, 'Plateau', 'Jos South'),
(671, 'Plateau', 'Kanam'),
(672, 'Plateau', 'Kanke'),
(673, 'Plateau', 'Langtang South'),
(674, 'Plateau', 'Langtang North'),
(675, 'Plateau', 'Mangu'),
(676, 'Plateau', 'Mikang'),
(677, 'Plateau', 'Pankshin'),
(678, 'Plateau', 'Qua\'an Pan'),
(679, 'Plateau', 'Riyom'),
(680, 'Plateau', 'Shendam'),
(681, 'Plateau', 'Wase'),
(682, 'Rivers', 'Abua/Odual'),
(683, 'Rivers', 'Ahoada East'),
(684, 'Rivers', 'Ahoada West'),
(685, 'Rivers', 'Akuku-Toru'),
(686, 'Rivers', 'Andoni'),
(687, 'Rivers', 'Asari-Toru'),
(688, 'Rivers', 'Bonny'),
(689, 'Rivers', 'Degema'),
(690, 'Rivers', 'Eleme'),
(691, 'Rivers', 'Emuoha'),
(692, 'Rivers', 'Etche'),
(693, 'Rivers', 'Gokana'),
(694, 'Rivers', 'Ikwerre'),
(695, 'Rivers', 'Khana'),
(696, 'Rivers', 'Obio/Akpor'),
(697, 'Rivers', 'Ogba/Egbema/Ndoni'),
(698, 'Rivers', 'Ogu/Bolo'),
(699, 'Rivers', 'Okrika'),
(700, 'Rivers', 'Omuma'),
(701, 'Rivers', 'Opobo/Nkoro'),
(702, 'Rivers', 'Oyigbo'),
(703, 'Rivers', 'Port Harcourt'),
(704, 'Rivers', 'Tai'),
(705, 'Sokoto', 'Binji'),
(706, 'Sokoto', 'Bodinga'),
(707, 'Sokoto', 'Dange Shuni'),
(708, 'Sokoto', 'Gada'),
(709, 'Sokoto', 'Goronyo'),
(710, 'Sokoto', 'Gudu'),
(711, 'Sokoto', 'Gwadabawa'),
(712, 'Sokoto', 'Illela'),
(713, 'Sokoto', 'Isa'),
(714, 'Sokoto', 'Kebbe'),
(715, 'Sokoto', 'Kware'),
(716, 'Sokoto', 'Rabah'),
(717, 'Sokoto', 'Sabon Birni'),
(718, 'Sokoto', 'Shagari'),
(719, 'Sokoto', 'Silame'),
(720, 'Sokoto', 'Sokoto North'),
(721, 'Sokoto', 'Sokoto South'),
(722, 'Sokoto', 'Tambuwal'),
(723, 'Sokoto', 'Tangaza'),
(724, 'Sokoto', 'Tureta'),
(725, 'Sokoto', 'Wamako'),
(726, 'Sokoto', 'Wurno'),
(727, 'Sokoto', 'Yabo'),
(728, 'Taraba', 'Ardo Kola'),
(729, 'Taraba', 'Bali'),
(730, 'Taraba', 'Donga'),
(731, 'Taraba', 'Gashaka'),
(732, 'Taraba', 'Gassol'),
(733, 'Taraba', 'Ibi'),
(734, 'Taraba', 'Jalingo'),
(735, 'Taraba', 'Karim Lamido'),
(736, 'Taraba', 'Kumi'),
(737, 'Taraba', 'Lau'),
(738, 'Taraba', 'Sardauna'),
(739, 'Taraba', 'Takum'),
(740, 'Taraba', 'Ussa'),
(741, 'Taraba', 'Wukari'),
(742, 'Taraba', 'Yorro'),
(743, 'Taraba', 'Zing'),
(744, 'Yobe', 'Bade'),
(745, 'Yobe', 'Bursari'),
(746, 'Yobe', 'Damaturu'),
(747, 'Yobe', 'Fika'),
(748, 'Yobe', 'Fune'),
(749, 'Yobe', 'Geidam'),
(750, 'Yobe', 'Gujba'),
(751, 'Yobe', 'Gulani'),
(752, 'Yobe', 'Jakusko'),
(753, 'Yobe', 'Karasuwa'),
(754, 'Yobe', 'Machina'),
(755, 'Yobe', 'Nangere'),
(756, 'Yobe', 'Nguru'),
(757, 'Yobe', 'Potiskum'),
(758, 'Yobe', 'Tarmuwa'),
(759, 'Yobe', 'Yunusari'),
(760, 'Yobe', 'Yusufari'),
(761, 'Zamfara', 'Anka'),
(762, 'Zamfara', 'Bakura'),
(763, 'Zamfara', 'Birnin Magaji/Kiyaw'),
(764, 'Zamfara', 'Bukkuyum'),
(765, 'Zamfara', 'Bungudu'),
(766, 'Zamfara', 'Gummi'),
(767, 'Zamfara', 'Gusau'),
(768, 'Zamfara', 'Kaura Namoda'),
(769, 'Zamfara', 'Maradun'),
(770, 'Zamfara', 'Maru'),
(771, 'Zamfara', 'Shinkafi'),
(772, 'Zamfara', 'Talata Mafara'),
(773, 'Zamfara', 'Chafe'),
(774, 'Zamfara', 'Zurmi');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicants`
--

CREATE TABLE `tapplicants` (
  `frecno` double UNSIGNED NOT NULL,
  `ffirst_name` varchar(20) NOT NULL,
  `flast_name` varchar(20) NOT NULL,
  `fapplicant_id` varchar(100) NOT NULL,
  `fuser_name` varchar(50) NOT NULL,
  `fpass_word` varchar(70) NOT NULL,
  `femail` varchar(80) NOT NULL,
  `fphone` varchar(20) NOT NULL,
  `fage_range` varchar(30) NOT NULL,
  `faddress` text NOT NULL,
  `fprofession` varchar(80) NOT NULL,
  `femployment_type` varchar(30) NOT NULL,
  `feducational_qualification` varchar(80) NOT NULL,
  `fminimum_salary` int(11) NOT NULL DEFAULT 0,
  `fstate` varchar(30) NOT NULL,
  `flga` varchar(30) NOT NULL,
  `ftoken` varchar(100) NOT NULL,
  `factive` tinyint(4) NOT NULL DEFAULT 0,
  `fprofile_image` varchar(150) NOT NULL DEFAULT 'User DP.png',
  `fbackground_image` varchar(150) NOT NULL,
  `ftext_colour` varchar(20) NOT NULL,
  `fgender` varchar(20) NOT NULL,
  `fmarital_status` varchar(30) NOT NULL,
  `fpreferred_job_location_lga` varchar(30) NOT NULL,
  `fpreferred_job1` varchar(80) NOT NULL,
  `fpreferred_job2` varchar(80) NOT NULL,
  `fpreferred_job3` varchar(80) NOT NULL,
  `fpreferred_job4` varchar(80) NOT NULL,
  `fother_professions1` varchar(80) NOT NULL,
  `fother_professions2` varchar(80) NOT NULL,
  `fother_professions3` varchar(80) NOT NULL,
  `fother_professions4` varchar(80) NOT NULL,
  `favailability_start_date` date DEFAULT NULL,
  `fcurrent_employer` varchar(80) NOT NULL,
  `fdisabled` varchar(20) NOT NULL,
  `flanguages1` varchar(80) NOT NULL,
  `flanguages2` varchar(80) NOT NULL,
  `flanguages3` varchar(80) NOT NULL,
  `flanguages4` varchar(80) NOT NULL,
  `flanguages5` varchar(80) NOT NULL,
  `fpreferred_job_location_state` varchar(30) NOT NULL,
  `fcookie` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicants`
--

INSERT INTO `tapplicants` (`frecno`, `ffirst_name`, `flast_name`, `fapplicant_id`, `fuser_name`, `fpass_word`, `femail`, `fphone`, `fage_range`, `faddress`, `fprofession`, `femployment_type`, `feducational_qualification`, `fminimum_salary`, `fstate`, `flga`, `ftoken`, `factive`, `fprofile_image`, `fbackground_image`, `ftext_colour`, `fgender`, `fmarital_status`, `fpreferred_job_location_lga`, `fpreferred_job1`, `fpreferred_job2`, `fpreferred_job3`, `fpreferred_job4`, `fother_professions1`, `fother_professions2`, `fother_professions3`, `fother_professions4`, `favailability_start_date`, `fcurrent_employer`, `fdisabled`, `flanguages1`, `flanguages2`, `flanguages3`, `flanguages4`, `flanguages5`, `fpreferred_job_location_state`, `fcookie`, `created_at`, `updated_at`) VALUES
(31, 'Godson', 'Ihemere', 'godson.ihemere', '33333333', '$2y$10$cnPn3lJ1FsI0/11ORMlkmu5sQjkT.i3xj9hj1NK1WP4QG3Hrp36zm', '', '07030595988', '2020-09-27', '11, Oke Str', 'Accountant', 'Part Time', 'Higher National Diploma', 0, 'Ekiti', 'Ilejemeje', '89ad034ecb9fef42d2223e7cfe2b524c', 1, 'User DP.png', '', '#FF0000', 'Male', 'No', 'Balanga', 'Carpentary', 'Carpentary', 'Carpentary', 'Carpentary', 'Carpentary', 'Accountant', 'Accountant', 'Accountant', '2000-01-01', 'Bua', 'No', 'English', 'English', 'Yoruba', 'English', 'Yoruba', 'Gombe', '', '2020-10-12 13:00:17', '2020-11-09 23:42:51'),
(32, 'Gbemileke', 'Daniel', 'gbemileke.daniel', 'leke.daniel@gmail.com ', '$2y$10$30l.sHjH0yTV/m.FbnaNwuqRdhyojhKsLij2HqnQF9i.aL90Fd5BS', '', '+2348145385684', '2020-10-07', '690, Plot 1184 ambibola awoniyi vi', 'Accountant', 'Part Time', '', 0, 'Lagos', 'Agege', 'bedee458a3368e5326f07eaae8373744', 1, 'User DP.png', '', '#008000', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-10-12 20:38:11', '2020-11-04 23:30:02'),
(33, 'Bunto', 'Ronny', 'bunto.ronny', '08098738740', '$2y$10$TmvdziIaCvuGI/mHLylco.UPhlcWwf4uTw8XB9VZoAzdbj7fOSylS', '', '08098738740', '1971-11-21', '11, Ogudu GRA', 'Accountant', 'Part Time', '', 0, 'Lagos', 'Kosofe', '3c885a4e42a567481af030133a1f80b2', 1, '1607592445_7b591b797c53471e0be6.jpg', '', '#FFFDD0', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-10-12 23:10:50', '2020-12-10 10:27:25'),
(34, 'Demilade', 'Oyeyele', 'demilade.oyeyele', 'mckeyriguez@gmail.com', '$2y$10$Xpex7ldYguomoIYutNlo6ukD3Lfj4KE5FXAfslSXkOFtKw.7oJ.q.', '', '08181825304', '1997-02-05', '1, Hillview Estate Ogudu GRA', 'Accountant', 'Part Time', '', 0, 'Lagos', 'Kosofe', '2ff417cf207d83204324bd6787692950', 1, 'User DP.png', '', '#AA4A64', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-10-13 17:52:48', '2020-11-04 23:30:15'),
(35, '', '', '', '5465', '$2y$10$t6.xNbmMHGnOI14ZWdegc.GrlyYPIDoNHGa0qFKHR/0pjwOXngvX.', '', '', '0000-00-00', '', '', '', '', 0, '', '', 'f15992df6ddd0fcbc7607c9f1b651317', 0, 'User DP.png', '', '#32D9E2', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-10-29 10:37:59', '2020-10-29 10:37:59'),
(36, '', '', '', 'freysmgbb@agtelco.com', '$2y$10$NEM8jdZVj3Vgvs0wj/9SmeL.mO4m4rr0XN7pZtQoNOGEJHe.Uc4S.', '', '', '0000-00-00', '', '', '', '', 0, '', '', 'e70aec7d7b2bce82211b2fc07b496b38', 0, 'User DP.png', '', '#27C53D', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-10-29 19:42:54', '2020-10-29 19:42:54'),
(37, '', '', '', 'Jayden16@gmail.com', '$2y$10$hCirJ6ovXCrEMcR2keSkM.ZmUQRuXjsfiMlC9g9ZBs/w6HB5Yv67G', '', '', '0000-00-00', '', '', '', '', 0, '', '', 'b5d4cd3f86cfdb7a18e5e63eacc5d216', 0, 'User DP.png', '', '#83D0F7', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-10-30 22:32:28', '2020-10-30 22:32:28'),
(38, '', '', '', 'shon_paramoosh@yahoo.com', '$2y$10$u2gVy76lxB2SPHdSMas6CeEbGxQmyWy5SXBNmaqyfawMx/2NlfGDC', '', '', '0000-00-00', '', '', '', '', 0, '', '', '0cf197b86f4bf8c60210a66c99a336c5', 0, 'User DP.png', '', '#A2FDE7', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-04 14:06:54', '2020-11-04 14:06:54'),
(39, '', '', '', 'drfowler@harmonyvetva.com', '$2y$10$rGHioBKU823xVOjr68wZruVkEflY7FgL2fh8AUwP3ma4mAslYyf96', '', '', '0000-00-00', '', '', '', '', 0, '', '', 'eacb79473d17d6b60c4a429de568f1d8', 0, 'User DP.png', '', '#E62834', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-05 21:07:11', '2020-11-05 21:07:11'),
(40, '', '', '', 'jwalsh4@fairview.org', '$2y$10$YwFxZplbp49vnTiBfpzgGeQx53jDPAy3iTWNRh/cM/ry8MfhWaCPa', '', '', '0000-00-00', '', '', '', '', 0, '', '', '9672baa91c573deeeddf4d2ff1b5a847', 0, 'User DP.png', '', '#9CF4E0', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-06 02:13:59', '2020-11-06 02:13:59'),
(41, '', '', '', 'crowley.karen@yahoo.com', '$2y$10$ptHfT84dkHGfVrlgekw2culz0Q9znOqxFvRJCA1eiJbbpMYRI5t6K', '', '', '0000-00-00', '', '', '', '', 0, '', '', 'f521e66e2d4a50025259a640bc5f9296', 0, 'User DP.png', '', '#3151AE', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-10 10:14:22', '2020-11-10 10:14:22'),
(42, '', '', '', 'mustapharmariam007@gmail.com', '$2y$10$Y1/lByiD/OubTzsZTW8wxevXJlV8YYyFSPIoCKAmOZuyw1gVN1U32', '', '', '0000-00-00', '', '', '', '', 0, '', '', '83eaea6230df9646e9f18d4e7f6f0c6d', 0, 'User DP.png', '', '#37ACB7', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-10 10:58:59', '2020-11-10 10:58:59'),
(43, '', '', '', 'madeane28@mac.com', '$2y$10$cPqpyX8X1FOUKXaX4dkia.cRFCsy7TsCBp9ZtZfgDUEqmmUCsStL2', '', '', '0000-00-00', '', '', '', '', 0, '', '', 'b20e1760f74ae838cee054c94f29f8a5', 0, 'User DP.png', '', '#9270EF', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-10 22:26:57', '2020-11-10 22:26:57'),
(44, '', '', '', 'bulkbuddy1@gmail.com', '$2y$10$BMqxdEL31CmEk9jojMSRzeDkN2CBV2e4pd2gCIxgESiaR58522VoO', '', '', '0000-00-00', '', '', '', '', 0, '', '', '95842bd3f56a3d54a352fdbc7a90eeb9', 0, 'User DP.png', '', '#EED3EA', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-11 00:46:04', '2020-11-11 00:46:04'),
(45, '', '', '', 'damonpaulhickey@gmail.com', '$2y$10$.vP5hhtjp6rGy6V8YVwGfeGS5bKXrLeDhHCUyeN5TpvtIF.xJQUOC', '', '', '0000-00-00', '', '', '', '', 0, '', '', 'ccbd4a4b9173c40b0fbfba968cc93235', 0, 'User DP.png', '', '#F5E6A5', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-13 17:27:00', '2020-11-13 17:27:00'),
(46, '', '', '', 'barbellows@yahoo.co.uk', '$2y$10$6Gjmfjw0u4c.FB1pM4tkGOysI0kAV1vf6SEEnn2f2iUXTv0hItxte', '', '', '0000-00-00', '', '', '', '', 0, '', '', 'f7354141311abb218c46a91e659b8582', 0, 'User DP.png', '', '#31CB3B', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-15 00:33:59', '2020-11-15 00:33:59'),
(47, '', '', '', 'bupaymentgw@gmail.com', '$2y$10$VYbDd7IZZLGswhuoXxvKseQNZNlAXXqGR6ll2lu9NUua7PxRleZ4G', '', '', '0000-00-00', '', '', '', '', 0, '', '', 'a8a3d9e51be40d31a9466ece5a678b64', 0, 'User DP.png', '', '#39CA80', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-11-15 19:36:53', '2020-11-15 19:36:53'),
(49, 'wsws', 'swsw', 'wsws.swsw', 'test3@yahoo.com', '$2y$10$s7QKMlvfSduesa1gEd0ut.Rp1ZekecSYqfzAZMAAu/ZPxJu.9WCpC', '', '232323', '', '', 'Accountant', 'Remote', 'Senior Secondary School Certificate', 0, 'Ekiti', 'Efon', 'ef5c8e0b6704d76655c94814c9bce003', 1, 'User DP.png', '', '#148F3C', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-12-02 13:44:39', '2020-12-02 13:48:55'),
(50, 'John ', 'Doe', 'john .doe', 'Testing@gmail.com', '$2y$10$Lbh.Je3rQGM3N910RT07s.6sbtI5tT9f9VucnCTcGzScKVAooQJDu', '', '0810456891', '', '', 'Accountant', 'Full Time', 'Master\'s Degree', 0, 'Lagos', 'Ikeja', '52870741284bc4a9dc85cba319c6321e', 1, '1609770727_e5f50d9cdcb4505dce42.jpg', '', '#B6786E', '', '', '', '', '', '', '', 'Carpentary', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-12-03 11:55:18', '2021-01-04 15:32:08'),
(51, 'Dada', 'Michael', 'dada.michael', '08033056355', '$2y$10$FzFr3yz57dPhTWyuz4njl.wvNpz4qrOxLk3NsxdQJ8c4NYej1bXOC', '', '08033056355', '', '', 'Accountant', 'Full Time', 'Bachelor\'s Degree', 0, 'Bauchi', 'Katagum', '4caba23b2219846fcb6068e9c1684232', 1, 'User DP.png', '', '#B6FB37', '', '', '', '', '', '', '', 'Carpentary', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-12-03 11:57:17', '2020-12-03 12:54:07'),
(52, 'Godson', 'Ihemere', 'godson.ihemere.55', 'excanny2@yahoo.com', '$2y$10$FfLHU4/YjzZOoBuUN0oQLe7SMQTORO.AKVZefUqa1zZPzBhh6daQe', '', '323232323', '', '', 'Accountant', 'Full Time', 'First School Leaving Certificate', 0, 'Benue', 'Kwande', 'bba582f687d1908f3ea52cbe7cf56974', 1, 'User DP.png', '', '#3EBCB8', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-12-03 11:58:02', '2020-12-03 12:25:09'),
(53, 'Sarah', 'aiyemomi', 'sarah.aiyemomi', 'saiyemomi@gmail.com', '$2y$10$i644L0981Dpf0u/M96pd2ODH33P6C1N2lgB5979T14SFasWs4vfeC', '', '07032208946', '', '', 'Artists Manager', 'Full Time', 'Senior Secondary School Certificate', 0, 'Lagos', 'Ikeja', '87cdea7c924227356acaf14f0801f3dc', 1, 'User DP.png', '', '#A27D56', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-12-14 05:52:18', '2020-12-14 05:55:12'),
(54, 'Adetokunbo', 'Aiyemomi', 'adetokunbo.aiyemomi', 'tokunbo11@gmail.com', '$2y$10$tFRK4lkhgqM1AoRkFkNft.MYV/qZEll9slCmrTr2yaGPDOf6q9tEG', '', '07081147336', '', '', 'Event planner', 'Part Time', 'Bachelor\'s Degree', 0, 'Lagos', '0', '99f12a804901a300c09de54cb63dd370', 1, 'User DP.png', '', '#A7CAB5', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-12-15 09:28:21', '2020-12-15 09:34:57'),
(56, '', '', '', '07030595988', '$2y$10$nDjbWcvXp5eyL9g2Efa/wetCw8TlYg1hOLI9ojmJQi.C9BS8w2rRW', '', '', '', '', '', '', '', 0, '', '', '', 0, 'User DP.png', '', '#2C0642', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-12-29 10:32:27', '2020-12-29 10:32:27'),
(57, '', '', '', '08122859798', '$2y$10$UFNBBz51yooHT/9J3T7IwuFLjiUF83ym84wpqbCpYDRiHhXp77m4C', '', '', '', '', '', '', '', 0, '', '', '', 0, 'User DP.png', '', '#4736C0', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2020-12-29 10:47:16', '2020-12-29 10:47:16'),
(66, '', '', '', 'excanny@yahoo.com', '$2y$10$HN0Ajt6OqU9jAUvB7.Fmwujgbc.wg9HNIVNKa3maL5sKRZ2P6PTtC', '', '', '', '', '', '', '', 0, '', '', '', 0, 'User DP.png', '', '#ABABB8', '', '', '', '', '', '', '', '', '', '', '', NULL, '', '', '', '', '', '', '', '', '', '2021-01-14 11:08:41', '2021-01-14 11:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicant_documents`
--

CREATE TABLE `tapplicant_documents` (
  `frecno` double UNSIGNED NOT NULL,
  `ffile_name` varchar(100) NOT NULL,
  `fapplicant_id` varchar(60) NOT NULL,
  `fuser_name` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicant_documents`
--

INSERT INTO `tapplicant_documents` (`frecno`, `ffile_name`, `fapplicant_id`, `fuser_name`, `created_at`, `updated_at`) VALUES
(1, '1601906223_cebb9c9d0023d76fc350.docx', 'godson.ihemere.10', 'test@yahoo.com', '2020-10-05 14:57:03', '2020-10-05 14:57:03'),
(2, '1601906994_d42fcc34464b3d79e718.jpg', 'godson.ihemere.10', 'test@yahoo.com', '2020-10-05 15:09:54', '2020-10-05 15:09:54'),
(3, '1601907055_e37d62dca14b59218bba.jpeg', 'godson.ihemere.10', 'test@yahoo.com', '2020-10-05 15:10:55', '2020-10-05 15:10:55'),
(4, '1601909559_40b21ca8dbcfc90ce5ed.txt', 'godson.ihemere.10', 'test@yahoo.com', '2020-10-05 15:52:39', '2020-10-05 15:52:39'),
(5, '1602371682_7c5374589549b054825b.jpeg', 'wsw.wsws', 'test@yahoo.com', '2020-10-11 00:14:42', '2020-10-11 00:14:42'),
(6, '1603800468_4bd8f5b42cdaed9653c9.jpeg', 'godson.ihemere', '33333333', '2020-10-27 13:07:48', '2020-10-27 13:07:48'),
(7, '1603801556_da1186acd8fccb4007f4.jpeg', 'godson.ihemere', '33333333', '2020-10-27 13:25:56', '2020-10-27 13:25:56'),
(8, '1606914570_a8bc9fd8723b5b5d3461.jpeg', 'wsws.swsw', 'test3@yahoo.com', '2020-12-02 14:09:30', '2020-12-02 14:09:30'),
(9, '1606992971_34b8cf6d1fe1561bd26e.png', 'godson.ihemere.51', 'excanny@yahoo.com', '2020-12-03 11:56:11', '2020-12-03 11:56:11'),
(18, '1606906840_d3b728ad65afc99cc9dc.jpeg', 'godson.ihemere.52', 'test@yahoo.com', '2020-12-02 12:00:40', '2020-12-02 12:00:40'),
(19, '1606908316_16f3a848a2ac29b19606.jpeg', 'godson.ihemere.52', 'test@yahoo.com', '2020-12-02 12:25:16', '2020-12-02 12:25:16'),
(20, '1606912855_c166158e209f05022710.jpeg', 'godson.ihemere.60', 'test8@yahoo.com', '2020-12-02 13:40:55', '2020-12-02 13:40:55');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicant_educations`
--

CREATE TABLE `tapplicant_educations` (
  `frecno` double UNSIGNED NOT NULL,
  `fstart` date NOT NULL,
  `fend` date NOT NULL,
  `fschool` varchar(150) NOT NULL,
  `fcourse` varchar(150) NOT NULL,
  `fclass_of_degree` varchar(80) NOT NULL,
  `fskills_learned` text NOT NULL,
  `fapplicant_id` varchar(80) NOT NULL,
  `fuser_name` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicant_educations`
--

INSERT INTO `tapplicant_educations` (`frecno`, `fstart`, `fend`, `fschool`, `fcourse`, `fclass_of_degree`, `fskills_learned`, `fapplicant_id`, `fuser_name`, `created_at`, `updated_at`) VALUES
(8, '2010-01-01', '2014-01-01', 'University of Lagos', 'Public Administration', 'Master\'s Degree', 'Psychology,Sociology', 'godson.ihemere.10', 'test@yahoo.com', '2020-10-01 19:47:54', '2020-10-09 16:26:48'),
(13, '2011-01-01', '2011-01-01', 'sww', 'wsws', 'wsws', 'wsw,ws', 'wsw.wsws', 'test@yahoo.com', '2020-10-10 21:07:21', '2020-10-10 21:07:21'),
(14, '2013-01-01', '2012-08-01', 'University of Lagos', 'Mechanical Engineering', 'Bachelor\'s Degree', 'wwww', 'godson.ihemere', '33333333', '2020-10-12 13:04:22', '2020-10-12 13:04:22'),
(15, '2011-12-01', '2013-12-01', 'Covenant University', 'Accounting', 'BSC accounting', 'Final accounting and sporadic accounting', 'bunto.ronny', '08098738740', '2020-10-12 23:21:26', '2020-10-29 20:21:06'),
(16, '2010-01-01', '2015-01-01', 'Covenant University', 'Accounting', 'BSC accounting', 'Accounting level 1 for basic book keeping and invoicing,Accounting level 2 for taxation and audit,Accounting level 3: Stock taking and tallying,Stage 1 accounting', 'bunto.ronny', '08098738740', '2020-10-12 23:26:30', '2020-10-12 23:26:30'),
(18, '2011-02-01', '2013-03-01', 'hhh', 'hhh', 'Senior Secondary School Certificate', 'hhh', 'godson.ihemere', '33333333', '2020-10-17 01:32:53', '2020-10-17 01:32:53'),
(19, '2015-12-01', '2015-12-01', 'wwdwd', 'w', 'Bachelor\'s Degree', 'dwdw', 'godson.ihemere', '33333333', '2020-10-27 12:40:18', '2020-10-27 12:40:41'),
(20, '1930-02-01', '1947-01-01', 'asdaf', 'fdsfsed', 'Junior Secondary School Certificate', 'fdf,fdfdf', 'godson.ihemere', '33333333', '2020-11-30 15:37:22', '2020-11-30 15:37:22'),
(22, '2007-09-01', '2013-08-01', 'Our Lady of Apostle Secondary School', 'Literature', 'Senior Secondary School Certificate', 'Arts and Literature', 'john .doe', 'Testing@gmail.com', '2020-12-03 12:49:38', '2020-12-03 12:49:38'),
(23, '2013-09-01', '2017-07-01', 'Convenant University', 'Banking and Finance', 'Bachelor\'s Degree', 'Corporate accounting', 'john .doe', 'Testing@gmail.com', '2020-12-03 12:52:03', '2020-12-03 12:52:03'),
(24, '2018-02-01', '2019-04-01', 'Leeds University', 'Banking and Finance', 'Master\'s Degree', 'Corporate Accounting', 'john .doe', 'Testing@gmail.com', '2020-12-03 12:55:42', '2020-12-03 12:55:42');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicant_experiences`
--

CREATE TABLE `tapplicant_experiences` (
  `frecno` double NOT NULL,
  `fapplicant_id` varchar(100) NOT NULL,
  `fuser_name` varchar(50) NOT NULL,
  `fposition` varchar(80) NOT NULL,
  `fstart` date NOT NULL,
  `fend` date NOT NULL,
  `fcompany_name` varchar(80) NOT NULL,
  `frole` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicant_experiences`
--

INSERT INTO `tapplicant_experiences` (`frecno`, `fapplicant_id`, `fuser_name`, `fposition`, `fstart`, `fend`, `fcompany_name`, `frole`, `created_at`, `updated_at`) VALUES
(34, 'bunto.ronny', '08098738740', 'Accountant', '2015-12-01', '2015-12-01', 'ABC Nig. Ltd', 'I created the the payment log used for employees,Manage the payrole up to management level,Developed the stock taking method used in the factory,I manage the company invoicing details', '2020-10-12 23:20:10', '2020-11-10 12:23:39'),
(35, 'godson.ihemere', '33333333', 'Accountant', '2015-12-01', '2015-12-01', 'Guniness', 'swsw', '2020-10-15 10:03:58', '2020-10-16 21:12:54'),
(31, 'wsw.wsws', 'test@yahoo.com', 'Customer Care', '2010-01-01', '2014-02-01', 'Uniplex', 'Attend to all issue', '2020-10-02 09:35:33', '2020-10-10 23:12:20'),
(51, 'godson.swsws', 'excanny@yahoo.com', 'dddd', '2011-03-01', '2014-12-01', 'dddd', 'dddd,ddddff', '2020-12-10 01:34:25', '2020-12-10 01:35:06'),
(39, 'godson.ihemere', '33333333', 'Engineer', '2015-12-01', '2015-12-01', 'Total', 'jdjjdjd', '2020-10-16 21:20:34', '2020-10-16 21:21:36'),
(29, 'godson.ihemere.10', 'test@yahoo.com', 'Group Lead', '2010-01-01', '2013-01-01', 'Total', 'Design procedures,Implement changes,Open records,Develop strategies', '2020-10-01 14:01:42', '2020-10-02 09:18:51'),
(48, 'john .doe', 'Testing@gmail.com', 'Head Accountant and Treasurer', '2011-06-01', '2015-11-01', 'Creative Tech Nigeria Limited', 'Ensuring the accuracy of financail documents,Preparing and maintaining financial reports,Preparing tax returns,Declaring yearly budgets', '2020-12-03 12:33:22', '2020-12-03 12:35:50'),
(32, 'godson.ihemere.10', 'test@yahoo.com', 'Sales Head', '2014-01-01', '2015-01-01', 'Carlton Limited', 'Control Stock', '2020-10-02 09:37:04', '2020-10-02 09:37:04'),
(47, 'john .doe', 'Testing@gmail.com', 'Senior Project Manager', '2004-04-01', '2010-01-01', 'ABC International LTD.', 'Activity and Resource Planning,Organizing and Motivating project teams,Contolling time and Managment,Cost estimating and developing the budget,Ensuring customer satisfaction,Analyzing and managing project risk,Monitoring progress,Managing reports and necessary documentation', '2020-12-03 12:08:48', '2020-12-03 12:08:48'),
(45, 'demilade.oyeyele', 'mckeyriguez@gmail.com', 'Senior Project Manager', '1965-02-01', '2017-10-01', 'insight grey', '', '2020-12-02 11:20:28', '2020-12-02 11:20:28'),
(49, 'godson.ihemere.55', 'excanny2@yahoo.com', 'sswswswswsw', '2015-08-01', '2020-02-01', 'swsw', '', '2020-12-03 12:33:38', '2020-12-03 12:33:38'),
(24, 'godson.ihemere.10', 'test@yahoo.com', 'Subsea Master', '2010-02-01', '2010-01-01', 'Chevron', 'Keep records,Manage marine life', '2020-10-01 13:29:21', '2020-10-02 11:09:41'),
(33, 'wsw.wsws', 'test@yahoo.com', 'swsw', '2010-01-01', '2015-01-01', 'sws', 'swsw', '2020-10-12 16:15:34', '2020-10-12 16:15:34'),
(41, 'godson.ihemere', '33333333', 'swsw', '2004-01-01', '2019-01-01', 'swsw', 'swsw,swswsw', '2020-11-30 15:00:01', '2020-11-30 15:00:01'),
(42, 'godson.ihemere', '33333333', 'swsw', '1932-02-01', '1946-03-01', 'swswswsws', 'sws,swsw', '2020-11-30 15:00:40', '2020-11-30 15:00:40'),
(44, 'godson.ihemere', '33333333', 'swsw', '1934-02-01', '1962-03-01', 'wsws', 'wsws,swsw', '2020-11-30 15:02:09', '2020-11-30 15:02:09'),
(23, 'godson.ihemere.10', 'test@yahoo.com', 'Technician', '2010-01-01', '2010-02-01', 'Guinness', 'Oil change,Power Surge Protection', '2020-10-01 13:26:41', '2020-10-01 18:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicant_messages`
--

CREATE TABLE `tapplicant_messages` (
  `frecno` double NOT NULL,
  `fsender_id` varchar(80) NOT NULL,
  `fsender_name` varchar(100) NOT NULL,
  `freceiver_id` varchar(80) NOT NULL,
  `freceiver_name` varchar(100) NOT NULL,
  `fsubject` varchar(150) NOT NULL,
  `fparent_message_id` varchar(30) NOT NULL,
  `fmessage_id` varchar(39) NOT NULL,
  `fcontent` text NOT NULL,
  `fread` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicant_messages`
--

INSERT INTO `tapplicant_messages` (`frecno`, `fsender_id`, `fsender_name`, `freceiver_id`, `freceiver_name`, `fsubject`, `fparent_message_id`, `fmessage_id`, `fcontent`, `fread`, `created_at`, `updated_at`) VALUES
(2, 'godson.ihemere.28', 'John westmann', 'john.westmann', 'Godson Ihemere', 'New Moon', '0', 'mg1603128349', 'swsw', 0, '2020-10-19 18:25:49', '2020-10-19 19:02:38'),
(3, 'godson.ihemere.28', 'John westmann', 'godson.ihemere.28', 'Godson Ihemere', 'Beyonce', '0', 'mg1603129774', 'xxx', 0, '2020-10-19 18:49:34', '2020-10-19 19:02:44'),
(4, 'john.westmann', 'John westmann', 'godd.ihem', 'Godd Ihem', 'ssw', '0', 'MG1603130637', 'swsw', 0, '2020-10-19 19:03:57', '2020-10-19 19:03:57'),
(5, 'john.westmann', 'John westmann', 'godson.ihemere.28', 'Godson Ihemere', 'sqsqs', '0', 'MG1603130954', 'qsqsqsq', 0, '2020-10-19 19:09:14', '2020-10-19 19:09:14'),
(6, 'john.westmann', 'John westmann', 'godson.ihemere.28', 'Godson Ihemere', 'sxsx', '0', 'MG1603130991', 'xsxs', 0, '2020-10-19 19:09:51', '2020-10-19 19:09:51'),
(7, 'godson.ihemere.28', 'John westmann', 'john.westmann', 'John westmann', 'New Moon', 'mg1603128349', 'MG1603141380', 'deede', 0, '2020-10-19 22:03:00', '2020-10-19 22:03:00'),
(8, 'godson.ihemere', 'Godson Ihemere', 'demilade.oyeyele', 'Demilade Oyeyele', 'sddsds', '0', 'MG1603747748', 'sdsd', 0, '2020-10-26 22:29:08', '2020-10-26 22:29:08'),
(9, 'godson.ihemere', 'Godson Ihemere', 'godson.ihemere', 'Godson Ihemere', 'sddsds', 'MG1603747748', 'MG1603750649', 'hhh', 0, '2020-10-26 23:17:29', '2020-10-26 23:17:29'),
(10, 'godson.ihemere', 'Godson Ihemere', 'godson.ihemere', 'Godson Ihemere', 'sddsds', 'MG1603747748', 'MG1603751452', 'hhhaa', 0, '2020-10-26 23:30:52', '2020-10-26 23:30:52'),
(11, 'godson.ihemere', 'Godson Ihemere', 'godson.ihemere', 'Godson Ihemere', 'sddsds', 'MG1603750649', 'MG1603751467', 'yes', 0, '2020-10-26 23:31:07', '2020-10-26 23:31:07');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicant_other_skills`
--

CREATE TABLE `tapplicant_other_skills` (
  `frecno` double UNSIGNED NOT NULL,
  `fapplicant_id` varchar(100) NOT NULL,
  `fuser_name` varchar(100) NOT NULL,
  `fskill` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicant_other_skills`
--

INSERT INTO `tapplicant_other_skills` (`frecno`, `fapplicant_id`, `fuser_name`, `fskill`, `created_at`, `updated_at`) VALUES
(5, 'godson.ihemere.10', 'test@yahoo.com', 'rfrfrfrf', '2020-09-21 11:54:58', '2020-09-21 11:54:58'),
(6, 'godson.ihemere.10', 'test@yahoo.com', 'ededede', '2020-09-21 11:56:05', '2020-09-21 11:56:05'),
(8, 'godson.ihemere.10', 'test@yahoo.com', 'ededede', '2020-09-21 11:56:05', '2020-09-21 11:56:05'),
(9, 'godson.ihemere.10', 'test@yahoo.com', 'sqsq', '2020-10-01 22:29:42', '2020-10-01 22:29:42'),
(10, 'godson.ihemere.10', 'test@yahoo.com', 'sqsqs', '2020-10-01 22:31:18', '2020-10-01 22:31:18'),
(12, 'godson.ihemere.10', 'test@yahoo.com', 'e4e4', '2020-10-05 11:40:16', '2020-10-05 11:40:16'),
(13, 'gbemileke.daniel', 'leke.daniel@gmail.com ', 'Barber', '2020-10-12 20:42:09', '2020-10-12 20:42:09'),
(14, 'godson.ihemere', '33333333', 'wdw', '2020-10-27 12:41:00', '2020-10-27 12:41:00'),
(15, 'godson.ihemere', '33333333', 'ggg', '2020-11-08 23:21:00', '2020-11-08 23:21:00'),
(16, 'wsws.swsw', 'test3@yahoo.com', 'swsws', '2020-12-02 14:05:36', '2020-12-02 14:05:36'),
(17, 'wsws.swsw', 'test3@yahoo.com', 'wsws', '2020-12-02 14:05:43', '2020-12-02 14:05:43'),
(18, 'wsws.swsw', 'test3@yahoo.com', 'sqsqsqs', '2020-12-02 14:07:24', '2020-12-02 14:07:24'),
(19, 'wsws.swsw', 'test3@yahoo.com', 'qsqs', '2020-12-02 14:07:36', '2020-12-02 14:07:36'),
(20, 'godson.ihemere.51', 'excanny@yahoo.com', 'ffff', '2020-12-03 11:53:57', '2020-12-03 11:53:57'),
(21, 'john .doe', 'Testing@gmail.com', 'Drawing', '2020-12-03 13:10:28', '2020-12-03 13:10:28'),
(22, 'john .doe', 'Testing@gmail.com', 'Driving', '2020-12-03 13:10:45', '2020-12-03 13:10:45'),
(23, 'john .doe', 'Testing@gmail.com', 'Cooking', '2020-12-03 13:11:22', '2020-12-03 13:11:22'),
(24, 'john .doe', 'Testing@gmail.com', 'Writing & Typing', '2020-12-03 13:12:35', '2020-12-03 13:12:35'),
(25, 'john .doe', 'Testing@gmail.com', 'Sowing', '2020-12-03 13:15:29', '2020-12-03 13:15:29'),
(26, 'adetokunbo.aiyemomi', 'tokunbo11@gmail.com', 'driving', '2020-12-15 09:39:57', '2020-12-15 09:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicant_portfolios`
--

CREATE TABLE `tapplicant_portfolios` (
  `frecno` double UNSIGNED NOT NULL,
  `fimage` varchar(100) NOT NULL,
  `fapplicant_id` varchar(60) NOT NULL,
  `fuser_name` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicant_portfolios`
--

INSERT INTO `tapplicant_portfolios` (`frecno`, `fimage`, `fapplicant_id`, `fuser_name`, `created_at`, `updated_at`) VALUES
(63, '1602541636_048b7bb8f4704f4042e9.jpg', 'bunto.ronny', '08098738740', '2020-10-12 23:27:16', '2020-10-12 23:27:16'),
(64, '1602541796_495d85fff202f4f49fae.jpg', 'bunto.ronny', '08098738740', '2020-10-12 23:29:56', '2020-10-12 23:29:56'),
(75, '1606314671_e56c0cbaf16e3c62d8d4.jpeg', 'godson.ihemere', '33333333', '2020-11-25 15:31:11', '2020-11-25 15:31:11'),
(76, '1606314933_89d45dd9283a62faf656.jpg', 'godson.ihemere', '33333333', '2020-11-25 15:35:33', '2020-11-25 15:35:33'),
(77, '1606318070_7b5a456c1656e116c421.jpeg', 'godson.ihemere', '33333333', '2020-11-25 16:27:50', '2020-11-25 16:27:50'),
(78, '1606402586_e22281099b596d5c6552.jpg', 'godson.ihemere', '33333333', '2020-11-26 15:56:26', '2020-11-26 15:56:26'),
(79, '1606747220_0e19f022f08830f732c9.jpg', 'godson.ihemere', '33333333', '2020-11-30 15:40:20', '2020-11-30 15:40:20'),
(82, '1606914505_8334c5d6d83de2c84de4.jpeg', 'wsws.swsw', 'test3@yahoo.com', '2020-12-02 14:08:25', '2020-12-02 14:08:25'),
(83, '1606914514_00cdb89a52d7e11afff9.jpeg', 'wsws.swsw', 'test3@yahoo.com', '2020-12-02 14:08:34', '2020-12-02 14:08:34'),
(84, '1606914556_3ccf7d6b374d7a5fa1bc.jpeg', 'wsws.swsw', 'test3@yahoo.com', '2020-12-02 14:09:16', '2020-12-02 14:09:16'),
(85, '1606992895_48bd0792306fd44fcaae.png', 'godson.ihemere.51', 'excanny@yahoo.com', '2020-12-03 11:54:55', '2020-12-03 11:54:55'),
(86, '1606995611_05394ea3fa7baa5dd7ae.png', 'godson.ihemere.55', 'excanny2@yahoo.com', '2020-12-03 12:40:11', '2020-12-03 12:40:11'),
(87, '1606997798_0f965c2ad954f052f50c.jpg', 'john .doe', 'Testing@gmail.com', '2020-12-03 13:16:38', '2020-12-03 13:16:38'),
(88, '1606998018_2f89cefea16f6ac7dfdd.jpg', 'godson.ihemere.55', 'excanny2@yahoo.com', '2020-12-03 13:20:18', '2020-12-03 13:20:18'),
(89, '1606998022_92bd0e5875ea07297540.png', 'john .doe', 'Testing@gmail.com', '2020-12-03 13:20:22', '2020-12-03 13:20:22'),
(90, '1606998039_f9f1c3cf1729bdc8fe57.jpg', 'john .doe', 'Testing@gmail.com', '2020-12-03 13:20:39', '2020-12-03 13:20:39'),
(101, '1606905597_7f36adc684d3fc3caa8d.jpeg', 'godson.ihemere.52', 'test@yahoo.com', '2020-12-02 11:39:57', '2020-12-02 11:39:57'),
(102, '1606908297_9f3e91761ab3c08e54f7.jpeg', 'godson.ihemere.52', 'test@yahoo.com', '2020-12-02 12:24:57', '2020-12-02 12:24:57'),
(103, '1606908307_a633b0cebaa40d20f98a.jpeg', 'godson.ihemere.52', 'test@yahoo.com', '2020-12-02 12:25:07', '2020-12-02 12:25:07'),
(104, '1606908312_b4937370e460f22563c7.jpeg', 'godson.ihemere.52', 'test@yahoo.com', '2020-12-02 12:25:12', '2020-12-02 12:25:12'),
(105, '1606912827_5b5ae8dd07992ba64fef.jpeg', 'godson.ihemere.60', 'test8@yahoo.com', '2020-12-02 13:40:27', '2020-12-02 13:40:27'),
(106, '1607527305_ef14086d84ab53121d10.jpeg', 'godson.ihemere.52', 'test@yahoo.com', '2020-12-09 16:21:45', '2020-12-09 16:21:45'),
(107, '1607527532_e4ba5fa70c5f224f8053.jpeg', 'godson.ihemere.52', 'test@yahoo.com', '2020-12-09 16:25:32', '2020-12-09 16:25:32'),
(108, '1607527544_11c25a07b91858334468.jpeg', 'godson.ihemere.52', 'test@yahoo.com', '2020-12-09 16:25:44', '2020-12-09 16:25:44'),
(110, '1609771312_4d7483e498d0268552ae.jpg', 'john .doe', 'Testing@gmail.com', '2021-01-04 15:41:52', '2021-01-04 15:41:52'),
(111, '1609771374_d5f0848d8766ea011e13.png', 'john .doe', 'Testing@gmail.com', '2021-01-04 15:42:54', '2021-01-04 15:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicant_pro_skills`
--

CREATE TABLE `tapplicant_pro_skills` (
  `frecno` double UNSIGNED NOT NULL,
  `fapplicant_id` varchar(100) NOT NULL,
  `fuser_name` varchar(100) NOT NULL,
  `fskill` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicant_pro_skills`
--

INSERT INTO `tapplicant_pro_skills` (`frecno`, `fapplicant_id`, `fuser_name`, `fskill`, `created_at`, `updated_at`) VALUES
(29, 'godson.ihemere.10', 'test@yahoo.com', 'Project Management', '2020-10-09 16:39:39', '2020-10-09 16:39:39'),
(32, 'gbemileke.daniel', 'leke.daniel@gmail.com ', 'Software developer', '2020-10-12 20:41:51', '2020-10-12 20:41:51'),
(33, 'godson.ihemere', '33333333', 'wdw', '2020-10-27 12:40:52', '2020-10-27 12:40:52'),
(34, 'bunto.ronny', '08098738740', 'ICAN trained, forensic accounting', '2020-10-28 16:14:06', '2020-10-28 16:14:06'),
(35, 'godson.ihemere', '33333333', 'eeee', '2020-11-08 23:20:49', '2020-11-08 23:20:49'),
(36, 'wsws.swsw', 'test3@yahoo.com', 'xasxsax', '2020-12-02 14:05:11', '2020-12-02 14:05:11'),
(37, 'wsws.swsw', 'test3@yahoo.com', 'dscdeew', '2020-12-02 14:05:21', '2020-12-02 14:05:21'),
(38, 'wsws.swsw', 'test3@yahoo.com', 'wsdwsdw', '2020-12-02 14:05:28', '2020-12-02 14:05:28'),
(39, 'wsws.swsw', 'test3@yahoo.com', 'sqs', '2020-12-02 14:06:57', '2020-12-02 14:06:57'),
(40, 'wsws.swsw', 'test3@yahoo.com', 'adxwdsqw', '2020-12-02 14:07:06', '2020-12-02 14:07:06'),
(41, 'godson.ihemere.51', 'excanny@yahoo.com', 'fff', '2020-12-03 11:53:46', '2020-12-03 11:53:46'),
(42, 'john .doe', 'Testing@gmail.com', 'Project Management', '2020-12-03 13:02:11', '2020-12-03 13:02:11'),
(43, 'john .doe', 'Testing@gmail.com', 'Business Acumen', '2020-12-03 13:06:00', '2020-12-03 13:06:00'),
(44, 'john .doe', 'Testing@gmail.com', 'Computer literacy', '2020-12-03 13:06:24', '2020-12-03 13:06:24'),
(45, 'john .doe', 'Testing@gmail.com', 'Analytical skills', '2020-12-03 13:07:03', '2020-12-03 13:07:03'),
(47, 'john .doe', 'Testing@gmail.com', 'Communication skills', '2020-12-03 13:07:55', '2020-12-03 13:07:55'),
(48, 'john .doe', 'Testing@gmail.com', 'Mathematical Skills', '2020-12-03 13:08:20', '2020-12-03 13:08:20'),
(50, 'adetokunbo.aiyemomi', 'tokunbo11@gmail.com', 'People Management', '2020-12-15 09:39:57', '2020-12-15 09:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicant_verification_codes`
--

CREATE TABLE `tapplicant_verification_codes` (
  `frecno` double UNSIGNED NOT NULL,
  `femail` varchar(80) NOT NULL,
  `ftoken` varchar(100) NOT NULL,
  `fcookie` varchar(255) NOT NULL,
  `fdevice` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicant_verification_codes`
--

INSERT INTO `tapplicant_verification_codes` (`frecno`, `femail`, `ftoken`, `fcookie`, `fdevice`, `created_at`, `updated_at`) VALUES
(1, 'excanny@yahoo.com', '18847', '', '', '2020-12-25 14:53:35', '2020-12-25 14:53:35'),
(2, 'excanny@yahoo.com', '17451', '', '', '2020-12-25 17:06:55', '2020-12-25 17:06:55'),
(3, 'excanny@yahoo.com', '17451', '', '', '2020-12-25 17:10:04', '2020-12-25 17:10:04'),
(4, 'excanny@yahoo.com', '174510', '', '', '2020-12-25 17:16:54', '2020-12-25 17:16:54'),
(5, 'excanny@yahoo.com', '43661', '', '', '2020-12-25 17:35:35', '2020-12-25 17:35:35'),
(6, 'excanny@yahoo.com', '97162', '', '', '2020-12-25 17:38:11', '2020-12-25 17:38:11'),
(7, '08122859798', '57465', '', '', '2020-12-27 19:40:57', '2020-12-27 19:40:57'),
(8, '08122859798', '41133', '', '', '2020-12-27 19:56:00', '2020-12-27 19:56:00'),
(9, '08122859798', '94328', '', '', '2020-12-27 19:59:59', '2020-12-27 19:59:59'),
(10, 'excanny@yahoo.com', '49879', '', '', '2020-12-29 10:29:43', '2020-12-29 10:29:43'),
(11, '07030595988', '90354', '', '', '2020-12-29 10:32:32', '2020-12-29 10:32:32'),
(12, '08122859798', '88996', '', '', '2020-12-29 10:47:17', '2020-12-29 10:47:17'),
(13, 'excanny@yahoo.com', '83340', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', 'email', '2021-01-13 13:43:31', '2021-01-13 13:43:31'),
(14, 'excanny@yahoo.com', '31212', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', 'email', '2021-01-14 11:08:47', '2021-01-14 11:08:47'),
(15, 'excanny@yahoo.com', '45899', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', 'email', '2021-01-14 11:55:42', '2021-01-14 11:55:42'),
(16, 'excanny@yahoo.com', '69041', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', 'email', '2021-01-14 14:13:40', '2021-01-14 14:13:40'),
(17, 'excanny@yahoo.com', '26566', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', 'email', '2021-01-14 15:03:44', '2021-01-14 15:03:44');

-- --------------------------------------------------------

--
-- Table structure for table `tapplicant_weblinks`
--

CREATE TABLE `tapplicant_weblinks` (
  `frecno` double UNSIGNED NOT NULL,
  `fapplicant_id` varchar(100) NOT NULL,
  `fuser_name` varchar(100) NOT NULL,
  `ftitle` varchar(150) NOT NULL,
  `fweb_link` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tapplicant_weblinks`
--

INSERT INTO `tapplicant_weblinks` (`frecno`, `fapplicant_id`, `fuser_name`, `ftitle`, `fweb_link`, `created_at`, `updated_at`) VALUES
(7, 'godson.ihemere.10', 'test@yahoo.com', '', 'https://nzairaland.com', '2020-10-01 23:06:40', '2020-10-01 23:11:20'),
(8, 'godson.ihemere.10', 'test@yahoo.com', '', 'https://nairaland.com', '2020-10-01 23:08:19', '2020-10-01 23:08:19'),
(9, 'godson.ihemere.10', 'test@yahoo.com', 'swsw', 'https://nairaland.com', '2020-10-01 23:12:29', '2020-10-01 23:12:29'),
(10, 'wsw.wsws', 'test@yahoo.com', 'wswsss', 'https://nairaland.com', '2020-10-11 00:27:07', '2020-10-11 00:27:07'),
(11, 'bunto.ronny', '08098738740', 'Facebook', 'https://www.facebook.com/bunto.ronny', '2020-10-12 23:36:10', '2020-10-12 23:36:10'),
(12, 'bunto.ronny', '08098738740', 'Facebook', 'https://www.facebook.com/bunto.ronny', '2020-10-12 23:36:36', '2020-10-12 23:36:36'),
(13, 'bunto.ronny', '08098738740', 'Facebook', 'https://www.facebook.com/bunto.ronny', '2020-10-12 23:37:15', '2020-10-12 23:37:15'),
(14, 'demilade.oyeyele', 'mckeyriguez@gmail.com', 'youtube', 'https://www.youtube.com', '2020-10-13 18:08:02', '2020-10-13 18:08:02'),
(15, 'godson.ihemere', '33333333', '', 'https://fdf.com', '2020-10-17 19:08:33', '2020-10-17 19:08:33'),
(16, 'godson.ihemere', '33333333', '', 'https://fff.com', '2020-10-17 19:09:39', '2020-10-17 19:09:39'),
(17, 'godson.ihemere', '33333333', '', 'https://fff.com', '2020-10-17 19:11:47', '2020-10-17 19:11:47'),
(18, 'godson.ihemere', '33333333', '', 'https://nas.com', '2020-11-08 23:21:40', '2020-11-08 23:21:40'),
(19, 'godson.ihemere', '33333333', '', 'https://eee.com', '2020-11-08 23:22:15', '2020-11-08 23:22:15'),
(20, 'wsws.swsw', 'test3@yahoo.com', '', 'https://fff.com', '2020-12-02 14:09:45', '2020-12-02 14:09:45'),
(21, 'wsws.swsw', 'test3@yahoo.com', '', 'http://ddff.com', '2020-12-02 14:10:07', '2020-12-02 14:10:07'),
(22, 'john .doe', 'Testing@gmail.com', '', 'https://www.youtube.com/', '2020-12-03 13:24:06', '2020-12-03 13:24:06'),
(23, 'john .doe', 'Testing@gmail.com', '', 'https://www.reddit.com/', '2020-12-03 13:25:15', '2020-12-03 13:25:15'),
(24, 'john .doe', 'Testing@gmail.com', '', 'https://www.wikipedia.org/', '2020-12-03 13:25:28', '2020-12-03 13:25:28'),
(25, 'john .doe', 'Testing@gmail.com', '', 'https://www.instagram.com/', '2020-12-03 13:25:57', '2020-12-03 13:25:57');

-- --------------------------------------------------------

--
-- Table structure for table `tassociations`
--

CREATE TABLE `tassociations` (
  `frecno` double NOT NULL,
  `fassociation_name` varchar(100) NOT NULL,
  `fassociation_id` varchar(50) NOT NULL,
  `fassociation_address` text NOT NULL,
  `fbranch_name` varchar(50) DEFAULT NULL,
  `fassociation_email` varchar(80) NOT NULL,
  `fpass_word` varchar(80) NOT NULL,
  `fphone` varchar(20) NOT NULL,
  `fwebsite` varchar(150) DEFAULT NULL,
  `fstate` varchar(30) NOT NULL,
  `flga` varchar(30) NOT NULL,
  `fabout` text DEFAULT NULL,
  `flocations` varchar(255) DEFAULT NULL,
  `fsocials` varchar(255) DEFAULT NULL,
  `ftags` varchar(255) DEFAULT NULL,
  `fverified` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tassociations`
--

INSERT INTO `tassociations` (`frecno`, `fassociation_name`, `fassociation_id`, `fassociation_address`, `fbranch_name`, `fassociation_email`, `fpass_word`, `fphone`, `fwebsite`, `fstate`, `flga`, `fabout`, `flocations`, `fsocials`, `ftags`, `fverified`, `created_at`, `updated_at`) VALUES
(1, 'swsws', 'swsws', 'wswsws ', NULL, 'wdw@yugdygde.com', '$2y$10$PdDidOOejr9f0Olf2pDdMe66WZ/6gGGg1QPu0bcPo2ik7zwusng4S', '07034747384', '', 'Edo', 'Ovia South-West', NULL, NULL, NULL, NULL, 0, '2020-11-12 15:51:11', '2020-11-12 15:51:11'),
(2, 'yftaftsraf', 'yftaftsraf', 'tytftf', NULL, 'test@yahoo.com', '$2y$10$dz8tji/yi8deMkXpWMFng.FFfbSntaZoys41LA61U4KRtwcg69sXe', '76464664', '', 'Imo', 'Oguta', 'We are the best association in Abujass', 'Ibadan  -Odeda', 'http://ded.com', NULL, 0, '2020-11-12 16:28:48', '2020-11-16 11:22:39'),
(3, 'assas', 'assas', '', NULL, 'testa@yahoo.com', '$2y$10$39p4ohNMoarIFtgC8bU.ROVpxVFaFAL9Z4rAGsO9M7TG5YedH/E4i', '23244242', NULL, 'Delta', 'Okpe', NULL, NULL, NULL, NULL, 0, '2020-11-23 10:41:24', '2020-11-23 10:41:24'),
(4, 'SOCIETY OF LABOURERS', 'society of labourers', '', NULL, 'bunmi.oye@gmail.com', '$2y$10$Gg5JzWk42//96ACd2DYEP.euYifRP8cW0Vh8Ml0YRqfAOvwpcm7FK', '08033056355', NULL, 'Ekiti', 'Irepodun/Ifelodun', NULL, NULL, NULL, NULL, 0, '2020-11-30 16:39:07', '2020-11-30 16:39:07'),
(5, 'wdww', 'wdww', '', NULL, 'test2@yahoo.com', '$2y$10$Nf3yeEUykQkUowCi3K8sKuxgaEIISR3TlmX0xtti9ZQWpdrQOK1.u', '121313', NULL, 'Kano', 'Gwarzo', NULL, NULL, NULL, NULL, 0, '2020-11-30 16:45:45', '2020-11-30 16:45:45'),
(6, 'wswswsw', 'wswswsw', '', NULL, 'test4@yahoo.com', '$2y$10$E8tiH1vfRUBmhcRgx17w9OdfM5JN6TQxOnfVZZLioWWVq32MCl0J.', '23224', NULL, 'Ekiti', 'Ise/Orun', 'w2w2', 'w2w2', '', NULL, 0, '2020-12-02 17:39:34', '2020-12-02 17:41:05'),
(7, 'Nigeria Computer Science Association ', 'nigeria computer science association ', '', NULL, 'Testing@gmail.com', '$2y$10$MpkNwaGBpbWd5h1K8Zcuq.BQkY5AHqoqbXEZC82biOLRzoEw6Z05O', '08657741258', NULL, 'Lagos', 'Lagos Mainland', 'We\'re proud to be the largest athletic recruiting platform since we were founded as the National Collegiate Scouting Association more than 15 years ago. The sports recruiting world has shifted, and we\'re always evolving to make recruiting better for college-bound athletes.', 'Mainland, Lagos', '', NULL, 0, '2020-12-04 11:50:40', '2020-12-04 11:55:52'),
(8, 'iiiii', 'iiiii', '', NULL, 'saiyemomi@gmail.com', '$2y$10$w4Ev8/ZUTQJD3CC60XkT8.t1lDsKWPQLdBhTL6Vdxgv9X1im7bLlq', '887777', NULL, 'FCT', 'Municipal Area Council', NULL, NULL, NULL, NULL, 0, '2020-12-14 06:02:32', '2020-12-14 06:02:32'),
(36, 'swsw', 'swsw', '', NULL, 'excanny@yahoo.com', '$2y$10$mGDbiFi8e5waeM/4MYq9cuB80WO5RY9LPxlz8szp/Dw6a98fNNWn2', '32432434', NULL, 'Enugu', 'Udenu', NULL, NULL, NULL, NULL, 0, '2021-01-14 16:07:21', '2021-01-14 16:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `tassociation_gallery`
--

CREATE TABLE `tassociation_gallery` (
  `frecno` double UNSIGNED NOT NULL,
  `fimage` varchar(100) NOT NULL,
  `fassociation_id` varchar(60) NOT NULL,
  `fimage_id` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tassociation_gallery`
--

INSERT INTO `tassociation_gallery` (`frecno`, `fimage`, `fassociation_id`, `fimage_id`, `created_at`, `updated_at`) VALUES
(3, '1605522188_cd88200c5f0b091d9537.jpeg', 'yftaftsraf', 'IMG1605522188', '2020-11-16 11:23:08', '2020-11-16 11:23:08'),
(4, '1606391459_ddc76ef9dde33b5efe66.jpeg', 'yftaftsraf', 'IMG1606391459', '2020-11-26 12:50:59', '2020-11-26 12:50:59'),
(5, '1606750983_7ecfe19a65e6faefcec6.png', 'society of labourers', 'IMG1606750983', '2020-11-30 16:43:03', '2020-11-30 16:43:03'),
(6, '1606751048_71b687bcac3a7ca34206.png', 'society of labourers', 'IMG1606751048', '2020-11-30 16:44:08', '2020-11-30 16:44:08'),
(7, '1606751108_67313ae19eed002f4860.jpg', 'society of labourers', 'IMG1606751108', '2020-11-30 16:45:08', '2020-11-30 16:45:08'),
(8, '1606751242_1365d70feb9f8ba13f74.jpg', 'wdww', 'IMG1606751242', '2020-11-30 16:47:22', '2020-11-30 16:47:22'),
(23, '1606926306_9dcdec46c0baa0eccd3a.jpeg', 'qsqsq', 'IMG1606926306', '2020-12-02 17:25:06', '2020-12-02 17:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `tcompanies`
--

CREATE TABLE `tcompanies` (
  `frecno` double NOT NULL,
  `fcompany_name` varchar(100) NOT NULL,
  `fcompany_id` varchar(80) NOT NULL,
  `fcac` varchar(150) NOT NULL,
  `fcompany_address` text NOT NULL,
  `fcompany_email` varchar(80) NOT NULL,
  `fpass_word` varchar(80) NOT NULL,
  `fphone` varchar(20) NOT NULL,
  `fwebsite` varchar(150) DEFAULT NULL,
  `fstate` varchar(30) NOT NULL,
  `flga` varchar(30) NOT NULL,
  `fabout` text DEFAULT NULL,
  `flocations` varchar(255) DEFAULT NULL,
  `fsocials` varchar(255) DEFAULT NULL,
  `ftags` varchar(255) DEFAULT NULL,
  `fis_active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tcompanies`
--

INSERT INTO `tcompanies` (`frecno`, `fcompany_name`, `fcompany_id`, `fcac`, `fcompany_address`, `fcompany_email`, `fpass_word`, `fphone`, `fwebsite`, `fstate`, `flga`, `fabout`, `flocations`, `fsocials`, `ftags`, `fis_active`, `created_at`, `updated_at`) VALUES
(8, 'wsw', 'wsw.11', '', 'swswdwd', 'ddd@yahoo.com', '$2y$10$e5hysXQxK50YitGY7lBE1OpbFFuUbkUsSeEYdX0.1SBAow8pi78ue', '33444', '', 'FCT', 'Abaji', NULL, NULL, NULL, NULL, 0, '2020-10-26 12:20:17', '2020-10-26 12:20:17'),
(10, 'ss3s', 'ss3s', '', '', 'sxsx@deded.com', '$2y$10$sl3YHDiGa5XrW0Thk3RYoO/ZiBHt3.PbOrKLGEg8xYw.CDYxD8e2u', '33333333333333333', NULL, 'FCT', 'Gwagwalada', NULL, NULL, NULL, NULL, 0, '2020-11-20 19:26:27', '2020-11-20 19:26:27'),
(11, 'eded', 'eded', '', '', 'ded@deded', '$2y$10$3uMTPlm/22T5BIyWKFRIG.pTuPAi8zCrHSe4Els9sTuqmTRJwb1Ui', '3254354', NULL, 'Ekiti', 'Ikere', NULL, NULL, NULL, NULL, 0, '2020-11-20 19:31:00', '2020-11-20 19:31:00'),
(12, 'swdw', 'swdw', '', '', 'dede@deded.com', '$2y$10$WH1E02htNbZBFGitJAtg7.jdkgoeU9q5kfiCdKoQFpazAQU2Zkdjm', '666', NULL, 'Enugu', 'Nkanu West', NULL, NULL, NULL, NULL, 0, '2020-11-20 19:37:56', '2020-11-20 19:37:56'),
(13, 'sxwxe', 'sxwxe', '', '', 'ded@ddecefd.com', '$2y$10$h0lMeuQCR38.SVpJDnGYIu9ruD3pSZi4DA1gHSKItVQrh3ODKgs/S', '555', NULL, 'Adamawa', 'Fufure', NULL, NULL, NULL, NULL, 0, '2020-11-20 19:39:30', '2020-11-20 19:39:30'),
(14, 'dede', 'dede', '', '', 'test@yahoo.com', '$2y$10$LJDA.ahyE7h.Wxfz35xEAO9.dQtH.WX/um1pyUxZeEvMMsWVjqfVG', '76768', NULL, 'FCT', 'Kwali', 'sqwsw', 'swsw -wsw', 'https://nairaland.com', NULL, 0, '2020-11-20 19:43:54', '2020-12-01 13:19:08'),
(15, 'ABC Limited', 'abc limited', '', '1, Ogudu road', 'boyeyele@yahoo.co.uk', '$2y$10$1gWv/xriMYLR/0DGwNDIf.CSCutXyLu/ae2EmhB/pgO0P1bCfXhFm', '08098738740', '', 'Lagos', 'Kosofe', NULL, NULL, NULL, NULL, 0, '2020-11-05 18:03:49', '2020-11-23 10:34:27'),
(19, 'w3e3e', 'w3e3e', '', '', 'test6@yahoo.com', '$2y$10$DsEFcpFm82blJcXHQbXqOeFqSADuRs1RKo9545TmLDtzZg3E9sWe6', '3234', NULL, 'FCT', 'Gwagwalada', 'dede', 'deded', 'httpS://sdd.com', NULL, 0, '2020-12-02 15:06:14', '2020-12-02 15:08:52'),
(20, 'ABC Nigeria Limited', 'abc nigeria limited', '', '', 'Testing@gmail.com', '$2y$10$zkKJq7LtmTwPXtRXPOsyIOkX4vw4tfzEnaYjh6WYOJIh2zQqkpc/O', '08123456805', NULL, 'Lagos', 'Ibeju-Lekki', 'Diamond Bank Plc., was a Nigerian multinational financial service provider. Diamond Bank was acquired by Access Bank in December 2018, and announced to complete the transactions of the merger fully in the first half of 2019.', '23 Ilupeju Byepass, Ilupeju, Lagos  -Gbagada  - Oworonshoki Expy, Gbagada, Lagos  -281, Agege Motor Road, Olorunsogo, Mushin Mushin 281, Agege Motor Road, Olorunsogo, Mushin Lagos NG, 100253, Lagos  - 6 Ojuelegba Rd, Yaba 101241, Lagos  -103 & 105 St Finb', 'https://twitter.com/ -https://www.instagram.com/ -https://web.facebook.com/?_rdc=1&_rdr -https://www.pinterest.com/', NULL, 0, '2020-12-03 13:33:44', '2020-12-03 14:13:51'),
(21, 'hh', 'hh', '', '', 'saiyemomi@gmail.com', '$2y$10$M8Noe1gGoqR56OgjzBJLbeMxAM0uVNtR26XtvHDbIh9edsgFcDEmS', '777777', NULL, 'Borno', 'Kala/Balge', NULL, NULL, NULL, NULL, 0, '2020-12-14 05:59:22', '2020-12-14 05:59:22'),
(22, 'swdwd', 'swdwd', '', '', 'excanny@yahoo.com', '$2y$10$p.JWlV3kvkbMuFYkgHXiAujDPN89pQ9np23S5xyWoJzQ2dbQRuXpK', '3423253', NULL, 'Ebonyi', 'Izzi', NULL, NULL, NULL, NULL, 0, '2021-01-04 13:52:29', '2021-01-04 13:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `tcompany_gallery`
--

CREATE TABLE `tcompany_gallery` (
  `frecno` double UNSIGNED NOT NULL,
  `fimage` varchar(100) NOT NULL,
  `fcompany_id` varchar(60) NOT NULL,
  `fimage_id` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tcompany_gallery`
--

INSERT INTO `tcompany_gallery` (`frecno`, `fimage`, `fcompany_id`, `fimage_id`, `created_at`, `updated_at`) VALUES
(10, '1607001251_12fdfb7935064945d8f6.png', 'abc nigeria limited', 'IMG1607001251', '2020-12-03 14:14:11', '2020-12-03 14:14:11'),
(11, '1607001262_ca703914d48229610774.jpg', 'abc nigeria limited', 'IMG1607001262', '2020-12-03 14:14:22', '2020-12-03 14:14:22'),
(12, '1607002323_63296e4079606211ca4a.jpg', 'abc nigeria limited', 'IMG1607002323', '2020-12-03 14:32:03', '2020-12-03 14:32:03'),
(14, '1607003553_a7c22b5a80e6c78fca6e.jpg', 'dede', 'IMG1607003553', '2020-12-03 14:52:33', '2020-12-03 14:52:33'),
(15, '1607003592_a442e8749d363eb58fc7.jpg', 'dede', 'IMG1607003596', '2020-12-03 14:53:16', '2020-12-03 14:53:16'),
(16, '1607003615_1ca07ed5c881e9ff3c7f.jpg', 'dede', 'IMG1607003615', '2020-12-03 14:53:35', '2020-12-03 14:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `tcompany_verification_codes`
--

CREATE TABLE `tcompany_verification_codes` (
  `frecno` double UNSIGNED NOT NULL,
  `femail` varchar(80) NOT NULL,
  `ftoken` varchar(100) NOT NULL,
  `fcookie` varchar(255) NOT NULL,
  `fdevice` varchar(30) NOT NULL,
  `finserted_id` double UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tcompany_verification_codes`
--

INSERT INTO `tcompany_verification_codes` (`frecno`, `femail`, `ftoken`, `fcookie`, `fdevice`, `finserted_id`, `created_at`, `updated_at`) VALUES
(1, 'excanny@yahoo.com', '67152', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 0, '2021-01-14 11:48:04', '2021-01-14 11:48:04'),
(2, 'excanny@yahoo.com', '47196', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 0, '2021-01-14 13:28:46', '2021-01-14 13:28:46'),
(3, 'excanny@yahoo.com', '25895', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 20, '2021-01-14 13:33:16', '2021-01-14 13:33:16'),
(4, 'excanny@yahoo.com', '28911', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 21, '2021-01-14 13:58:49', '2021-01-14 13:58:49'),
(5, 'excanny@yahoo.com', '13183', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 22, '2021-01-14 14:13:05', '2021-01-14 14:13:05'),
(6, 'excanny@yahoo.com', '89345', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 23, '2021-01-14 14:21:37', '2021-01-14 14:21:37'),
(7, 'excanny@yahoo.com', '23194', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 24, '2021-01-14 14:46:48', '2021-01-14 14:46:48'),
(8, 'excanny@yahoo.com', '74872', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 25, '2021-01-14 14:48:25', '2021-01-14 14:48:25'),
(9, 'excanny@yahoo.com', '55938', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 26, '2021-01-14 14:50:39', '2021-01-14 14:50:39'),
(10, 'excanny@yahoo.com', '20223', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 27, '2021-01-14 14:54:21', '2021-01-14 14:54:21'),
(11, 'excanny@yahoo.com', '96616', 'C3A5879D-4C75-4B45-8EDE-9A74D41E581B', '', 28, '2021-01-14 15:09:19', '2021-01-14 15:09:19');

-- --------------------------------------------------------

--
-- Table structure for table `tevents`
--

CREATE TABLE `tevents` (
  `frecno` double NOT NULL,
  `ffrom` datetime NOT NULL,
  `fto` datetime NOT NULL,
  `ftitle` varchar(150) NOT NULL,
  `fdescription` text NOT NULL,
  `finvitees` text NOT NULL,
  `fauthor` varchar(80) NOT NULL,
  `fevent_id` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tevents`
--

INSERT INTO `tevents` (`frecno`, `ffrom`, `fto`, `ftitle`, `fdescription`, `finvitees`, `fauthor`, `fevent_id`, `created_at`, `updated_at`) VALUES
(2, '2020-10-10 13:13:00', '2020-10-24 13:14:00', 'drdrd', 'drdr', 'John Smith,Godson Ihemere', 'godson.ihemere.10', 'EV1602245665', '2020-10-09 13:14:25', '2020-10-09 13:14:25'),
(3, '2020-10-10 13:13:00', '2020-10-24 13:14:00', 'drdrd', 'drdr', 'John Smith,Godson Ihemere', 'godson.ihemere.10', 'EV1602245734', '2020-10-09 13:15:34', '2020-10-09 13:15:34'),
(4, '2020-10-10 13:13:00', '2020-10-24 13:14:00', 'drdrd', 'drdr', 'John Smith,Godson Ihemere', 'godson.ihemere.10', 'EV1602245752', '2020-10-09 13:15:52', '2020-10-09 13:15:52'),
(5, '2020-10-10 13:13:00', '2020-10-24 13:14:00', 'drdrd', 'drdr', 'John Smith,Godson Ihemere', 'godson.ihemere.10', 'EV1602245767', '2020-10-09 13:16:07', '2020-10-09 13:16:07'),
(6, '2020-10-10 13:13:00', '2020-10-24 13:14:00', 'drdrd', 'drdr', 'John Smith,Godson Ihemere', 'godson.ihemere.10', 'EV1602245906', '2020-10-09 13:18:26', '2020-10-09 13:18:26'),
(7, '2020-10-17 16:14:00', '2020-10-31 16:14:00', 'wsws', 'swsw', 'John Westmann,Godson Ihemere,Godd Ihem, ,Godson Ihemere,Gbemileke Daniel,Bunto Ronny,Demilade Oyeyele', 'godson.ihemere', 'EV1602774863', '2020-10-15 16:14:23', '2020-10-15 16:14:23'),
(8, '2020-10-17 16:19:00', '2020-10-24 16:19:00', 'swsw', 'swsw', 'John Westmann,Godson Ihemere,Godd Ihem, ,Godson Ihemere,Gbemileke Daniel,Bunto Ronny,Demilade Oyeyele', 'godson.ihemere', 'EV1602775192', '2020-10-15 16:19:52', '2020-10-15 16:19:52'),
(10, '2020-12-05 18:04:00', '2020-12-06 18:05:00', 'Blah bla', 'Nnnajskisijj', '', 'abc limited', 'EV1604595948', '2020-11-05 18:05:48', '2020-11-05 18:05:48'),
(11, '2020-11-21 10:48:00', '2020-11-16 10:48:00', 'PTA meeting', 'dede', '', 'test', 'EV1605519945', '2020-11-16 10:45:45', '2020-11-16 10:45:45'),
(12, '2020-12-12 11:27:00', '2020-11-16 11:27:00', 'ssw', 'wsw', '', 'yftaftsraf', 'EV1605522177', '2020-11-16 11:22:57', '2020-11-16 11:22:57'),
(13, '2020-11-13 15:00:00', '2020-11-30 18:58:00', 'sqsqsq', 'qsqsqsqsq', 'gbemileke.daniel,bunto.ronny', 'godson.ihemere', 'EV1606748336', '2020-11-30 15:58:56', '2020-11-30 15:58:56'),
(14, '2020-12-02 19:09:00', '2020-12-02 15:15:00', 'rfr', 'frfrfr', '', 'w3e3e', 'EV1606918154', '2020-12-02 15:09:14', '2020-12-02 15:09:14'),
(15, '2020-12-02 15:20:00', '2020-12-02 15:19:00', '2w2w', '', '', 'w3e3e', 'EV1606918614', '2020-12-02 15:16:54', '2020-12-02 15:16:54'),
(16, '2020-12-02 15:20:00', '2020-12-02 15:19:00', '2w2w', '', '', 'w3e3e', 'EV1606918614', '2020-12-02 15:16:54', '2020-12-02 15:16:54'),
(17, '2020-12-02 15:20:00', '2020-12-02 15:19:00', '2w2w', '', '', 'w3e3e', 'EV1606918614', '2020-12-02 15:16:54', '2020-12-02 15:16:54'),
(18, '2020-12-02 15:20:00', '2020-12-02 15:19:00', '2w2w', '', '', 'w3e3e', 'EV1606918615', '2020-12-02 15:16:55', '2020-12-02 15:16:55'),
(19, '2020-12-02 15:21:00', '2020-12-02 15:22:00', 'swsw', 'swwsws', '', 'w3e3e', 'EV1606918838', '2020-12-02 15:20:38', '2020-12-02 15:20:38'),
(20, '2020-12-02 04:47:00', '2020-12-02 04:47:00', '', '', '', 'w2w2w', 'EV1606924044', '2020-12-02 16:47:24', '2020-12-02 16:47:24'),
(21, '2020-12-02 04:47:00', '2020-12-02 04:47:00', '', '', '', 'w2w2w', 'EV1606924088', '2020-12-02 16:48:08', '2020-12-02 16:48:08'),
(22, '2020-12-02 04:47:00', '2020-12-02 04:47:00', '', '', '', 'w2w2w', 'EV1606924089', '2020-12-02 16:48:09', '2020-12-02 16:48:09'),
(24, '2020-12-02 05:41:00', '2020-12-02 05:41:00', 'w2w2', 'w2w2w22w2w', '', 'wswswsw', 'EV1606927285', '2020-12-02 17:41:25', '2020-12-02 17:41:34'),
(25, '2020-12-03 01:15:00', '2020-12-03 13:20:00', 'tgftg', 'gtgt', 'on', 'godson.ihemere.55', 'EV1606997786', '2020-12-03 13:16:26', '2020-12-03 13:16:26'),
(26, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Diamond bank Career event', 'Diamond and Access Bank are set to have the largest alternative channels on the continent even as customers of both financial institutions can now use their combined total of 3,100 Automated Teller Machines (ATMs) without paying the usual N65 charge that applies after a customer’s third withdrawal from other bank’s ATM.', '', 'abc nigeria limited', 'EV1607001143', '2020-12-03 14:12:23', '2020-12-03 14:12:59'),
(27, '2020-12-06 12:00:00', '2021-03-10 12:00:00', 'Babcock second semester resumption ', 'All students are to resume for the regular school session by 6th December 2020', '', 'babcock university ', 'EV1607078600', '2020-12-04 11:43:20', '2020-12-04 11:43:20'),
(28, '2019-11-03 13:00:00', '2020-11-04 13:00:00', 'NCSA Science fair ', 'Computer science project competition ', '', 'nigeria computer science association ', 'EV1607079745', '2020-12-04 12:02:25', '2020-12-04 12:02:25'),
(29, '2020-12-14 17:56:00', '2020-12-14 17:58:00', 'fderfre', 'frfrfr', 'bunto.ronny,dada.michael,demilade.oyeyele', 'godson.ihemere', 'EV1607964881', '2020-12-14 17:54:41', '2020-12-14 17:54:41'),
(30, '2020-12-14 05:57:00', '2020-12-14 05:57:00', 'qaqaq', 'aqa', 'dada.michael,demilade.oyeyele,gbemileke.daniel', 'godson.ihemere', 'EV1607965093', '2020-12-14 17:58:13', '2020-12-14 17:58:13'),
(31, '2021-01-07 14:20:00', '2021-01-07 02:17:00', 'hrh', 'hrhrhrhrh', '', 'swdwd', 'EV1610025458', '2021-01-07 14:17:38', '2021-01-07 14:17:38'),
(32, '0000-00-00 00:00:00', '0000-00-00 00:00:00', ',llll', ',llll', '', 'kikkkkk', 'EV1610453956', '2021-01-12 13:19:16', '2021-01-12 13:19:16');

-- --------------------------------------------------------

--
-- Table structure for table `tjobs`
--

CREATE TABLE `tjobs` (
  `frecno` double NOT NULL,
  `fjob_id` varchar(80) NOT NULL,
  `fjob_title` varchar(150) NOT NULL,
  `femployer_id` varchar(80) NOT NULL,
  `femployer_name` varchar(80) NOT NULL,
  `femployment_type` varchar(30) NOT NULL,
  `flocation_state` varchar(30) DEFAULT NULL,
  `flocation_lga` varchar(30) DEFAULT NULL,
  `fworkdays` varchar(100) NOT NULL,
  `fwork_time_start` time NOT NULL,
  `fwork_time_end` time NOT NULL,
  `feducational_qualification` varchar(60) DEFAULT NULL,
  `fjob_description` text NOT NULL,
  `fis_broadcasted` tinyint(4) NOT NULL,
  `fprocess_level` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tjobs`
--

INSERT INTO `tjobs` (`frecno`, `fjob_id`, `fjob_title`, `femployer_id`, `femployer_name`, `femployment_type`, `flocation_state`, `flocation_lga`, `fworkdays`, `fwork_time_start`, `fwork_time_end`, `feducational_qualification`, `fjob_description`, `fis_broadcasted`, `fprocess_level`, `created_at`, `updated_at`) VALUES
(1, 'ee', 'ee', 'ff', '', '', NULL, NULL, '', '00:00:00', '00:00:00', NULL, '', 0, 0, '2020-10-08 16:48:43', '2020-10-14 20:38:14'),
(2, 'ee', 'ff', 'ff', '', '', NULL, NULL, '', '00:00:00', '00:00:00', NULL, '', 0, 0, '2020-10-08 16:48:43', '2020-10-14 20:38:17'),
(3, 'JB1604236095', 'ddd', '', '', 'Full Time', 'Kaduna', 'Zangon Kataf', 'Monday,Tuesday', '14:04:00', '14:04:00', 'Any', 'fffffff', 1, 0, '2020-11-01 14:08:15', '2020-11-02 12:03:58'),
(4, 'JB1604237193', 'wdcw', 'wsw', 'wsw', 'Full Time', 'Jigawa', 'Kazaure', 'Monday,Tuesday,Wednesday', '14:28:00', '14:28:00', 'Any', 'dvdv', 0, 0, '2020-11-01 14:26:33', '2020-11-01 14:26:33'),
(5, 'JB1604242593', 'wdcw', 'wsw', 'wsw', 'Full Time', 'Jigawa', 'Kazaure', 'Monday,Tuesday,Wednesday', '14:28:00', '14:28:00', 'Any', 'dvdv', 0, 0, '2020-11-01 15:56:33', '2020-11-01 15:56:33'),
(6, 'JB1604243866', 'swws', 'wsw', 'wsw', '', 'Adamawa', 'Demsa', 'Monday,Tuesday,Wednesday', '16:18:00', '16:20:00', 'First School Leaving Certificate', 'swsw', 0, 0, '2020-11-01 16:17:46', '2020-11-01 16:17:46'),
(7, 'JB1604244722', 'swws', 'wsw', 'wsw', '', 'Adamawa', 'Demsa', 'Monday,Tuesday,Wednesday', '16:18:00', '16:20:00', 'First School Leaving Certificate', 'swsw', 0, 0, '2020-11-01 16:32:02', '2020-11-01 16:32:02'),
(8, 'JB1604246326', 'swws', 'wsw', 'wsw', '', 'Adamawa', 'Demsa', 'Monday,Tuesday,Wednesday', '16:18:00', '16:20:00', 'First School Leaving Certificate', 'swsw', 0, 0, '2020-11-01 16:58:46', '2020-11-01 16:58:46'),
(9, 'JB1604246381', 'swws', 'wsw', 'wsw', '', 'Adamawa', 'Demsa', 'Monday,Tuesday,Wednesday', '16:18:00', '16:20:00', 'First School Leaving Certificate', 'swsw', 0, 0, '2020-11-01 16:59:41', '2020-11-01 16:59:41'),
(10, 'JB1604246732', 'swws', 'wsw', 'wsw', '', 'Adamawa', 'Demsa', 'Monday,Tuesday,Wednesday', '16:18:00', '16:20:00', 'First School Leaving Certificate', 'swsw', 0, 0, '2020-11-01 17:05:32', '2020-11-01 17:05:32'),
(11, 'JB1604246955', 'swws', 'wsw', 'wsw', '', 'Adamawa', 'Demsa', 'Monday,Tuesday,Wednesday', '16:18:00', '16:20:00', 'First School Leaving Certificate', 'swsw', 0, 0, '2020-11-01 17:09:15', '2020-11-01 17:09:15'),
(12, 'JB1604247086', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:11:26', '2020-11-01 17:11:26'),
(13, 'JB1604247197', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:13:17', '2020-11-01 17:13:17'),
(14, 'JB1604247342', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:15:42', '2020-11-01 17:15:42'),
(15, 'JB1604247438', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:17:18', '2020-11-01 17:17:18'),
(16, 'JB1604247568', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:19:28', '2020-11-01 17:19:28'),
(17, 'JB1604247596', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:19:56', '2020-11-01 17:19:56'),
(18, 'JB1604247636', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:20:36', '2020-11-01 17:20:36'),
(19, 'JB1604247828', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:23:48', '2020-11-01 17:23:48'),
(20, 'JB1604247885', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:24:45', '2020-11-01 17:24:45'),
(21, 'JB1604247910', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:25:10', '2020-11-01 17:25:10'),
(22, 'JB1604247952', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:25:52', '2020-11-01 17:25:52'),
(23, 'JB1604248106', 'Accountant', 'wsw', 'wsw', '', 'Any', 'Any', 'Monday,Tuesday,Wednesday', '17:13:00', '17:14:00', 'Any', 'ggg', 0, 0, '2020-11-01 17:28:26', '2020-11-01 17:28:26'),
(24, 'JB1604248289', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:31:29', '2020-11-01 17:31:29'),
(25, 'JB1604248509', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:35:09', '2020-11-01 17:35:09'),
(26, 'JB1604248557', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:35:57', '2020-11-01 17:35:57'),
(27, 'JB1604248593', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:36:33', '2020-11-01 17:36:33'),
(28, 'JB1604248662', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:37:42', '2020-11-01 17:37:42'),
(29, 'JB1604249050', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:44:10', '2020-11-01 17:44:10'),
(30, 'JB1604249080', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:44:40', '2020-11-01 17:44:40'),
(31, 'JB1604249160', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:46:00', '2020-11-01 17:46:00'),
(32, 'JB1604249216', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:46:56', '2020-11-01 17:46:56'),
(33, 'JB1604249353', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:49:13', '2020-11-01 17:49:13'),
(34, 'JB1604249423', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:50:23', '2020-11-01 17:50:23'),
(35, 'JB1604249447', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:50:47', '2020-11-01 17:50:47'),
(36, 'JB1604249585', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:53:05', '2020-11-01 17:53:05'),
(37, 'JB1604249725', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:55:25', '2020-11-01 17:55:25'),
(38, 'JB1604249996', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 17:59:56', '2020-11-01 17:59:56'),
(39, 'JB1604250136', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:02:16', '2020-11-01 18:02:16'),
(40, 'JB1604250212', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:03:32', '2020-11-01 18:03:32'),
(41, 'JB1604250257', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:04:17', '2020-11-01 18:04:17'),
(42, 'JB1604250281', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:04:41', '2020-11-01 18:04:41'),
(43, 'JB1604250321', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:05:21', '2020-11-01 18:05:21'),
(44, 'JB1604251005', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:16:45', '2020-11-01 18:16:45'),
(45, 'JB1604251057', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:17:37', '2020-11-01 18:17:37'),
(46, 'JB1604251081', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:18:01', '2020-11-01 18:18:01'),
(47, 'JB1604251096', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:18:16', '2020-11-01 18:18:16'),
(48, 'JB1604251120', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:18:40', '2020-11-01 18:18:40'),
(49, 'JB1604251144', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:19:04', '2020-11-01 18:19:04'),
(50, 'JB1604251149', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:19:09', '2020-11-01 18:19:09'),
(51, 'JB1604251177', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:19:37', '2020-11-01 18:19:37'),
(52, 'JB1604251386', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:23:06', '2020-11-01 18:23:06'),
(53, 'JB1604251483', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:24:43', '2020-11-01 18:24:43'),
(54, 'JB1604251487', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:24:47', '2020-11-01 18:24:47'),
(55, 'JB1604251595', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:26:35', '2020-11-01 18:26:35'),
(56, 'JB1604251598', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:26:38', '2020-11-01 18:26:38'),
(57, 'JB1604251733', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:28:53', '2020-11-01 18:28:53'),
(58, 'JB1604251807', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:30:07', '2020-11-01 18:30:07'),
(59, 'JB1604251851', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:30:51', '2020-11-01 18:30:51'),
(60, 'JB1604251969', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:32:49', '2020-11-01 18:32:49'),
(61, 'JB1604252035', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:33:55', '2020-11-01 18:33:55'),
(62, 'JB1604252066', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:34:26', '2020-11-01 18:34:26'),
(63, 'JB1604252107', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:35:07', '2020-11-01 18:35:07'),
(64, 'JB1604252129', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:35:29', '2020-11-01 18:35:29'),
(65, 'JB1604252165', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:36:05', '2020-11-01 18:36:05'),
(66, 'JB1604252194', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:36:34', '2020-11-01 18:36:34'),
(67, 'JB1604252236', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:37:16', '2020-11-01 18:37:16'),
(68, 'JB1604252254', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:37:34', '2020-11-01 18:37:34'),
(69, 'JB1604252287', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:38:07', '2020-11-01 18:38:07'),
(70, 'JB1604252358', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:39:18', '2020-11-01 18:39:18'),
(71, 'JB1604252379', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:39:39', '2020-11-01 18:39:39'),
(72, 'JB1604252418', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:40:18', '2020-11-01 18:40:18'),
(73, 'JB1604252449', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:40:49', '2020-11-01 18:40:49'),
(74, 'JB1604252472', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:41:12', '2020-11-01 18:41:12'),
(75, 'JB1604252517', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:41:57', '2020-11-01 18:41:57'),
(76, 'JB1604252554', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:42:34', '2020-11-01 18:42:34'),
(77, 'JB1604252643', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:44:03', '2020-11-01 18:44:03'),
(78, 'JB1604252671', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:44:31', '2020-11-01 18:44:31'),
(79, 'JB1604252695', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:44:55', '2020-11-01 18:44:55'),
(80, 'JB1604252762', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:46:02', '2020-11-01 18:46:02'),
(81, 'JB1604252821', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:47:01', '2020-11-01 18:47:01'),
(82, 'JB1604252842', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:47:22', '2020-11-01 18:47:22'),
(83, 'JB1604253251', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:54:11', '2020-11-01 18:54:11'),
(84, 'JB1604253303', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:55:03', '2020-11-01 18:55:03'),
(85, 'JB1604253362', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:56:02', '2020-11-01 18:56:02'),
(86, 'JB1604253365', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:56:05', '2020-11-01 18:56:05'),
(87, 'JB1604253426', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:57:06', '2020-11-01 18:57:06'),
(88, 'JB1604253459', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:57:39', '2020-11-01 18:57:39'),
(89, 'JB1604253493', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 18:58:13', '2020-11-01 18:58:13'),
(90, 'JB1604253626', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:00:26', '2020-11-01 19:00:26'),
(91, 'JB1604253648', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:00:48', '2020-11-01 19:00:48'),
(92, 'JB1604253693', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:01:33', '2020-11-01 19:01:33'),
(93, 'JB1604253781', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:03:01', '2020-11-01 19:03:01'),
(94, 'JB1604253868', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:04:28', '2020-11-01 19:04:28'),
(95, 'JB1604253977', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:06:17', '2020-11-01 19:06:17'),
(96, 'JB1604254000', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:06:40', '2020-11-01 19:06:40'),
(97, 'JB1604254044', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:07:24', '2020-11-01 19:07:24'),
(98, 'JB1604254082', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:08:02', '2020-11-01 19:08:02'),
(99, 'JB1604254135', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:08:55', '2020-11-01 19:08:55'),
(100, 'JB1604254163', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:09:23', '2020-11-01 19:09:23'),
(101, 'JB1604254201', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:10:01', '2020-11-01 19:10:01'),
(102, 'JB1604254225', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:10:26', '2020-11-01 19:10:26'),
(103, 'JB1604254265', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:11:05', '2020-11-01 19:11:05'),
(104, 'JB1604254365', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:12:45', '2020-11-01 19:12:45'),
(105, 'JB1604254397', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:13:17', '2020-11-01 19:13:17'),
(106, 'JB1604254431', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:13:51', '2020-11-01 19:13:51'),
(107, 'JB1604254459', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:14:19', '2020-11-01 19:14:19'),
(108, 'JB1604254475', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:14:35', '2020-11-01 19:14:35'),
(109, 'JB1604254478', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:14:38', '2020-11-01 19:14:38'),
(110, 'JB1604254525', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:15:25', '2020-11-01 19:15:25'),
(111, 'JB1604254545', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:15:45', '2020-11-01 19:15:45'),
(112, 'JB1604254574', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:16:14', '2020-11-01 19:16:14'),
(113, 'JB1604254589', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:16:29', '2020-11-01 19:16:29'),
(114, 'JB1604254613', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:16:53', '2020-11-01 19:16:53'),
(115, 'JB1604254620', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:17:01', '2020-11-01 19:17:01'),
(116, 'JB1604254637', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:17:17', '2020-11-01 19:17:17'),
(117, 'JB1604254717', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:18:37', '2020-11-01 19:18:37'),
(118, 'JB1604254781', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:19:41', '2020-11-01 19:19:41'),
(119, 'JB1604255523', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:32:03', '2020-11-01 19:32:03'),
(120, 'JB1604255593', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:33:13', '2020-11-01 19:33:13'),
(121, 'JB1604255597', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:33:17', '2020-11-01 19:33:17'),
(122, 'JB1604255753', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:35:53', '2020-11-01 19:35:53'),
(123, 'JB1604255874', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:37:54', '2020-11-01 19:37:54'),
(124, 'JB1604255914', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:38:34', '2020-11-01 19:38:34'),
(125, 'JB1604255928', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:38:48', '2020-11-01 19:38:48'),
(126, 'JB1604255945', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:39:05', '2020-11-01 19:39:05'),
(127, 'JB1604256061', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:41:01', '2020-11-01 19:41:01'),
(128, 'JB1604256171', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 19:42:51', '2020-11-01 19:42:51'),
(129, 'JB1604266195', 'Accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '17:36:00', '17:36:00', '', 'dedede', 0, 0, '2020-11-01 22:29:55', '2020-11-01 22:29:55'),
(130, 'JB1604266613', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '22:36:00', '22:38:00', '', 'aaa', 0, 0, '2020-11-01 22:36:53', '2020-11-01 22:36:53'),
(131, 'JB1604267981', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '22:36:00', '22:38:00', '', 'aaa', 0, 0, '2020-11-01 22:59:42', '2020-11-01 22:59:42'),
(132, 'JB1604268146', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '23:07:00', '23:06:00', '', 'qqq', 0, 0, '2020-11-01 23:02:26', '2020-11-01 23:02:26'),
(133, 'JB1604268146', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '23:07:00', '23:06:00', '', 'qqq', 0, 0, '2020-11-01 23:02:26', '2020-11-01 23:02:26'),
(134, 'JB1604268146', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '23:07:00', '23:06:00', '', 'qqq', 0, 0, '2020-11-01 23:02:26', '2020-11-01 23:02:26'),
(135, 'JB1604268249', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '23:07:00', '23:06:00', '', 'qqq', 0, 0, '2020-11-01 23:04:09', '2020-11-01 23:04:09'),
(136, 'JB1604305995', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday,Wednesday', '09:35:00', '09:37:00', '', 'dede', 0, 0, '2020-11-02 09:33:16', '2020-11-02 09:33:16'),
(137, 'JB1604306174', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '09:40:00', '09:41:00', '', 'dde', 0, 0, '2020-11-02 09:36:14', '2020-11-02 09:36:14'),
(138, 'JB1604306273', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '09:40:00', '09:41:00', '', 'dde', 0, 0, '2020-11-02 09:37:53', '2020-11-02 09:37:53'),
(139, 'JB1604306363', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday', '09:43:00', '09:42:00', '', 'dede', 0, 0, '2020-11-02 09:39:23', '2020-11-02 09:39:23'),
(140, 'JB1604306382', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday', '09:43:00', '09:42:00', '', 'dede', 0, 0, '2020-11-02 09:39:42', '2020-11-02 09:39:42'),
(141, 'JB1604330319', 'ass', 'wsw', 'wsw', '', '', '', 'Monday', '16:20:00', '16:21:00', '', 'sdsds', 0, 0, '2020-11-02 16:18:39', '2020-11-02 16:18:39'),
(142, 'JB1604529491', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '23:40:00', '23:42:00', '', 'aaa', 0, 0, '2020-11-04 23:38:11', '2020-11-04 23:38:11'),
(143, 'JB1604529746', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '23:40:00', '23:42:00', '', 'aaa', 0, 0, '2020-11-04 23:42:26', '2020-11-04 23:42:26'),
(144, 'JB1604530052', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '23:40:00', '23:42:00', '', 'aaa', 0, 0, '2020-11-04 23:47:32', '2020-11-04 23:47:32'),
(145, 'JB1604530264', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '23:40:00', '23:42:00', '', 'aaa', 0, 0, '2020-11-04 23:51:04', '2020-11-04 23:51:04'),
(146, 'JB1604530338', 'accountant', 'wsw', 'wsw', '', '', '', 'Monday,Tuesday', '23:40:00', '23:42:00', '', 'aaa', 0, 0, '2020-11-04 23:52:18', '2020-11-04 23:52:18'),
(147, 'JB1605520217', 'accountant', 'test', 'Test', 'Part Time', '', '', 'Monday,Tuesday', '10:52:00', '10:53:00', '', '3e3e', 0, 0, '2020-11-16 10:50:17', '2020-11-16 10:50:17'),
(148, 'JB1605520251', 'accountant', 'test', 'Test', 'Part Time', '', '', 'Monday,Tuesday', '10:52:00', '10:53:00', '', '3e3e', 0, 0, '2020-11-16 10:50:51', '2020-11-16 10:50:51'),
(149, 'JB1605520616', 'accountant', 'test', 'Test', 'Part Time', '', '', 'Monday', '10:56:00', '10:00:00', '', 'e4e4', 0, 0, '2020-11-16 10:56:56', '2020-11-16 10:56:56'),
(150, 'JB1605520950', 'accountant', 'test', 'Test', 'Part Time', '', '', 'Monday,Tuesday,Wednesday', '11:07:00', '11:08:00', '', 'e3e3', 0, 0, '2020-11-16 11:02:30', '2020-11-16 11:02:30'),
(151, 'JB1605521406', 'accountant', 'test', 'Test', 'Part Time', '', '', 'Monday,Tuesday,Wednesday', '11:13:00', '11:15:00', '', 'e4e4e', 0, 0, '2020-11-16 11:10:06', '2020-11-16 11:10:06'),
(152, 'JB1605522302', 'accountant', 'yftaftsraf', 'yftaftsraf', 'Part Time', '', '', 'Monday,Tuesday', '11:28:00', '11:29:00', '', 'wsws', 0, 0, '2020-11-16 11:25:02', '2020-11-16 11:25:02'),
(153, 'JB1605522321', 'accountant', 'yftaftsraf', 'yftaftsraf', 'Part Time', '', '', 'Monday,Tuesday', '11:28:00', '11:29:00', '', 'wsws', 0, 0, '2020-11-16 11:25:21', '2020-11-16 11:25:21'),
(154, 'JB1605522376', 'accountant', 'yftaftsraf', 'yftaftsraf', 'Part Time', '', '', 'Monday,Tuesday', '11:28:00', '11:29:00', '', 'wsws', 0, 0, '2020-11-16 11:26:16', '2020-11-16 11:26:16'),
(155, 'JB1606921048', 'wsws', '', '', 'Part Time', '', '', 'Monday,Tuesday', '03:57:00', '15:59:00', '', 'wswsw', 0, 0, '2020-12-02 15:57:28', '2020-12-02 15:57:28'),
(156, 'JB1606921071', 'accountant', '', '', 'Part Time', '', '', 'Monday,Tuesday', '03:57:00', '15:59:00', '', 'wswsw', 0, 0, '2020-12-02 15:57:51', '2020-12-02 15:57:51'),
(157, 'JB1606924316', 'accountant', 'w2w2w', 'w2w2w', 'Full Time', '', '', 'Monday,Tuesday', '04:51:00', '04:51:00', '', 'wswsws', 0, 0, '2020-12-02 16:51:56', '2020-12-02 16:51:56'),
(158, 'JB1607004566', 'accountant', '', '', 'Full Time', '', '', 'Monday,Tuesday', '03:08:00', '15:11:00', '', 'wsws', 0, 0, '2020-12-03 15:09:26', '2020-12-03 15:09:26'),
(159, 'JB1607007013', 'accountant', 'dede', 'dede', 'Full Time', '', '', 'Monday,Tuesday,Wednesday', '03:50:00', '03:50:00', '', 'sss', 0, 0, '2020-12-03 15:50:13', '2020-12-03 15:50:13'),
(160, 'JB1608564043', 'accountant ', 'abc nigeria limited', 'ABC Nigeria Limited', 'Full Time', 'Lagos', 'Kosofe', 'Monday,Tuesday,Wednesday,Thursday,Friday', '09:00:00', '18:00:00', 'Bachelor\'s Degree', 'nnnnnn', 0, 0, '2020-12-21 16:20:43', '2020-12-21 16:20:43'),
(161, 'JB1609847806', 'accountant', 'abc nigeria limited', 'ABC Nigeria Limited', 'Part Time', '', '', 'Monday,Tuesday,Wednesday,Thursday,Friday', '12:56:00', '12:56:00', 'Bachelor\'s Degree', 'treasurer and forensic accountant', 0, 0, '2021-01-05 12:56:46', '2021-01-05 12:56:46'),
(162, 'JB1609847821', 'accountant', 'abc nigeria limited', 'ABC Nigeria Limited', 'Part Time', '', '', 'Monday,Tuesday,Wednesday,Thursday,Friday', '12:56:00', '12:56:00', 'Bachelor\'s Degree', 'treasurer and forensic accountant', 0, 0, '2021-01-05 12:57:01', '2021-01-05 12:57:01'),
(163, 'JB1609847858', 'accountant', 'abc nigeria limited', 'ABC Nigeria Limited', 'Part Time', '', '', 'Monday,Tuesday,Wednesday,Thursday,Friday', '12:56:00', '12:56:00', 'Bachelor\'s Degree', 'treasurer and forensic accountant', 0, 0, '2021-01-05 12:57:38', '2021-01-05 12:57:38'),
(164, 'JB1610009650', 'accountant', 'swdwd', 'swdwd', 'Full Time', '', '', 'Monday,Tuesday', '21:53:00', '21:53:00', '', 'hhyh', 0, 0, '2021-01-07 09:54:10', '2021-01-07 09:54:10');

-- --------------------------------------------------------

--
-- Table structure for table `tjob_invites`
--

CREATE TABLE `tjob_invites` (
  `frecno` double UNSIGNED NOT NULL,
  `fjob_id` varchar(30) NOT NULL,
  `fjob_title` varchar(100) NOT NULL,
  `femployer_id` varchar(30) NOT NULL,
  `femployer_name` varchar(60) NOT NULL,
  `fapplicants_id` varchar(255) NOT NULL,
  `fprocess_level` int(11) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tjob_invites`
--

INSERT INTO `tjob_invites` (`frecno`, `fjob_id`, `fjob_title`, `femployer_id`, `femployer_name`, `fapplicants_id`, `fprocess_level`, `created_at`, `updated_at`) VALUES
(6, 'JB1604247086', 'accountant', 'wsw', 'wsw', 'fvf.fvf, wws.wws', 1, '2020-11-02 09:39:46', '2020-11-02 10:23:58'),
(0, 'JB1605520616', 'accountant', '', '', 'demilade.oyeyele,gbemileke.daniel,godson.ihemere', 1, '2020-11-16 11:01:20', '2020-11-16 11:01:20'),
(0, 'JB1605520616', 'accountant', '', '', 'demilade.oyeyele,gbemileke.daniel,godson.ihemere', 1, '2020-11-16 11:01:46', '2020-11-16 11:01:46'),
(0, 'JB1605520950', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-11-16 11:02:36', '2020-11-16 11:02:36'),
(0, 'JB1605521406', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-11-16 11:10:29', '2020-11-16 11:10:29'),
(0, 'JB1605522302', 'accountant', 'yftaftsraf', 'yftaftsraf', 'gbemileke.daniel -godson.ihemere', 1, '2020-11-16 11:25:07', '2020-11-16 11:25:07'),
(0, 'JB1605522321', 'accountant', 'yftaftsraf', 'yftaftsraf', 'bunto.ronny', 1, '2020-11-16 11:25:48', '2020-11-16 11:25:48'),
(0, 'JB1606921071', 'accountant', '', '', 'bunto.ronny -demilade.oyeyele', 1, '2020-12-02 15:58:00', '2020-12-02 15:58:00'),
(0, 'JB1606924316', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-12-02 16:52:03', '2020-12-02 16:52:03'),
(6, 'JB1604247086', 'accountant', 'wsw', 'wsw', 'fvf.fvf, wws.wws', 1, '2020-11-02 09:39:46', '2020-11-02 10:23:58'),
(0, 'JB1605520616', 'accountant', '', '', 'demilade.oyeyele,gbemileke.daniel,godson.ihemere', 1, '2020-11-16 11:01:20', '2020-11-16 11:01:20'),
(0, 'JB1605520616', 'accountant', '', '', 'demilade.oyeyele,gbemileke.daniel,godson.ihemere', 1, '2020-11-16 11:01:46', '2020-11-16 11:01:46'),
(0, 'JB1605520950', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-11-16 11:02:36', '2020-11-16 11:02:36'),
(0, 'JB1605521406', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-11-16 11:10:29', '2020-11-16 11:10:29'),
(0, 'JB1605522302', 'accountant', 'yftaftsraf', 'yftaftsraf', 'gbemileke.daniel -godson.ihemere', 1, '2020-11-16 11:25:07', '2020-11-16 11:25:07'),
(0, 'JB1605522321', 'accountant', 'yftaftsraf', 'yftaftsraf', 'bunto.ronny', 1, '2020-11-16 11:25:48', '2020-11-16 11:25:48'),
(0, 'JB1606920579', 'accountant', '', '', 'demilade.oyeyele -gbemileke.daniel -godson.ihemere -godson.ihemere.52 -godson.ihemere.60', 1, '2020-12-02 15:49:48', '2020-12-02 15:49:48'),
(0, 'JB1606920804', 'accountant', '', '', 'wswsw.sws', 1, '2020-12-02 15:53:28', '2020-12-02 15:53:28'),
(0, 'JB1606923146', 'accountant', '', '', 'demilade.oyeyele,edede.dededed,gbemileke.daniel,godson.ihemere', 1, '2020-12-02 16:32:34', '2020-12-02 16:32:34'),
(0, 'JB1606923210', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele,edede.dededed', 1, '2020-12-02 16:33:37', '2020-12-02 16:33:37'),
(0, 'JB1606923341', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele,edede.dededed,gbemileke.daniel', 1, '2020-12-02 16:35:51', '2020-12-02 16:35:51'),
(0, 'JB1606926525', 'accountant', 'qsqsq', 'qsqsq', 'godson.ihemere.52 -godson.ihemere.60 -wswsw.sws', 1, '2020-12-02 17:28:52', '2020-12-02 17:28:52'),
(0, 'JB1606926664', 'accountant', 'qsqsq', 'qsqsq', 'demilade.oyeyele -edede.dededed -gbemileke.daniel', 1, '2020-12-02 17:31:09', '2020-12-02 17:31:09'),
(0, 'JB1606927496', 'accountant', 'qsqsq', 'qsqsq', 'gbemileke.daniel -godson.ihemere -godson.ihemere.52', 1, '2020-12-02 17:45:02', '2020-12-02 17:45:02'),
(6, 'JB1604247086', 'accountant', 'wsw', 'wsw', 'fvf.fvf, wws.wws', 1, '2020-11-02 09:39:46', '2020-11-02 10:23:58'),
(0, 'JB1605520616', 'accountant', '', '', 'demilade.oyeyele,gbemileke.daniel,godson.ihemere', 1, '2020-11-16 11:01:20', '2020-11-16 11:01:20'),
(0, 'JB1605520616', 'accountant', '', '', 'demilade.oyeyele,gbemileke.daniel,godson.ihemere', 1, '2020-11-16 11:01:46', '2020-11-16 11:01:46'),
(0, 'JB1605520950', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-11-16 11:02:36', '2020-11-16 11:02:36'),
(0, 'JB1605521406', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-11-16 11:10:29', '2020-11-16 11:10:29'),
(0, 'JB1605522302', 'accountant', 'yftaftsraf', 'yftaftsraf', 'gbemileke.daniel -godson.ihemere', 1, '2020-11-16 11:25:07', '2020-11-16 11:25:07'),
(0, 'JB1605522321', 'accountant', 'yftaftsraf', 'yftaftsraf', 'bunto.ronny', 1, '2020-11-16 11:25:48', '2020-11-16 11:25:48'),
(0, 'JB1606921071', 'accountant', '', '', 'bunto.ronny -demilade.oyeyele', 1, '2020-12-02 15:58:00', '2020-12-02 15:58:00'),
(0, 'JB1606924316', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-12-02 16:52:03', '2020-12-02 16:52:03'),
(6, 'JB1604247086', 'accountant', 'wsw', 'wsw', 'fvf.fvf, wws.wws', 1, '2020-11-02 09:39:46', '2020-11-02 10:23:58'),
(0, 'JB1605520616', 'accountant', '', '', 'demilade.oyeyele,gbemileke.daniel,godson.ihemere', 1, '2020-11-16 11:01:20', '2020-11-16 11:01:20'),
(0, 'JB1605520616', 'accountant', '', '', 'demilade.oyeyele,gbemileke.daniel,godson.ihemere', 1, '2020-11-16 11:01:46', '2020-11-16 11:01:46'),
(0, 'JB1605520950', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-11-16 11:02:36', '2020-11-16 11:02:36'),
(0, 'JB1605521406', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele', 1, '2020-11-16 11:10:29', '2020-11-16 11:10:29'),
(0, 'JB1605522302', 'accountant', 'yftaftsraf', 'yftaftsraf', 'gbemileke.daniel -godson.ihemere', 1, '2020-11-16 11:25:07', '2020-11-16 11:25:07'),
(0, 'JB1605522321', 'accountant', 'yftaftsraf', 'yftaftsraf', 'bunto.ronny', 1, '2020-11-16 11:25:48', '2020-11-16 11:25:48'),
(0, 'JB1606920579', 'accountant', '', '', 'demilade.oyeyele -gbemileke.daniel -godson.ihemere -godson.ihemere.52 -godson.ihemere.60', 1, '2020-12-02 15:49:48', '2020-12-02 15:49:48'),
(0, 'JB1606920804', 'accountant', '', '', 'wswsw.sws', 1, '2020-12-02 15:53:28', '2020-12-02 15:53:28'),
(0, 'JB1606923146', 'accountant', '', '', 'demilade.oyeyele,edede.dededed,gbemileke.daniel,godson.ihemere', 1, '2020-12-02 16:32:34', '2020-12-02 16:32:34'),
(0, 'JB1606923210', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele,edede.dededed', 1, '2020-12-02 16:33:37', '2020-12-02 16:33:37'),
(0, 'JB1606923341', 'accountant', '', '', 'bunto.ronny,demilade.oyeyele,edede.dededed,gbemileke.daniel', 1, '2020-12-02 16:35:51', '2020-12-02 16:35:51'),
(0, 'JB1606926525', 'accountant', 'qsqsq', 'qsqsq', 'godson.ihemere.52 -godson.ihemere.60 -wswsw.sws', 1, '2020-12-02 17:28:52', '2020-12-02 17:28:52'),
(0, 'JB1606926664', 'accountant', 'qsqsq', 'qsqsq', 'demilade.oyeyele -edede.dededed -gbemileke.daniel', 1, '2020-12-02 17:31:09', '2020-12-02 17:31:09'),
(0, 'JB1606927496', 'accountant', 'qsqsq', 'qsqsq', 'gbemileke.daniel -godson.ihemere -godson.ihemere.52', 1, '2020-12-02 17:45:02', '2020-12-02 17:45:02');

-- --------------------------------------------------------

--
-- Table structure for table `tjob_invite_messages`
--

CREATE TABLE `tjob_invite_messages` (
  `frecno` double UNSIGNED NOT NULL,
  `fjob_id` varchar(30) NOT NULL,
  `fjob_title` varchar(150) NOT NULL,
  `fapplicant_id` varchar(30) NOT NULL,
  `femployer_id` varchar(30) NOT NULL,
  `fapplicant_name` varchar(80) NOT NULL,
  `femployer_name` varchar(80) NOT NULL,
  `fsubject` varchar(100) NOT NULL,
  `fmessage` text NOT NULL,
  `fsender_id` varchar(80) NOT NULL,
  `freceiver_id` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tjob_invite_messages`
--

INSERT INTO `tjob_invite_messages` (`frecno`, `fjob_id`, `fjob_title`, `fapplicant_id`, `femployer_id`, `fapplicant_name`, `femployer_name`, `fsubject`, `fmessage`, `fsender_id`, `freceiver_id`, `created_at`, `updated_at`) VALUES
(1, 'JB1604247086', 'Production Intern', 'wsw.wsws', 'guinness', 'John Westmann', 'Guinness', 'Application Recieved Confirmation', 'eee', 'wsw.wswdfef', 'wsw', '2020-10-08 19:12:40', '2020-11-03 11:06:17'),
(2, 'xsx', 'Accountant', 'john.westmann', 'cadbury', 'John Westmann', 'Guinness', 'Phone Interview', 'xsxs', 'cadbury', 'wsw.wsw', '2020-10-08 19:12:40', '2020-11-02 17:43:20'),
(4, 'JB1604247086', 'Production Intern', 'fvf.fvf', 'wsw', 'John Westmann', 'Guinness', 'aa', 'aaa', 'wsw', 'fvf.fvf', '2020-10-14 22:47:01', '2020-11-03 19:08:44'),
(5, 'JB1604247086', 'Production Intern', 'fvf.fvf', 'wsw', 'John Westmann', 'Guinness', 'aa', 'aaa', 'fvf.fvf', 'wsw', '2020-10-14 22:49:50', '2020-11-03 19:08:48'),
(6, 'JB1604247086', 'Production Intern', 'wsw.wswdfef', 'wsw', 'John Westmann', 'Guinness', 'aasdd', 'aaadd', 'wsw', 'wsw.wswdfef', '2020-10-14 22:50:29', '2020-11-03 13:12:48'),
(7, 'xsx', 'Accountant', 'john.westmann', 'cadbury', '', '', 'aaa', 'swswwsw', 'john.westmann', 'cadbury', '2020-10-18 12:38:18', '2020-10-18 12:38:18'),
(8, 'xsx', 'Accountant', 'john.westmann', 'cadbury', '', '', 'New', 'deded', 'john.westmann', 'cadbury', '2020-10-18 12:43:18', '2020-10-18 12:43:18'),
(9, 'xsx', 'Accountant', 'john.westmann', 'cadbury', '', '', 'New', 'deded', 'john.westmann', 'cadbury', '2020-10-18 12:43:18', '2020-10-18 12:43:18'),
(10, 'xsx', 'Accountant', 'john.westmann', 'cadbury', '', '', 'aqa', 'aqaq', 'john.westmann', 'cadbury', '2020-10-18 12:52:51', '2020-10-18 12:52:51'),
(11, 'JB1604247086', 'Production Intern', 'wsw.wswdfef', 'wsw', '', '', 'tgtgth', 'hthththth', 'wsw', 'wsw.wswdfef', '2020-11-03 14:57:35', '2020-11-03 14:57:35'),
(12, 'JB1604247086', 'Production Intern', 'wsw.wswdfef', 'wsw', '', '', 'sswsws', 'swsws', 'wsw', 'wsw.wswdfef', '2020-11-03 16:14:12', '2020-11-03 16:14:12'),
(13, 'JB1604247086', 'Production Intern', 'wsw.wswdfef', 'wsw', ' ', 'wsw', 'swsw', 'swsw', 'wsw', 'wsw.wswdfef', '2020-11-03 16:15:30', '2020-11-03 16:15:30'),
(14, 'JB1604247086', 'Production Intern', 'fvf.fvf', 'wsw', '', '', 'swsw', 'swsw', 'fvf.fvf', 'wsw', '2020-11-03 19:15:05', '2020-11-03 19:15:05'),
(15, 'JB1604247086', 'Production Intern', 'fvf.fvf', 'wsw', '', '', 'qaqa', 'qaqa', 'fvf.fvf', 'wsw', '2020-11-03 19:18:07', '2020-11-03 19:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `tlanguages`
--

CREATE TABLE `tlanguages` (
  `frecno` double NOT NULL,
  `fname` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tlanguages`
--

INSERT INTO `tlanguages` (`frecno`, `fname`, `created_at`, `updated_at`) VALUES
(1, 'English', '2020-11-09 17:51:40', '2020-11-09 17:51:40'),
(2, 'Yoruba', '2020-11-09 17:51:40', '2020-11-09 17:51:40'),
(3, 'Hausa', '2020-12-10 10:45:21', '2020-12-10 10:45:21'),
(4, 'Igbo', '2020-12-10 10:45:21', '2020-12-10 10:45:21'),
(5, 'Pidgin English\r\n', '2020-12-10 11:40:50', '2020-12-10 11:40:50'),
(6, 'French', '2020-12-10 11:40:50', '2020-12-10 11:40:50'),
(7, 'Tiv\r\n', '2020-12-10 11:41:23', '2020-12-10 11:41:23'),
(8, 'Fulfulde', '2020-12-10 11:41:23', '2020-12-10 11:41:23'),
(9, 'Efik-Ibibio\r\n', '2020-12-10 11:42:32', '2020-12-10 11:42:32'),
(10, 'Ijaw-Izon', '2020-12-10 11:42:32', '2020-12-10 11:42:32'),
(11, 'Urhobo', '2020-12-10 11:43:05', '2020-12-10 11:43:05'),
(12, 'Sign Language (English)', '2020-12-10 11:43:05', '2020-12-10 11:43:05'),
(13, 'Sign Language (Hausa)', '2020-12-10 11:43:30', '2020-12-10 11:43:30'),
(14, 'Kanuri', '2020-12-10 11:43:30', '2020-12-10 11:43:30'),
(15, 'Edo', '2020-12-10 11:43:50', '2020-12-10 11:43:50'),
(16, 'Igala', '2020-12-10 11:43:50', '2020-12-10 11:43:50'),
(17, 'Nupe-Ebira', '2020-12-10 11:44:12', '2020-12-10 11:44:12'),
(18, 'Birom', '2020-12-10 11:44:12', '2020-12-10 11:44:12'),
(19, 'Idoma', '2020-12-10 11:44:43', '2020-12-10 11:44:43'),
(20, 'Itsekiri', '2020-12-10 11:44:43', '2020-12-10 11:44:43'),
(21, 'British English', '2020-12-10 11:45:10', '2020-12-10 11:45:10'),
(22, 'Spanish', '2020-12-10 11:45:10', '2020-12-10 11:45:10'),
(23, 'Mandarin', '2020-12-10 11:45:24', '2020-12-10 11:45:24');

-- --------------------------------------------------------

--
-- Table structure for table `tmessages`
--

CREATE TABLE `tmessages` (
  `frecno` double NOT NULL,
  `fsender_id` varchar(80) NOT NULL,
  `fsender_name` varchar(100) NOT NULL,
  `freceiver_id` varchar(80) NOT NULL,
  `freceiver_name` varchar(100) NOT NULL,
  `fsubject` varchar(150) NOT NULL,
  `fparent_message_id` varchar(30) NOT NULL,
  `fmessage_id` varchar(39) NOT NULL,
  `fcontent` text NOT NULL,
  `fread` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmessages`
--

INSERT INTO `tmessages` (`frecno`, `fsender_id`, `fsender_name`, `freceiver_id`, `freceiver_name`, `fsubject`, `fparent_message_id`, `fmessage_id`, `fcontent`, `fread`, `created_at`, `updated_at`) VALUES
(2, 'godson.ihemere.28', 'John westmann', 'john.westmann', 'Godson Ihemere', 'New Moon', '0', 'mg1603128349', 'swsw', 0, '2020-10-19 18:25:49', '2020-10-19 19:02:38'),
(3, 'godson.ihemere.28', 'John westmann', 'godson.ihemere.28', 'Godson Ihemere', 'Beyonce', '0', 'mg1603129774', 'xxx', 0, '2020-10-19 18:49:34', '2020-10-19 19:02:44'),
(4, 'john.westmann', 'John westmann', 'godd.ihem', 'Godd Ihem', 'ssw', '0', 'MG1603130637', 'swsw', 0, '2020-10-19 19:03:57', '2020-10-19 19:03:57'),
(5, 'john.westmann', 'John westmann', 'godson.ihemere.28', 'Godson Ihemere', 'sqsqs', '0', 'MG1603130954', 'qsqsqsq', 0, '2020-10-19 19:09:14', '2020-10-19 19:09:14'),
(6, 'john.westmann', 'John westmann', 'godson.ihemere.28', 'Godson Ihemere', 'sxsx', '0', 'MG1603130991', 'xsxs', 0, '2020-10-19 19:09:51', '2020-10-19 19:09:51'),
(7, 'godson.ihemere.28', 'John westmann', 'john.westmann', 'John westmann', 'New Moon', 'mg1603128349', 'MG1603141380', 'deede', 0, '2020-10-19 22:03:00', '2020-10-19 22:03:00'),
(8, 'john.westmann', 'John westmann', 'wsw', 'John westmann', 'sxsx', 'MG1603130991', 'MG1603750694', 'hh', 0, '2020-10-26 23:18:14', '2020-11-02 13:15:10'),
(9, 'john.westmann', 'John westmann', 'john.westmann', 'John westmann', 'sxsx', 'MG1603130991', 'MG1603751221', 'hh', 0, '2020-10-26 23:27:01', '2020-10-26 23:27:01'),
(10, 'john.westmann', 'John westmann', 'john.westmann', 'John westmann', 'sxsx', 'MG1603130991', 'MG1603751389', 'sss', 0, '2020-10-26 23:29:49', '2020-10-26 23:29:49'),
(11, 'wsw', 'wsw', 'godson.ihemere.28', 'Godson Ihemere', 'sxsxs', '0', 'MG1604322282', 'sxsxsxsxs', 0, '2020-11-02 14:04:42', '2020-11-02 14:04:42'),
(12, 'wsw', 'wsw', 'godson.ihemere.28', 'Godson Ihemere', 'sxsxs', '0', 'MG1604322361', 'sxsxsxsxs', 0, '2020-11-02 14:06:01', '2020-11-02 14:06:01'),
(13, 'wsw', 'wsw', 'fvf.fvf', 'fvf fvf', '2s2s2s', '0', 'MG1604322404', 'sssssssssw', 0, '2020-11-02 14:06:44', '2020-11-02 14:06:44'),
(14, 'wsw', 'wsw', '', ' ', 'wsw', '0', 'MG1604322476', 'wswsws', 0, '2020-11-02 14:07:56', '2020-11-02 14:07:56'),
(15, 'test', 'Test', 'godson.ihemere', 'Godson Ihemere', 'ffrfr', '0', 'MG1605520005', 'frfrf', 0, '2020-11-16 10:46:45', '2020-11-16 10:46:45'),
(16, 'yftaftsraf', 'yftaftsraf', 'godson.ihemere', 'Godson Ihemere', 'sxsx', '0', 'MG1605522264', 'sxsx', 0, '2020-11-16 11:24:24', '2020-11-16 11:24:24'),
(17, 'w2w2w', 'w2w2w', 'godson.ihemere', 'Godson Ihemere', 'swswsw', '0', 'MG1606924282', 'swsws', 0, '2020-12-02 16:51:22', '2020-12-02 16:51:22'),
(18, 'wswswsw', 'wswswsw', 'wsws.swsw', 'wsws swsw', 'w2w2w', '0', 'MG1606927455', 'w2w2w2', 0, '2020-12-02 17:44:15', '2020-12-02 17:44:15'),
(19, 'godson.ihemere.55', 'Godson Ihemere', 'demilade.oyeyele', 'Demilade Oyeyele', 's', '0', 'MG1606997276', 'gbb', 0, '2020-12-03 13:07:56', '2020-12-03 13:07:56'),
(20, 'godson.ihemere.55', 'Godson Ihemere', 'dada.michael', 'Dada Michael', 'tgtgtg', '0', 'MG1606997327', 'gtgtgt', 0, '2020-12-03 13:08:47', '2020-12-03 13:08:47'),
(21, 'godson.ihemere.55', 'Godson Ihemere', '', ' ', 'tgtgtg', '0', 'MG1606997634', 'gtgtgt', 0, '2020-12-03 13:13:54', '2020-12-03 13:13:54'),
(22, 'godson.ihemere.55', 'Godson Ihemere', 'dada.michael', 'Dada Michael', 'dde', '0', 'MG1606997670', 'dededd', 0, '2020-12-03 13:14:30', '2020-12-03 13:14:30'),
(23, 'dede', 'dede', 'demilade.oyeyele', 'Demilade Oyeyele', 'swsw', '0', 'MG1607003768', 'swsw', 0, '2020-12-03 14:56:08', '2020-12-03 14:56:08'),
(24, 'dede', 'dede', 'demilade.oyeyele', 'Demilade Oyeyele', 'edfefe', '0', 'MG1607004483', 'efefefef', 0, '2020-12-03 15:08:03', '2020-12-03 15:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `tpass_word_resets`
--

CREATE TABLE `tpass_word_resets` (
  `frecno` double UNSIGNED NOT NULL,
  `femail` varchar(150) NOT NULL,
  `ftoken` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tpersonality_traits`
--

CREATE TABLE `tpersonality_traits` (
  `frecno` double UNSIGNED NOT NULL,
  `fapplicant_id` varchar(60) NOT NULL,
  `fgeneral_impression` int(11) NOT NULL,
  `fhonesty_integrity` int(11) NOT NULL,
  `fproactive_dedicated` int(11) NOT NULL,
  `fadaptable` int(11) NOT NULL,
  `fteam_oriented` int(11) NOT NULL,
  `frespectable` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tprofessions`
--

CREATE TABLE `tprofessions` (
  `frecno` double NOT NULL,
  `fname` varchar(100) NOT NULL,
  `fparent_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tprofessions`
--

INSERT INTO `tprofessions` (`frecno`, `fname`, `fparent_id`, `created_at`, `updated_at`) VALUES
(1, 'Accountants', 0, '2021-01-03 17:12:15', '2021-01-08 10:48:31'),
(2, 'Actors/Actresses', 0, '2021-01-03 17:12:15', '2021-01-08 10:48:41'),
(3, 'Actuaries', 0, '2021-01-03 17:12:15', '2021-01-08 10:48:49'),
(4, 'Acupuncturists', 0, '2021-01-03 17:12:15', '2021-01-08 10:48:52'),
(5, 'Adjustment Clerks', 0, '2021-01-03 17:12:15', '2021-01-08 10:48:56'),
(6, 'Administrative Services Managers', 0, '2021-01-03 17:12:15', '2021-01-08 10:48:57'),
(7, 'Administrative Workers', 0, '2021-01-03 17:12:15', '2021-01-08 10:49:04'),
(8, 'Advertising and Promotions', 0, '2021-01-03 17:12:15', '2021-01-03 17:12:15'),
(9, 'Agents', 0, '2021-01-03 17:12:15', '2021-01-03 17:12:15'),
(10, 'Agriculture', 0, '2021-01-03 17:12:15', '2021-01-03 17:12:15'),
(11, 'Air Travel', 0, '2021-01-03 17:17:03', '2021-01-03 17:17:03'),
(12, 'Amusement and Recreation Officers', 0, '2021-01-03 17:17:03', '2021-01-08 10:49:10'),
(13, 'Animal Experts', 0, '2021-01-03 17:17:03', '2021-01-08 10:49:15'),
(14, 'Anthropologists and Archaeologists', 0, '2021-01-03 17:17:03', '2021-01-03 17:17:03'),
(15, 'Appraisers and Assessors ', 0, '2021-01-03 17:17:03', '2021-01-03 17:17:03'),
(16, 'Arbitrators and Mediators ', 0, '2021-01-03 17:17:03', '2021-01-03 17:17:03'),
(17, 'Architects', 0, '2021-01-03 17:17:03', '2021-01-08 10:49:19'),
(18, 'Audio & Video Equipment Technicians', 0, '2021-01-03 17:17:03', '2021-01-08 10:49:35'),
(19, 'Auditors', 0, '2021-01-03 17:17:03', '2021-01-08 10:49:23'),
(20, 'Aviation Workers', 0, '2021-01-03 17:17:03', '2021-01-08 10:49:26'),
(21, 'Bakers', 0, '2021-01-03 17:27:24', '2021-01-08 10:49:39'),
(22, 'Barbers', 0, '2021-01-03 17:27:24', '2021-01-08 10:49:44'),
(23, 'Bartenders', 0, '2021-01-03 17:27:24', '2021-01-08 10:49:47'),
(24, 'Bench Workers', 0, '2021-01-03 17:27:24', '2021-01-08 10:49:49'),
(25, 'Two-Wheeler Repairers', 0, '2021-01-03 17:27:24', '2021-01-08 10:49:53'),
(26, 'Binders, Bindery Machinery & Binding Technicians', 0, '2021-01-03 17:27:24', '2021-01-08 10:50:00'),
(27, 'Broadcasters & Broadcasting Technicians', 0, '2021-01-03 17:27:24', '2021-01-03 18:31:26'),
(28, 'Butchers & Meat Cutters ', 0, '2021-01-03 17:27:24', '2021-01-03 18:31:26'),
(29, 'Carpenters', 0, '2021-01-03 17:27:24', '2021-01-08 10:50:05'),
(30, 'Camera Operators & Photographic Equipment Technicians ', 0, '2021-01-03 17:27:24', '2021-01-03 18:31:26'),
(31, 'Cartoonists & Animators ', 0, '2021-01-03 18:38:24', '2021-01-03 18:38:24'),
(32, 'Caterers', 0, '2021-01-03 18:39:11', '2021-01-08 10:50:11'),
(33, 'Ceiling Installers', 0, '2021-01-03 18:39:49', '2021-01-08 10:50:16'),
(34, 'Chefs & Cooks ', 0, '2021-01-03 18:51:51', '2021-01-03 18:53:04'),
(35, 'Chief Executives & Operations Managers', 0, '2021-01-03 18:51:51', '2021-01-03 18:53:04'),
(36, 'Childcare Workers', 0, '2021-01-03 18:51:51', '2021-01-08 10:50:19'),
(37, 'Choreographers & Dancers ', 0, '2021-01-03 18:51:51', '2021-01-03 18:53:04'),
(38, 'Cleaners & Domestic Workers', 0, '2021-01-03 18:51:51', '2021-01-03 18:53:04'),
(39, 'Coaches, Trainers, Agents & Job/Talent Scouts ', 0, '2021-01-03 18:51:51', '2021-01-03 18:53:04'),
(40, 'Computer & IT Experts', 0, '2021-01-03 18:51:51', '2021-01-03 18:53:04'),
(41, 'Construction Workers', 0, '2021-01-03 19:04:59', '2021-01-08 10:50:22'),
(42, 'Cooks', 0, '2021-01-03 19:04:59', '2021-01-08 10:50:25'),
(43, 'Copy Writers', 0, '2021-01-03 19:04:59', '2021-01-08 10:50:27'),
(44, 'Coroners', 0, '2021-01-03 19:04:59', '2021-01-08 10:50:32'),
(45, 'Correctional Officers & Jailers', 0, '2021-01-03 19:04:59', '2021-01-03 19:04:59'),
(46, 'Counsellors', 0, '2021-01-03 19:04:59', '2021-01-08 10:50:35'),
(47, 'Couriers and Messengers', 0, '2021-01-03 19:04:59', '2021-01-03 19:04:59'),
(48, 'Credit Analysts', 0, '2021-01-03 19:04:59', '2021-01-08 10:50:37'),
(49, 'Creative Writers', 0, '2021-01-03 19:04:59', '2021-01-08 10:50:40'),
(50, 'Critical Care Nurses', 0, '2021-01-03 19:04:59', '2021-01-03 19:04:59'),
(51, 'Craft Artists', 0, '2021-01-03 19:09:28', '2021-01-03 19:09:28'),
(52, 'Criminal Investigators and Special Agents ', 0, '2021-01-03 19:09:28', '2021-01-03 19:09:28'),
(53, 'Curators', 0, '2021-01-03 19:09:28', '2021-01-03 19:09:28'),
(54, 'Customer Service Representative ', 0, '2021-01-03 19:09:28', '2021-01-03 19:09:28'),
(55, 'Dancers', 0, '2021-01-03 19:09:28', '2021-01-08 10:50:49'),
(56, 'Database Administrators', 0, '2021-01-03 19:09:28', '2021-01-08 10:50:52'),
(57, 'Dentists', 0, '2021-01-03 19:09:28', '2021-01-08 10:50:54'),
(58, 'Designers', 0, '2021-01-03 19:09:28', '2021-01-08 10:51:02'),
(59, 'Dieticians and Nutritionists    ', 0, '2021-01-03 19:09:28', '2021-01-03 19:09:28'),
(60, 'Directors – Stage, Motion Pictures, Television and Radio', 0, '2021-01-03 19:09:28', '2021-01-03 19:09:28'),
(61, 'Directors: Religious Activities and Education ', 0, '2021-01-03 19:22:16', '2021-01-03 19:22:16'),
(62, 'Dishwashers', 0, '2021-01-03 19:22:16', '2021-01-08 10:51:04'),
(63, 'Drafters', 0, '2021-01-03 19:22:16', '2021-01-08 10:51:09'),
(64, 'Earth Drillers', 0, '2021-01-03 19:22:16', '2021-01-03 19:22:16'),
(65, 'Economists', 0, '2021-01-03 19:22:16', '2021-01-08 10:51:11'),
(66, 'Editors', 0, '2021-01-03 19:22:16', '2021-01-08 10:51:12'),
(67, 'Education Administrators', 0, '2021-01-03 19:22:16', '2021-01-08 10:51:17'),
(68, 'Education, Training, and Library Workers', 0, '2021-01-03 19:22:16', '2021-01-03 19:22:16'),
(69, 'Educational Psychologists', 0, '2021-01-03 19:22:16', '2021-01-08 10:51:19'),
(70, 'Electricians', 0, '2021-01-03 19:22:16', '2021-01-08 10:51:23'),
(71, 'Elementary School Teachers', 0, '2021-01-03 19:29:18', '2021-01-08 10:51:25'),
(72, 'Embalmers', 0, '2021-01-03 19:29:18', '2021-01-08 10:51:29'),
(73, 'Emergency Medical Technicians and Paramedics', 0, '2021-01-03 19:29:18', '2021-01-03 19:29:18'),
(74, 'Employment, Recruitment, and Placement Specialists', 0, '2021-01-03 19:29:18', '2021-01-08 10:51:35'),
(75, 'Engine and Other Machine Assemblers', 0, '2021-01-03 19:29:18', '2021-01-08 10:51:38'),
(76, 'Engineers', 0, '2021-01-03 19:29:18', '2021-01-08 10:51:45'),
(77, 'Engravers', 0, '2021-01-03 19:29:18', '2021-01-08 10:51:48'),
(78, 'Entertainers and Performers', 0, '2021-01-03 19:29:18', '2021-01-03 19:29:18'),
(79, 'Epidemiologists', 0, '2021-01-03 19:29:18', '2021-01-08 10:51:51'),
(80, 'Farmers And Ranchers, Farm, Ranch, And Other Agricultural Managers', 0, '2021-01-03 19:29:18', '2021-01-03 19:29:18'),
(81, 'Fashion Designers', 0, '2021-01-03 19:45:55', '2021-01-08 10:51:53'),
(82, 'File Clerks', 0, '2021-01-03 19:45:55', '2021-01-08 10:51:56'),
(83, 'Film and Video Editors', 0, '2021-01-03 19:45:55', '2021-01-03 19:45:55'),
(84, 'Financial Analysts', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:00'),
(85, 'Financial Managers', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:02'),
(86, 'Finance Workers', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:05'),
(87, 'Fine Artists, Including Painters, Sculptors, And Illustrators', 0, '2021-01-03 19:45:55', '2021-01-03 19:45:55'),
(88, 'Fire Safety and Protection Officials', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:07'),
(89, 'Fitness and Wellness Coordinators', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:09'),
(90, 'Food Scientists and Technologists', 0, '2021-01-03 19:45:55', '2021-01-03 19:45:55'),
(91, 'Foresters', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:11'),
(92, 'Freight and Cargo Inspectors', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:13'),
(93, 'Funeral Attendants', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:19'),
(94, 'Gas Plant Operators', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:21'),
(95, 'Geneticists', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:23'),
(96, 'Geologists', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:24'),
(97, 'Glass Molders', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:28'),
(98, 'Graphic Designers', 0, '2021-01-03 19:45:55', '2021-01-03 19:45:55'),
(99, 'Hairdressers', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:30'),
(100, 'Health Educators', 0, '2021-01-03 19:45:55', '2021-01-08 10:52:34'),
(101, 'Health Technicians and Technologists ', 0, '2021-01-06 14:17:18', '2021-01-06 14:17:18'),
(103, 'Health Care Practitioners', 0, '2021-01-06 14:17:18', '2021-01-06 14:17:18'),
(104, 'Heavy Equipment Operators', 0, '2021-01-06 14:17:18', '2021-01-08 10:53:56'),
(105, 'Highway Maintenance Workers', 0, '2021-01-06 14:17:18', '2021-01-08 10:54:00'),
(106, 'Historians', 0, '2021-01-06 14:17:18', '2021-01-08 10:54:02'),
(107, 'Housekeepers', 0, '2021-01-06 14:17:18', '2021-01-08 10:54:04'),
(108, 'Hotel Workers', 0, '2021-01-06 14:17:18', '2021-01-08 10:54:05'),
(109, 'Immigration Inspectors', 0, '2021-01-06 14:17:18', '2021-01-08 10:54:07'),
(110, 'Information Technology Workers', 0, '2021-01-06 14:17:18', '2021-01-08 10:54:12'),
(111, 'Installation Maintenance and Repair Workers', 0, '2021-01-06 14:22:24', '2021-01-08 10:54:16'),
(112, 'Insurance', 0, '2021-01-06 14:22:24', '2021-01-06 14:22:24'),
(113, 'Interior Designers', 0, '2021-01-06 14:22:24', '2021-01-08 10:54:20'),
(114, 'Interpreters and Translators ', 0, '2021-01-06 14:22:24', '2021-01-06 14:22:24'),
(115, 'Janitors and Cleaners', 0, '2021-01-06 14:22:24', '2021-01-06 14:22:24'),
(116, 'Laborers', 0, '2021-01-06 14:22:24', '2021-01-08 10:54:27'),
(117, 'Laundry and Dry-Cleaning Workers', 0, '2021-01-06 14:22:24', '2021-01-08 10:54:29'),
(118, 'Lawyers', 0, '2021-01-06 14:22:24', '2021-01-08 10:54:30'),
(119, 'Legal Support Workers', 0, '2021-01-06 14:22:24', '2021-01-08 10:54:33'),
(120, 'Librarians', 0, '2021-01-06 14:22:24', '2021-01-08 10:54:35'),
(121, 'Locomotive (train) Workers', 0, '2021-01-06 14:29:15', '2021-01-06 14:29:15'),
(122, 'Machinists', 0, '2021-01-06 14:29:15', '2021-01-08 10:54:39'),
(123, 'Machine Operators', 0, '2021-01-06 14:29:15', '2021-01-08 10:54:41'),
(124, 'Machinery Maintenance Workers', 0, '2021-01-06 14:29:15', '2021-01-08 10:54:44'),
(125, 'Makeup Artists, Theatre and Performance', 0, '2021-01-06 14:29:15', '2021-01-06 14:29:15'),
(126, 'Manager', 0, '2021-01-06 14:29:15', '2021-01-06 14:29:15'),
(127, 'Marine Workers', 0, '2021-01-06 14:29:15', '2021-01-08 10:54:49'),
(128, 'Manufacturing Production Workers', 0, '2021-01-06 14:29:15', '2021-01-08 10:54:53'),
(129, 'Market Researchers and Analysts', 0, '2021-01-06 14:29:15', '2021-01-06 14:29:15'),
(130, 'Mathematical Science Occupations', 0, '2021-01-06 14:29:15', '2021-01-08 10:55:00'),
(131, 'Media and Communication Equipment Workers', 0, '2021-01-06 14:44:22', '2021-01-08 10:55:02'),
(132, 'Media and Communication Workers', 0, '2021-01-06 14:44:22', '2021-01-08 10:55:05'),
(133, 'Medical and Clinical Laboratory Technologists/Technicians', 0, '2021-01-06 14:44:22', '2021-01-06 14:44:22'),
(134, 'Meeting and Convention Planners', 0, '2021-01-06 14:44:22', '2021-01-08 10:55:10'),
(135, 'Mental Health Workers', 0, '2021-01-06 14:44:22', '2021-01-08 10:55:12'),
(136, 'Microbiologists', 0, '2021-01-06 14:44:22', '2021-01-08 10:55:16'),
(137, 'Model and Mold Makers', 0, '2021-01-06 14:44:22', '2021-01-08 10:55:21'),
(138, 'Models', 0, '2021-01-06 14:44:22', '2021-01-06 14:44:22'),
(139, 'Morticians', 0, '2021-01-06 14:44:22', '2021-01-08 10:55:23'),
(140, 'Motor Vehicle Inspectors', 0, '2021-01-06 14:44:22', '2021-01-08 10:55:26'),
(141, 'Multimedia Artists and Animators ', 0, '2021-01-06 14:49:22', '2021-01-06 14:49:22'),
(142, 'Musicians and Singers ', 0, '2021-01-06 14:49:22', '2021-01-06 14:49:22'),
(143, 'Musician Instrumentalists', 0, '2021-01-06 14:49:22', '2021-01-08 10:55:29'),
(144, 'Nurses', 0, '2021-01-06 14:49:22', '2021-01-08 10:55:33'),
(145, 'Packaging and Filling Operators', 0, '2021-01-06 14:49:22', '2021-01-08 10:55:36'),
(146, 'Packers and Packaging Operators ', 0, '2021-01-06 14:49:22', '2021-01-06 14:49:22'),
(147, 'Painters and Illustrators ', 0, '2021-01-06 14:49:22', '2021-01-06 14:49:22'),
(148, 'Paralegal/Legal Assistants', 0, '2021-01-06 14:49:22', '2021-01-08 10:55:39'),
(149, 'Personal Home Care Aides', 0, '2021-01-06 14:49:22', '2021-01-08 10:55:41'),
(150, 'Pest Control Workers', 0, '2021-01-06 14:49:22', '2021-01-08 10:55:42'),
(151, 'Pharmacists', 0, '2021-01-06 15:12:34', '2021-01-08 10:55:46'),
(152, 'Photographers', 0, '2021-01-06 15:12:34', '2021-01-08 10:55:52'),
(153, 'Photographic Process Workers', 0, '2021-01-06 15:12:34', '2021-01-08 10:55:55'),
(154, 'Physical Therapists', 0, '2021-01-06 15:12:34', '2021-01-08 10:55:57'),
(155, 'Physicians and Surgeons ', 0, '2021-01-06 15:12:34', '2021-01-06 15:12:34'),
(156, 'Physiologists', 0, '2021-01-06 15:12:34', '2021-01-08 10:55:58'),
(157, 'Pipe Fitters', 0, '2021-01-06 15:12:34', '2021-01-08 10:56:00'),
(158, 'Plant Scientists', 0, '2021-01-06 15:12:34', '2021-01-08 10:56:02'),
(159, 'Plumbers', 0, '2021-01-06 15:12:34', '2021-01-08 10:56:03'),
(160, 'Pressers', 0, '2021-01-06 15:12:34', '2021-01-08 10:56:08'),
(161, 'Private and Investigators and Detectives ', 0, '2021-01-06 15:18:29', '2021-01-06 15:18:29'),
(162, 'Producers/Directors  ', 0, '2021-01-06 15:18:29', '2021-01-06 15:18:29'),
(163, 'Production Helpers', 0, '2021-01-06 15:18:29', '2021-01-08 10:56:10'),
(164, 'Radio and TV Announcers', 0, '2021-01-06 15:18:29', '2021-01-06 15:18:29'),
(165, 'Real Estate Brokers/Agents', 0, '2021-01-06 15:18:29', '2021-01-08 10:56:15'),
(166, 'Receptionists and Information Clerks', 0, '2021-01-06 15:18:29', '2021-01-06 15:18:29'),
(167, 'Sculptors', 0, '2021-01-06 15:18:29', '2021-01-08 10:56:17'),
(168, 'Secretaries', 0, '2021-01-06 15:18:29', '2021-01-08 10:56:22'),
(169, 'Security Guards', 0, '2021-01-06 15:18:29', '2021-01-08 10:56:26'),
(170, 'Singers', 0, '2021-01-06 15:18:29', '2021-01-08 10:56:28'),
(171, 'Sketch Artists', 0, '2021-01-06 15:25:25', '2021-01-08 10:56:32'),
(172, 'Skin Care Specialists', 0, '2021-01-06 15:25:25', '2021-01-08 10:56:34'),
(173, 'Social and Community Service Workers', 0, '2021-01-06 15:25:25', '2021-01-08 10:56:35'),
(174, 'Spa/Salon Workers', 0, '2021-01-06 15:25:25', '2021-01-08 10:56:37'),
(175, 'Structural Iron and Steel Workers', 0, '2021-01-06 15:25:25', '2021-01-08 10:56:40'),
(176, 'Surgeons', 0, '2021-01-06 15:25:25', '2021-01-08 10:56:42'),
(177, 'Surveyors', 0, '2021-01-06 15:25:25', '2021-01-08 10:56:49'),
(178, 'Tailors, Dressmakers and Custom Sewers ', 0, '2021-01-06 15:25:25', '2021-01-06 15:25:25'),
(179, 'Tax Examiners, Collectors and Revenue Agents ', 0, '2021-01-06 15:25:25', '2021-01-06 15:25:25'),
(180, 'Taxi Drivers and Chauffeurs', 0, '2021-01-06 15:25:25', '2021-01-06 15:25:25'),
(181, 'Teachers, Secondary/Post-secondary', 0, '2021-01-06 19:28:44', '2021-01-06 19:37:33'),
(182, 'Teacher Assistants', 0, '2021-01-06 19:28:44', '2021-01-08 10:56:52'),
(183, 'Technicians', 0, '2021-01-06 19:28:44', '2021-01-08 10:56:56'),
(184, 'Tool Grinder, Filer and Sharpeners', 0, '2021-01-06 19:28:44', '2021-01-08 10:56:59'),
(185, 'Tour Guides and Escorts', 0, '2021-01-06 19:28:44', '2021-01-06 19:37:33'),
(186, 'Train Crew Members', 0, '2021-01-06 19:28:44', '2021-01-08 10:57:01'),
(187, 'Travel Agents', 0, '2021-01-06 19:28:44', '2021-01-08 10:57:03'),
(188, 'Truck Drivers', 0, '2021-01-06 19:28:44', '2021-01-08 10:57:07'),
(189, 'Umpires, Referees, and Other Sports Officials', 0, '2021-01-06 19:28:44', '2021-01-06 19:37:33'),
(190, 'Upholsterers', 0, '2021-01-06 19:28:44', '2021-01-08 10:57:09'),
(191, 'Urban and Regional Planners', 0, '2021-01-06 19:32:04', '2021-01-08 10:57:11'),
(192, 'Urologists', 0, '2021-01-06 19:32:04', '2021-01-08 10:57:13'),
(193, 'Veterinarians', 0, '2021-01-06 19:32:04', '2021-01-08 10:57:18'),
(194, 'Video Game Designers', 0, '2021-01-06 19:32:04', '2021-01-08 10:57:22'),
(195, 'Writers and Authors ', 0, '2021-01-06 19:32:04', '2021-01-06 19:37:33'),
(196, 'Zoologists and Biologists ', 0, '2021-01-06 19:32:04', '2021-01-06 19:37:33'),
(197, 'Forensic', 1, '2021-01-06 19:50:29', '2021-01-08 10:57:28'),
(198, 'Auditor', 1, '2021-01-06 19:50:29', '2021-01-08 10:57:35'),
(199, 'Investment', 1, '2021-01-06 19:50:29', '2021-01-08 10:57:56'),
(200, 'Project', 1, '2021-01-06 19:50:29', '2021-01-08 10:58:04'),
(201, 'CPA (Certified Public Accountant)', 1, '2021-01-06 19:50:29', '2021-01-08 10:59:25'),
(202, 'Cost', 1, '2021-01-06 19:50:29', '2021-01-08 10:59:58'),
(203, 'Staff', 1, '2021-01-06 19:50:29', '2021-01-08 11:00:04'),
(204, 'Management', 1, '2021-01-06 19:50:29', '2021-01-08 11:00:11'),
(205, 'Bookkeeper', 1, '2021-01-06 19:50:29', '2021-01-08 11:00:18'),
(206, 'Auditing Clerk', 1, '2021-01-06 19:50:29', '2021-01-08 11:00:24'),
(207, 'Government', 1, '2021-01-06 19:50:29', '2021-01-08 11:00:30'),
(208, 'Stage', 2, '2021-01-06 20:03:04', '2021-01-08 11:00:35'),
(209, 'Television (Actor/Actress)', 2, '2021-01-06 20:03:04', '2021-01-08 11:01:05'),
(210, 'Movie (Actor/Actress)', 2, '2021-01-06 20:03:04', '2021-01-08 11:01:20'),
(211, 'Comedy', 2, '2021-01-06 20:03:04', '2021-01-08 11:01:32'),
(212, 'Instructional', 2, '2021-01-06 20:03:04', '2021-01-08 11:01:36'),
(213, 'Sign Language', 2, '2021-01-06 20:03:04', '2021-01-08 11:01:39'),
(214, 'YouTube', 2, '2021-01-06 20:03:04', '2021-01-08 11:01:45'),
(215, 'Cultural/Ethnic', 2, '2021-01-06 20:03:04', '2021-01-08 11:01:56'),
(216, 'Dancing', 2, '2021-01-06 20:03:04', '2021-01-08 11:02:01'),
(217, 'Singing', 2, '2021-01-06 20:03:04', '2021-01-08 11:02:05'),
(218, 'Acrobat', 2, '2021-01-06 20:03:04', '2021-01-08 11:02:08'),
(219, 'Finance', 3, '2021-01-06 20:16:19', '2021-01-08 11:02:15'),
(220, 'Health ', 3, '2021-01-06 20:16:19', '2021-01-08 11:02:20'),
(221, 'Pension', 3, '2021-01-06 20:16:19', '2021-01-08 11:02:29'),
(222, 'Enterprise Risk ', 3, '2021-01-06 20:16:19', '2021-01-08 11:02:37'),
(223, 'Investment (Actuaries)', 3, '2021-01-06 20:16:19', '2021-01-08 11:02:58'),
(224, 'Pricing', 3, '2021-01-06 20:16:19', '2021-01-08 11:03:03'),
(225, 'Property', 3, '2021-01-06 20:16:19', '2021-01-08 11:03:09'),
(226, 'Insurance (Actuaries)', 3, '2021-01-06 20:16:19', '2021-01-08 11:05:10'),
(227, 'Laser', 4, '2021-01-06 20:21:45', '2021-01-08 11:05:49'),
(228, 'Traditional', 4, '2021-01-06 20:21:45', '2021-01-08 11:05:54'),
(229, 'Acupressure', 4, '2021-01-06 20:21:45', '2021-01-08 11:05:57'),
(230, 'Electro', 4, '2021-01-06 20:21:45', '2021-01-08 11:06:09'),
(231, 'Investigating & Billing', 5, '2021-01-06 20:24:27', '2021-01-08 11:06:14'),
(232, 'Customer Service (Adjustment Clerks)', 5, '2021-01-06 20:24:27', '2021-01-08 11:06:49'),
(236, 'Book Keeper', 6, '2021-01-06 23:27:00', '2021-01-08 11:07:25'),
(237, 'Receptionist (Administrative Services Managers)', 6, '2021-01-06 23:27:00', '2021-01-08 11:07:51'),
(238, 'Facility Manager', 6, '2021-01-06 23:27:00', '2021-01-08 11:08:04'),
(265, 'Administrative Coordinator', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(266, 'Administrative Assistant', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(267, 'Secretary (Administrative Worker)', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(268, 'Receptionist', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(269, 'Administrative Manager', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(270, 'Executive Assistant', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(271, 'Program Coordinator', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(272, 'Client Relations Manager', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(273, 'Administrative Officer', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(274, 'Staff Assistant', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(275, 'Office Manager', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(276, 'Mail Clerk', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(277, 'File Clerk (Administrative Worker)', 7, '2021-01-07 12:00:24', '2021-01-07 12:00:24'),
(278, 'Social Media', 8, '2021-01-07 12:23:30', '2021-01-07 12:23:30'),
(279, 'Television', 8, '2021-01-07 12:23:30', '2021-01-07 12:23:30'),
(280, 'Newspaper & Magazine', 8, '2021-01-07 12:23:30', '2021-01-07 12:23:30'),
(281, 'Outdoor', 8, '2021-01-07 12:23:30', '2021-01-07 12:23:30'),
(282, 'Billboard', 8, '2021-01-07 12:23:30', '2021-01-07 12:23:30'),
(283, 'Radios & Podcasts', 8, '2021-01-07 12:23:30', '2021-01-07 12:23:30'),
(284, 'Email Marketing', 8, '2021-01-07 12:23:30', '2021-01-07 12:23:30'),
(285, 'Movie', 8, '2021-01-07 12:23:30', '2021-01-07 12:23:30'),
(286, 'Sports Manager', 9, '2021-01-07 12:37:45', '2021-01-07 12:37:45'),
(287, 'Music Manager', 9, '2021-01-07 12:37:45', '2021-01-07 12:37:45'),
(288, 'Artists Manager', 9, '2021-01-07 12:37:45', '2021-01-07 12:37:45'),
(289, 'Artists Agent', 9, '2021-01-07 12:37:45', '2021-01-07 12:37:45'),
(290, 'Music Agent', 9, '2021-01-07 12:37:45', '2021-01-07 12:37:45'),
(325, 'Animal Scientist', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(326, 'Plant Scientist (Agriculture)', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(327, 'Animal Technician', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(328, 'Plant Technician', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(329, 'Agricultural Engineer', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(330, 'Quality Control', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(331, 'Animal Farm Manager', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(332, 'Crop Farm Manager', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(333, 'Aqua-cultural Manager', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(334, 'Equipment Operator', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(335, 'Farm Worker', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(336, 'Plant Nursery Expert', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(337, 'Hatchery Expert', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(338, 'Forester (Agriculture)', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(339, 'Agronomist', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(340, 'Agricultural Inspector', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(341, 'Agricultural Journalist', 10, '2021-01-07 12:47:41', '2021-01-07 12:47:41'),
(342, 'Crew Staff', 11, '2021-01-07 13:25:58', '2021-01-07 13:25:58'),
(343, 'Crew Officer', 11, '2021-01-07 13:25:58', '2021-01-07 13:25:58'),
(344, 'Air Traffic Controller', 11, '2021-01-07 13:25:58', '2021-01-07 13:25:58'),
(345, 'Air Cargo Handler', 11, '2021-01-07 13:25:58', '2021-01-07 13:25:58'),
(346, 'Airfield Operations Specialist', 11, '2021-01-07 13:25:58', '2021-01-07 13:25:58'),
(347, 'Aircraft Body Repairer', 11, '2021-01-07 13:25:58', '2021-01-07 13:25:58'),
(348, 'Aircraft Maintenance', 11, '2021-01-07 13:25:58', '2021-01-07 13:25:58'),
(349, 'Customer Service', 11, '2021-01-07 13:25:58', '2021-01-07 13:25:58'),
(350, 'Hospitality & Catering', 11, '2021-01-07 13:25:58', '2021-01-07 13:25:58'),
(351, 'Recreation Officer', 12, '2021-01-07 13:31:31', '2021-01-07 13:31:31'),
(352, 'Event planner', 12, '2021-01-07 13:31:31', '2021-01-07 13:31:31'),
(353, 'Wedding/Party Planner', 12, '2021-01-07 13:31:31', '2021-01-07 13:31:31'),
(354, 'Educational Event Planner', 12, '2021-01-07 13:31:31', '2021-01-07 13:31:31'),
(355, 'Youth Leader', 12, '2021-01-07 13:31:31', '2021-01-07 13:31:31'),
(356, 'Sports Administrator', 12, '2021-01-07 13:31:31', '2021-01-07 13:31:31'),
(357, 'Technical Officer', 12, '2021-01-07 13:31:31', '2021-01-07 13:31:31'),
(358, 'Lifeguard', 12, '2021-01-07 13:31:31', '2021-01-07 13:31:31'),
(359, 'Fitness Instructor', 12, '2021-01-07 13:31:31', '2021-01-07 13:31:31'),
(364, 'Animal Breeder', 13, '2021-01-07 14:00:17', '2021-01-07 14:00:17'),
(365, 'Animal Trainer', 13, '2021-01-07 14:00:17', '2021-01-07 14:00:17'),
(366, 'Animal Scientist (Animal Expert)', 13, '2021-01-07 14:00:17', '2021-01-07 14:00:17'),
(367, 'Vet Doctor', 13, '2021-01-07 14:00:17', '2021-01-07 14:00:17'),
(368, 'Conservator', 14, '2021-01-07 14:02:25', '2021-01-07 14:02:25'),
(369, 'Museum Officer', 14, '2021-01-07 14:02:25', '2021-01-07 14:02:25'),
(370, 'Museum Curator', 14, '2021-01-07 14:02:25', '2021-01-07 14:02:25'),
(371, 'Academic Researcher', 14, '2021-01-07 14:02:25', '2021-01-07 14:02:25'),
(372, 'Exhibitions Officer', 14, '2021-01-07 14:02:25', '2021-01-07 14:02:25'),
(373, 'Real Estate', 15, '2021-01-07 14:04:05', '2021-01-07 14:04:05'),
(374, 'Heavy Equipment', 15, '2021-01-07 14:04:05', '2021-01-07 14:04:05'),
(375, 'Light Equipment', 15, '2021-01-07 14:04:05', '2021-01-07 14:04:05'),
(376, 'Domestic Arbitrator', 16, '2021-01-07 14:07:20', '2021-01-07 14:07:20'),
(377, 'International Arbitrator', 16, '2021-01-07 14:07:20', '2021-01-07 14:07:20'),
(378, 'Mediator', 16, '2021-01-07 14:07:20', '2021-01-07 14:07:20'),
(379, 'Conciliator', 16, '2021-01-07 14:07:20', '2021-01-07 14:07:20'),
(388, 'Residential', 17, '2021-01-07 15:25:44', '2021-01-07 15:25:44'),
(389, 'Commercial', 17, '2021-01-07 15:25:44', '2021-01-07 15:25:44'),
(390, 'Drafter (Architect)', 17, '2021-01-07 15:25:44', '2021-01-07 15:25:44'),
(391, 'Landscape', 17, '2021-01-07 15:25:44', '2021-01-07 15:25:44');

-- --------------------------------------------------------

--
-- Table structure for table `trecommendation_offers`
--

CREATE TABLE `trecommendation_offers` (
  `frecno` double NOT NULL,
  `fsender_id` varchar(80) NOT NULL,
  `fsender_job_title` varchar(80) NOT NULL,
  `freceiver_id` varchar(80) NOT NULL,
  `freceiver_name` varchar(80) NOT NULL,
  `fsender_name` varchar(80) NOT NULL,
  `freceiver_job_title` varchar(60) NOT NULL,
  `fsubject` varchar(150) NOT NULL,
  `fmessage` varchar(250) NOT NULL,
  `frelationship` varchar(30) NOT NULL,
  `frelationship-position` varchar(30) NOT NULL,
  `faccepted` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trecommendation_offers`
--

INSERT INTO `trecommendation_offers` (`frecno`, `fsender_id`, `fsender_job_title`, `freceiver_id`, `freceiver_name`, `fsender_name`, `freceiver_job_title`, `fsubject`, `fmessage`, `frelationship`, `frelationship-position`, `faccepted`, `created_at`) VALUES
(1, 'john.westmann', '', 'ZzZ', '', '', '', 'Recommendation Request', ' I wish to have your recommendation', '', '', 0, '2020-10-15 01:30:57'),
(2, 'john.westmann', '', 'john.westmann', '', '', '', 'Recommendation Request', ' I wish to have your recommendation', '', '', 0, '2020-10-15 01:32:31'),
(3, 'john.westmann', '', 'eexe', '', '', '', 'Recommendation Request', ' I wish to have your recommendation', '', '', 0, '2020-10-15 09:41:42'),
(4, 'john.westmann', '', 'laide', '', '', '', 'Recommendation Request', ' I wish to have your recommendation', '', '', 0, '2020-10-15 09:42:37'),
(5, 'john.westmann', '', 'Godson Ihemere', '', '', '', 'Recommendation Request', ' I wish to have your recommendation', '', '', 0, '2020-10-15 11:05:18'),
(6, 'john.westmann', '', 'John westmann', '', '', '', 'Recommendation Request', ' I wish to have your recommendation', '', '', 0, '2020-10-15 11:07:16'),
(7, 'john.westmann', '', 'Godson Ihemere', '', '', '', 'Recommendation Request', ' I wish to have your recommendation', '', '', 0, '2020-10-15 11:09:33'),
(8, 'john.westmann', '', 'Godson Ihemere', '', '', '', 'Recommendation Request', ' I wish to have your recommendation', '', '', 0, '2020-10-15 11:10:07'),
(9, 'john.westmann', 'Accountant', 'godson.ihemere.28', '', '', 'Accountant', 'Recommendation Offer', ' I will like to recommend you ', '', '', 0, '2020-10-15 12:00:20'),
(10, 'john.westmann', 'Accountant', 'godson.ihemere.28', '', '', 'Accountant', 'Recommendation Offer', ' I will like to recommend you ', '', '', 0, '2020-10-15 12:05:36'),
(11, 'godson.ihemere.52', 'Accountant', 'wswsw.sws', 'wswsw sws', 'Godson Ihemere', 'Accountant', 'Recommendation Offer', ' I will like to recommend you ', '', '', 0, '2020-12-03 13:31:34'),
(12, 'godson.ihemere.52', 'Engineer', 'drfr.rffr', 'drfr rffr', 'Godson Ihemere', 'Carpentary', 'I Will Like To Recommend You', ' I will like to recommend you ', 'Former Colleague', 'qsqsq', 0, '2020-12-13 20:53:33'),
(13, 'godson.ihemere.52', 'Engineer', 'godson.ihemere', 'Godson Ihemere', 'Godson Ihemere', 'Accountant', 'I Will Like To Recommend You', ' I will like to recommend you ', 'Present Student', 'wdwdwdw', 0, '2020-12-13 20:56:39'),
(14, 'godson.ihemere.52', 'Engineer', 'wswsw.sws', 'wswsw sws', 'Godson Ihemere', 'Accountant', 'I Will Like To Recommend You', ' I will like to recommend you ', 'Former Colleague', 'wdwdwdw', 0, '2020-12-13 23:45:41'),
(15, 'godson.swsws', 'Sports Manager', 'wsws.swsw', 'wsws swsw', 'Godson swsws', 'Accountant', 'I Will Like To Recommend You', ' I will like to recommend you ', 'Former Colleague', 'dddd', 0, '2020-12-14 10:10:46');

-- --------------------------------------------------------

--
-- Table structure for table `trecommendation_requests`
--

CREATE TABLE `trecommendation_requests` (
  `frecno` double NOT NULL,
  `fsender_id` varchar(80) NOT NULL,
  `fsender_name` varchar(80) NOT NULL,
  `fsender_job_title` varchar(80) NOT NULL,
  `freceiver_id` varchar(80) NOT NULL,
  `freceiver_name` varchar(80) NOT NULL,
  `freceiver_job_title` varchar(60) NOT NULL,
  `fsubject` varchar(150) NOT NULL,
  `fmessage` varchar(250) NOT NULL,
  `frelationship` varchar(30) NOT NULL,
  `frelationship-position` varchar(30) NOT NULL,
  `faccepted` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trecommendation_requests`
--

INSERT INTO `trecommendation_requests` (`frecno`, `fsender_id`, `fsender_name`, `fsender_job_title`, `freceiver_id`, `freceiver_name`, `freceiver_job_title`, `fsubject`, `fmessage`, `frelationship`, `frelationship-position`, `faccepted`, `created_at`) VALUES
(17, 'godson.ihemere.52', 'Godson Ihemere', 'Engineer', 'godson.ihemere.52', 'Godson Ihemere', 'Engineer', 'I Will Like To Request A Recommendation From You', ' I wish to have your recommendation', 'Former Client', 'qsqsq', 0, '2020-12-14 00:11:36'),
(18, 'godson.ihemere.52', 'Godson Ihemere', 'Engineer', 'godson.ihemere', 'Godson Ihemere', 'Accountant', 'I Will Like To Request A Recommendation From You', ' I wish to have your recommendation', 'Former Customer', 'swsweee', -1, '2020-12-14 00:13:23'),
(19, 'godson.swsws', 'Godson swsws', 'Sports Manager', 'godson.ihemere', 'Godson Ihemere', 'Accountant', 'I Will Like To Request A Recommendation From You', ' I wish to have your recommendation', 'Present Mentor', 'dddd', 0, '2020-12-14 09:57:10');

-- --------------------------------------------------------

--
-- Table structure for table `tschools`
--

CREATE TABLE `tschools` (
  `frecno` double NOT NULL,
  `fschool_name` varchar(100) NOT NULL,
  `fschool_id` varchar(50) NOT NULL,
  `fschool_address` text NOT NULL,
  `fbranch_name` varchar(50) DEFAULT NULL,
  `fschool_email` varchar(80) NOT NULL,
  `fpass_word` varchar(80) NOT NULL,
  `fphone` varchar(20) NOT NULL,
  `fwebsite` varchar(150) DEFAULT NULL,
  `fstate` varchar(30) NOT NULL,
  `flga` varchar(30) NOT NULL,
  `fabout` text DEFAULT NULL,
  `flocations` varchar(255) DEFAULT NULL,
  `fsocials` varchar(255) DEFAULT NULL,
  `ftags` varchar(255) DEFAULT NULL,
  `fis_active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tschools`
--

INSERT INTO `tschools` (`frecno`, `fschool_name`, `fschool_id`, `fschool_address`, `fbranch_name`, `fschool_email`, `fpass_word`, `fphone`, `fwebsite`, `fstate`, `flga`, `fabout`, `flocations`, `fsocials`, `ftags`, `fis_active`, `created_at`, `updated_at`) VALUES
(2, 'swsws', 'swsws.5', 'wsws', 'ws', 'wsw@uuuu.com', '$2y$10$R78o33hR5zEUfVcaVeAgLOFFHShIipWwnz1x8Rz6J8S6wSg7SeQzq', '223333', '2sw', 'Enugu', 'Enugu North', '3e3e', '3e3', 'https://fa.com', NULL, 0, '2020-11-10 14:03:39', '2020-11-12 16:55:53'),
(3, 'swsws', 'swsws.6', 'wsws', 'ws', 'wsw@uuuu.com', '$2y$10$vNgf9lmRLkJPghELIj.KCe8VX1GEropSyhfkWzzkgDZ9CfF9wJZbO', '223333', '2sw', 'Enugu', 'Enugu North', NULL, NULL, NULL, NULL, 0, '2020-11-10 14:12:15', '2020-11-10 14:12:15'),
(4, 'Test', 'test', '22 hhh', 'test', 'test@yahoo.com', '$2y$10$Vq5qTKDt0lq4tkJol6iUC.9FU7QJg24Z/EnEjX3AzstahXwQjmSZ.', '777766666', '', 'Oyo', 'Kajola', 'We are a good school', 'Ibadan -Lagos', 'http://qsqs.com', NULL, 0, '2020-11-10 15:15:29', '2020-11-16 10:45:11'),
(5, 'rr5r5', 'rr5r5', 'r5r5r5r5r5', 'r5r5', 'test@yahoo.com', '$2y$10$UZsHBqTAxzgpnSTdNCxxL.oJuBWs1DgnYQT4FQbgSPqO0pHCwk7Gu', '33333', '', 'Gombe', 'Gombe', NULL, NULL, NULL, NULL, 0, '2020-11-16 10:44:16', '2020-11-16 10:44:16'),
(6, 'swesede', 'swesede', '', NULL, 'tests@yahoo.com', '$2y$10$qEcgm/vvwOeLs8AgWPTfK.SVvjqqRn5U/TvJfYvMcXTJUoGgtQhE6', '454546', NULL, 'Edo', 'Ovia South-West', NULL, NULL, NULL, NULL, 0, '2020-11-23 10:36:17', '2020-11-23 10:36:17'),
(7, 'edededed', 'edededed', '', NULL, 'test2@yahoo.com', '$2y$10$VdyfyKYo9zPuyTyh6JUpT.9hKo0AzQGgIFdp/Y5MO.oeZFdzHpqrK', '23232', NULL, 'FCT', 'Bwari', NULL, NULL, NULL, NULL, 0, '2020-11-30 16:36:29', '2020-11-30 16:36:29'),
(8, 'w2w2w', 'w2w2w', '', NULL, 'test5@yahoo.com', '$2y$10$X8WkRwP7KWisEPmdHJw.Ue4/0/rv.pQQovGuQn2z0cN8XUrDCnskO', '2323', NULL, 'FCT', 'Kwali', 'w2w2w', 'w2w2w', 'https://deede.com', NULL, 0, '2020-12-02 16:45:03', '2020-12-02 16:47:07'),
(9, 'Babcock university ', 'babcock university ', '', NULL, 'Testing@gmail.com', '$2y$10$nWW1Ede.YtcQP6.sAnwGwed/h0m.0HwrD1YE906ZH.kKKvbODXog6', '08423652411', NULL, 'Ogun', 'Ikenne', 'A first-class Seventh-day Adventist institution, building servant leaders for a better world. As a private university, our academic programme provides a holistic education anchored on the harmonious development of the intellectual, physical, social, and spiritual potentials of our students, inspiring stable and noble character needed for effective leadership and service in the society .', 'Illishan-Remo, Ikenne, Ogun state ', '', NULL, 0, '2020-12-04 11:31:40', '2020-12-04 11:37:03'),
(10, 'jjj', 'jjj', '', NULL, 'saiyemomi@gmail.com', '$2y$10$BFv3Or.7S2lRzzwrSHcgSukGhxRELvMt66uODxfXbeVBm2QDF9ig6', '555465', NULL, 'Oyo', 'Irepo', NULL, NULL, NULL, NULL, 0, '2020-12-14 06:01:07', '2020-12-14 06:01:07'),
(11, 'hhhhhhhhhh', 'hhhhhhhhhh', '', NULL, 'leke.daniel@gmail.com', '$2y$10$q6ZAthfxXt1jN0EsxJoBG.yZ4kwH2fBlnbQWlZW3QnocyacHGIDO6', '89', NULL, 'Adamawa', 'Ganye', NULL, NULL, NULL, NULL, 0, '2021-01-12 13:09:58', '2021-01-12 13:09:58'),
(12, 'kikkkkk', 'kikkkkk', '', NULL, 'mjkkkk@gmail.com', '$2y$10$wIGbcj87RNvverjJ5I9M9e//lzAZlO1Ee/W62/0Gfr3wnX8dNewJ.', '09090', NULL, 'Edo', 'Orhionmwon', NULL, NULL, NULL, NULL, 0, '2021-01-12 13:18:26', '2021-01-12 13:18:26');

-- --------------------------------------------------------

--
-- Table structure for table `tschool_gallery`
--

CREATE TABLE `tschool_gallery` (
  `frecno` double UNSIGNED NOT NULL,
  `fimage` varchar(100) NOT NULL,
  `fschool_id` varchar(60) NOT NULL,
  `fimage_id` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tschool_gallery`
--

INSERT INTO `tschool_gallery` (`frecno`, `fimage`, `fschool_id`, `fimage_id`, `created_at`, `updated_at`) VALUES
(6, '1606924239_e367565862e68fc9a6b5.jpeg', 'w2w2w', 'IMG1606924239', '2020-12-02 16:50:39', '2020-12-02 16:50:39'),
(7, '1607078620_c4f90aa71009200337bd.jpeg', 'babcock university ', 'IMG1607078620', '2020-12-04 11:43:40', '2020-12-04 11:43:40'),
(8, '1607078634_728da66d50b50384dfd9.jpeg', 'babcock university ', 'IMG1607078634', '2020-12-04 11:43:54', '2020-12-04 11:43:54'),
(9, '1607078649_2345c70838b66f5a2ac1.jpeg', 'babcock university ', 'IMG1607078649', '2020-12-04 11:44:09', '2020-12-04 11:44:09'),
(10, '1607078667_7494a40ff8043e366dc9.jpeg', 'babcock university ', 'IMG1607078667', '2020-12-04 11:44:27', '2020-12-04 11:44:27'),
(11, '1610453983_88bc71ebcda39214cbc4.jpg', 'kikkkkk', 'IMG1610453983', '2021-01-12 13:19:43', '2021-01-12 13:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `tteams`
--

CREATE TABLE `tteams` (
  `frecno` double UNSIGNED NOT NULL,
  `fteam_name` varchar(150) NOT NULL,
  `fteam_id` varchar(150) NOT NULL,
  `fdescription` text NOT NULL,
  `fprivacy` int(11) NOT NULL,
  `fadmin` varchar(80) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tteams`
--

INSERT INTO `tteams` (`frecno`, `fteam_name`, `fteam_id`, `fdescription`, `fprivacy`, `fadmin`, `created_at`) VALUES
(5, 'app guys', 'TM1602148065', 'aa', 1, 'godson.ihemere.10', '2020-10-08 10:07:45'),
(6, 'sw', 'TM1602773798', 'wssw', 0, 'godson.ihemere', '2020-10-15 15:56:38'),
(7, 'eedrfr', 'TM1606726992', 'rcrvrv', 0, 'godson.ihemere', '2020-11-30 10:03:12'),
(8, 'wdwdwd', 'TM1606748783', 'dwd', 0, 'godson.ihemere', '2020-11-30 16:06:23'),
(9, 'sxsx', 'TM1606996670', 'xsxs', 0, 'godson.ihemere.55', '2020-12-03 12:57:50'),
(10, 'swsws', 'TM1606997142', 'swsw', 0, 'godson.ihemere.55', '2020-12-03 13:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `tteam_members`
--

CREATE TABLE `tteam_members` (
  `frecno` double UNSIGNED NOT NULL,
  `fapplicant_id` varchar(80) NOT NULL,
  `fapplicant_name` varchar(150) NOT NULL,
  `fteam_id` varchar(80) NOT NULL,
  `fis_active` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tteam_members`
--

INSERT INTO `tteam_members` (`frecno`, `fapplicant_id`, `fapplicant_name`, `fteam_id`, `fis_active`, `created_at`) VALUES
(29, 'demilade.oyeyele', 'Demilade Oyeyele', 'TM1602773798', 1, '2020-10-26 22:01:10'),
(31, 'gbemileke.daniel', 'Gbemileke Daniel', 'TM1606726992', 1, '2020-11-30 10:04:24'),
(30, 'godson.ihemere', 'Godson Ihemere', 'TM1606726992', 1, '2020-11-30 10:03:12'),
(32, 'godson.ihemere', 'Godson Ihemere', 'TM1606748783', 1, '2020-11-30 16:06:23'),
(35, 'godson.ihemere.55', 'Godson Ihemere', 'TM1602148065', 0, '2020-12-03 13:06:33'),
(33, 'godson.ihemere.55', 'Godson Ihemere', 'TM1606996670', 1, '2020-12-03 12:57:50'),
(34, 'godson.ihemere.55', 'Godson Ihemere', 'TM1606997142', 1, '2020-12-03 13:05:42'),
(28, 'john.westmann', 'John westmann', 'TM1602770306', 1, '2020-10-26 21:57:24'),
(26, 'john.westmann', 'John westmann', 'TM1603010473', 0, '2020-10-18 09:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `tteam_messages`
--

CREATE TABLE `tteam_messages` (
  `frecno` double UNSIGNED NOT NULL,
  `fteam_id` varchar(80) NOT NULL,
  `fsender_id` varchar(80) NOT NULL,
  `fsender_name` varchar(150) NOT NULL,
  `fsender_text_colour` varchar(25) NOT NULL,
  `fmessage` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tteam_messages`
--

INSERT INTO `tteam_messages` (`frecno`, `fteam_id`, `fsender_id`, `fsender_name`, `fsender_text_colour`, `fmessage`, `created_at`) VALUES
(2, 'TM1602680312', 'wsw.wsws', '', '', 'swws', '2020-10-14 18:57:46'),
(3, 'TM1602681601', 'wsw.wsws', '', '', 'cddsc', '2020-10-14 18:58:09'),
(4, 'TM1602683355', 'wsw.wsws', '', '', 'axxw', '2020-10-14 18:59:05'),
(5, 'TM1602693700', 'wsw.wsws', '', '', 'xssx', '2020-10-14 18:59:48'),
(6, 'TM1602680312', 'wsw.wsws', '', '', 'defewf', '2020-10-14 19:23:28'),
(7, 'TM1602681160', 'wsw.wsws', '', '', 'sssssssssssd', '2020-10-14 19:28:32'),
(8, 'TM1602680312', 'wsw.wsws', '', '', 'sxsx', '2020-10-14 19:29:07'),
(9, 'TM1602680312', 'wsw.wsws', '', '', 'swsws', '2020-10-14 19:45:10'),
(10, 'TM1602680312', 'wsw.wsws', '', '', 'qzqzq', '2020-10-14 19:45:44'),
(11, 'TM1602680312', 'wsw.wsws', '', '', 'xsxs', '2020-10-14 19:46:21'),
(12, 'TM1602680312', 'wsw.wsws', '', '', 'zaza', '2020-10-14 19:49:23'),
(13, 'TM1602680312', 'wsw.wsws', '', '', 'xsxs', '2020-10-14 19:49:58'),
(14, 'TM1602680312', 'wsw.wsws', '', '', 'xsxsww', '2020-10-14 19:50:06'),
(15, 'TM1602680312', 'wsw.wsws', '', '', 'swsw', '2020-10-14 19:53:36'),
(16, 'TM1602680312', 'wsw.wsws', '', '', 'i love u', '2020-10-14 19:53:50'),
(17, 'TM1602680312', 'wsw.wsws', '', '', 'qqzqz', '2020-10-14 19:55:42'),
(18, 'TM1602680312', 'wsw.wsws', '', '', 'i need you now', '2020-10-14 19:55:53'),
(19, 'TM1602680312', 'wsw.wsws', '', '', 'ok', '2020-10-14 19:58:26'),
(20, 'TM1602681061', 'wsw.wsws', '', '', 'aqaq', '2020-10-14 20:19:38'),
(21, 'TM1602681061', 'wsw.wsws', '', '', 'qaqa', '2020-10-14 20:19:42'),
(22, 'TM1602681061', 'wsw.wsws', '', '', 'nicwee', '2020-10-14 20:19:54'),
(23, 'TM1602762137', 'john.westmann', '', '', 'swsw', '2020-10-15 13:02:31'),
(33, 'TM1602763436', 'john.westmann', '', '', 'sswws', '2020-10-18 00:48:32'),
(34, 'TM1602763436', 'john.westmann', '', '', 'love', '2020-10-18 00:48:43'),
(35, 'TM1602763436', 'john.westmann', '', '', 'I love u too', '2020-10-18 00:48:55'),
(36, 'TM1602763436', 'john.westmann', '', '', 'ggg', '2020-10-18 00:49:27'),
(37, 'TM1602763436', 'john.westmann', '', '', 'ssss', '2020-10-18 01:10:54'),
(38, 'TM1602763436', 'john.westmann', '', '', 'sss', '2020-10-18 01:10:58'),
(39, 'TM1602763436', 'john.westmann', '', '', 'ss', '2020-10-18 01:11:01'),
(40, 'TM1602763436', 'john.westmann', '', '', 'ssss', '2020-10-18 01:11:04'),
(41, 'TM1602763436', 'john.westmann', '', '', 'swswswsw', '2020-10-18 01:11:07'),
(42, 'TM1602763436', 'john.westmann', '', '', 'swsws', '2020-10-18 01:11:09'),
(43, 'TM1602763436', 'john.westmann', 'John westmann', '', 'hh', '2020-10-18 01:29:38'),
(44, 'TM1602763436', 'john.westmann', 'John westmann', '', 'hhh', '2020-10-18 01:30:13'),
(45, 'TM1602763436', 'john.westmann', 'John westmann', '', 'yu', '2020-10-18 01:30:23'),
(46, 'TM1602763436', 'john.westmann', 'John westmann', '', 'ssd', '2020-10-18 01:43:23'),
(47, 'TM1602763436', 'john.westmann', 'John westmann', '', 'xcsacx', '2020-10-18 01:45:24'),
(48, 'TM1602763436', 'john.westmann', 'John westmann', '#FFC0CB', 'xsxs', '2020-10-18 01:50:25'),
(49, 'TM1602770306', 'john.westmann', 'John westmann', '#FFC0CB', 'dd', '2020-10-26 22:01:42'),
(50, 'TM1602773798', 'godson.ihemere', 'Godson Ihemere', '', 'swsw', '2020-10-26 22:05:11'),
(51, 'TM1602773798', 'godson.ihemere', 'Godson Ihemere', '', 'hh', '2020-10-26 22:17:04'),
(52, 'TM1602773798', 'godson.ihemere', 'Godson Ihemere', '#FF0000', 'zZz', '2020-10-26 22:27:06'),
(53, 'TM1606726992', 'godson.ihemere', 'Godson Ihemere', '#FF0000', 'ff', '2020-11-30 10:04:05'),
(54, 'TM1606748783', 'godson.ihemere', 'Godson Ihemere', '#FF0000', 'wdwd', '2020-11-30 16:06:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `local_governments`
--
ALTER TABLE `local_governments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `tapplicants`
--
ALTER TABLE `tapplicants`
  ADD PRIMARY KEY (`frecno`),
  ADD UNIQUE KEY `fuser_name` (`fuser_name`);

--
-- Indexes for table `tapplicant_documents`
--
ALTER TABLE `tapplicant_documents`
  ADD PRIMARY KEY (`frecno`),
  ADD UNIQUE KEY `fimage` (`ffile_name`);

--
-- Indexes for table `tapplicant_educations`
--
ALTER TABLE `tapplicant_educations`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tapplicant_experiences`
--
ALTER TABLE `tapplicant_experiences`
  ADD PRIMARY KEY (`fposition`,`fcompany_name`),
  ADD UNIQUE KEY `frecno` (`frecno`);

--
-- Indexes for table `tapplicant_messages`
--
ALTER TABLE `tapplicant_messages`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tapplicant_other_skills`
--
ALTER TABLE `tapplicant_other_skills`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tapplicant_portfolios`
--
ALTER TABLE `tapplicant_portfolios`
  ADD PRIMARY KEY (`frecno`),
  ADD UNIQUE KEY `fimage` (`fimage`);

--
-- Indexes for table `tapplicant_pro_skills`
--
ALTER TABLE `tapplicant_pro_skills`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tapplicant_verification_codes`
--
ALTER TABLE `tapplicant_verification_codes`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tapplicant_weblinks`
--
ALTER TABLE `tapplicant_weblinks`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tassociations`
--
ALTER TABLE `tassociations`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tassociation_gallery`
--
ALTER TABLE `tassociation_gallery`
  ADD PRIMARY KEY (`frecno`),
  ADD UNIQUE KEY `fimage` (`fimage`);

--
-- Indexes for table `tcompanies`
--
ALTER TABLE `tcompanies`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tcompany_gallery`
--
ALTER TABLE `tcompany_gallery`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tcompany_verification_codes`
--
ALTER TABLE `tcompany_verification_codes`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tevents`
--
ALTER TABLE `tevents`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tjobs`
--
ALTER TABLE `tjobs`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tjob_invite_messages`
--
ALTER TABLE `tjob_invite_messages`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tlanguages`
--
ALTER TABLE `tlanguages`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tmessages`
--
ALTER TABLE `tmessages`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tpass_word_resets`
--
ALTER TABLE `tpass_word_resets`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tprofessions`
--
ALTER TABLE `tprofessions`
  ADD PRIMARY KEY (`frecno`),
  ADD UNIQUE KEY `fname` (`fname`);

--
-- Indexes for table `trecommendation_offers`
--
ALTER TABLE `trecommendation_offers`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `trecommendation_requests`
--
ALTER TABLE `trecommendation_requests`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tschools`
--
ALTER TABLE `tschools`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tschool_gallery`
--
ALTER TABLE `tschool_gallery`
  ADD PRIMARY KEY (`frecno`),
  ADD UNIQUE KEY `fimage` (`fimage`);

--
-- Indexes for table `tteams`
--
ALTER TABLE `tteams`
  ADD PRIMARY KEY (`frecno`);

--
-- Indexes for table `tteam_members`
--
ALTER TABLE `tteam_members`
  ADD PRIMARY KEY (`fapplicant_id`,`fteam_id`),
  ADD UNIQUE KEY `frecno` (`frecno`);

--
-- Indexes for table `tteam_messages`
--
ALTER TABLE `tteam_messages`
  ADD PRIMARY KEY (`frecno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `local_governments`
--
ALTER TABLE `local_governments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=775;

--
-- AUTO_INCREMENT for table `tapplicants`
--
ALTER TABLE `tapplicants`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tapplicant_documents`
--
ALTER TABLE `tapplicant_documents`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tapplicant_educations`
--
ALTER TABLE `tapplicant_educations`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tapplicant_experiences`
--
ALTER TABLE `tapplicant_experiences`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tapplicant_messages`
--
ALTER TABLE `tapplicant_messages`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tapplicant_other_skills`
--
ALTER TABLE `tapplicant_other_skills`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tapplicant_portfolios`
--
ALTER TABLE `tapplicant_portfolios`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `tapplicant_pro_skills`
--
ALTER TABLE `tapplicant_pro_skills`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tapplicant_verification_codes`
--
ALTER TABLE `tapplicant_verification_codes`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tapplicant_weblinks`
--
ALTER TABLE `tapplicant_weblinks`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tassociations`
--
ALTER TABLE `tassociations`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tassociation_gallery`
--
ALTER TABLE `tassociation_gallery`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tcompanies`
--
ALTER TABLE `tcompanies`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tcompany_gallery`
--
ALTER TABLE `tcompany_gallery`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tcompany_verification_codes`
--
ALTER TABLE `tcompany_verification_codes`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tevents`
--
ALTER TABLE `tevents`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tjobs`
--
ALTER TABLE `tjobs`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `tjob_invite_messages`
--
ALTER TABLE `tjob_invite_messages`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tlanguages`
--
ALTER TABLE `tlanguages`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tmessages`
--
ALTER TABLE `tmessages`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tpass_word_resets`
--
ALTER TABLE `tpass_word_resets`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tprofessions`
--
ALTER TABLE `tprofessions`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=392;

--
-- AUTO_INCREMENT for table `trecommendation_offers`
--
ALTER TABLE `trecommendation_offers`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `trecommendation_requests`
--
ALTER TABLE `trecommendation_requests`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tschools`
--
ALTER TABLE `tschools`
  MODIFY `frecno` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tschool_gallery`
--
ALTER TABLE `tschool_gallery`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tteams`
--
ALTER TABLE `tteams`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tteam_members`
--
ALTER TABLE `tteam_members`
  MODIFY `frecno` double UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
