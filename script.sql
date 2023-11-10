DROP TABLE IF EXISTS sale;
DROP TABLE IF EXISTS "user";
DROP TABLE IF EXISTS product;
DROP TABLE IF EXISTS category;

CREATE TABLE category (
                          name TEXT NOT NULL,
                          description TEXT NOT NULL,
                          id SERIAL PRIMARY KEY
);

CREATE TABLE product (
                         name TEXT NOT NULL,
                         description TEXT NOT NULL,
                         price DECIMAL(6,2) NOT NULL,
                         image TEXT NOT NULL,
                         category_id INT NOT NULL UNIQUE REFERENCES category(id) ON DELETE CASCADE,
                         id SERIAL PRIMARY KEY
);

CREATE TABLE "user" (
                        name TEXT NOT NULL,
                        email TEXT NOT NULL,
                        secret VARCHAR(256) NOT NULL,
                        address_line2 TEXT,
                        address_line1 TEXT NOT NULL,
                        number_string CHAR(5) CHECK (number_string ~ '^[0-9]{5}$'),
                        address_city TEXT NOT NULL,
                        id SERIAL PRIMARY KEY
);

CREATE TABLE checkout (
                          id SERIAL NOT NULL PRIMARY KEY,
                          creation TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
                          user_id SERIAL NOT NULL UNIQUE REFERENCES "user"(id)
);

CREATE TABLE line_item (
                      id SERIAL NOT NULL PRIMARY KEY,
                      product_id SERIAL NOT NULL UNIQUE REFERENCES "checkout"(id),
                      checkout_id SERIAL NOT NULL UNIQUE REFERENCES "checkout"(id),
                      quantity INT NOT NULL
);
