-- Create Admin Table
CREATE TABLE IF NOT EXISTS admintable (
    id INT(11) NOT NULL,
    username VARCHAR(255),
    pass VARCHAR(255),
    PRIMARY KEY (id)
);

-- Create Student Table
CREATE TABLE IF NOT EXISTS studenttable (
    id INT(11) AUTO_INCREMENT,
    firstName VARCHAR(255),
    lastName VARCHAR(255),
    nationality VARCHAR(255),
    stat VARCHAR(255),
    LGA VARCHAR(255),
    PRIMARY KEY (id)
);

-- Insert Admin Data

INSERT INTO admintable (username, pass) VALUES ('AbdulmalikDev', 'AbdulmalikDev@306');

-- Display Message
SELECT 'All Tables Created Successfully and admin data were inserted successfully' AS message;
