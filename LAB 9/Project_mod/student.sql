CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `TGender` varchar(255) NOT NULL,
  `Current_Institution` varchar(255) NOT NULL, 
  `Class` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Area` varchar(255) NOT NULL,
  `Salary` varchar(255) NOT NULL,
  `DOB` varchar(255) NOT NULL,
  PRIMARY KEY (ID))
ENGINE=InnoDB DEFAULT CHARSET=latin1;