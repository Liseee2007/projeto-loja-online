/* Lógico_W3School: */

CREATE TABLE Custumer (
    ID_Custumer INT(11) PRIMARY KEY,
    CustomerName VARCHAR(100),
    ContactName VARCHAR(100),
    Address VARCHAR(150),
    City VARCHAR(150),
    PostalCode VARCHAR(20),
    Country VARCHAR(50)
);

CREATE TABLE Categories (
    ID_Categories INT(11) PRIMARY KEY,
    CategoryName VARCHAR(100),
    Description VARCHAR(100)
);

CREATE TABLE Employees (
    ID_Employees INT(11) PRIMARY KEY,
    LastName_ VARCHAR(100),
    FirstName VARCHAR(100),
    BirthDate date,
    Photo VARCHAR(255),
    Notes text
);

CREATE TABLE Shippers (
    ID_Shippers INT(11) PRIMARY KEY,
    ShipperName VARCHAR(100),
    Phone VARCHAR(30)
);

CREATE TABLE Supplier (
    ID_Supplier INT(11) PRIMARY KEY,
    SupplierName VARCHAR(100),
    ContactName_ VARCHAR(100),
    Address VARCHAR(150),
    City VARCHAR(50),
    PostalCode VARCHAR(100),
    Country VARCHAR(100),
    Phone VARCHAR(100)
);

CREATE TABLE Orders (
    ID_Order INT(11) PRIMARY KEY,
    OrderDate date,
    fk_Custumer_ID_Custumer INT(11),
    fk_Shippers_ID_Shippers INT(11),
    fk_Employees_ID_Employees INT(11)
);

CREATE TABLE Products (
    ID_Products INT(11) PRIMARY KEY,
    ProductName VARCHAR(100),
    Unit VARCHAR(30),
    Price decimal(10,2),
    fk_Supplier_ID_Supplier INT(11),
    fk_Categories_ID_Categories INT(11)
);

CREATE TABLE OrderDatails (
    fk_Order_ID_Order INT(11),
    fk_Products_ID_Products INT(11),
    ID_OrderDatails INT(11) PRIMARY KEY,
    _Quantity INT(11)
);
 
ALTER TABLE Orders ADD CONSTRAINT FK_Orders_2
    FOREIGN KEY (fk_Custumer_ID_Custumer)
    REFERENCES Custumer (ID_Custumer)
    ON DELETE RESTRICT;
 
ALTER TABLE Orders ADD CONSTRAINT FK_Orders_3
    FOREIGN KEY (fk_Shippers_ID_Shippers)
    REFERENCES Shippers (ID_Shippers)
    ON DELETE RESTRICT;
 
ALTER TABLE Orders ADD CONSTRAINT FK_Orders_4
    FOREIGN KEY (fk_Employees_ID_Employees)
    REFERENCES Employees (ID_Employees)
    ON DELETE RESTRICT;
 
ALTER TABLE Products ADD CONSTRAINT FK_Products_2
    FOREIGN KEY (fk_Supplier_ID_Supplier)
    REFERENCES Supplier (ID_Supplier)
    ON DELETE RESTRICT;
 
ALTER TABLE Products ADD CONSTRAINT FK_Products_3
    FOREIGN KEY (fk_Categories_ID_Categories)
    REFERENCES Categories (ID_Categories)
    ON DELETE RESTRICT;
 
ALTER TABLE OrderDatails ADD CONSTRAINT FK_OrderDatails_2
    FOREIGN KEY (fk_Order_ID_Order)
    REFERENCES Orders (ID_Order)
    ON DELETE RESTRICT;
 
ALTER TABLE OrderDatails ADD CONSTRAINT FK_OrderDatails_3
    FOREIGN KEY (fk_Products_ID_Products)
    REFERENCES Products (ID_Products)
    ON DELETE RESTRICT;