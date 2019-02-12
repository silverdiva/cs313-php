CREATE TABLE  patient_contact  (
   patient_contact_id   serial PRIMARY KEY,
   patient_id   int NOT NULL REFERENCES patient(patient_id),
   patient_email  varchar (255) NOT NULL UNIQUE,
   patient_phone  varchar(25) NOT NULL,
   patient_address  varchar(255) NOT NULL
); 
