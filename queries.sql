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
    id serial primary key,
    status varchar(255) not null, -- sold/not sold
    price float not null,
    address varchar(255) not null,
    type varchar(255) not null, -- residential/commercial/industrial
    created_on timestamp not null default current_timestamp,
    image_url varchar(255) not null
  );

-- Path: queries.sql
delete from properties;

insert into
  properties (status, price, address, type, image_url)
VALUES
  (
    'sold',
    100000,
    '123 Main St',
    'residential',
    'Images/residential.jpg'
  ),
  (
    'not sold',
    200000,
    '456 Main St',
    'commercial',
    'Images/commercial.jpg'
  ),
  (
    'sold',
    300000,
    '789 Main St',
    'industrial',
    'Images/industrial.jpg'
  );
