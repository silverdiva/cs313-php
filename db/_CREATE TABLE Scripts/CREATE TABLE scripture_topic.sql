CREATE TABLE topic (
  topic_id serial PRIMARY KEY,
  name varchar(100) NOT NULL
  );


CREATE TABLE scriptures_topic (
  scriptures_id int NOT NULL REFERENCES scriptures(scriptures_id),
  topic_id int NOT NULL REFERENCES topic(topic_id)
  );


INSERT INTO topic (name) 
VALUES ('Faith');
INSERT INTO topic (name) 
VALUES ('Sacrifice');
INSERT INTO topic (name) 
VALUES ('Charity');