SELECT
 customer.customer_id,
 customer.first_name customer_first_name,
 customer.last_name customer_last_name,
 customer.email,
 staff.first_name staff_first_name,
 staff.last_name staff_last_name,
 amount,
 payment_date
FROM
 customer
INNER JOIN payment ON payment.customer_id = customer.customer_id
INNER JOIN staff ON payment.staff_id = staff.staff_id;



SELECT
 patient_2.patient_id patient_2_id,
 patient_2.patient_firstname patient_firstname,
 patient_2.patient_lastname patient_lastname,
 patient_2.patient_email,
 patient_visit_2.patient_id patient_visit_2_id,
 patient_visit_date
FROM
 patient_2
INNER JOIN patient_visit_2 ON patient_visit_2.patient_id = patient_2.patient_id;


SELECT
 patient_2.patient_id patient_2_id,
 patient_2.patient_firstname patient_firstname,
 patient_2.patient_lastname patient_lastname,
 patient_2.patient_email,
 patient_visit_2.patient_id patient_visit_2_id,
 patient_visit_date
FROM
 patient_2
INNER JOIN patient_visit_2 ON patient_visit_2.patient_id = patient_2.patient_id

ORDER BY patient_2.patient_id ASC;