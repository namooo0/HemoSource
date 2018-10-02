CREATE TABLE Banks_Hospitals (
	Name VARCHAR(30) NOT NULL UNIQUE,
	ID INT NOT NULL UNIQUE,
	Street_Num INT NOT NULL,
	Street_Name VARCHAR(20) NOT NULL,
	City VARCHAR(20) NOT NULL,
	State CHAR(2) NOT NULL,
	Zip_Code INT NOT NULL,
	Blood_Bank VARCHAR(3),
	Hospital VARCHAR(3),
	PRIMARY KEY(Name,ID)
);

CREATE TABLE Blood_Inventory (
	Name VARCHAR(30) NOT NULL UNIQUE,
	Opos INT NOT NULL,
	Oneg INT NOT NULL,
	Apos INT NOT NULL,
	Aneg INT NOT NULL,
	Bpos INT NOT NULL,
	Bneg INT NOT NULL,
	ABpos INT NOT NULL,
	ABneg INT NOT NULL,
	PRIMARY KEY(Name),
	FOREIGN KEY(Name) REFERENCES Banks_Hospitals(Name)
);

CREATE TABLE Blood_Platelets (
	Name VARCHAR(30) NOT NULL UNIQUE,
	Opos INT NOT NULL,
	Oneg INT NOT NULL,
	Apos INT NOT NULL,
	Aneg INT NOT NULL,
	Bpos INT NOT NULL,
	Bneg INT NOT NULL,
	ABpos INT NOT NULL,
	ABneg INT NOT NULL,
	PRIMARY KEY(Name),
	FOREIGN KEY(Name) REFERENCES Banks_Hospitals(Name)
);

CREATE TABLE Blood_Plasma (
	Name VARCHAR(30) NOT NULL UNIQUE,
	Opos INT NOT NULL,
	Oneg INT NOT NULL,
	Apos INT NOT NULL,
	Aneg INT NOT NULL,
	Bpos INT NOT NULL,
	Bneg INT NOT NULL,
	ABpos INT NOT NULL,
	ABneg INT NOT NULL,
	PRIMARY KEY(Name),
	FOREIGN KEY(Name) REFERENCES Banks_Hospitals(Name)
);

CREATE TABLE Orders_Blood (
	Order_ID INT NOT NULL UNIQUE AUTO_INCREMENT,
	Sender_ID INT NOT NULL,
	Recipient_ID INT NOT NULL,
	Opos INT NOT NULL,
	Oneg INT NOT NULL,
	Apos INT NOT NULL,
	Aneg INT NOT NULL,
	Bpos INT NOT NULL,
	Bneg INT NOT NULL,
	ABpos INT NOT NULL,
	ABneg INT NOT NULL,
	PRIMARY KEY(Order_ID),
	FOREIGN KEY(Sender_ID) REFERENCES Banks_Hospitals(ID),
	FOREIGN KEY(Recipient_ID) REFERENCES Banks_Hospitals(ID)
);

CREATE TABLE Orders_Platelets (
	Order_ID INT NOT NULL UNIQUE AUTO_INCREMENT,
	Sender_ID INT NOT NULL,
	Recipient_ID INT NOT NULL,
	Opos INT NOT NULL,
	Oneg INT NOT NULL,
	Apos INT NOT NULL,
	Aneg INT NOT NULL,
	Bpos INT NOT NULL,
	Bneg INT NOT NULL,
	ABpos INT NOT NULL,
	ABneg INT NOT NULL,
	PRIMARY KEY(Order_ID),
	FOREIGN KEY(Sender_ID) REFERENCES Banks_Hospitals(ID),
	FOREIGN KEY(Recipient_ID) REFERENCES Banks_Hospitals(ID)
);

CREATE TABLE Orders_Plasma (
	Order_ID INT NOT NULL UNIQUE AUTO_INCREMENT,
	Sender_ID INT NOT NULL,
	Recipient_ID INT NOT NULL,
	Opos INT NOT NULL,
	Oneg INT NOT NULL,
	Apos INT NOT NULL,
	Aneg INT NOT NULL,
	Bpos INT NOT NULL,
	Bneg INT NOT NULL,
	ABpos INT NOT NULL,
	ABneg INT NOT NULL,
	PRIMARY KEY(Order_ID),
	FOREIGN KEY(Sender_ID) REFERENCES Banks_Hospitals(ID),
	FOREIGN KEY(Recipient_ID) REFERENCES Banks_Hospitals(ID)
);