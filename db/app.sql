-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.6037
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table app.security_traffic_log
CREATE TABLE IF NOT EXISTS `security_traffic_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `new_id` int(11) NOT NULL DEFAULT 0,
  `driver_name` varchar(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `vehicle_license` varchar(100) NOT NULL,
  `destination_and_purpose` varchar(100) NOT NULL,
  `date_in` date NOT NULL,
  `time_in` varchar(50) DEFAULT NULL,
  `date_out` date NOT NULL,
  `time_out` varchar(50) DEFAULT NULL,
  `comments` varchar(100) NOT NULL,
  `creator` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table app.security_traffic_log: ~114 rows (approximately)
DELETE FROM `security_traffic_log`;
/*!40000 ALTER TABLE `security_traffic_log` DISABLE KEYS */;
INSERT INTO `security_traffic_log` (`id`, `new_id`, `driver_name`, `company_name`, `vehicle_license`, `destination_and_purpose`, `date_in`, `time_in`, `date_out`, `time_out`, `comments`, `creator`, `created`) VALUES
	(30, 1, 'Driver', 'Company', '01', 'Food Delivery', '2021-05-04', '07:18:49', '2021-05-04', '06:18:51', 'asdfa', '', NULL),
	(31, 2, 'Driver2', 'Company2', '02', 'Food Delivery', '2021-05-05', '07:19:23', '2021-05-05', '07:19:25', 'sdfhksahf', '', NULL),
	(32, 3, 'Juan Martinez', 'Brusco', 'RRT3244', 'Central Facility', '2021-05-20', '18:01:40', '2021-05-20', '18:01:45', 'Empty', '', NULL),
	(33, 4, 'Mike Pena', 'EOG', 'GRT422', 'Tank Battery', '2021-05-20', '19:34:17', '2021-05-21', '21:33:25', 'N/A', '', NULL),
	(34, 5, 'Mike Pena', 'EOG', 'GRT422', 'Central Facility', '2021-05-21', '13:35:33', '2021-05-22', '18:35:39', 'Nothing', '', NULL),
	(35, 6, 'Driver', 'Company', '1', 'Food Delivery', '2021-05-04', '20:47:34', '2021-05-04', '20:47:40', 'asdfa', '', NULL),
	(36, 0, 'Driver2', 'Company2', '2', 'Food Delivery', '2021-05-05', '20:47:34', '2021-05-05', '20:47:40', 'sdfhksahf', '', NULL),
	(38, 0, 'Mike Pena', 'EOG', 'GRT422', 'Tank Battery', '2021-05-20', '20:47:34', '2021-05-21', '20:47:40', 'N/A', '', NULL),
	(39, 0, 'Mike Pena', 'EOG', 'GRT422', 'Central Facility', '2021-05-21', '20:47:34', '2021-05-22', '20:47:40', 'Nothing', '', NULL),
	(40, 0, 'SANTOS VILLAREAL ', 'PILOT J', 'D3329HY', 'CENTRAL OIL', '2019-12-01', '00:26:00', '2019-12-01', '01:25:00', 'NAN', '', NULL),
	(41, 0, 'KEVIN DELOSH ', 'WOOD', 'LLS4130', 'SHANNON TYLER ', '2019-12-01', '05:24:00', '2019-12-01', '11:00:00', 'NAN', '', NULL),
	(42, 0, 'REED WILLIAMS ', 'CHESAPEAKE ', 'MKV1768', 'CENTRAL ', '2019-12-01', '05:47:00', '2019-12-01', '07:01:00', 'NAN', '', NULL),
	(43, 0, 'ANDREW RAMOS ', 'PILOT J', 'C3167HY', 'SHANNON OIL ', '2019-12-01', '05:51:00', '2019-12-01', '06:48:00', 'NAN', '', NULL),
	(44, 0, 'RAUL GALINDO ', 'PILOT J', 'J5286HY', 'CENTRAL OIL ', '2019-12-01', '06:02:00', '2019-12-01', '06:57:00', 'NAN', '', NULL),
	(45, 0, 'JAVIER MORALES ', 'PILOT J', 'D3329HY', 'SHANNON OIL ', '2019-12-01', '06:19:00', '2019-12-01', '07:25:00', 'NAN', '', NULL),
	(46, 0, 'FREDDY MARTINEZ ', 'PILOT J', 'J5455HY', 'TIK OIL ', '2019-12-01', '06:33:00', '2019-12-01', '07:39:00', 'NAN', '', NULL),
	(47, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2019-12-01', '07:01:00', '2019-12-01', '08:15:00', 'NAN', '', NULL),
	(48, 0, 'RANDY HATTON ', 'PILOT J', 'K9947HY', 'TIK OIL ', '2019-12-01', '07:16:00', '2019-12-01', '07:27:00', 'NAN', '', NULL),
	(49, 0, 'VICENTE VALERO ', 'PILOT J', 'G9582HY', 'CENTRAL OIL ', '2019-12-01', '07:57:00', '2019-12-01', '09:00:00', 'NAN', '', NULL),
	(50, 0, 'RAOL GALINDO ', 'PILOT J', 'J5286HY', 'CENTRAL OIL ', '2019-12-01', '08:41:00', '2019-12-01', '09:29:00', 'NAN', '', NULL),
	(51, 0, 'RAUL SOSA ', 'JNP ENERGY ', 'IM52064', 'CENTRAL WATER ', '2019-12-01', '09:12:00', '2019-12-01', '10:01:00', 'NAN', '', NULL),
	(52, 0, 'JAVIER ESPINOZA ', 'SOUTH TEXAS OIL ', 'IM28297', 'TYLER WATER ', '2019-12-01', '09:41:00', '2019-12-01', '12:09:00', 'NAN', '', NULL),
	(53, 0, 'AARON BRANDON ', 'APERGY ', 'KTM0969', 'TYLER 4', '2019-12-01', '10:17:00', '2019-12-01', '16:23:00', 'NAN', '', NULL),
	(54, 0, 'VICENTE VALERO ', 'PILOT J', 'G9582HY', 'CENTRAL OIL ', '2019-12-01', '10:47:00', '2019-12-01', '11:45:00', 'NAN', '', NULL),
	(55, 0, 'RAUL GALINDO ', 'PILOT J', 'J5286HY', 'CENTRAL OIL ', '2019-12-01', '11:06:00', '2019-12-01', '12:22:00', 'NAN', '', NULL),
	(56, 0, 'RAUL SOSA ', 'JNP ENERGY ', 'IM52064', 'CENTRAL WATER ', '2019-12-01', '12:09:00', '2019-12-01', '12:55:00', 'NAN', '', NULL),
	(57, 0, 'ABEL OCHOA ', 'PILOT J', 'C3460HY', 'TYLER OIL ', '2019-12-01', '13:24:00', '2019-12-01', '14:55:00', 'NAN', '', NULL),
	(58, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2019-12-01', '13:33:00', '2019-12-01', '16:13:00', 'NAN', '', NULL),
	(59, 0, 'DUSTIN SPECK ', 'TEXERGY ', 'GGW9563', 'ALL WELLS ', '2019-12-01', '13:45:00', '2019-12-01', '17:10:00', 'NAN', '', NULL),
	(60, 0, 'RAUL GALINDO ', 'PILOT J', 'J5286HY', 'CENTRAL OIL ', '2019-12-01', '13:50:00', '2019-12-01', '14:39:00', 'NAN', '', NULL),
	(61, 0, 'AUSTIN HAYES ', 'CHESAPEAKE ', 'LZL9136', 'CENTRAL ', '2019-12-01', '16:30:00', '2019-12-01', '17:15:00', 'NAN', '', NULL),
	(62, 0, 'SANTOS VIARRIEAL ', 'PILOT J', 'E4713HY', 'CENTRAL OI', '2019-12-01', '17:33:00', '2019-12-01', '18:22:00', 'NAN', '', NULL),
	(63, 0, 'SANTOS VILLAREAL ', 'PILOT J', 'E4713HY', 'CENTRAL OIL ', '2019-12-01', '19:47:00', '2019-12-01', '20:34:00', 'NAN', '', NULL),
	(64, 0, 'SANTOS VILLAREAL ', 'PILOT J', 'E4713HY', 'CENTRAL OIL ', '2019-12-01', '21:55:00', '2019-12-01', '22:41:00', 'NAN', '', NULL),
	(65, 0, 'RAFAD PEREZ', 'WILLIAMS ', 'DXY9147', 'CENTRAL ', '2019-12-01', '23:31:00', '2019-12-02', '00:03:00', 'NAN', '', NULL),
	(66, 0, 'BRANDON OCHOA ', 'PILOT J', 'D2565HY', 'SUNDANCE OIL ', '2019-12-01', '23:35:00', '2019-12-02', '00:57:00', 'NAN', '', NULL),
	(67, 0, 'EMIT HUNTER ', 'PILOT J', 'E4711HY', 'CENTRAL OIL ', '2019-12-02', '00:00:00', '2019-12-02', '01:31:00', 'NAN', '', NULL),
	(68, 0, 'SANTOS VILLAREAL ', 'PILOT J', 'E4713HY', 'CENTRAL OIL ', '2019-12-02', '00:21:00', '2019-12-02', '02:25:00', 'NAN', '', NULL),
	(69, 0, 'RICARDO REESE ', 'CHESAPEAKE ', 'LVR9401', 'CENTRAL ', '2019-12-02', '01:47:00', '2019-12-02', '05:15:00', 'NAN', '', NULL),
	(70, 0, 'PATRIC WRIGHT ', 'PILOT J', 'D9556HY', 'CENTRAL OIL ', '2019-12-02', '05:56:00', '2019-12-02', '07:17:00', 'NAN', '', NULL),
	(71, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2019-12-02', '06:42:00', '2019-12-02', '07:37:00', 'NAN', '', NULL),
	(72, 0, 'WILLIAM TURGEON ', 'PILOT J', 'R3789HY', 'CENTRAL OIL ', '2019-12-02', '06:46:00', '2019-12-02', '07:41:00', 'NAN', '', NULL),
	(73, 0, 'HARVEY TREVINO ', 'SUNDANCE ', 'HSV4918', 'SHANNON ', '2019-12-02', '08:30:00', '2019-12-02', '09:43:00', 'NAN', '', NULL),
	(74, 0, 'FONZ AGUILAR', 'CHESAPEAKE ', 'DXY2192', 'PEELER A', '2019-12-02', '08:35:00', '2019-12-02', '10:34:00', 'NAN', '', NULL),
	(75, 0, 'JANSEN MCBRIDE ', 'RENEGADE ', 'NPL7323', 'CENTRAL ', '2019-12-02', '08:37:00', '2019-12-02', '09:15:00', 'NAN', '', NULL),
	(76, 0, 'DUSTIN SPECK ', 'TEXERGY ', 'LSL8904', 'ALL TEXERGY ', '2019-12-02', '08:38:00', '2019-12-02', '12:25:00', 'NAN', '', NULL),
	(77, 0, 'MARCO ALVARADO ', 'CHESAPEAKE ', 'JKP6386', 'ALL', '2019-12-02', '08:55:00', '2019-12-02', '11:58:00', 'NAN', '', NULL),
	(78, 0, 'PATRIC WRIGHT ', 'PILOT J', 'D9556HY', 'CENTRAL OIL ', '2019-12-02', '09:03:00', '2019-12-02', '10:12:00', 'NAN', '', NULL),
	(79, 0, 'HENRY BENSON ', 'MESA ', 'IL01422', 'TYLER NORTH ', '2019-12-02', '09:50:00', '2019-12-02', '12:00:00', 'NAN', '', NULL),
	(80, 0, 'KYLE BIPPERT ', 'RSI', 'MBN9172', 'ALL', '2019-12-02', '11:00:00', '2019-12-02', '13:02:00', 'NAN', '', NULL),
	(81, 0, 'PATRIC WRIGHT ', 'PILOT J', 'D9556HY', 'CENTRAL OIL ', '2019-12-02', '11:40:00', '2019-12-02', '13:23:00', 'NAN', '', NULL),
	(82, 0, 'FREDRICK HALL', 'WILLIAMS ', 'MDD3070', 'CENTRAL ', '2019-12-02', '11:49:00', '2019-12-02', '13:52:00', 'NAN', '', NULL),
	(83, 0, 'KENITH MULLINS', 'HAMPEL ', 'K035671', 'CPF', '2019-12-02', '12:50:00', '2019-12-02', '13:39:00', 'NAN', '', NULL),
	(84, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2019-12-02', '13:03:00', '2019-12-02', '16:08:00', 'NAN', '', NULL),
	(85, 0, 'JUSTIN CAMARRIO', 'REFINERY SPECIALTIES ', 'K060843', 'L&amp;H PADS', '2019-12-02', '13:44:00', '2019-12-02', '14:59:00', 'NAN', '', NULL),
	(86, 0, 'FRANK ROE', 'JNP ENERGY ', 'IM83368', 'CENTRAL WATER ', '2019-12-02', '13:49:00', '2019-12-02', '14:31:00', 'NAN', '', NULL),
	(87, 0, 'VICENTE VALERO ', 'PILOT J', 'G9582HY', 'CENTRAL OIL ', '2019-12-02', '14:13:00', '2019-12-02', '15:11:00', 'NAN', '', NULL),
	(88, 0, 'FRANK ROE', 'JNP ENERGY ', 'IM83368', 'CENTRAL WATER ', '2019-12-02', '15:10:00', '2019-12-02', '15:19:00', 'NAN', '', NULL),
	(89, 0, 'KEVIN DELOSH ', 'WOOD', 'LLS4130', 'TIK', '2019-12-02', '15:16:00', '2019-12-02', '16:48:00', 'NAN', '', NULL),
	(90, 0, 'REED WILLIAMS ', 'CHESAPEAKE ', 'JKP0368', 'CENTRAL ', '2019-12-02', '15:41:00', '2019-12-02', '16:11:00', 'NAN', '', NULL),
	(91, 0, 'AUSTIN HAYES ', 'CHESAPEAKE ', 'LZL9136', 'CENTRAL ', '2019-12-02', '16:44:00', '2019-12-02', '17:13:00', 'NAN', '', NULL),
	(92, 0, 'KYLE ROBENSON', 'GREAT TEXAS OIL ', 'BG37023', 'CPF', '2019-12-02', '16:55:00', '2019-12-02', '18:44:00', 'NAN', '', NULL),
	(93, 0, 'ELOY TORRES ', 'PILOT J', 'J5283HY', 'CENTRAL OIL ', '2019-12-02', '18:15:00', '2019-12-02', '19:08:00', 'NAN', '', NULL),
	(94, 0, 'KENITH SCOTT ', 'PILOT J', 'C2477HY', 'CENTRAL OIL ', '2019-12-02', '18:28:00', '2019-12-02', '19:50:00', 'NAN', '', NULL),
	(95, 0, 'HENRY BENSON ', 'MESA ', 'IL01428', 'PEELER 2 WATER ', '2019-12-02', '18:29:00', '2019-12-02', '19:59:00', 'NAN', '', NULL),
	(96, 0, 'ELOY TORRES ', 'PILOT J', 'J5283HY', 'CENTRAL OIL ', '2019-12-02', '20:31:00', '2019-12-02', '21:16:00', 'NAN', '', NULL),
	(97, 0, 'KENITH SCOTT ', 'PILOT J', 'C2477HY', 'CENTRAL OIL ', '2019-12-02', '21:46:00', '2019-12-02', '22:48:00', 'NAN', '', NULL),
	(98, 0, 'ALBERT VALGES', 'PILOT J', 'D3332HY', 'SHANNON OIL ', '2019-12-02', '21:51:00', '2019-12-02', '23:20:00', 'NAN', '', NULL),
	(99, 0, 'ELOY TORRES', 'PILOT J', 'J5283HY', 'CENTRAL OIL ', '2019-12-02', '23:10:00', '2019-12-02', '23:55:00', 'NAN', '', NULL),
	(100, 0, 'ROY SAMORA ', 'SOUTH TEXAS OIL ', 'IL51816', 'SHANNON WATER ', '2019-12-03', '00:52:00', '2019-12-03', '02:30:00', 'NAN', '', NULL),
	(101, 0, 'ELOY TORRES ', 'PILOT J', 'J5283HY', 'CENTRAL OIL ', '2019-12-03', '01:14:00', '2019-12-03', '01:59:00', 'NAN', '', NULL),
	(102, 0, 'PRUDENCIO VELEZ ', 'WILLIAM', 'DXY9147', 'CENTRAL ', '2019-12-03', '02:19:00', '2019-12-03', '02:57:00', 'NAN', '', NULL),
	(103, 0, 'LESS CANDY ', 'SUNDANCE ', 'LDK6843', 'SHANNON, TYLER ', '2019-12-03', '04:58:00', '2019-12-03', '06:12:00', 'NAN', '', NULL),
	(104, 0, 'DIEGO DELEON ', 'PILOT J', 'J5283HY', 'CENTRAL OIL ', '2019-12-03', '05:56:00', '2019-12-03', '07:01:00', 'NAN', '', NULL),
	(105, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2019-12-03', '06:05:00', '2019-12-03', '07:40:00', 'NAN', '', NULL),
	(106, 0, 'LOUIS FALCON ', 'PILOT J', 'D9562HY', 'SHANNON OIL ', '2019-12-03', '06:55:00', '2019-12-03', '07:58:00', 'NAN', '', NULL),
	(107, 0, 'JOHNATHAN PENINGTON', 'CHESAPEAKE ', 'FHS5794', 'CENTRAL ', '2019-12-03', '07:10:00', '2019-12-03', '07:34:00', 'NAN', '', NULL),
	(108, 0, 'CLAYTON KESSLER ', 'CHESAPEAKE ', 'JKK2685', 'CPF', '2019-12-03', '07:12:00', '2019-12-03', '07:35:00', 'NAN', '', NULL),
	(109, 0, 'STEVEN REYNA ', 'SOUTH CROSS ', 'HHK7076', 'SHANNON 1-8', '2019-12-03', '07:52:00', '2019-12-03', '14:37:00', 'NAN', '', NULL),
	(110, 0, 'GERALD UALDEZ', 'SOUTH CROSS ', 'KST0779', 'SHANNON 1-8', '2019-12-03', '08:05:00', '2019-12-03', '14:38:00', 'NAN', '', NULL),
	(111, 0, 'WAYNE RUTLEDGE ', 'SUNDANCE ', 'MCL6353', 'TYLER, SHANNON ', '2019-12-03', '08:20:00', '2019-12-03', '15:40:00', 'NAN', '', NULL),
	(112, 0, 'DIEGO DELEON ', 'PILOT J', 'J5283HY', 'CENTRAL OIL ', '2019-12-03', '08:30:00', '2019-12-03', '09:39:00', 'NAN', '', NULL),
	(113, 0, 'SHAWN BENTON ', 'WILLIAMS ', 'CFK2796', 'CPF', '2019-12-03', '09:38:00', '2019-12-03', '11:20:00', 'NAN', '', NULL),
	(114, 0, 'KENITH MULLINS', 'HAMPEL ', 'K035671', 'CPF', '2019-12-03', '09:39:00', '2019-12-03', '10:16:00', 'NAN', '', NULL),
	(115, 0, 'JOE LUERA ', 'WILLIAMS ', 'MHY2538', 'WILLIAMS ', '2019-12-03', '10:02:00', '2019-12-03', '10:15:00', 'NAN', '', NULL),
	(116, 0, 'EDD SHORT', 'JMS', 'KTP9521', 'SHANNON ', '2019-12-03', '10:36:00', '2019-12-03', '11:50:00', 'NAN', '', NULL),
	(117, 0, 'RAUL GALINDO ', 'PILOT J', 'J5283HY', 'CENTRAL OIL ', '2019-12-03', '10:37:00', '2019-12-03', '11:35:00', 'NAN', '', NULL),
	(118, 0, 'LOUIS FALCON ', 'PILOT J', 'D9562HY', 'CENTRAL OIL ', '2019-12-03', '10:46:00', '2019-12-03', '11:45:00', 'NAN', '', NULL),
	(119, 0, 'DIEGO DELEON ', 'PILOT J', 'J5283HY', 'CENTRAL OIL ', '2019-12-03', '11:00:00', '2019-12-03', '12:09:00', 'NAN', '', NULL),
	(120, 0, 'DILLIAN MOSGAN', 'PHILLIP 66', 'LJV2041', 'PIPELINE ', '2019-12-03', '11:20:00', '2019-12-03', '12:02:00', 'NAN', '', NULL),
	(121, 0, 'DIEGO DELEON ', 'PILOT J', 'J5283HY', 'CENTRAL OIL ', '2019-12-03', '13:50:00', '2019-12-03', '14:48:00', 'NAN', '', NULL),
	(122, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2019-12-03', '14:01:00', '2019-12-03', '16:33:00', 'NAN', '', NULL),
	(123, 0, 'DUSTIN SPECK ', 'TEXERGY ', 'GGW9563', 'ALL WELLS ', '2019-12-03', '14:28:00', '2019-12-03', '17:41:00', 'NAN', '', NULL),
	(124, 0, 'ANTHONY CEDILLO ', 'JNP ENERGY ', 'IL52984', 'CPF WATER ', '2019-12-03', '16:27:00', '2019-12-03', '17:15:00', 'NAN', '', NULL),
	(125, 0, 'ANTHONY CEDILLO ', 'JNP ENERGY ', 'IL52984', 'CPF WATER ', '2019-12-03', '17:55:00', '2019-12-03', '18:37:00', 'NAN', '', NULL),
	(126, 0, 'HEROLD SEYMOUR ', 'PILOT J', 'D7760HY', 'CENTRAL OIL ', '2019-12-03', '18:08:00', '2019-12-03', '19:01:00', 'NAN', '', NULL),
	(127, 0, 'MAT VARGUS ', 'KNB', 'LLK1202', 'H PAD', '2019-12-03', '18:32:00', '2019-12-03', '19:15:00', 'NAN', '', NULL),
	(128, 0, 'HEROLD SEYMOUR ', 'PILOT J', 'D7760HY', 'CENTRAL OIL ', '2019-12-03', '20:27:00', '2019-12-03', '21:31:00', 'NAN', '', NULL),
	(129, 0, 'HEROLD SEYMOUR ', 'PILOT J', 'D7760HY', 'CENTRAL OIL ', '2019-12-03', '22:36:00', '2019-12-03', '23:45:00', 'NAN', '', NULL),
	(130, 0, 'HERALD SEYMOUR ', 'PILOT J', 'D7760HY', 'CENTRAL OIL ', '2019-12-04', '01:10:00', '2019-12-04', '02:23:00', 'NAN', '', NULL),
	(131, 0, 'MAT VARGUS ', 'K&amp;B', 'LLK1202', 'MULTI ', '2019-12-04', '01:53:00', '2019-12-04', '02:50:00', 'NAN', '', NULL),
	(132, 0, 'JOKE MCCUMBER ', 'SUNDANCE ', 'LDK6846', 'SHANNON TYLER ', '2019-12-04', '02:22:00', '2019-12-04', '03:00:00', 'NAN', '', NULL),
	(133, 0, 'RAMIRO GONZALES ', 'PILOT J', 'J5455HY', 'CENTRAL OIL ', '2019-12-04', '05:05:00', '2019-12-04', '06:05:00', 'NAN', '', NULL),
	(134, 0, 'SAL ZUNIGA ', 'SOUTH TEXAS OIL ', 'IL51716', 'SHANNON WATER ', '2019-12-04', '06:35:00', '2019-12-04', '07:10:00', 'NAN', '', NULL),
	(135, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2019-12-04', '06:41:00', '2019-12-04', '07:56:00', 'NAN', '', NULL),
	(136, 0, 'JOE LUERA ', 'WILLIAMS ', 'LFK2796', 'CPF', '2019-12-04', '07:25:00', '2019-12-04', '09:57:00', 'NAN', '', NULL),
	(137, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2021-05-04', '07:07:27', '2021-05-04', '13:07:30', '', 'Admin', '2021-05-25 06:07:17'),
	(138, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2021-05-04', '06:08:07', '2021-05-04', '06:08:10', '', 'TestDataEntry', '2021-05-25 06:07:58'),
	(139, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2021-05-24', '22:28:56', '2021-05-24', '22:28:59', '', 'Admin', '2021-05-24 22:28:30'),
	(141, 0, 'FONZ AGUILAR', 'CHESAPEAKE ', 'DXY2192', 'PEELER A', '2021-05-06', '07:06', '2021-05-11', '14:06', '', 'Admin', '2021-05-25 12:06:06'),
	(142, 0, 'Juan Martinez', 'Brusco', 'RRT3244', 'Central Facility', '2021-05-22', '19:34', '2021-05-23', '19:36', '', 'dataentry', '2021-05-25 19:33:39'),
	(143, 0, 'RICARDO REESE ', 'CHESAPEAKE ', 'LVR9401', 'CENTRAL ', '2021-05-25', '21:27', '2021-05-25', '21:28', '', 'Admin', '2021-05-25 21:27:29'),
	(144, 0, 'FONZ AGUILAR', 'CHESAPEAKE ', 'DXY2192', 'PEELER A', '2021-05-25', '21:33', '2021-05-25', '21:33', '', 'TestDataEntry', '2021-05-25 21:33:13'),
	(145, 0, 'JUAN ORTEGA ', 'CHESAPEAKE ', 'JCV6032', 'CENTRAL ', '2021-05-25', '21:34', '2021-05-18', '21:34', '', 'TestDataEntry', '2021-05-25 21:34:13'),
	(146, 0, 'Juan Martinez', 'Brusco', 'RRT3244', 'Central Facility', '2021-05-14', '19:35', '2021-05-05', '13:35', 'test', 'Test', '2021-05-29 09:34:59'),
	(148, 0, 'JAVIER MORALES ', 'PILOT J', 'D3329HY', 'SHANNON OIL ', '2021-05-07', '08:37', '2021-05-05', '07:37', 'First Driver', 'Test Data Entry', '2021-05-29 09:36:59'),
	(149, 123, 'driver1', 'asdf', 'test', 'test', '2021-06-10', '20:11', '2021-06-02', '19:11', 'First Driver', 'Test Data Entry', '2021-06-02 10:11:40'),
	(150, 124, 'JOKE MCCUMBER ', 'SUNDANCE ', 'KTM0969', 'SHANNON TYLER ', '2021-06-10', '01:10', '2021-06-01', '12:51', '', 'Test Data Entry', '2021-06-02 10:49:11');
/*!40000 ALTER TABLE `security_traffic_log` ENABLE KEYS */;

-- Dumping structure for table app.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `origin_password` varchar(50) NOT NULL,
  `created` datetime DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- Dumping data for table app.user: ~2 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `user_name`, `user_email`, `user_password`, `origin_password`, `created`, `role`) VALUES
	(4, 'Admin', 'admin@test.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '', '2021-05-17 00:00:00', 1),
	(13, 'Test Data Entry', 'test@test.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '123456789', '2021-05-20 00:00:00', 4),
	(14, 'Manager', 'manager@test.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '123456', '2021-06-02 00:00:00', 5);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
