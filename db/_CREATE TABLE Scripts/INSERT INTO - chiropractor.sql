 INSERT INTO chiropractor
 (chiropractor_firstname, chiropractor_lastname, chiropractor_office, patient_visit_id)
 VALUES
 ('Dan', 'Higgins''Happy Back'), (SELECT patient_visit_id FROM patient_visit WHERE patient_visit_id=patient.patient_id)