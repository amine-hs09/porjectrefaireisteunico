-- SQL schema for Unico Consult project
-- Create database and table for messages

CREATE DATABASE IF NOT EXISTS unico CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE unico;

CREATE TABLE IF NOT EXISTS messages (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(255) NOT NULL,
  subject VARCHAR(255) NOT NULL,
  message TEXT NOT NULL,
  status ENUM('Nouveau', 'En cours', 'Traité') DEFAULT 'Nouveau',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
