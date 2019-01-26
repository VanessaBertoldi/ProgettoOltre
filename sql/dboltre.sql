CREATE TABLE Roles ( 
  idrole INT PRIMARY KEY,
  it VARCHAR(100) NOT NULL 
); 



CREATE TABLE Organizations ( 
  idorganization INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL 
); 



CREATE TABLE Schools ( 
  idschool INT PRIMARY KEY AUTO_INCREMENT, 
  name VARCHAR(30) NOT NULL, 
  address VARCHAR(30) NOT NULL 
); 


CREATE TABLE Projects ( 
  idproject INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL, 
  description VARCHAR(600), 
  status BIT NOT NULL, 
  idschool INT NOT NULL, 
  FOREIGN KEY (idschool) REFERENCES Schools(idschool) 
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION
); 



CREATE TABLE Activities ( 
  idactivity INT PRIMARY KEY AUTO_INCREMENT, 
  name VARCHAR(30) NOT NULL, 
  status BIT NOT NULL, 
  idproject INT NOT NULL, 
  FOREIGN KEY (idproject) REFERENCES Projects(idproject) 
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION
); 



CREATE TABLE Events ( 
  idevent INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL, 
  date DATETIME NOT NULL,
  end_sub_date DATE NOT NULL, 
  n_participants INT, 
  idactivity INT NOT NULL, 
  FOREIGN KEY (idactivity) REFERENCES Activities(idactivity) 
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION
); 



CREATE TABLE Users ( 
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(30) NOT NULL, 
  lastname VARCHAR(30) NOT NULL, 
  phone VARCHAR(14)  UNIQUE, 
  mail VARCHAR(30) NOT NULL UNIQUE, 
  passwd VARCHAR(30) NOT NULL, 
  idrole INT, 
  idorganization INT, 
  idschool INT, 
  FOREIGN KEY (idrole) REFERENCES Roles(idrole)
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION,
  FOREIGN KEY (idorganization) REFERENCES Organizations(idorganization)
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION,
  FOREIGN KEY (idschool) REFERENCES Schools(idschool) 
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION 
); 


CREATE TABLE SubscribeEvent ( 
  class VARCHAR(5) NOT NULL, 
  course VARCHAR(30) NOT NULL, 
  task VARCHAR(30), 
  confirmed BOOLEAN DEFAULT FALSE, 
  id INT NOT NULL, 
  idevent INT NOT NULL, 
  FOREIGN KEY (id) REFERENCES Users(id)
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION,
  FOREIGN KEY (idevent) REFERENCES Events(idevent)
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION,
  PRIMARY KEY(id, idevent) 
); 



CREATE TABLE SubscribeActivity ( 
  idorganization INT NOT NULL, 
  idactivity INT NOT NULL, 
  FOREIGN KEY (idorganization) REFERENCES Organizations(idorganization)
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION,
  FOREIGN KEY (idactivity) REFERENCES Activities(idactivity)
  	ON UPDATE CASCADE
  	ON DELETE NO ACTION,
  PRIMARY KEY(idorganization, idactivity)    
);

INSERT INTO Roles (idrole,it)
VALUES 
	(0,'super admin'),
	(10,'studente'),
    (11,'studente amministratore'),
    (20,'docente'),
    (21,'docente amministratore');


INSERT INTO Organizations (name)
VALUES 
	('caritas'),
    ('unicef'),
    ('onu');

INSERT INTO Schools (name,address)
VALUES 
	('ITT Buonarroti Trento','via Brigata Acqui'),
    ('Alberghiero Rovereto', 'via Roma 12365'),
    ('Alberghiero Levico', 'piazza Italia 987');


INSERT INTO Projects (name,description,status,idschool )
VALUES 
	('Oltre','progetto solidale',1,2);


INSERT INTO Activities (name,status,idproject )
VALUES 
	('Cena solodali',0,1),
    ('Servizio case di riposo',1,1);

INSERT INTO Events (name,date,end_sub_date,n_participants,idactivity )
VALUES 
	('Cena di natale','2018-12-24','2018-12-12',20,1),
    ('Pranzo di pasqua','2019-04-21','2019-04-01',20,1),
    ('Casa di riposo Rovereto','2019-01-29','2019-01-26',10,2);


INSERT INTO Users (name,lastname,phone,mail,passwd, idrole,idschool )
VALUES 
	('Mario','Rossi','123456789','mrossi@mail.com','12345678',0,1),
    ('Luca','Verdi','987654321','lucVer@mail.com','qwerty',10,2),
    ('Gianna','Neri','147852369','neriGian3@mail.com','passwrod',20,1);

INSERT INTO SubscribeEvent (class,course,task,confirmed,id, idevent )
VALUES 
	('5','cucina','chef',FALSE ,1,2);


INSERT INTO SubscribeActivity (idorganization,idactivity )
VALUES 
	(1,2),
    (2,1);
