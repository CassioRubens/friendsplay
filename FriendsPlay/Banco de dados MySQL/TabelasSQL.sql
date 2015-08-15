--O banco de dados sofreu algumas alterações
--caso voces tenham duvidas ou sugestões é só chamar 

CREATE TABLE Usuario (
link_usuario varchar,
nome_usuario varchar,
data_de_nascimento_usuario date,
genero_usuario varchar,
id_usuario varchar PRIMARY KEY
)

CREATE TABLE Categoria_Esportiva (
nome_categ_esportiva varchar,
num_min_participantes_cat integer,
num_max_participantes_cat integer,
id_categoria_esportiva_cat varchar PRIMARY KEY,
num_atual_participante_cat integer
)

CREATE TABLE Convite (
id_convite varchar PRIMARY KEY,
id_vento varchar,
resposta_convite boolean
)

CREATE TABLE Evento (
id_evento varchar PRIMARY KEY,
nome_evento varchar,
data_evento date,
horario_evento time,
local_evento varchar,
descricao_evento varchar,
privacidade_evento varchar,
id_categoria_esportiva_evento varchar,
id_criador_evento varchar,
contador_participantes_evento integer,
FOREIGN KEY(id_categoria_esportiva_evento) REFERENCES Categoria_Esportiva (id_categoria_esportiva_cat),
FOREIGN KEY(id_criador_evento) REFERENCES Usuario (id_usuario)
)

ALTER TABLE Categoria_Esportiva ADD FOREIGN KEY(num_atual_participante_cat) REFERENCES Evento (id_evento)
ALTER TABLE Convite ADD FOREIGN KEY(id_vento) REFERENCES Convite (id_convite)

