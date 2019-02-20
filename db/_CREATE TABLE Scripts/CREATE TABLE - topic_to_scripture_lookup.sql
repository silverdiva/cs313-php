CREATE TABLE topic_to_scripture_lookup (
    topic_id        int             NOT NULL REFERENCES topic(topic_id),
    scriptures_id    int             NOT NULL REFERENCES scriptures(scriptures_id)
);