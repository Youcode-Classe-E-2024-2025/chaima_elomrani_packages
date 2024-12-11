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


INSERT INTO auteurs (name, email, date_inscription) VALUES
('John Doe', 'john.doe@example.com', '2024-01-10'),
('Jane Smith', 'jane.smith@example.com', '2023-12-15'),
('Ahmed Ali', 'ahmed.ali@example.com', '2024-03-05'),
('Clara Dupont', 'clara.dupont@example.com', '2024-07-20'),
('William Brown', 'william.brown@example.com', '2023-11-30'),
('Sarah Johnson', 'sarah.johnson@example.com', '2024-04-12'),
('Ali Hassan', 'ali.hassan@example.com', '2024-02-28'),
('Emily Watson', 'emily.watson@example.com', '2023-10-18'),
('Omar Farah', 'omar.farah@example.com', '2024-05-21'),
('Sophie Laurent', 'sophie.laurent@example.com', '2024-06-10')



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
('18.2.0', '2022-06-14'),
('3.2.47', '2023-01-16'),
('16.1.3', '2023-06-27'),
('3.6.4', '2022-11-08'),
('7.8.4', '2023-03-12'),
('4.17.21', '2021-04-21'),
('4.4.1', '2023-05-09'),
('1.5.0', '2023-08-12'),
('2.29.4', '2022-07-26'),
('0.158.0', '2023-02-10')

