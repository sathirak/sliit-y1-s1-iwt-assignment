CREATE TABLE course (
    course_id INT AUTO_INCREMENT,
    course_name VARCHAR(255) NOT NULL,
    level VARCHAR(50),
    thumbnail_url VARCHAR(255),
    description TEXT,
    published_date DATE,
    price DECIMAL(10, 2),
    duration INT,
    subject_id INT,
    CONSTRAINT pk_course PRIMARY KEY (course_id)
);

CREATE TABLE course_reviewer (
    reviewer_id INT AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    contact_no VARCHAR(15),
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    current_position VARCHAR(255),
    CONSTRAINT pk_course_reviewer PRIMARY KEY (reviewer_id)
);

CREATE TABLE course_publisher (
    publisher_id INT AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    contact_no VARCHAR(20),
    qualification VARCHAR(255),
    current_position VARCHAR(255),
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    CONSTRAINT pk_course_publisher PRIMARY KEY (publisher_id)
);
