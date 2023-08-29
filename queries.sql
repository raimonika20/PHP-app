drop database if exists property_app_db;

-- CREATE DATABASE PROPERTY_APP_DB;
create database if not exists property_app_db;

use property_app_db;

-- Path: queries.sql
create table
  if not exists properties (
    id SERIAL primary key,
    status varchar(255) not null, -- sold/not sold
    description varchar(255) not null,
    price varchar(255) not null,
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
    '35,00,000',
    'Logix Blossom Greens, Sector 143 , Noida.',
    'residential',
    'Images/residential.jpg'
  ),
  (
    'not sold',
    '4 BHK Villa For Sale',
    '80,00,000',
    'Sector 107 , Noida',
    'residential',
    'Images/residential2.jpg'
  ),
  (
    'not sold',
    '3 BHK Villa For Sale',
   '42,00,000',
    'Noida Extension Block A, Noida',
    'residential',
    'Images/residential3.jpg'
  ),
  (
    'sold',
    '5 BHK Villa For Sale',
    '2,05,00,000',
    'Sector 79 , Noida',
    'residential',
    'Images/residential4.jpg'
  ),
  (
    'not sold',
    '10 BHK Villa For Sale',
    '4,50,00,000',
    'Sector 19 , Noida.',
    'residential',
    'Images/residential5.jpg'
  ),
  (
    'not sold',
    '3 BHK Villa For Sale',
    '75,00,000',
    'Noida Extension , Noida.',
    'residential',
    'Images/residential7.jpg'
  ),
  (
    'sold',
    '7 BHK Villa For Sale',
    '2,00,00,000',
    'Sector 70 , Noida.',
    'residential',
    'Images/residential6.jpg'
  ),
  (
    'not sold',
    '300 Sq.Ft, Office Space For Sale ',
    '18,00,000',
    ' Fairfox EON, Sector 140A , Noida',
    'commercial',
    'Images/commercial.jpg'
  ),
  (
    'not sold',
    '400 Sq.Ft, Office Space For Sale ',
    '19,00,000',
    ' Gurugram, Delhi',
    'commercial',
    'Images/commercial2.jpg'
  ),
  (
    'not sold',
    '1330 Sq.Ft, Commercial Showroom For Sale ',
    '62,00,000',
    'Transport Nagar, Udaipur',
    'commercial',
    'Images/commercial5.jpg'
  ),
   (
    'not sold',
    '3786 Sq.Ft, Commercial Showroom For Sale ',
    '12,49,00,000',
    'M3M The Cullinan Avenue, Sector 94 , Noida',
    'commercial',
    'Images/commercial4.jpg'
  ),
   (
    'not sold',
    '380 Sq.Ft, Commercial Showroom For Sale ',
    '79,00,000',
    ' Fairfox EON, Sector 140A , Noida',
    'commercial',
    'Images/commercial3.jpg'
  ),
  (
    'not sold',
    '12,040 Sq.Ft, Godown/Warehouse ',
    '7,00,00,000',
    'Kottayam, Kerala',
    'industrial',
    'Images/industrial.jpg'
  ),
   (
    'not sold',
    '11,040 Sq.Ft, Godown/Warehouse ',
    '6,00,00,000',
    'Tiruvottiyur, Chennai',
    'industrial',
    'Images/industrial2.jpg'
  ),
   (
    'not sold',
    '8000 Sq.Ft, Godown/Warehouse ',
    '80,00,000',
    'Sector 63, Noida',
    'industrial',
    'Images/industrial3.jpg'
  ),
  (
    'not sold',
    '12,340 Sq.Ft, Godown/Warehouse ',
    '8,20,00,000',
    'Sector 67, Noida',
    'industrial',
    'Images/industrial4.jpg'
  );
