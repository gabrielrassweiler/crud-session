create table produtos (
	id integer not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    valor decimal(10,2) not null,
    marca varchar(100) not null,
    quantidade integer not null
);