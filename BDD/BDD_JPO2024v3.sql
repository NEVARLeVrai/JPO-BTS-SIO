-- Création de la base de données
USE JPO2024;

-- Création de la table FORMATIONS
CREATE TABLE IF NOT EXISTS FORMATIONS (
    sigleF CHAR(10) PRIMARY KEY NOT NULL, 
    salleF VARCHAR(7),
    intituleF VARCHAR(50),
    mdpF VARCHAR(10)
);

-- Création de la table VISITEURS
CREATE TABLE IF NOT EXISTS VISITEURS (
    numV INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nomV VARCHAR(30),
    prenomV VARCHAR(30),
    villeV VARCHAR(30),
    emailV VARCHAR(30),
    villedeEtablissementV VARCHAR(30),
    etablissementV CHAR(50),
    CursusV VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS VISITES (
    sigleF VARCHAR(10),
    numV INT(10),
    horairePassage TIME,
    postuleV TINYINT(1),
    ailleursV TINYINT(1),
    primary KEY(sigleF, numV)
);

ALTER TABLE VISITES 
ADD CONSTRAINT fk_formations_visite_sigleF
FOREIGN KEY (sigleF)
REFERENCES FORMATIONS(sigleF);


ALTER TABLE VISITES 
ADD CONSTRAINT fk_formations_visiteurs_numV
FOREIGN KEY (numV) 
REFERENCES VISITEURS(numV);

-- Insertion de données dans la table FORMATIONS
INSERT INTO FORMATIONS (sigleF, salleF, intituleF, mdpF) VALUES
('STMGSIG', 'C301', 'Terminale Systèmes d''Information et de Gestion','stmgsig'),
('BTSBANQUE', 'C218', 'BTS Banque Conseiller de Clientèle','btsbanque'),
('BTSCI', 'C117', 'BTS Commerce International','btsci'),
('BTSCOMM', 'C212', 'BTS Communication','btscomm'),
('BTSCG', 'C308', 'BTS Comptabilité Gestion','btscg'),
('BTSGPME', 'CB206', 'BTS Gestion de la PME','btsgpme'),
('BTSSAM', 'C112', 'BTS Support à l''action managériale','btssam'),
('BTSMCO', 'CB208', 'BTS Management commercial opérationnel','btsmco'),
('BTSSIO', 'C015', 'BTS Services Informatiques aux Organisations','btssio'),
('ECP', 'CB108', 'Prepa Économique et Commerciale','ecp'),
('ENS', 'CB107', 'Ecole Normale Supérieure','ens'),
('ECT', 'CB105', 'Prepa Économique et Commerciale Technologique','ect'),
('ATS', 'CB106', 'Adaptation Technicien Supérieur','ats'),
('DCG', 'C211', 'Diplôme de Comptabilité Gestion','dcg'),
('SNO', 'C214', 'Services Numériques aux Organisations','sno');

-- Insertion de données dans la table VISITEURS
INSERT INTO VISITEURS (nomV, prenomV, villeV, emailV, villedeEtablissementV, etablissementV, CursusV) VALUES
('Dupont', 'Jean', 'Paris', 'jean.dupont@email.com', 'Paris', 'Etablissement A', 'Informatique'),
('Martin', 'Sophie', 'Lyon', 'sophie.martin@email.com', 'Lyon', 'Etablissement B', 'Génie Civil'),
('Leclerc', 'Paul', 'Marseille', 'paul.leclerc@email.com', 'Marseille', 'Etablissement C', 'Chimie');

-- Insertion de données dans la table VISITES
INSERT INTO VISITES (sigleF, numV, horairePassage, postuleV, ailleursV) VALUES
('BTSSIO', '1', '10:20:30', 1, 0),
('ENS', '2', '15:25:35', 0, 1),
('SNO', '3', '18:28:38', 1, 0);
