CREATE TABLE note (
id SERIAL,
userId INT NOT NULL,
content TEXT,
PRIMARY KEY (id),
FOREIGN KEY (userId) REFERENCES note_user (id)
);