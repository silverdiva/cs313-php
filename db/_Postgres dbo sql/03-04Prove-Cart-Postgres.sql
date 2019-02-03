CREATE TABLE  orders  (
   order_id  serial PRIMARY KEY,
   order_date  date NOT NULL DEFAULT CURRENT_TIMESTAMP,
   order_name  varchar(255) NOT NULL,
   order_email  varchar(255) NOT NULL
);

CREATE TABLE  orders_items  (
   order_id  serial PRIMARY KEY REFERENCES orders(order_id),
   product_id  int NOT NULL REFERENCES products(product_id),
   quantity  int NOT NULL
); 

CREATE TABLE  products  (
   product_id  serial   PRIMARY KEY,
   product_name  varchar(255) NOT NULL,
   product_image  varchar(255) DEFAULT NULL,
   product_description  text,
   product_price  decimal(10,2) NOT NULL DEFAULT  0.00 
); 




