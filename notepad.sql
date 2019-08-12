/*CREATE DATABASE IF NOT EXISTS API_notes;

CREATE TABLE IF NOT EXISTS notes (
ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT , 
title varchar(255) UNIQUE NOT NULL, 
content varchar
); 
*/ 


CREATE TABLE notes (
  ID int(11) NOT NULL,
  title varchar(255) NOT NULL,
  content varchar(255) NOT NULL
) 