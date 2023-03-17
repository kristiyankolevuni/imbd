SET NAMES 'utf8';

DROP DATABASE IF EXISTS imbd;

CREATE DATABASE imbd CHARACTER SET utf8 COLLATE utf8_general_ci;

GRANT ALL ON imbd.* TO 'db_user'@'%' IDENTIFIED BY 'Password1';

USE imbd;

CREATE TABLE movie (id int primary key auto_increment, name varchar(50), rating int);

INSERT INTO movie (name, rating) VALUES ('The Shawshank Redemption', 93);
INSERT INTO movie (name, rating) VALUES ('The Godfather', 92);
INSERT INTO movie (name, rating) VALUES ('The Dark Knight', 90);
INSERT INTO movie (name, rating) VALUES ('The Godfather: Part II', 90);
INSERT INTO movie (name, rating) VALUES ('12 Angry Men', 89);
INSERT INTO movie (name, rating) VALUES ('Schindlers List', 89);
INSERT INTO movie (name, rating) VALUES ('The Lord of the Rings: The Return of the King', 89);
INSERT INTO movie (name, rating) VALUES ('Pulp Fiction ', 89);
INSERT INTO movie (name, rating) VALUES ('Forrest Gump ', 87);
INSERT INTO movie (name, rating) VALUES ('Star Wars: Episode V - The Empire Strikes Back', 87);

