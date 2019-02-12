CREATE TABLE  chiropractor (
   chiropractor_id  serial   PRIMARY KEY,
   patient_visit_id   int NOT NULL REFERENCES patient_visit(patient_visit_id),
   chiropractor_firstname  varchar(255) NOT NULL,
   chiropractor_lastname  varchar(255) NOT NULL,
   chiropractor_office  varchar(255) NOT NULL
); 
