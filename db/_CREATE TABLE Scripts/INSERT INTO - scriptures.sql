--Add Values to Scriptures Table (W05 Teach
INSERT INTO scriptures(scriptures_book, scriptures_chapter, scriptures_verse, scriptures_content)
VALUES ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.'),
('Doctrine and Covenants', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'),
('Doctrine and Covenants', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'),
('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.');

                                  
                                  
INSERT INTO scriptures (book, chapter, verse, content)
VALUES
('boooook', 55, 22, 'cooooooonttteeennnt');
INSERT INTO  topic_to_scripture_lookup (topic_id, scriptures_id)
VALUES
(1, 1),
(2, 1),
(3, 1)
;
