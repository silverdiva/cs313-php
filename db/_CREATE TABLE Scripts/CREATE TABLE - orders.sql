CREATE TABLE  orders  (
   order_id  serial PRIMARY KEY,
   order_date  date NOT NULL DEFAULT CURRENT_TIMESTAMP,
   order_name  varchar(255) NOT NULL,
   order_email  varchar(255) NOT NULL
);





