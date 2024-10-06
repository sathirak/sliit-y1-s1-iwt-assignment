CREATE DATABASE academix;

USE academix;

CREATE TABLE subject (
    subject_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

CREATE TABLE user (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    contact_no VARCHAR(20),
    date_of_birth DATE,
    highest_qualification VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE course_publisher (
    publisher_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    contact_no VARCHAR(20),
    qualification VARCHAR(100),
    current_position VARCHAR(100),
    first_name VARCHAR(100),
    last_name VARCHAR(100)
);

CREATE TABLE course_reviewer (
    reviewer_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    contact_no VARCHAR(20),
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    current_position VARCHAR(100)
);

CREATE TABLE contact_support_agent (
    agent_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    first_name VARCHAR(100),
    last_name VARCHAR(100)
);

CREATE TABLE admin (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    first_name VARCHAR(100),
    last_name VARCHAR(100)
);

CREATE TABLE inquiries (
  id INT NOT NULL AUTO_INCREMENT,
  inquiry_type VARCHAR(255) DEFAULT NULL,
  full_name VARCHAR(255) DEFAULT NULL,
  contact_no VARCHAR(20) DEFAULT NULL,
  email VARCHAR(255) DEFAULT NULL,
  address VARCHAR(255) DEFAULT NULL,
  message TEXT,
  status VARCHAR(255) DEFAULT 'pending',
  created_at TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id)
);

CREATE TABLE course (
    course_id INT PRIMARY KEY AUTO_INCREMENT,
    course_name VARCHAR(255),
    level VARCHAR(50),
    thumbnail_url VARCHAR(255),
    description TEXT,
    published_date DATE,
    price DECIMAL(10, 2),
    duration INT,
    subject_id INT,
    remarks TEXT,
    status VARCHAR(50),
    reviewed_time DATETIME,
    reviewer_id INT,
    publish_time DATETIME,
    publisher_id INT,
    FOREIGN KEY (subject_id) REFERENCES subject(subject_id),
    FOREIGN KEY (reviewer_id) REFERENCES course_reviewer(reviewer_id),
    FOREIGN KEY (publisher_id) REFERENCES course_publisher(publisher_id)
);

CREATE TABLE lesson (
    lesson_id INT PRIMARY KEY AUTO_INCREMENT,
    course_id INT,
    video_url VARCHAR(255),
    title VARCHAR(255),
    description TEXT,
    FOREIGN KEY (course_id) REFERENCES course(course_id)
);

CREATE TABLE payment (
    payment_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    course_id INT,
    method VARCHAR(50),
    amount DECIMAL(10, 2),
    paid_time DATETIME,
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (course_id) REFERENCES course(course_id)
);

CREATE TABLE user_course (
    user_id INT,
    course_id INT,
    completed_at DATETIME,
    start_date DATE,
    PRIMARY KEY (user_id, course_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (course_id) REFERENCES course(course_id)
);

CREATE TABLE user_lesson (
    user_id INT,
    lesson_id INT,
    completed_at DATETIME,
    PRIMARY KEY (user_id, lesson_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (lesson_id) REFERENCES lesson(lesson_id)
);

CREATE TABLE user_contact (
    user_id INT,
    contact_no VARCHAR(20),
    PRIMARY KEY (user_id, contact_no),
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);



CREATE TABLE support_ticket (
    ticket_id INT PRIMARY KEY AUTO_INCREMENT,
    message TEXT,
    email VARCHAR(100),
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    address VARCHAR(255),
    inquiry_type VARCHAR(100),
    agent_id INT,
    FOREIGN KEY (agent_id) REFERENCES contact_support_agent(agent_id)
);

CREATE TABLE support_ticket_contact (
    ticket_id INT,
    contact_no VARCHAR(20),
    PRIMARY KEY (ticket_id, contact_no),
    FOREIGN KEY (ticket_id) REFERENCES support_ticket(ticket_id)
);
