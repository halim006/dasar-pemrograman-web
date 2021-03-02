create table products
(
    id          varchar(10)  not null,
    name        varchar(100) not null,
    description text,
    price       int unsigned not null,
    quantity    int unsigned not null default 0,
    created_at  timestamp    not null default current_timestamp
) engine = InnoDB

show tables;
describe products;
insert into products (id, name, price, quantity)
values ('P0001', 'Mie Ayam', 15000, 100),
       ('P0002', 'Mie Ayam Yamin', 20000, 100),
       ('P0003', 'Mie Ayam Spesial', 23000, 100),
       ('P0004', 'Mie Ayam Ceker', 18000, 100),
       ('P0005', 'Bakso Biasa', 15000, 100),
       ('P0006', 'Bakso Urat', 18000, 100),
       ('P0007', 'Bakso Cingcang', 18000, 100),
       ('P0008', 'Bakso Beranak', 30000, 100);
insert into products(id, name, description, price, quantity)
values ('P0009', 'MieAyam Bakso', 'Mie Ayam + Bakso Kecil', 20000, 100),
       ('P0010', 'Paket Spesial', 'Mie Ayam + Bakso + Teh Botol', 35000, 30);
select *
from products;

alter table products
    add primary key (id);

alter table products
    add column category enum ('makanan','minuman','lain-lain')
        after name;

update products
set category = 'makanan'
where id = 'P0001';

INSERT INTO products(id, category, name, price, quantity)
VALUES ('P0011', 'Makanan', 'Bakso Rusuk', 25000, 200),
       ('P0012', 'Minuman', 'Es Jeruk', 10000, 300),
       ('P0013', 'Minuman', 'Es Campur', 15000, 500),
       ('P0014', 'Minuman', 'Es Teh Manis', 5000, 400),
       ('P0015', 'Lain-Lain', 'Kerupuk', 2500, 1000),
       ('P0016', 'Lain-Lain', 'Keripik Udang', 10000, 300),
       ('P0017', 'Lain-Lain', 'Es Krim', 5000, 200),
       ('P0018', 'Makanan', 'Mie Ayam Jamur', 20000, 50),
       ('P0019', 'Makanan', 'Bakso Telor', 20000, 150),
       ('P0020', 'Makanan', 'Bakso Jando', 25000, 300);

select *
from products
where quantity > 100;

SELECT *
FROM products
WHERE (category = 'Makanan' OR quantity > 500)
  AND price > 20000;

SELECT *
FROM products
WHERE name LIKE '%mie%';

SELECT *
FROM products
WHERE description IS NULL;

SELECT *
FROM products
WHERE description IS NOT NULL;

SELECT *
FROM products
WHERE price BETWEEN 10000 AND 20000;

SELECT *
FROM products
WHERE category IN ('Makanan', 'Minuman');

SELECT id, category, price, name
FROM products
ORDER BY category ASC, price DESC;

SELECT *
FROM products
ORDER BY id
LIMIT 5, 5;

SELECT DISTINCT category
FROM products;

SELECT 10 * 10 as Hasil;

SELECT id, name, price, price DIV 1000 AS 'Price in K'
FROM products;

SELECT id,
       LOWER(name)  as 'Name Lower',
       UPPER(name)  as 'Name Lower',
       LENGTH(name) as 'Name Length'
FROM products;

SELECT id, created_at, YEAR(created_at), MONTH(created_at)
FROM products;

SELECT id,
       category,
       CASE category
           WHEN 'Makanan' THEN 'Enak'
           WHEN 'Minuman' THEN 'Segar'
           ELSE 'Apa Itu?'
           END AS 'Category'
FROM products;

SELECT id,
       price,
       IF(price <= 15000, 'Murah', IF(price <= 20000, 'Mahal', 'Mahal Banget')) as 'Mahal?'
FROM products;

SELECT id, name, IFNULL(description, 'Kosong')
FROM products;

SELECT AVG(price) as 'Rata-Rata Harga'
FROM products;

SELECT SUM(quantity) AS 'Total Stock'
FROM products;

SELECT COUNT(id) as 'Total Product', category
FROM products
GROUP BY category;
