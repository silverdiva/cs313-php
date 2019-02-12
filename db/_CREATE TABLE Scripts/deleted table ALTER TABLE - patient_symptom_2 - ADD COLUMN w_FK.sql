//step 1 - add new column
ALTER TABLE patient_symptom_2 ADD COLUMN patient_visit_id int; 

// step 2 - add fk constraint
ALTER TABLE patient_symptom_2 
ADD CONSTRAINT fk_patientSymptom2_patientVisitId FOREIGN KEY (patient_visit_id) 
REFERENCES patient_visit_2(patient_visit_id); 

