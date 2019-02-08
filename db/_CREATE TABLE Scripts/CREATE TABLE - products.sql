CREATE TABLE  products  (
   product_id  serial   PRIMARY KEY,
   product_name  varchar(255) NOT NULL,
   product_image  varchar(255) DEFAULT NULL,
   product_description  text,
   product_price  decimal(10,2) NOT NULL DEFAULT  0.00 
); 
