CREATE TABLE patient  (
   patient_id   serial PRIMARY KEY,
   patient_firstname  varchar(255) NOT NULL,
   patient_lastname  varchar(255) NOT NULL,
   patient_email varchar (255) NOT NULL UNIQUE,
   patient_phone  varchar(25) NOT NULL,
   patient_address  varchar(255) NOT NULL,
   created_on  TIMESTAMP  NOT NULL,
   last_login  TIMESTAMP
); 
