drop database askcode;
create database askcode;

CREATE TABLE User (
  userID int AUTO_INCREMENT PRIMARY key NOT NULL,
  Username varchar(30) NOT NULL,
  Useremail varchar(35) NOT NULL,
  UserPassword varchar(40) NOT NULL,
  dateRegistered TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);
describe User;

CREATE TABLE department (
  programming boolean DEFAULT 0,
  Windows boolean DEFAULT 0,
  macOs boolean DEFAULT 0,
  Linux boolean DEFAULT 0,
  Android boolean DEFAULT 0,
  iOS boolean DEFAULT 0,
  prblm_ID int, --foreign key
  FOREIGN key(prblm_ID) REFERENCES problem(prblm_ID)
);
describe department;

CREATE TABLE Solution (
  sol_ID int PRIMARY key NOT NULL,
  prblm_solution LONGTEXT,
  who_answer varchar(30),
  answer_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  prblm_ID int, --foreign key
  userID int, --foreign key
  FOREIGN key(prblm_ID) REFERENCES problem(prblm_ID),
  FOREIGN key(userID) REFERENCES User(userID)
);
describe Solution;

CREATE TABLE problem (
  prblm_ID int PRIMARY key NOT NULL,
  prblm_title varchar(50),
  prblm_description LONGTEXT,
  who_ask varchar(30),
  ask_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  sol_ID int, --foreign key
  FOREIGN key(sol_ID) REFERENCES Solution(sol_ID),
);
describe problem;
