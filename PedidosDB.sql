CREATE DATABASE PedidosDB;
USE PedidosDB;

CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(50),
    produto VARCHAR(50),
    valor DECIMAL(10, 2),
    quantidade INT,
    data_hora TIMESTAMP DEFAULT NOW()
);
