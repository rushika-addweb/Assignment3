/////////
Rushika Mishra 
Step 20
Inserting Values through PDO
///////

<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
  $conn = new PDO("mysql:host=$servername;dbname=table", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully done";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
$sql = "INSERT INTO `users`
(`name`, `phone`, `city`, `date_added`)
VALUES
(:name,:phone,:city,:date)";
$query = $conn -> prepare($sql);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':phone',$phone,PDO::PARAM_INT);
$query->bindParam(':city',$city,PDO::PARAM_STR);
$query->bindParam(':date',$date);
// Insert the first row
$name = "Rushika";
$phone = "12345678";
$city = "Pune";
$date = date('Y-m-d');
$query -> execute();
$lastInsertId = $conn->lastInsertId();
if($lastInsertId>0)
{
echo "inserted ";
 }
else {
echo "not  inserted"; }

?>
//////
- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 06:55 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `table`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `date_added` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `city`, `date_added`) VALUES
(3, 'Rushika', '12345678', 'Pune', '2020-07-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
