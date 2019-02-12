CREATE TABLE  patient_symptom_2  (
   patient_symptom_id   serial PRIMARY KEY,
   patient_id   int NOT NULL REFERENCES patient(patient_id),
   patient_visit_id int NOT NULL REFERENCES patient_visit_2(patient_visit_id),    
   symptom_name  varchar(255) NOT NULL,
   symptom_description varchar(1000) NOT NULL,
   symptom_notes   varchar(1000) NULL
); 
