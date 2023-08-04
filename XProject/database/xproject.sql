-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.11.4-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for xproject
CREATE DATABASE IF NOT EXISTS `xproject` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `xproject`;

-- Dumping structure for table xproject.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `employees_id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`employees_id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table xproject.employees: ~50 rows (approximately)
INSERT INTO `employees` (`employees_id`, `fullname`, `address`, `salary`) VALUES
	(1, 'Launce Bosence', '7560 Longview Avenue', 60525.00),
	(2, 'Ode Flannigan', '62797 Norway Maple Hill', 74309.00),
	(3, 'Channa Feben', '29038 Hallows Plaza', 33761.00),
	(4, 'Odette Botger', '62687 Hoffman Lane', 29143.00),
	(5, 'Hailey Mulrooney', '27884 Forster Park', 17393.00),
	(6, 'Lydie Pallent', '34781 Hayes Center', 67441.00),
	(7, 'Malchy Selley', '0965 Del Mar Court', 9821.00),
	(8, 'Jdavie Praundl', '93 Kensington Plaza', 86942.00),
	(9, 'Bartlet Ruoff', '941 Mifflin Alley', 79891.00),
	(10, 'Carlyn Broune', '424 Hermina Pass', 59924.00),
	(11, 'Piggy MacElharge', '785 Hooker Pass', 65067.00),
	(12, 'Maxie Lukasen', '278 Erie Road', 15159.00),
	(13, 'Hilton Gaythwaite', '33 Gale Park', 38094.00),
	(14, 'Hobard Speechly', '075 Dorton Road', 56283.00),
	(15, 'Verla Quinnelly', '48893 Kenwood Court', 15630.00),
	(16, 'Tildy Ison', '187 Ryan Avenue', 93580.00),
	(17, 'Morten Boyett', '67727 Monica Junction', 63338.00),
	(18, 'Janie MacShirrie', '5 Fordem Center', 76905.00),
	(19, 'Maggie Shakeshaft', '1277 Toban Alley', 26182.00),
	(20, 'Margit Allman', '7 John Wall Lane', 53668.00),
	(21, 'Jenelle Peterken', '6 Bay Terrace', 47060.00),
	(22, 'Penni Haccleton', '27 Kim Road', 30636.00),
	(23, 'Carry Matushenko', '195 Merchant Point', 63957.00),
	(24, 'Waring Bloan', '20 Oak Junction', 98049.00),
	(25, 'Cassandra Blanc', '0952 Goodland Court', 9703.00),
	(26, 'Gretchen Stienton', '944 Huxley Way', 68951.00),
	(27, 'Howey Normanville', '37348 Westend Court', 13104.00),
	(28, 'Celinda Labeuil', '366 Declaration Circle', 56908.00),
	(29, 'Shaylah Lilywhite', '77 Merchant Trail', 48202.00),
	(30, 'Audra Waterhouse', '4 Lake View Circle', 26572.00),
	(31, 'Tommie Huison', '536 Chive Avenue', 74080.00),
	(32, 'Michel Couchman', '8 Eliot Drive', 95477.00),
	(33, 'Cortney Rantoull', '25731 Melody Point', 92631.00),
	(34, 'Luisa Olfert', '5966 Pawling Junction', 73591.00),
	(35, 'Marion Roeby', '0280 Warbler Street', 70867.00),
	(36, 'Eduino Berthelmot', '8 Carey Alley', 87530.00),
	(37, 'Baron Jahns', '61678 Monument Avenue', 48219.00),
	(38, 'Birch Stovine', '3 Drewry Hill', 42916.00),
	(39, 'Andie Feldberg', '737 Bunker Hill Pass', 88115.00),
	(40, 'Lowrance Cluely', '82 Kennedy Street', 8080.00),
	(41, 'Frederigo Danigel', '25 Troy Court', 73566.00),
	(42, 'Nap Lawlie', '640 Muir Street', 36098.00),
	(43, 'Fidel Preece', '829 Cherokee Hill', 88782.00),
	(44, 'Steffen Collett', '79203 Blaine Hill', 38786.00),
	(45, 'Reuven Mableson', '19 Arizona Avenue', 83872.00),
	(46, 'Cart Brambley', '0204 East Crossing', 22161.00),
	(47, 'Hershel Gladyer', '81 Scofield Junction', 36390.00),
	(48, 'Winn Fagge', '85 Golden Leaf Alley', 41785.00),
	(49, 'Renault Lantiffe', '26 Bayside Drive', 68661.00),
	(50, 'Jori Messitt', '6 Eggendart Way', 10961.00);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
