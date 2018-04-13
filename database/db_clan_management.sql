-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2015 at 07:52 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_clan_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_clan_country`
--

CREATE TABLE IF NOT EXISTS `tb_clan_country` (
  `country_code` varchar(250) NOT NULL,
  `country_name` varchar(250) NOT NULL,
  PRIMARY KEY (`country_code`),
  KEY `country_name` (`country_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_clan_country`
--

INSERT INTO `tb_clan_country` (`country_code`, `country_name`) VALUES
('AF', 'AFGHANISTAN'),
('AL', 'ALBANIA'),
('DZ', 'ALGERIA'),
('AS', 'AMERICAN SAMOA'),
('AD', 'ANDORRA'),
('AO', 'ANGOLA'),
('AI', 'ANGUILLA'),
('AG', 'ANTIGUA AND BARBUDA'),
('AR', 'ARGENTINA'),
('AM', 'ARMENIA'),
('AW', 'ARUBA'),
('AU', 'AUSTRALIA'),
('AT', 'AUSTRIA'),
('AZ', 'AZERBAIJAN'),
('BS', 'BAHAMAS'),
('BH', 'BAHRAIN'),
('BD', 'BANGLADESH'),
('BB', 'BARBADOS'),
('BY', 'BELARUS'),
('BE', 'BELGIUM'),
('BZ', 'BELIZE'),
('BJ', 'BENIN'),
('BM', 'BERMUDA'),
('BT', 'BHUTAN'),
('BO', 'BOLIVIA'),
('BA', 'BOSNIA AND HERZEGOVINA'),
('BW', 'BOTSWANA'),
('BR', 'BRAZIL'),
('IO', 'BRITISH INDIAN OCEAN TERRITORY'),
('BN', 'BRUNEI DARUSSALAM'),
('BG', 'BULGARIA'),
('BF', 'BURKINA FASO'),
('BI', 'BURUNDI\r\n'),
('KH', 'CAMBODIA'),
('CM', 'CAMEROON'),
('CA', 'CANADA'),
('CV', 'CAPE VERDE'),
('KY', 'CAYMAN ISLANDS'),
('CF', 'CENTRAL AFRICAN REPUBLIC'),
('TD', 'CHAD'),
('CL', 'CHILE'),
('CN', 'CHINA'),
('CX', 'CHRISTMAS ISLANDS'),
('CC', 'COCOS (KEELING) ISLANDS'),
('CO', 'COLOMBIA'),
('KM', 'COMOROS'),
('CG', 'CONGO'),
('CK', 'COOK ISLANDS'),
('CR', 'COSTA RICA'),
('CI', 'COTE D''IVOIRE'),
('HR', 'CROATIA'),
('CU', 'CUBA'),
('CB', 'CURACAO'),
('CY', 'CYPRUS'),
('CZ', 'CZECH REPUBLIC'),
('CD', 'DEMOCRATIC REPUBLIC OF THE CONGO'),
('DK', 'DENMARK'),
('DJ', 'DJIBOUTI'),
('DM', 'DOMINICA'),
('DO', 'DOMINICAN REPUBLIC'),
('TL', 'EAST TIMOR'),
('EC', 'ECUADOR'),
('EG', 'EGYPT'),
('SV', 'EL SALVADOR'),
('GQ', 'EQUATORIAL GUINEA'),
('ER', 'ERITREA'),
('EE', 'ESTONIA'),
('ET', 'ETHIOPIA'),
('FO', 'FAEROE ISLANDS'),
('FK', 'FALKLAND ISLANDS (MALVINAS)'),
('FJ', 'FIJI'),
('FI', 'FINLAND'),
('SU', 'FORMER USSR(for ref)'),
('FR', 'FRANCE'),
('GF', 'FRENCH GUIANA'),
('PF', 'FRENCH POLYNESIA'),
('GA', 'GABON'),
('GM', 'GAMBIA'),
('GE', 'GEORGIA'),
('DE', 'GERMANY, FED. REP. OF'),
('GH', 'GHANA'),
('GI', 'GIBRALTAR'),
('GR', 'GREECE'),
('GL', 'GREENLAND'),
('GD', 'GRENADA\r\nSI'),
('GP', 'GUADELOUPE'),
('GU', 'GUAM'),
('GT', 'GUATEMALA'),
('GN', 'GUINEA'),
('GW', 'GUINEA BISSAU'),
('GY', 'GUYANA'),
('HT', 'HAITI'),
('HN', 'HONDURAS'),
('HK', 'HONG KONG'),
('HU', 'HUNGARY'),
('IS', 'ICELAND'),
('IN', 'INDIA'),
('ID', 'INDONESIA'),
('IR', 'IRAN (ISLAMIC REPUBLIC OF)'),
('IQ', 'IRAQ'),
('IE', 'IRELAND'),
('IL', 'ISRAEL'),
('IT', 'ITALY'),
('JM', 'JAMAICA'),
('JP', 'JAPAN'),
('JO', 'JORDAN'),
('KZ', 'KAZAKHSTAN'),
('KE', 'KENYA'),
('KI', 'KIRIBATI'),
('KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC'),
('KR', 'KOREA, REPUBLIC OF'),
('KW', 'KUWAIT'),
('KG', 'KYRGYZSTAN'),
('LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC'),
('LV', 'LATVIA'),
('LB', 'LEBANON'),
('LS', 'LESOTHO'),
('LR', 'LIBERIA'),
('LY', 'LIBYAN ARAB JAMAHIRIYA'),
('LI', 'LIECHTENSTEIN'),
('LT', 'LITHUANIA'),
('LU', 'LUXEMBOURG'),
('MO', 'MACAU'),
('MG', 'MADAGASCAR'),
('MW', 'MALAWI'),
('MY', 'MALAYSIA'),
('MV', 'MALDIVES'),
('ML', 'MALI'),
('MT', 'MALTA'),
('MH', 'MARSHALL ISLANDS'),
('MQ', 'MARTINIQUE'),
('MR', 'MAURITANIA'),
('MU', 'MAURITIUS'),
('MX', 'MEXICO'),
('FM', 'MICRONESIA, FEDERATED STATES OF'),
('MD', 'MOLDOVA, REPUBLIC OF'),
('MC', 'MONACO'),
('MN', 'MONGOLIA'),
('ME', 'MONTENEGRO'),
('MS', 'MONTSERRAT'),
('MA', 'MOROCCO'),
('MZ', 'MOZAMBIQUE'),
('MM', 'MYANMAR (FORM. BURMA)'),
('NA', 'NAMIBIA'),
('NR', 'NAURU'),
('NP', 'NEPAL'),
('NL', 'NETHERLANDS'),
('AN', 'NETHERLANDS ANTILLES'),
('NC', 'NEW CALEDONIA'),
('NZ', 'NEW ZEALAND'),
('NI', 'NICARAGUA'),
('NE', 'NIGER'),
('NG', 'NIGERIA'),
('NU', 'NIUE'),
('NF', 'NORFOLK ISLANDS'),
('MP', 'NORTHERN MARIANA ISLANDS'),
('NO', 'NORWAY'),
('OM', 'OMAN'),
('OA', 'OTH NORTH AMERICA'),
('OC', 'OTH.C.&S.AMERICA'),
('ON', 'OTH.OCEANIA'),
('OS', 'OTH.SOUTH & S.E ASIA'),
('OD', 'OTH.WEST ASIA'),
('OE', 'OTH.WEST EUROPE'),
('OF', 'OTHER AFRICA'),
('OT', 'OTHER EAST ASIA'),
('YD', 'P. DEM.REP. OF YEMEN'),
('PK', 'PAKISTAN'),
('PW', 'PALAU'),
('PN', 'PALESTINA'),
('PA', 'PANAMA'),
('PG', 'PAPUA NEW GUINEA'),
('PY', 'PARAGUAY'),
('PE', 'PERU'),
('PH', 'PHILIPPINES'),
('PL', 'POLAND'),
('PT', 'PORTUGAL'),
('PR', 'PUERTO RICO'),
('QA', 'QATAR'),
('MK', 'REP. OF MACEDONIA'),
('RE', 'REUNION'),
('RO', 'ROMANIA'),
('RU', 'RUSSIA FEDERATION'),
('RW', 'RWANDA'),
('SH', 'SAINT HELENA'),
('KN', 'SAINT KITTS AND NEVIS'),
('LC', 'SAINT LUCIA'),
('VC', 'SAINT VINCENT AND THE GRENADINES'),
('WS', 'SAMOA'),
('SM', 'SAN MARINO'),
('ST', 'SAO TOME AND PRINCIPE'),
('SA', 'SAUDI ARABIA'),
('SN', 'SENEGAL'),
('RS', 'SERBIA'),
('SC', 'SEYCHELLES'),
('SL', 'SIERRA LEONE'),
('SG', 'SINGAPORE'),
('SK', 'SLOVAKIA'),
('SI', 'SLOVENIA'),
('SB', 'SOLOMON ISLANDS'),
('SO', 'SOMALIA'),
('ZA', 'SOUTH AFRICA'),
('GS', 'SOUTH GEORGIA AND THE SOUTH SA'),
('ES', 'SPAIN'),
('LK', 'SRI LANKA'),
('SD', 'SUDAN'),
('SR', 'SURINAME'),
('SZ', 'SWAZILAND'),
('SE', 'SWEDEN'),
('CH', 'SWITZERLAND'),
('SY', 'SYRIA ARAB REPUBLIC'),
('TW', 'TAIWAN'),
('TJ', 'TAJIKISTAN'),
('TZ', 'TANZANIA, UNITED REPUBLIC OF'),
('TH', 'THAILAND'),
('TG', 'TOGO'),
('TK', 'TOKELAU'),
('TO', 'TONGA'),
('TT', 'TRINIDAD AND TOBAGO'),
('TN', 'TUNISIA'),
('TR', 'TURKEY'),
('TM', 'TURKMENISTAN'),
('TC', 'TURKS AND CAICOS ISLANDS'),
('TV', 'TUVALU'),
('VI', 'U.S. VIRGIN ISLANDS'),
('UG', 'UGANDA'),
('UA', 'UKRAINE'),
('AE', 'UNITED ARAB EMIRATES'),
('GB', 'UNITED KINGDOM'),
('US', 'UNITED STATES'),
('UM', 'UNITED STATES MINOR OUTLYING ISLAND'),
('UY', 'URUGUAY'),
('UZ', 'UZBEKISTAN'),
('VU', 'VANUATU'),
('VA', 'VATICAN CITY STATE (HOLY SEE)'),
('VE', 'VENEZUELA'),
('VN', 'VIET NAM'),
('VG', 'VIRGIN ISLANDS (BRITISH)'),
('WF', 'WALLIS AND FUTUNA ISLANDS'),
('EH', 'WESTERN SAHARA'),
('YE', 'YEMEN'),
('YU', 'YUGOSLAVIA'),
('ZR', 'ZAIRE'),
('ZM', 'ZAMBIA'),
('ZW', 'ZIMBABWE');

-- --------------------------------------------------------

--
-- Table structure for table `tb_clan_member_activity`
--

CREATE TABLE IF NOT EXISTS `tb_clan_member_activity` (
  `id_clan_member_activity` int(250) NOT NULL AUTO_INCREMENT,
  `username_clan_member` varchar(250) NOT NULL,
  `ip_address_clan_member_activity` varchar(250) NOT NULL,
  `browser_clan_member_activity` varchar(250) NOT NULL,
  `activity_clan_member_activity` text NOT NULL,
  `date_clan_member_activity` date NOT NULL,
  `status_clan_member_activity` varchar(250) NOT NULL,
  PRIMARY KEY (`id_clan_member_activity`),
  KEY `username_clan_member` (`username_clan_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_clan_member_activity`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_clan_member_detail`
--

CREATE TABLE IF NOT EXISTS `tb_clan_member_detail` (
  `character_id_clan_member` varchar(250) NOT NULL,
  `character_name_clan_member` varchar(250) NOT NULL,
  `character_type_clan_member` enum('EMBLEM','FREE') NOT NULL,
  `character_gender_clan_member` enum('MALE','FEMALE') NOT NULL,
  `stamina_clan_member` varchar(250) NOT NULL,
  `username_clan_member` varchar(250) NOT NULL,
  PRIMARY KEY (`character_id_clan_member`),
  KEY `username_clan_member` (`username_clan_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_clan_member_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_clan_member_head`
--

CREATE TABLE IF NOT EXISTS `tb_clan_member_head` (
  `username_clan_member` varchar(250) NOT NULL,
  `password_clan_member` varchar(250) NOT NULL,
  `name_clan_member` varchar(250) NOT NULL,
  `email_clan_member` varchar(250) NOT NULL,
  `facebook_id_clan_member` varchar(250) NOT NULL,
  `date_join_clan_member` date NOT NULL,
  `birth_day_clan_member` date NOT NULL,
  `gender_clan_member` enum('MALE','FEMALE') NOT NULL,
  `country_clan_member` varchar(250) NOT NULL,
  `profile_clan_member` text NOT NULL,
  `language_clan_member` text NOT NULL,
  `address_clan_member` text NOT NULL,
  `status_clan_member` varchar(250) NOT NULL,
  `authority_clan_member` varchar(250) NOT NULL,
  `point_clan_member` int(250) NOT NULL,
  PRIMARY KEY (`username_clan_member`),
  KEY `country_clan_member` (`country_clan_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_clan_member_head`
--

INSERT INTO `tb_clan_member_head` (`username_clan_member`, `password_clan_member`, `name_clan_member`, `email_clan_member`, `facebook_id_clan_member`, `date_join_clan_member`, `birth_day_clan_member`, `gender_clan_member`, `country_clan_member`, `profile_clan_member`, `language_clan_member`, `address_clan_member`, `status_clan_member`, `authority_clan_member`, `point_clan_member`) VALUES
('master', 'master', 'Raka Suryaardi Widjaja', 'raka.suryadi@gmail.com', '1997', '2014-12-25', '1997-11-12', 'MALE', 'INDONESIAN', 'Hello Dear', 'Native Indonesian, English', 'Jl. Solokan Jeruk No. 289', 'ACTIVE', 'MASTER', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_clan_news`
--

CREATE TABLE IF NOT EXISTS `tb_clan_news` (
  `id_clan_news` int(250) NOT NULL AUTO_INCREMENT,
  `username_clan_member` varchar(250) NOT NULL,
  `title_clan_news` varchar(250) NOT NULL,
  `content_clan_news` text NOT NULL,
  `date_clan_news` date NOT NULL,
  `privacy_clan_news` enum('PUBLIC','PRIVATE','MEMBER') NOT NULL,
  PRIMARY KEY (`id_clan_news`),
  KEY `username_clan_member` (`username_clan_member`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_clan_news`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_clan_page_visit`
--

CREATE TABLE IF NOT EXISTS `tb_clan_page_visit` (
  `date_clan_page_visit` date NOT NULL,
  `hit_clan_page_visit` bigint(250) NOT NULL,
  PRIMARY KEY (`date_clan_page_visit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_clan_page_visit`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_clan_setting`
--

CREATE TABLE IF NOT EXISTS `tb_clan_setting` (
  `name_clan_setting` varchar(250) NOT NULL,
  `description_clan_setting` text NOT NULL,
  PRIMARY KEY (`name_clan_setting`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_clan_setting`
--

INSERT INTO `tb_clan_setting` (`name_clan_setting`, `description_clan_setting`) VALUES
('clan_about', 'The Most Of Ninja Saga Clan In The World'),
('clan_announcement', 'SQUARE BLANK CLAN OFFICIAL\r\n\r\nFACEBOOK GROUP : https://www.facebook.com/groups/square.blank/\r\nOFFICIAL WEB SITE : http://www.clan.jr-07.net/\r\n\r\n"Square Is For Pandora, Blank Is For Nothing"\r\n"No Pandora Is No Thing"\r\n\r\n\r\nBest Regard\r\nCLAN MASTER'),
('clan_board', 'Dear Players,\r\n<p>\r\nSince Ninja Saga Change The Main Rule''s Of Clan System, So Many Players Want To Get The Clan Rewards.\r\n<br>\r\nOur Target Is "Enjoy The Game" This Meant We Must Do The Best, Stay Cool, Keep Calm And Enjoy The Game.\r\n<p>\r\nCLAN MASTER\r\n<br>\r\nRaka Suryaardi Widjaja'),
('clan_contact_facebook', 'http://www.facebook.com/Raka.S.W'),
('clan_contact_mail', 'raka.suryadi@gmail.com'),
('clan_contact_phone', '+6289637593891'),
('clan_description', 'Square Is For Pandora Blank Is For Nothing No Pandora Is No Thing'),
('clan_donate_bca', '0080898061'),
('clan_donate_bitcoin', '1QLP8hWB49Pvxg4uhPcKKqWqN2ihwQ5H29'),
('clan_engine', 'Beta 1.0'),
('clan_faq', 'What Is Square Blank?\r\n<br>\r\nWho We Are?\r\n<br>\r\nWhat Is Ninja Saga\r\n<br>\r\nWhat Is Clan\r\n<br>\r\nWhat Is Clan System\r\n<br>\r\nWhat Is Clan Reward\r\n<br>\r\nHow To Get The Clan Reward\r\n<br>\r\n'),
('clan_gold', '5000000000'),
('clan_history_clan', 'Our History Clan'),
('clan_history_rewards', 'Season 58 : Building Clan\r\n<br>\r\nSeason 59 : Ready To Fight'),
('clan_hot_spring', '2'),
('clan_id', '152652'),
('clan_master', ''),
('clan_master_name', 'Raka Suryaardi Widjaja'),
('clan_name', 'SQUARE BLANK'),
('clan_ramen', '2'),
('clan_season', '59'),
('clan_slot', '250'),
('clan_temple', '2'),
('clan_token', '1461'),
('clan_training_hall', '2'),
('clan_web', 'Owner\r\n<br>\r\nRaka Suryaardi Widjaja');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_clan_member_activity`
--
ALTER TABLE `tb_clan_member_activity`
  ADD CONSTRAINT `tb_clan_member_activity_ibfk_1` FOREIGN KEY (`username_clan_member`) REFERENCES `tb_clan_member_head` (`username_clan_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_clan_member_detail`
--
ALTER TABLE `tb_clan_member_detail`
  ADD CONSTRAINT `tb_clan_member_detail_ibfk_1` FOREIGN KEY (`username_clan_member`) REFERENCES `tb_clan_member_head` (`username_clan_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_clan_news`
--
ALTER TABLE `tb_clan_news`
  ADD CONSTRAINT `tb_clan_news_ibfk_1` FOREIGN KEY (`username_clan_member`) REFERENCES `tb_clan_member_head` (`username_clan_member`) ON DELETE CASCADE ON UPDATE CASCADE;
