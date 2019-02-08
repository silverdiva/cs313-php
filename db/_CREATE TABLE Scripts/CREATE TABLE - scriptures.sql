CREATE TABLE scriptures (
scriptures_id serial PRIMARY KEY,
scriptures_book VARCHAR(40),
scriptures_chapter INT,
scriptures_verse INT,
scriptures_content varchar(1000)
);
