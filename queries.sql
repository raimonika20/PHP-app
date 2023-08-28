-- CREATE DATABASE PROPERTY_APP_DB;
create database if not exists property_app_db;

use property_app_db;

-- Path: queries.sql
CREATE TABLE
  users (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
  );

create table
  properties (
    id serial primary key,
    status varchar(255) not null, -- sold/not sold
    price float not null,
    address varchar(255) not null,
    type varchar(255) not null, -- residential/commercial/industrial
    created_on timestamp not null default current_timestamp,
    image_url varchar(255) not null,
    FOREIGN KEY (owner) REFERENCES users (id) ON DELETE CASCADE
  );
