DROP DATABASE IF EXISTS compito_assicurazioni;
CREATE DATABASE compito_assicurazioni;

USE compito_assicurazioni;

CREATE TABLE Proprietario(
    codice_fiscale varchar(20) PRIMARY KEY NOT NULL,
    cognome varchar(64) NOT NULL,
    nome varchar(64) NOT NULL,
    residenza varchar(100) NOT NULL
);

CREATE TABLE Assicurazione(
    codice INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nome varchar(64) NOT NULL, 
    sede varchar(64) NOT NULL
);


CREATE TABLE Polizza(
    codice INT NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    data_scadenza DATE NOT NULL, 
    codice_assicurazione INT NOT NULL,

    FOREIGN KEY (codice_assicurazione) REFERENCES Assicurazione(codice)
);

CREATE TABLE Automobile(
    targa VARCHAR(8) PRIMARY KEY NOT NULL,
    marca varchar(64) NOT NULL,
    modello VARCHAR(50) NOT NULL,
    cilindrata INT NOT NULL, 
    potenza INT NOT NULL,
    cf_proprietario varchar(20) NOT NULL,
    codice_polizza INT NOT NULL,

    FOREIGN KEY (cf_proprietario) REFERENCES Proprietario(codice_fiscale),
    FOREIGN KEY (codice_polizza) REFERENCES Polizza(codice)
);

CREATE TABLE Sinistro(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	data DATE NOT NULL,
	localita VARCHAR(64) NOT NULL
);

CREATE TABLE AutoCoinvolte(
	importo_danno FLOAT NOT NULL,
	id_sinistro INT NOT NULL,
	targa VARCHAR(8) NOT NULL,
	
	FOREIGN KEY (id_sinistro) REFERENCES Sinistro(id),
	FOREIGN KEY (targa) REFERENCES Automobile(targa)
);



INSERT INTO Proprietario VALUES ("RSIMRO", "Rossi", "Mario", "Milano"), ("VVVLLL", "Verdi", "Luigi", "Pontedera"), ("AAABBB", "Maria", "Ceccherini", "Firenze");
INSERT INTO Assicurazione(nome, sede) VALUES("Linear", "Firenze"), ("Generali", "Milano"), ("Sai", "Roma");
INSERT INTO Polizza(data_scadenza, codice_assicurazione) VALUES ("2018-05-23", 1), ("2020-01-22", 1), ("2022-12-01", 2);
INSERT INTO Automobile VALUES ("AB123CD", "Fiat", "Panda", 8, 55, "VVVLLL", 1), ("DD558LL", "Audi", "A1", 25, 120, "AAABBB", 2), ("EF412EE", "Audi", "A4", 41, 95, "RSIMRO", 3), ("HH878KL", "Toyota", "Yaris", 41, 95, "RSIMRO", 1);
INSERT INTO Sinistro(data, localita) VALUES ("2019-03-12", "Firenze"), ("2019-12-11", "Firenze");
INSERT INTO AutoCoinvolte VALUES (550.55, 1, "AB123CD"), (150000, 1, "DD558LL"), (1000000, 2, "DD558LL"), (15, 2, "EF412EE");
