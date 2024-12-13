-- création des tableaux

CREATE TABLE auteurs (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  email VARCHAR(150) UNIQUE NOT NULL
 
);


CREATE TABLE packages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titre VARCHAR(100) NOT NULL,
  description TEXT,
  FOREIGN KEY (id_auteurs) REFERENCES auteurs(id) ON DELETE CASCADE
 
  
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
  FOREIGN KEY (package_id) REFERENCES packages(id) ON DELETE CASCADE, 
    
);

INSERT INTO auteurs (name, email) VALUES
('John Doe', 'john.doe@example.com'),
('Jane Smith', 'jane.smith@example.com'),
('Ahmed Ali', 'ahmed.ali@example.com'),
('Clara Dupont', 'clara.dupont@example.com'),
('William Brown', 'william.brown@example.com'),
('Sarah Johnson', 'sarah.johnson@example.com'),
('Ali Hassan', 'ali.hassan@example.com'),
('Emily Watson', 'emily.watson@example.com'),
('Omar Farah', 'omar.farah@example.com'),
('Sophie Laurent', 'sophie.laurent@example.com')



INSERT INTO packages (titre, description) VALUES
('React.js', 'A JavaScript library for building user interfaces, developed by Facebook.'),
('Vue.js', 'A progressive framework for building modern web interfaces and SPAs.'),
('Angular', 'A platform for building mobile and desktop web applications by Google.'),
('jQuery', 'A lightweight JavaScript library for easier DOM manipulation and event handling.'),
('D3.js', 'A library for producing dynamic, interactive data visualizations in web browsers.'),
('Lodash', 'A utility library delivering consistency, modularity, and performance.'),
('Chart.js', 'A simple yet flexible JavaScript library for creating charts and graphs.'),
('Axios', 'A promise-based HTTP client for making API requests in browsers and Node.js.'),
('Moment.js', 'A library for parsing, validating, and formatting dates in JavaScript.'),
('Three.js', 'A library for creating 3D animations and graphics in the browser.')


INSERT INTO versions (version_number, date_realisation) VALUES
('18.2.0'),
('3.2.47'),
('16.1.3'),
('3.6.4'),
('7.8.4'),
('4.17.21'),
('4.4.1'),
('1.5.0'),
('2.29.4'),
('0.158.0')

