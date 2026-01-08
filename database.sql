
CREATE DATABASE IF NOT EXISTS medbooking;
USE medbooking;

-
CREATE TABLE IF NOT EXISTS pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100),
    telefone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


INSERT INTO pacientes (nome, email, telefone) VALUES 
('José Cecílio', 'jose@email.com', '(83) 99999-8888'),
('Maria Silva', 'maria@email.com', '(11) 98888-7777');