USE projeto;
CREATE TABLE musica (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    musica VARCHAR(50) NOT NULL,
    genero VARCHAR(100) NOT NULL,
    descricao VARCHAR(255) NOT NULL
);