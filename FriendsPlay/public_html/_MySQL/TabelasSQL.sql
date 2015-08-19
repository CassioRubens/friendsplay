--O banco de dados sofreu algumas alterações
--caso voces tenham duvidas ou sugestões é só chamar 

CREATE TABLE Usuario (
link_usuario varchar(50),
nome_usuario varchar(30),
data_de_nascimento_usuario date,
genero_usuario ENUM('M', 'F'),
id_usuario smallint PRIMARY KEY
)

CREATE TABLE Categoria_Esportiva (
nome_categ_esportiva varchar(30),
num_min_participantes_cat integer,
num_max_participantes_cat integer,
id_categoria_esportiva_cat smallint unsigned auto_increment PRIMARY KEY,
num_atual_participante_cat integer
)

CREATE TABLE Convite (
id_convite smallint unsigned auto_increment PRIMARY KEY,
id_vento smallint,
resposta_convite boolean
)

CREATE TABLE Evento ( 
id_evento smallint unsigned auto_increment, 
nome_evento varchar(50), 
data_evento date, 
horario_evento time,
local_evento varchar(50), 
descricao_evento varchar(200), 
privacidade_evento ENUM('publico', 'privado'), 
id_categoria_esportiva_cat SMALLINT unsigned, 
id_usuario SMALLINT unsigned, 
contador_participantes_evento integer, 
CONSTRAINT pk_evento PRIMARY KEY(id_evento), 
CONSTRAINT fk_categoria_evento FOREIGN KEY(id_categoria_esportiva_cat) 
        REFERENCES Categoria_Esportiva(id_categoria_esportiva_cat) )

