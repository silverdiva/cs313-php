CREATE TABLE  patient_symptom  (
   patient_symptom_id   serial PRIMARY KEY,
   patient_id   int NOT NULL REFERENCES patient(patient_id),
   symptom_name  varchar(255) NOT NULL,
   symptom_detail  varchar(1000) NOT NULL
); 
