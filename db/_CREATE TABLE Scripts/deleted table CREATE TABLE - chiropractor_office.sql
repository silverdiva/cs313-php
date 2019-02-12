CREATE TABLE  chiropractor_office (
   chiropractor_office_id  serial   PRIMARY KEY,
   chiropractor_id   int NOT NULL REFERENCES chiropractor(chiropractor_id),
   patient_visit_id   int NOT NULL REFERENCES patient_visit(patient_visit_id),
   chiropractor_office_name  varchar(255) NOT NULL,
   chiropractor_office_state  varchar(2) NOT NULL
); 
