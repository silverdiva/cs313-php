CREATE TABLE  patient_notes (
   patient_notes_id  serial   PRIMARY KEY,
   patient_id   int NOT NULL REFERENCES patient(patient_id),
   chiropractor_id   int NOT NULL REFERENCES chiropractor(chiropractor_id),
   patient_notes  varchar(255) NOT NULL
); 

