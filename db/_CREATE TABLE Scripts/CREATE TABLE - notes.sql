CREATE TABLE notes (
   note_id        serial        PRIMARY KEY,
   user_id        int        NOT NULL REFERENCES user_table(user_id),
   talk_id        int        NOT NULL REFERENCES talk(talk_id),
   notes_text        text        NOT NULL
);