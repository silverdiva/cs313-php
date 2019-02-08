CREATE TABLE user_table (
   user_id         serial        PRIMARY KEY,
   username         varchar(255)     UNIQUE NOT NULL,
   user_password     varchar(255)     NOT NULL,
   user_email         varchar(255)     UNIQUE NOT NULL,
   created_on         TIMESTAMP     NOT NULL,
   last_login         TIMESTAMP
);
CREATE TABLE speakers (
   speaker_id        serial        PRIMARY KEY,
   speaker_name    varchar(255)    NOT NULL
);
CREATE TABLE talk (
   talk_id        serial        PRIMARY KEY,
   speaker_id        int        NOT NULL REFERENCES speakers(speaker_id),
   talk_date        date        NOT NULL,
   talk_session    varchar(255)    NOT NULL,
   talk_url        varchar(255)    NOT NULL
);
CREATE TABLE notes (
   note_id        serial        PRIMARY KEY,
   user_id        int        NOT NULL REFERENCES user_table(user_id),
   talk_id        int        NOT NULL REFERENCES talk(talk_id),
   notes_text        text        NOT NULL
);