CREATE DATABASE utdpizzastore;

USE utdpizzastore;

CREATE TABLE customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(255) NOT NULL,
    lname VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    contactNo VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    verpassword VARCHAR(255) NOT NULL,
    addline1 VARCHAR(255) NOT NULL,
    addline2 VARCHAR(255) DEFAULT NULL,
    zipcode VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    state VARCHAR(255) NOT NULL,
    country VARCHAR(255) NOT NULL
);

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('John', 'Doe', 'johndoe@example.com', '555-555-5555', 'password', 'password', '123 Main St', 'Apt 456', '12345', 'New York', 'NY', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Jane', 'Smith', 'janesmith@example.com', '555-555-5556', 'password', 'password', '456 Park Ave', '', '67890', 'Los Angeles', 'CA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Bob', 'Johnson', 'bobjohnson@example.com', '555-555-5557', 'password', 'password', '789 Elm St', '', '09876', 'Chicago', 'IL', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Emily', 'Brown', 'emilybrown@example.com', '555-555-5558', 'password', 'password', '123 Oak St', '', '54321', 'Houston', 'TX', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Michael', 'Davis', 'michaeldavis@example.com', '555-555-5559', 'password', 'password', '456 Pine St', '', '246810', 'Seattle', 'WA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword addline1, addline2, zipcode, city, state, country) VALUES
('Ashley', 'Miller', 'ashleymiller@example.com', '555-555-5560', 'password', 'password', '111 Maple St', '', '13579', 'Phoenix', 'AZ', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword addline1, addline2, zipcode, city, state, country) VALUES
('Joshua', 'Moore', 'joshuamoore@example.com', '555-555-5561', 'password', 'password', '222 Cedar St', '', '24680', 'Denver', 'CO', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword addline1, addline2, zipcode, city, state, country) VALUES
('Matthew', 'Taylor', 'matthewtaylor@example.com', '555-555-5562', 'password', 'password', '333 Birch St', '', '36912', 'Miami', 'FL', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Jacob', 'Anderson', 'jacobanderson@example.com', '555-555-5563', 'password', 'password', '444 Elm St', '', '25874', 'Minneapolis', 'MN', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword addline1, addline2, zipcode, city, state, country) VALUES
('Nicholas', 'Thomas', 'nicholasthomas@example.com', '555-555-5564', 'password', 'password', '555 Oak St', '', '97531', 'New Orleans', 'LA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Emily', 'Johnson', 'emilyjohnson@example.com', '555-555-5565', 'password', 'password', '777 Pine St', '', '33467', 'Miami', 'FL', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Jacob', 'Williams', 'jacobwilliams@example.com', '555-555-5566', 'password', 'password', '888 Cedar St', '', '46578', 'Seattle', 'WA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Samantha', 'Jones', 'samanthajones@example.com', '555-555-5567', 'password', 'password', '999 Birch St', '', '74489', 'Houston', 'TX', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Ashley', 'Brown', 'ashleybrown@example.com', '555-555-5568', 'password', 'password', '1010 Maple St', '', '22199', 'Boston', 'MA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Mary', 'Johnson', 'maryjohnson@example.com', '555-555-5558', 'password', 'password', '111 Pine St', 'Apt 12', '54321', 'Seattle', 'WA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('David', 'Williams', 'davidwilliams@example.com', '555-555-5559', 'password', 'password', '222 Cedar St', '', '22222', 'Houston', 'TX', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Jessica', 'Jones', 'jessicajones@example.com', '555-555-5560', 'password', 'password', '333 Birch St', '', '33333', 'Phoenix', 'AZ', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Richard', 'Brown', 'richardbrown@example.com', '555-555-5561', 'password', 'password', '444 Maple St', 'Apt 7', '44444', 'Philadelphia', 'PA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Ashley', 'Davis', 'ashleydavis@example.com', '555-555-5562', 'password', 'password', '555 Cherry St', '', '55555', 'San Diego', 'CA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Emily', 'Green', 'emilygreen@example.com', '555-555-5565', 'password', 'password', '777 Pine St', '', '84621', 'Seattle', 'WA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Michael', 'Brown', 'michaelbrown@example.com', '555-555-5566', 'password', 'password', '999 Maple St', '', '63857', 'Houston', 'TX', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Samantha', 'White', 'samanthawhite@example.com', '555-555-5567', 'password', 'password', '111 Cedar St', '', '23456', 'Boston', 'MA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Christopher', 'Harris', 'christopherharris@example.com', '555-555-5568', 'password', 'password', '222 Birch St', '', '87654', 'San Francisco', 'CA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Emily', 'Talbot', 'emilytalbot@example.com', '555-555-5558', 'password', 'password', '111 Pine St', '', '12345', 'San Francisco', 'CA', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Michael', 'Williams', 'michaelwilliams@example.com', '555-555-5559', 'password', 'password', '222 Maple St', '', '67890', 'Houston', 'TX', 'USA');

INSERT INTO customers (fname, lname, email, contactNo, password, verpassword, addline1, addline2, zipcode, city, state, country) VALUES
('Jessica', 'Squire', 'jessicasquire@example.com', '555-555-5560', 'password', 'password', '333 Cedar St', '', '09876', 'Seattle', 'WA', 'USA');
