

-- Database existaence
CREATE DATABASE IF NOT EXISTS airbus;
USE airbus;
--
-- Table structure for table `administrator_table`
--


CREATE TABLE IF NOT EXISTS administrator (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name1 VARCHAR(255) NOT NULL,
    loginId VARCHAR(50) NOT NULL,
    pass VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULLa
);

--
-- Dumping data for table administrator
--
INSERT INTO `administrator` (`id`, `name1`, `loginId`, `pass`, `email`) 
VALUES (NULL, 'pushpender', '', '@1234', 'vermapushpeder2003@gmail.com');


-- --------------------------------------------------------

--
-- Table structure for table `tour_operator`
--

CREATE TABLE IF NOT EXISTS tour_operators (
    id INT AUTO_INCREMENT PRIMARY KEY,
    operatorName VARCHAR(255) NOT NULL,
    operatorID VARCHAR(50) NOT NULL,
    locationByOp VARCHAR(255) NOT NULL,
    contactNo VARCHAR(20) NOT NULL,
    operatorEmail VARCHAR(100) NOT NULL,
    operatorAddress TEXT NOT NULL
);

--
-- Dumping data for table `tour_operator`
--


INSERT INTO `tour_operators` (`id`, `operatorName`, `operatorID`, `locationByOp`, `contactNo`, `operatorEmail`, `operatorAddress`) 
VALUES (NULL, 'kajal', '001', 'delhi', '977384XX', 'kajall@gamil.com', 'E-73');

--
-- Table structure for table customer_tourist
--
CREATE TABLE IF NOT EXISTS customer_tourist (
    id INT AUTO_INCREMENT PRIMARY KEY,
    Cname VARCHAR(255) NOT NULL,
    contactNo VARCHAR(20) NOT NULL,
    email VARCHAR(100) NOT NULL,
    cAddress VARCHAR(255) NOT NULL,
    fromLocation VARCHAR(255) NOT NULL,
    toLocation VARCHAR(255) NOT NULL,
    cStatus VARCHAR(255) NOT NULL
);



--
-- Dumping data for table `customer_tourist`
--
INSERT INTO `customer_tourist` (`id`, `Cname`, `contactNo`, `email`, `cAddress`, `fromLocation`, `toLocation`, `cStatus`) 
VALUES (NULL, 'om', '989898988', 'SAD@gmail.com', 'c-133 gokal puri', 'delhi', 'kanpur', 'urgent');


-- --------------------------------------------------------
--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE NOT NULL,
    reservationStatus VARCHAR(255) NOT NULL,
    journeyFrom VARCHAR(255) NOT NULL,
    journeyTo VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    sex VARCHAR(10) NOT NULL,
    age INT NOT NULL,
    paymentDetails VARCHAR(255) NOT NULL
);


-- Dumping data for table `reservatiion`

INSERT INTO `reservations` (`id`, `date`, `reservationStatus`, `journeyFrom`, `journeyTo`, `name`, `sex`, `age`, `paymentDetails`) 
VALUES (NULL, '2024-01-31', 'urgent', 'delhi', 'usa', 'pushpender', 'male', '20', '9667503628');
-- --------------------------------------------------------


--
-- Table structure for table `feedback_table`
--
CREATE TABLE IF NOT EXISTS feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    contactNo VARCHAR(20) NOT NULL,
    feedback TEXT NOT NULL
);

--
-- Dumping data for table `feedback`
--
INSERT INTO `feedback` (`id`, `name`, `email`, `contactNo`, `feedback`)
 VALUES (NULL, 'pushpender', '977384XX', 'vermapushpender2003@', 'thamku for thsi');

-- --------------------------------------------------------


