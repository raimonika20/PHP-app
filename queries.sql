drop database if exists property_app_db;

-- CREATE DATABASE PROPERTY_APP_DB;
create database if not exists property_app_db;

use property_app_db;

-- Path: queries.sql
CREATE TABLE
  if not exists users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
  );

create table
  if not exists properties (
    id SERIAL primary key,
    status varchar(255) not null, -- sold/not sold
    description varchar(255) not null,
    price float not null,
    address varchar(255) not null,
    type varchar(255) not null, -- residential/commercial/industrial
    created_on timestamp not null default current_timestamp,
    image_url varchar(255) not null
  );

-- Path: queries.sql
delete from properties;

insert into
  properties (status, description, price, address, type, image_url)
VALUES
  (
    'sold',
    '3 BHK Flat For Sale',
    3500000,
    'Logix Blossom Greens, Sector 143 , Noida.',
    'residential',
    'Images/residential.jpg'
  ),
  (
    'not sold',
    '300 Sq.Ft, Office Space For Sale ',
    1800000,
    ' Fairfox EON, Sector 140A , Noida',
    'commercial',
    'Images/commercial.jpg'
  ),
  (
    'not sold',
    '1330 Sq.Ft, Commercial Showroom For Sale ',
    1.9999999,
    'Transport Nagar, Udaipur',
    'commercial',
    'Images/commercial.jpg'
  ),
  (
    'sold',
    '11,040 Sq.Ft, Godown/Warehouse ',
    60000000,
    'Tiruvottiyur, Chennai',
    'industrial',
    'Images/industrial.jpg'
  );
