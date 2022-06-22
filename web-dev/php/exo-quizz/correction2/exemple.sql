-- création de la table questions
CREATE TABLE questions (
  id int,
  response int,
  title varchar(255)
);

-- insertion des données
INSERT INTO questions (id, response, title)
VALUES (1, 0, "La capitale de l'Italie est Turin");

INSERT INTO questions (id, response, title)
VALUES (2, 0, "Le Mali est une pays d'Amérique du Sud");
INSERT INTO questions (id, response, title)
VALUES (3, 1, "React est un framework JavaScript");

INSERT INTO questions (id, response, title)
VALUES (4, 0, "HTML est un langage de programmation");

INSERT INTO questions (id, response, title)
VALUES (5, 1, "La Juventus est l'équipe ayant le plus de scudetti");