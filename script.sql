DROP DATABASE IF EXISTS Hotels;
CREATE DATABASE IF NOT EXISTS Hotels;
USE Hotels;

CREATE TABLE Users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE,
    full_name VARCHAR(255) NOT NULL,
    role VARCHAR(100) NOT NULL
);

CREATE TABLE Hotel (
    hotel_id INT AUTO_INCREMENT PRIMARY KEY,
    img_url VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    location VARCHAR(255) NOT NULL,
    description TEXT
);

CREATE TABLE Rooms (
    room_id INT AUTO_INCREMENT PRIMARY KEY,
    room_number VARCHAR(50) NOT NULL,
    type ENUM ('Standard', 'Deluxe', 'Suite', 'Penthouse') ,
    price DECIMAL(10, 2),
    status ENUM ('Available', 'Booked', 'Out Of Service') DEFAULT 'Available',
    hotel_id INT,
    FOREIGN KEY (hotel_id) REFERENCES Hotel(hotel_id) ON DELETE CASCADE
);

CREATE TABLE Reservations (
    reservation_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    room_id INT,
    check_in DATE,
    check_out DATE,
    FOREIGN KEY (user_id) REFERENCES Users(user_id),
    FOREIGN KEY (room_id) REFERENCES Rooms(room_id) ON DELETE CASCADE
);

INSERT INTO Users (username, password, email, full_name, role) VALUES
('admin', 'admin', 'admin@example.com', 'admin', 'Admin User');

INSERT INTO Hotel (img_url, name, location, description) VALUES
('https://pix10.agoda.net/hotelImages/69205/-1/92b20bfd837d8aa27bd52c414f2135b1.png?ce=0&s=414x232&ar=16x9', 'JDM Hotel', 'Philippines, Calamba City', 'The best hotel in the world.'),
('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEFSgkF8mIdifKjdilf-83mkz7KM9yko6T2wDY3l3Jaw&s', 'Cozy Inn', 'San Francisco, CA', 'A small and cozy inn.'),
('https://assets.vogue.com/photos/589127bd7edfa70512d62833/master/w_1600%2Cc_limit/02-hotels-with-open-air-beds.jpg', 'Adrian Hotel', 'Philippines, Batangas City', 'A moderate hotel.');

INSERT INTO Rooms (room_number, type, price, status, hotel_id) VALUES
('101', 'Standard', 100.00, 'Available', 1),
('201', 'Standard', 300.00, 'Available', 2),
('202', 'Standard', 80.00, 'Available', 2),
('301', 'Standard', 250.00, 'Available', 3);

-- INSERT INTO Reservations (user_id, room_id, check_in, check_out) VALUES
-- (1, 2, '2024-06-01', '2024-06-10'),
-- (2, 3, '2024-06-15', '2024-06-20'),
-- (3, 1, '2024-07-01', '2024-07-05');
