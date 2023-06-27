CREATE TABLE users 
( id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(128) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  firstName VARCHAR(50) NOT NULL,
  lastName VARCHAR(50) NOT NULL,
  phone_number VARCHAR(13) NOT NULL
);

/* a default test user*/
INSERT INTO users (email,password,firstName,lastName,phone_number) VALUES 
('test@example.com','test','User','Test','123456789');

CREATE TABLE messages
( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(128) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    message TEXT NOT NULL
);

INSERT INTO messages (name,email,subject,message) VALUES 
('Yong Yao Wen','yongyaowen@mail.com','Test Subject','What is a sample message?
Sample Messages means a document that has been created in accordance with a Draft 
Standard to test said Draft Standard. Sample Messages are typically created by 
one company and then read by a second company to assess whether the Draft Standard 
meets the requirements that led to the development of the Draft Standard');

CREATE TABLE cart (
    users_id INT,
    FOREIGN KEY(users_id)REFERENCES users(id),
    item_id INT NOT NULL,
    item_quantity INT NOT NULL
   
); 

INSERT INTO cart (users_id,item_id,item_quantity) VALUES
('1','1','12');


INSERT INTO cart (users_id,item_id,item_quantity) VALUES
('1','2','5');


INSERT INTO cart (users_id,item_id,item_quantity) VALUES
('1','3','3');

INSERT INTO cart (users_id,item_id,item_quantity) VALUES
('2','3','1');