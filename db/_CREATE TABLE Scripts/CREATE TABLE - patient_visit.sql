CREATE TABLE  patient_visit  (
   patient_visit_id  serial  PRIMARY KEY,
   patient_id  int NOT NULL REFERENCES patient(patient_id),
   patient_visit_date  date NOT NULL 
); 
