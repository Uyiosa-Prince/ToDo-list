 create database Classified_Ads_db;
  use Classified_Ads_db;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


/* User table To register user */
CREATE TABLE usertable (
	userid int NOT NULL AUTO_INCREMENT,
    firstName varchar(40) NOT NULL,
    lastName varchar(40) NOT NULL,
    email varchar(100) NOT NULL,
    phoneNumber varchar(12) NOT NULL,
    DOB date NOT NULL,
    address varchar(100) NOT NULL,
    state varchar(40) NOT NULL,
    city varchar(40) NOT NULL,
   -- zip varchar(10) NOT NULL,
    password varchar(255) NOT NULL,
    CONSTRAINT PK_userid PRIMARY KEY (userid),
    CONSTRAINT UC_email UNIQUE (email)
);

-- Ad table
CREATE TABLE General_Ad(
	ad_ID int(11) NOT NULL,
    ad_Title varchar(100) NOT NULL,
    ad_price float NOT NULL,
    ad_Description varchar(255) NOT NULL,
    ad_Start_Date date NOT NULL,
    ad_End_Date date NOT NULL,
    ad_Image varchar(100) NOT NULL
);

CREATE TABLE Buy_and_Sell_Ad(
	ad_ID int(11) NOT NULL,
    ad_Title varchar(100) NOT NULL,
    ad_price float NOT NULL,
    ad_Condition varchar(100),
    Brand varchar(45), 
    ad_Description varchar(255) NOT NULL,
    category_ID int(11) NOT NULL,
    ad_Start_Date date NOT NULL,
    ad_End_Date date NOT NULL,
    ad_Image varchar(100) NOT NULL
);

-- Insert ad data into the tables
 INSERT INTO Buy_and_Sell_Ad  (ad_ID, ad_Title, ad_price, ad_Condition, Brand, ad_Description, category_ID, ad_Start_Date, ad_End_Date, ad_Image) VALUES
	(1, "iPhone-12 Pro Max", "900", "Used", "Iphone", "Used iPhone-12 Pro Max 128GB  for sale by owner", "1", "2021-02-12",
    "2021-05-12", "iphone.jpg" );

CREATE TABLE Cars_and_Vehichles_Ad(
	ad_ID int(11) NOT NULL,
    ad_Title varchar(100) NOT NULL,
    ad_price float NOT NULL,
    Make varchar(100) NOT NULL, 
    Year int NOT NULL, 
    Model varchar(100),
    Trim varchar(100),
    Color varchar(45) NOT NULL, 
    Kilometers float NOT NULL, 
    ad_Condition varchar(100),
    category_ID int(11) NOT NULL,
    ad_Start_Date date NOT NULL,
    ad_End_Date date NOT NULL,
    ad_Image varchar(100) NOT NULL
);

-- Insert ad data into the tables
 INSERT INTO Cars_and_Vehichles_Ad  (ad_ID, ad_Title, ad_price, Make, Year, Model, Trim, Color, Kilometers, ad_Condition, 
									category_ID, ad_Start_Date, ad_End_Date, ad_Image) VALUES
	(1, "2018 Honda CR-V LX 2WD", "45000", "Honda", 2018, "CR-V", "LX 2WD", "Black", "28146", "Used", 2, "2021-04-20",
    "2021-06-20", "hondaCRV.jpg" );


	


CREATE TABLE Category (
	category_ID int(11) NOT NULL,
	category_Name varchar(30) NOT NULL
);

CREATE TABLE Sub_Category (
	sub_Category_ID int(11) NOT NULL,
    sub_Category_Name varchar(30) NOT NULL,
	category_ID int(11) NOT NULL	
);

-- insert into category 
INSERT INTO Category (category_ID, category_Name) VALUES
(1, 'Buy And Sell'),
(2, 'Cars And Vehicles');

-- insert into sub category 
INSERT INTO Sub_Category (sub_Category_ID, sub_Category_Name, category_ID) VALUES
(1, 'Phone', 1),
(2, 'Computer', 1),
(3, 'Keyboard and Piano', 1),
(4, 'Classic Cars', 2),
(5, 'Trucks', 2);



-- Insert ad data into the tables
/* INSERT INTO Cars_and_Vehichles_Ad  (`Book_ID`, `Title`, `Authors`, `Category_ID`, `Status`, `Image`) VALUES
(1, 'Beginning Programming with Java For Dummies', 'Authors: Barry A. Burd\r\n', 4, 'Available', 'Book1.jpg'),
(2, 'Beginning Java Programming', 'Authors: Iducate Learning Technologies\r\n', 4, 'Available', 'Book2.jpg'),
 */






/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;