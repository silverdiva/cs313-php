CREATE TABLE user_table (
   user_id         serial        PRIMARY KEY,
   username         varchar(255)     UNIQUE NOT NULL,
   user_password     varchar(255)     NOT NULL,
   user_email         varchar(255)     UNIQUE NOT NULL,
   created_on         TIMESTAMP     NOT NULL,
   last_login         TIMESTAMP
);
