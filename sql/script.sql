create table produtos (
	id integer not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(100) not null,
    valor decimal(10,2) not null,
    marca varchar(100) not null,
    quantidade integer not null
);

CREATE TABLE `pessoas` (
  `id` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;