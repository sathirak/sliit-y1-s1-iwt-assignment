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

CREATE TABLE users (
    user_id INT AUTO_INCREMENT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    contact_no VARCHAR(15),
    date_of_birth DATE,
    highest_qualification VARCHAR(100),
    password VARCHAR(255),
    email VARCHAR(100),
    age INT,
    CONSTRAINT pk_user PRIMARY KEY (user_id)
);

CREATE TABLE admin (
    admin_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL
);

CREATE TABLE contact_support_agent (
    agent_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL
);

CREATE TABLE inquiries (
  id INT NOT NULL AUTO_INCREMENT,
  inquiry_type VARCHAR(255) DEFAULT NULL,
  full_name VARCHAR(255) DEFAULT NULL,
  contact_no VARCHAR(20) DEFAULT NULL,
  email VARCHAR(255) DEFAULT NULL,
  address VARCHAR(255) DEFAULT NULL,
  message TEXT,
  status VARCHAR(255) DEFAULT 'Pending',
  created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);