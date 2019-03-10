CREATE TABLE Product
(
    prodid INT(4) NOT NULL PRIMARY KEY, 
    prodName VARCHAR(30) NOT NULL,
    prodPicNameSmall VARCHAR(100) NOT NULL,
    prodPicNameLarge VARCHAR(100) NOT NULL, 
    prodDescripShort VARCHAR(1000) NULL,
    prodDescripLong VARCHAR(3000) NULL,
    prodPrice DECIMAL(6,2) NOT NULL,
    prodQuantity INT(4) NOT NULL
 
);


