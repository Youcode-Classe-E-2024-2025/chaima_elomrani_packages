-- création des tableaux

CREATE TABLE auteurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  email VARCHAR(150) UNIQUE NOT NULL,
  date_inscription DATE NOT NULL
);


CREATE TABLE packages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NULL,
  description TEXT,
 
  
);


CREATE TABLE collaborations (
	id INT AUTO_INCREMENT PRIMARY KEY, 
    id_auteurs INT NOT NULL,
    id_packages INT NOT NULL,
    FOREIGN KEY (id_auteurs) REFERENCES auteurs(id) ON DELETE CASCADE,
    FOREIGN KEY (id_packages) REFERENCES packages(id) ON  DELETE CASCADE
  
);


CREATE TABLE versions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  packages_id INT, 
  version_number VARCHAR(50),
  date_realisation DATE,
  FOREIGN KEY (package_id) REFERENCES packages(id) ON DELETE CASCADE 
    
);