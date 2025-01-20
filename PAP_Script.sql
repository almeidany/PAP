create database roboticscoderaul_web;

use roboticscoderaul_web;

CREATE TABLE formInsc (
    id_forminsc INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    primeiro_nome VARCHAR(100) NOT NULL,
    apelido VARCHAR(100) NOT NULL,
    data_nascimento DATE NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    numero_telefone VARCHAR(15),
    numero_processo INT NOT NULL UNIQUE,
    data_inscricao DATE NOT NULL,
    turma VARCHAR(50) NOT NULL,
    tamanho_tshirt VARCHAR(10)  NOT NULL,
    alergias_alimentares ENUM('Sim', 'Não', 'Outros'),
    autorizacao_imagem ENUM('Sim', 'Não'),
    descricao_alergias TEXT,
    foto LONGBLOB NOT NULL
);

CREATE TABLE aluno (
    id_aluno INT AUTO_INCREMENT PRIMARY KEY,
    numero_processo INT NOT NULL UNIQUE,
    primeiro_nome VARCHAR(100),
    apelido VARCHAR(100),
    data_nascimento DATE,
    email VARCHAR(150),
    numero_telefone VARCHAR(15),
    turma VARCHAR(50),
    tamanho_tshirt VARCHAR(10),
    alergias_alimentares ENUM('Sim', 'Não', 'Outros'),
    descricao_alergias TEXT,
    foto LONGBLOB,
    FOREIGN KEY (numero_processo_escolar) REFERENCES formInsc(numero_processo_escolar)
);


CREATE TABLE utilizador (
    id_utilizador INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    FOREIGN KEY (email) REFERENCES formInsc(email) -- Relaciona o email com os dados do formulário
);

use biblioteca;

