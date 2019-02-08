CREATE TABLE talk (
   talk_id        serial        PRIMARY KEY,
   speaker_id        int        NOT NULL REFERENCES speakers(speaker_id),
   talk_date        date        NOT NULL,
   talk_session    varchar(255)    NOT NULL,
   talk_url        varchar(255)    NOT NULL
);
