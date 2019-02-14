SELECT patient_firstname, patient_lastname, experience_treatment, experience_office, patient_id, experience_id

FROM patient_2
INNER JOIN patient_experience ON patient_2.patient_id = patient_experience.experience_id;