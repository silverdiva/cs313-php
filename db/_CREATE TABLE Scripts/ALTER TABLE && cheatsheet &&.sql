
ALTER TABLE [Table] ADD CONSTRAINT [Constraint] DEFAULT 0 FOR [Column];
ALTER TABLE [Table] ALTER COLUMN [Column] INTEGER NOT NULL


ALTER TABLE <table> ALTER COLUMN <column> DROP DEFAULT;

**2-step process: needed to add 'patient_firstname' to patient_visit, but patient.patient_firstname column was set to 
NOT NULL, so I had to DROP NOT NULL before I could ADD patient_firstname to tblPatient_visit

1-ALTER TABLE patient ALTER COLUMN patient_firstname DROP NOT NULL;

2-ALTER TABLE patient_visit ADD COLUMN patient_firstname varchar(255)NULL;