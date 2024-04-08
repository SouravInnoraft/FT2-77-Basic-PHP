create table User (
Email_id VARCHAR(255) PRIMARY KEY,
User_firstname VARCHAR(50),
User_lastname VARCHAR(50),
Password VARCHAR(255)
);
ALTER TABLE User
  ADD `reset_token_hash` VARCHAR(64) NULL DEFAULT NULL,
  ADD `reset_token_expires_at` DATETIME NULL DEFAULT NULL,
  ADD UNIQUE (`reset_token_hash`);

create table image_table (
  time DATETIME PRIMARY KEY,
  text VARCHAR(255),
  image LONGBLOB,
  Email_id VARCHAR(255),
  FOREIGN KEY (Email_id) REFERENCES User (Email_id)
);


