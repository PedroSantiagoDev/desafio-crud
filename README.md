
# Projeto de Gerenciamento de Tarefas

Este é um projeto de exemplo para gerenciamento de tarefas. Antes de iniciar, certifique-se de criar o banco de dados e a tabela necessários.

- CREATE DATABASE task;
- USE task;

CREATE TABLE tasks (
  id INT NOT NULL AUTO_INCREMENT,
  title VARCHAR(255),
  description VARCHAR(255),
  PRIMARY KEY (id)
);
## Script
- composer dump-autoload -o
- composer require filp/whoops
## Pré-requisitos

Antes de iniciar, você precisará ter o seguinte instalado em sua máquina:

- PHP
- Banco de dados MySQL

