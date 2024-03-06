-- Lucky Lemon Cafe

-- Drop potentially lingering tables 
DROP TABLE IF EXISTS food;
DROP TABLE IF EXISTS drink;


-- Create new  tables
CREATE TABLE food (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    allergy_info TEXT,
    price DECIMAL(6, 2),
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create tables
CREATE TABLE drink (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    allergy_info TEXT,
    price DECIMAL(6, 2),
    updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

