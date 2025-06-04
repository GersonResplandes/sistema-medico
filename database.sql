CREATE DATABASE IF NOT EXISTS sistema_medico;
USE sistema_medico;

CREATE TABLE IF NOT EXISTS pacientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    idade INT NOT NULL,
    data_nascimento DATE NOT NULL,
    sexo CHAR(1) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    bairro VARCHAR(50) NOT NULL,
    cep VARCHAR(9) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado CHAR(2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS medicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL UNIQUE,
    idade INT NOT NULL,
    data_nascimento DATE NOT NULL,
    sexo CHAR(1) NOT NULL,
    rua VARCHAR(100) NOT NULL,
    bairro VARCHAR(50) NOT NULL,
    cep VARCHAR(9) NOT NULL,
    cidade VARCHAR(50) NOT NULL,
    estado CHAR(2) NOT NULL,
    especialidade VARCHAR(50) NOT NULL,
    crm VARCHAR(20) NOT NULL UNIQUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS consultas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    paciente_id INT NOT NULL,
    medico_id INT NOT NULL,
    data_consulta DATETIME NOT NULL,
    diagnostico TEXT NOT NULL,
    encaminhamento TEXT,
    exames TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (paciente_id) REFERENCES pacientes(id),
    FOREIGN KEY (medico_id) REFERENCES medicos(id)
);

INSERT INTO pacientes (nome, cpf, idade, data_nascimento, sexo, rua, bairro, cep, cidade, estado) VALUES
('Maria Silva', '123.456.789-00', 35, '1988-05-15', 'F', 'Rua das Flores', 'Centro', '12345-678', 'São Paulo', 'SP'),
('João Santos', '987.654.321-00', 42, '1981-03-20', 'M', 'Av. Principal', 'Jardim América', '54321-876', 'Rio de Janeiro', 'RJ'),
('Ana Oliveira', '456.789.123-00', 28, '1995-11-10', 'F', 'Rua dos Pássaros', 'Vila Nova', '98765-432', 'Belo Horizonte', 'MG'),
('Pedro Costa', '789.123.456-00', 50, '1973-07-25', 'M', 'Av. Paulista', 'Bela Vista', '45678-901', 'São Paulo', 'SP'),
('Carla Mendes', '321.654.987-00', 31, '1992-09-30', 'F', 'Rua das Palmeiras', 'Copacabana', '23456-789', 'Rio de Janeiro', 'RJ');

INSERT INTO medicos (nome, cpf, idade, data_nascimento, sexo, rua, bairro, cep, cidade, estado, especialidade, crm) VALUES
('Dr. Carlos Eduardo', '111.222.333-44', 45, '1978-04-12', 'M', 'Av. Rebouças', 'Pinheiros', '11223-344', 'São Paulo', 'SP', 'Cardiologia', '12345-SP'),
('Dra. Mariana Lima', '222.333.444-55', 38, '1985-08-25', 'F', 'Rua Augusta', 'Consolação', '22334-455', 'São Paulo', 'SP', 'Pediatria', '23456-SP'),
('Dr. Roberto Alves', '333.444.555-66', 52, '1971-12-03', 'M', 'Av. Rio Branco', 'Centro', '33445-566', 'Rio de Janeiro', 'RJ', 'Ortopedia', '34567-RJ'),
('Dra. Fernanda Costa', '444.555.666-77', 41, '1982-06-18', 'F', 'Rua das Acácias', 'Jardins', '44556-677', 'São Paulo', 'SP', 'Dermatologia', '45678-SP'),
('Dr. Lucas Mendes', '555.666.777-88', 36, '1987-02-28', 'M', 'Av. Nossa Senhora', 'Copacabana', '55667-788', 'Rio de Janeiro', 'RJ', 'Neurologia', '56789-RJ');

INSERT INTO consultas (paciente_id, medico_id, data_consulta, diagnostico, encaminhamento, exames) VALUES
(1, 1, '2024-03-15 09:00:00', 'Hipertensão arterial estágio 1', 'Acompanhamento mensal', 'Hemograma completo, Eletrocardiograma'),
(2, 3, '2024-03-15 10:30:00', 'Fratura de fêmur', 'Fisioterapia', 'Raio-X, Tomografia'),
(3, 2, '2024-03-15 14:00:00', 'Resfriado comum', 'Repouso e hidratação', 'Nenhum exame necessário'),
(4, 4, '2024-03-16 11:00:00', 'Dermatite atópica', 'Uso de creme hidratante', 'Biópsia de pele'),
(5, 5, '2024-03-16 15:30:00', 'Enxaqueca crônica', 'Acompanhamento neurológico', 'Ressonância magnética'); 