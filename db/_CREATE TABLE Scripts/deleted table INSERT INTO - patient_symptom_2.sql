/* first insert was before column 'patient_visit_2' was added patient_symptom_2
*/
INSERT INTO  patient_symptom_2 
(symptom_name, symptom_description, symptom_notes, 
 patient_id)
VALUES
('Neck Pain', 'Upper Neck Subluxation', 'Patient is experiencing tingling sensation, and her pain level is at a 7. She is unable to move her neck to the left.', 
 (SELECT patient_id FROM patient_2 WHERE
  patient_firstname='Katelyn' AND 
  patient_lastname='Tanton' AND 
  patient_email='katie@email.com')
 );
 

/* second insert was AFTER column 'patient_visit_2' was added patient_symptom_2
*/   
INSERT INTO  patient_symptom_2 
(symptom_name, symptom_description, symptom_notes, 
 patient_id, patient_visit_id)
VALUES
('Shoulder Pain', 'Shoulder Subluxation', 'Patient is experiencing mild numbness on left side of upper back. Her pain level is at a 5.', 
 (SELECT patient_id FROM patient_2 WHERE
  patient_firstname='Katelyn' AND 
  patient_lastname='Tanton' AND 
  patient_email='katie@email.com'),
  (SELECT patient_visit_id FROM patient_visit_2 WHERE
  patient_visit_2.patient_id=patient_2.patient_id)
 );
 