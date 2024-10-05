-- Create subject table first as it has no foreign keys
CREATE TABLE subject (
    subject_id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
);

-- Create user table as it's referenced by other tables
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

-- Create course_publisher table before course
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

-- Create course_reviewer table before course
CREATE TABLE course_reviewer (
    reviewer_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    contact_no VARCHAR(20),
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    current_position VARCHAR(100)
);

-- Create course table after subject, publisher, and reviewer
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

-- Create lesson table after course
CREATE TABLE lesson (
    lesson_id INT PRIMARY KEY AUTO_INCREMENT,
    course_id INT,
    video_url VARCHAR(255),
    title VARCHAR(255),
    description TEXT,
    FOREIGN KEY (course_id) REFERENCES course(course_id)
);

-- Create payment table after user and course
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

-- Create user_course table after user and course
CREATE TABLE user_course (
    user_id INT,
    course_id INT,
    completed_at DATETIME,
    start_date DATE,
    PRIMARY KEY (user_id, course_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (course_id) REFERENCES course(course_id)
);

-- Create user_lesson table after user and lesson
CREATE TABLE user_lesson (
    user_id INT,
    lesson_id INT,
    completed_at DATETIME,
    PRIMARY KEY (user_id, lesson_id),
    FOREIGN KEY (user_id) REFERENCES user(user_id),
    FOREIGN KEY (lesson_id) REFERENCES lesson(lesson_id)
);

-- Create user_contact table after user
CREATE TABLE user_contact (
    user_id INT,
    contact_no VARCHAR(20),
    PRIMARY KEY (user_id, contact_no),
    FOREIGN KEY (user_id) REFERENCES user(user_id)
);

-- Create support_ticket table after contact_support_agent
CREATE TABLE contact_support_agent (
    agent_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    first_name VARCHAR(100),
    last_name VARCHAR(100)
);

-- Create support_ticket after contact_support_agent
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

-- Create support_ticket_contact after support_ticket
CREATE TABLE support_ticket_contact (
    ticket_id INT,
    contact_no VARCHAR(20),
    PRIMARY KEY (ticket_id, contact_no),
    FOREIGN KEY (ticket_id) REFERENCES support_ticket(ticket_id)
);

-- Create admin table (standalone)
CREATE TABLE admin (
    admin_id INT PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    first_name VARCHAR(100),
    last_name VARCHAR(100)
);
