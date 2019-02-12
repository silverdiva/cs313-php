CREATE TABLE  patient_treatment  (
   patient_treatment_id   serial PRIMARY KEY,
   patient_visit_id   int NOT NULL REFERENCES patient_visit(patient_visit_id),
   chiropractor_id   int NOT NULL REFERENCES chiropractor(chiropractor_id),
   patient_symptom_id  int NOT NULL REFERENCES patient_symptom(patient_symptom_id),
   patient_treatment_date  date NOT NULL DEFAULT CURRENT_TIMESTAMP
); 
