--create Scriptures table (Team.Wk5-Core1)--
CREATE TABLE scriptures (
    scriptures_id serial PRIMARY KEY,
    scriptures_book VARCHAR(40),
    scriptures_chapter INT,
    scriptures_verse INT,
    scriptures_content varchar(1000)
);

--Add Values to Scriptures Table (Team.Wk5-Core2)--
INSERT INTO scriptures(scriptures_book, scriptures_chapter, scriptures_verse, scriptures_content)
VALUES ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.'),
        ('Doctrine and Covenants', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'),
        ('Doctrine and Covenants', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'),
        ('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');