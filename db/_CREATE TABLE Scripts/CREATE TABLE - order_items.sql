CREATE TABLE  orders_items  (
   order_id  serial PRIMARY KEY REFERENCES orders(order_id),
   product_id  int NOT NULL REFERENCES products(product_id),
   quantity  int NOT NULL
); 

