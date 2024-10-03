INSERT INTO course_publisher (email, password, contact_no, qualification, current_position, first_name, last_name)
VALUES
('john.doe@example.com', 'password123', '1234567890', 'MSc Computer Science', 'Lead Developer', 'John', 'Doe'),
('jane.smith@example.com', 'mypassword456', '0987654321', 'BSc Mathematics', 'Data Scientist', 'Jane', 'Smith'),
('mike.jones@example.com', 'securepass789', '1231231234', 'PhD Physics', 'Professor', 'Mike', 'Jones'),
('alice.brown@example.com', 'password890', '9876543210', 'MBA Finance', 'Financial Analyst', 'Alice', 'Brown'),
('emma.johnson@example.com', 'bestpass123', '6543219870', 'BA English', 'Content Writer', 'Emma', 'Johnson'),
('oliver.williams@example.com', 'mypassword321', '3216549870', 'BSc Chemistry', 'Lab Technician', 'Oliver', 'Williams'),
('sophia.taylor@example.com', 'strongpass456', '7894561230', 'MSc Biology', 'Research Scientist', 'Sophia', 'Taylor'),
('liam.davis@example.com', 'mypassword789', '8529637410', 'BEng Mechanical Engineering', 'Mechanical Engineer', 'Liam', 'Davis'),
('ava.martin@example.com', 'securepass654', '1593574560', 'PhD Psychology', 'Clinical Psychologist', 'Ava', 'Martin'),
('noah.thomas@example.com', 'bestpass456', '4561237890', 'BSc Computer Science', 'Software Engineer', 'Noah', 'Thomas');


INSERT INTO course_reviewer (email, password, contact_no, first_name, last_name, current_position) 
VALUES 
('alice.smith@example.com', 'password123', '1234567890', 'Alice', 'Smith', 'Course Director'),
('bob.johnson@example.com', 'securePass!456', '2345678901', 'Bob', 'Johnson', 'Lead Reviewer'),
('charlie.brown@example.com', 'mySecret789', '3456789012', 'Charlie', 'Brown', 'Content Strategist'),
('david.wilson@example.com', 'passW0rd321', '4567890123', 'David', 'Wilson', 'Senior Reviewer'),
('eve.davis@example.com', 'Eve@2024', '5678901234', 'Eve', 'Davis', 'Curriculum Developer'),
('frank.miller@example.com', 'fR@nK5678', '6789012345', 'Frank', 'Miller', 'Quality Assurance Lead'),
('grace.taylor@example.com', 'GracE!2024', '7890123456', 'Grace', 'Taylor', 'Academic Reviewer'),
('henry.martinez@example.com', 'H3nry@pass', '8901234567', 'Henry', 'Martinez', 'Learning Consultant'),
('isabella.jones@example.com', 'IsAbella123!', '9012345678', 'Isabella', 'Jones', 'Program Manager'),
('jackson.brown@example.com', 'Jack$on2024', '0123456789', 'Jackson', 'Brown', 'E-Learning Specialist');

INSERT INTO course ( course_name, level, thumbnail_url, description, published_date, price, duration, subject_id )
VALUES 
( 'Introduction to Python', 'Beginner', 'https://example.com/python.jpg', 'Learn the basics of Python programming', '2024-01-15', 49.99, 30, 101),
( 'Advanced JavaScript', 'Advanced', 'https://example.com/js-adv.jpg', 'Master advanced JavaScript concepts', '2024-02-01', 79.99, 45, 102),
( 'Data Science Fundamentals', 'Intermediate', 'https://example.com/data-sci.jpg', 'Introduction to data science principles', '2024-02-15', 69.99, 40, 103),
( 'Web Development with React', 'Intermediate', 'https://example.com/react.jpg', 'Build modern web applications with React', '2024-03-01', 59.99, 35, 102),
( 'Machine Learning Basics', 'Beginner', 'https://example.com/ml-basics.jpg', 'Get started with machine learning concepts', '2024-03-15', 54.99, 25, 103),
( 'SQL for Beginners', 'Beginner', 'https://example.com/sql-begin.jpg', 'Learn the fundamentals of SQL', '2024-04-01', 39.99, 20, 104),
( 'Cybersecurity Essentials', 'Intermediate', 'https://example.com/cybersec.jpg', 'Understand key cybersecurity principles', '2024-04-15', 74.99, 50, 105),
( 'Mobile App Development', 'Advanced', 'https://example.com/mobile-dev.jpg', 'Create mobile apps for iOS and Android', '2024-05-01', 89.99, 60, 106),
( 'Cloud Computing Basics', 'Beginner', 'https://example.com/cloud-basics.jpg', 'Introduction to cloud computing concepts', '2024-05-15', 44.99, 25, 107),
( 'Artificial Intelligence Ethics', 'Advanced', 'https://example.com/ai-ethics.jpg', 'Explore ethical considerations in AI', '2024-06-01', 64.99, 30, 108);