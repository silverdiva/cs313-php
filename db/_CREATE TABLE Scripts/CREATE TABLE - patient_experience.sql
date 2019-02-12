CREATE TABLE  patient_experience (
   experience_id  serial   PRIMARY KEY,
   patient_id   int NOT NULL REFERENCES patient(patient_id),
   chiropractor_id   int NOT NULL REFERENCES chiropractor(chiropractor_id),
   experience_date  date NULL,
   experience_symptom  varchar(255) NULL,
   experience_treatment  varchar(255) NULL
); 
