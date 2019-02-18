CREATE TABLE GB_School
(
  IDSchool INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name VARCHAR(30) NOT NULL, 
  address VARCHAR(100) NOT NULL
);



CREATE TABLE GB_Role
(
  IDRole INT PRIMARY KEY NOT NULL,
  it VARCHAR(40) NOT NULL
);



CREATE TABLE GB_Project
(
  IDProject INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name VARCHAR(30) NOT NULL,
  description TEXT NOT NULL,
  PrjImgFolder VARCHAR(200) DEFAULT NULL,
  stat VARCHAR(20) NOT NULL
);


CREATE TABLE GB_Collaborate
(
  IDSchool INT NOT NULL,
  IDProject INT NOT NULL,
  Manage INT NOT NULL,
  
  PRIMARY KEY(IDSchool, IDProject),
  
  UNIQUE(IDProject, Manage),
  
  FOREIGN KEY(IDSchool) REFERENCES GB_School(IDSchool)
  		ON DELETE NO ACTION
  		ON UPDATE CASCADE,
  
  FOREIGN KEY(IDProject) REFERENCES GB_Project(IDProject)
  		ON DELETE NO ACTION
  		ON UPDATE CASCADE
);


CREATE TABLE GB_Activity
(
  IDActivity INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name VARCHAR(30) NOT NULL,
  ActImgFolder VARCHAR(200) DEFAULT NULL,
  stat VARCHAR(20) NOT NULL,
  IDProject INT,
  
  FOREIGN KEY(IDProject) REFERENCES GB_Project(IDProject)
  		ON DELETE NO ACTION
  		ON UPDATE CASCADE
);



CREATE TABLE GB_Organization
(
  IDOrganization INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name VARCHAR(40) NOT NULL,
  mail VARCHAR(50) NOT NULL,
  phone VARCHAR(14),
  business_name VARCHAR(40) NOT NULL
);



CREATE TABLE GB_Event
(
  IDEvent INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name VARCHAR(30) NOT NULL,
  start_date DATE NOT NULL,
  stat VARCHAR(20) NOT NULL,
  end_sub_date DATE NOT NULL,
  IDActivity INT,
  
  FOREIGN KEY(IDActivity) REFERENCES GB_Activity(IDActivity)
  		ON DELETE NO ACTION
  		ON UPDATE CASCADE
);



CREATE TABLE GB_User
(
  IDUser INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  name VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  phone VARCHAR(14) NOT NULL,
  mail VARCHAR(50) NOT NULL,
  psw VARCHAR(30) NOT NULL,
  stat INT(11) NOT NULL,
  IDSchool INT,
  IDRole INT NOT NULL,
  IDOrganization INT,
  
  FOREIGN KEY(IDSchool) REFERENCES GB_School(IDSchool)
  		ON DELETE NO ACTION
  		ON UPDATE CASCADE,
  
  FOREIGN KEY(IDRole) REFERENCES GB_Role(IDRole)
  		ON DELETE NO ACTION
  		ON UPDATE CASCADE,
  
  FOREIGN KEY(IDOrganization) REFERENCES GB_Organization(IDOrganization)
  		ON DELETE NO ACTION
  		ON UPDATE CASCADE
);
    


CREATE TABLE GB_SubscriveEvent
(
  IDUser INT NOT NULL,
  IDEvent INT NOT NULL,
  class VARCHAR(1) NOT NULL,
  course VARCHAR(20) NOT NULL,
  confirmed BOOLEAN DEFAULT FALSE,
  task VARCHAR(30),
  
  PRIMARY KEY(IDUser,IDEvent),
  
  FOREIGN KEY(IDUser) REFERENCES GB_User(IDUser)
  		ON DELETE NO ACTION
  		ON UPDATE CASCADE,
        
  FOREIGN KEY(IDEvent) REFERENCES GB_Event(IDEvent)
  		ON DELETE NO ACTION
  		ON UPDATE CASCADE
);



CREATE TABLE GB_SubscriveActivity
(
  IDActivity INT NOT NULL,
  IDOrganization INT NOT NULL,
  
  PRIMARY KEY(IDActivity,IDOrganization),
  
  FOREIGN KEY(IDActivity) REFERENCES GB_Activity(IDActivity)
  		ON DELETE CASCADE
  		ON UPDATE CASCADE,
        
  FOREIGN KEY(IDOrganization) REFERENCES GB_Organization(IDOrganization)
  		ON DELETE CASCADE
  		ON UPDATE CASCADE
);














INSERT INTO GB_School(name, address)
VALUES
	('ITT Buonarroti-Pozzo','Via Brigata acqui, 15, 38122 Trento (TN)'),
    ('ITT Marconi','Via Monti, 1, 38068 Rovereto (TN)'),
    ('IFPA Rovereto','Viale dei Colli, 17, 38068 Rovereto (TN)');
    

INSERT INTO GB_Role(IDRole, it)
VALUES
	(0,'Superuser'),
    (11,'Studente'),
    (10,'Studente Admin'),
    (21,'Docente'),
    (20,'Docente Admin'),
    (31,'Utente Organizzazione'),
    (30,'Admin Organizzazione');
    
    
INSERT INTO GB_User(name, lastname, phone, mail, psw, stat, IDSchool, IDRole)
VALUES
	('Edoardo', 'Cellana', '00393659989708', 'edoardo.cellana@someprovider.com', 'passwordadmin', 1,3,0),
    ('luca', 'Montel', '00393457725763', 'luca.montel@someprovider.com', 'lamiapassword', 1,1,10),
    ('Giovanni', 'Montel', '00393468893685', 'giovanni.montel@someprovider.com', 'lamiavita', 0,2,11),
    ('Francesco', 'Dellai', '00393237859334', 'francesco.dellai@someprovider.com', 'faschifo', 1,3,20),
    ('luca', 'Rossi', '00393930468263', 'luca.rossi@someprovider.com', 'losappiamotutti', 3,3,11);
    
    
INSERT INTO GB_Project(name, description, stat)
VALUES
	('OLTRE','Il progetto Oltre vuole favorire l’incontro e le relazioni, così da sviluppare l’aspetto empatico della personalità nei ragazzi e anche permettere loro la conoscenza di realtà locali','Attivato'),
    ('MECCANICI SENZA LAVORO','Visite in officina','Attivato'),
    ('ASL','Progetto di Alternanza Scuola-Lavoro','Disattivato');
 
 
INSERT INTO GB_Collaborate(IDSchool, IDProject, Manage)
VALUES
	(3,1,1),
    (2,2,1),
    (3,3,2),
    (1,3,1);
    
    
INSERT INTO GB_Activity(name, stat, IDProject)
VALUES
	('Cena di Natale','Attivato',1),
    ('Officina Vespa','Disattivato',2),
    ('Progetto NOI','Attivato',3);
    
    
INSERT INTO GB_Event(name, start_date, stat, end_sub_date, IDActivity)
VALUES
	('RSA','2018-11-23','Attivato','2018-11-23',1),
    ('Acquila Basket','2018-09-11','Attivato','2019-06-06',1),
    ('Smontaggio Carburatore','2018-10-11','Disattivato','2018-10-11',2);
    
    
INSERT INTO GB_Organization(name, mail, phone, business_name)
VALUES
	('NOI Associazione','noiassociazione@someprovider.it','00393758826385','19834627485936274856'),
    ('Smart X','smartxcompany@someprovider.it','00393337586926','16749673422765469098'),
    ('Caritas','caritassociale@someprovider.it','00393247789890','19834627485936274856'),
    ('CBI','cbicompany@someprovider.it','00393214796843','1239874538104723');


INSERT INTO GB_SubscriveActivity(IDActivity,IDOrganization)
VALUES
	(1,2),
    (2,3),
    (1,1);

