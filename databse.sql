
CREATE TABLE Risques (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom_risque VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    probabilite FLOAT(3) NOT NULL,
    impact FLOAT(3) NOT NULL,
    date_enregistrement TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )
CREATE TABLE risques (
    id INT NOT NULL AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    cause TEXT NOT NULL,
    impact VARCHAR(50) NOT NULL,
    probalite INT NOT NULL,
    couleur VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE matrice_impact (
    id INT NOT NULL AUTO_INCREMENT,
    niveau1 VARCHAR(50) NOT NULL,
    niveau2 VARCHAR(50) NOT NULL,
    niveau3 VARCHAR(50) NOT NULL,
    niveau4 VARCHAR(50) NOT NULL,
    couleur VARCHAR(10) NOT NULL,
    PRIMARY KEY (id)
);