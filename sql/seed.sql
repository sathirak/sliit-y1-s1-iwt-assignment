USE academix;

INSERT INTO subject (name) VALUES 
('Mathematics'),
('Physics'),
('Computer Science'),
('Business Studies'),
('Chemistry'),
('Biology'),
('History'),
('Psychology'),
('Economics'),
('Engineering');

INSERT INTO user (first_name, last_name, contact_no, date_of_birth, highest_qualification, email, password) VALUES 
('Thilakshi', 'Weliwatta', '0771234567', '1990-05-12', 'B.Sc. Mathematics', 'thilakshi@academix.lk', 'password'),
('Sanjeewa', 'Beddegane', '0719876543', '1993-11-23', 'B.Sc. Criminal FOrensics', 'sanjeewa.b@gmail.com', ':)'),
('Amali', 'Fernando', '0724567890', '1995-07-14', 'B.A. Business Studies', 'amali.fernando@gmail.com', 'password'),
('Shanika', 'Wijesinghe', '0766543210', '1998-03-09', 'A/L Science', 'shanika.wijesinghe@gmail.com', 'password'),
('Ruwan', 'Jayasinghe', '0754321098', '1991-09-18', 'B.Sc. Engineering', 'ruwan.jayasinghe@gmail.com', 'password');


INSERT INTO course_publisher (email, password, contact_no, qualification, current_position, first_name, last_name) VALUES 
('sachintha@academix.lk', 'password', '0711234567', 'M.Sc. System Design', 'Lecturer', 'Sachintha', 'Heshan'),
('publisher2@academix.lk', 'password', '0722345678', 'Ph.D. Physics', 'Senior Lecturer', 'Nadeeka', 'Perera'),
('publisher3@academix.lk', 'password', '0733456789', 'M.Sc. Computer Science', 'Instructor', 'Kumara', 'Dissanayake'),
('publisher4@academix.lk', 'password', '0744567890', 'Ph.D. Economics', 'Professor', 'Thilina', 'Wickramasinghe'),
('publisher5@academix.lk', 'password', '0755678901', 'MBA Business Studies', 'Lecturer', 'Chathura', 'Wijesekara');

INSERT INTO course_reviewer (email, password, contact_no, first_name, last_name, current_position) VALUES 
('kavindu@academix.lk', 'password', '0779876543', 'Kavindu', 'Liyanage', 'Professor'),
('reviewer2@academix.lk', 'password', '0788765432', 'Tharindu', 'Karunaratne', 'Senior Lecturer'),
('reviewer3@academix.lk', 'password', '0797654321', 'Isuru', 'Bandara', 'Lecturer'),
('reviewer4@academix.lk', 'password', '0706543210', 'Udara', 'Rathnayake', 'Instructor'),
('reviewer5@academix.lk', 'password', '0715432109', 'Dilshan', 'Senanayake', 'Lecturer');

INSERT INTO contact_support_agent (email, password, first_name, last_name) VALUES 
('thehara@academix.lk', 'password', 'Thehara', 'Heshanjali'),
('agent2@academix.lk', 'password', 'Mihiri', 'Fonseka'),
('agent3@academix.lk', 'password', 'Anuradha', 'Samarasinghe'),
('agent4@academix.lk', 'password', 'Janaka', 'Rathnayake'),
('agent5@academix.lk', 'password', 'Thushara', 'Rajapaksha');

INSERT INTO admin (email, password, first_name, last_name) VALUES 
('sathira@academix.lk', 'password', 'Sathira', 'Kulathunga'),
('admin2@academix.lk', 'password', 'Kusum', 'Amarasinghe'),
('admin3@academix.lk', 'password', 'Ranjith', 'Weerasinghe'),
('admin4@academix.lk', 'password', 'Sujani', 'Gunawardena'),
('admin5@academix.lk', 'password', 'Ruwanthi', 'Perera');

INSERT INTO inquiries (inquiry_type, full_name, contact_no, email, address, message, status) VALUES 
('General Inquiry', 'Harsha Rathnayake', '0779123456', 'harsha.rathnayake@example.com', 'No. 123, Galle Road, Colombo', 'I have a general question regarding your platform.', 'pending'),
('Payment Inquiry', 'Ruwan Perera', '0778234567', 'ruwan.perera@example.com', 'No. 456, Kandy Road, Kandy', 'Is there any installment payment option?', 'rejected'),
('Course Inquiry', 'Amila Jayasinghe', '0777345678', 'amila.jayasinghe@example.com', 'No. 789, Hill Street, Nuwara Eliya', 'Can I access all courses after payment?', 'pending'),
('Technical Support', 'Samanthi Senanayake', '0776456789', 'samanthi.senanayake@example.com', 'No. 321, Lake Road, Kurunegala', 'My course videos are not playing.', 'pending'),
('Account Issue', 'Thilini Fernando', '0775567890', 'thilini.fernando@example.com', 'No. 654, Park Street, Galle', 'How do I reset my password?', 'checked');

INSERT INTO course (course_name, level, thumbnail_url, description, published_date, price, duration, subject_id, remarks, status, reviewed_time, reviewer_id, publish_time, publisher_id) VALUES 
('Basic Mathematics', 'Beginner', 'math_thumbnail.jpg', 'Introduction to Mathematics', '2023-01-15', 2500.00, 40, 1, 'Great course for beginners', 'pending', '2023-01-12 10:30:00', 1, '2023-01-15 14:00:00', 1),
('Advanced Physics', 'Advanced', 'physics_thumbnail.jpg', 'Learn advanced physics concepts', '2023-03-20', 4500.00, 60, 2, 'Detailed explanations', 'approved', '2023-03-18 12:00:00', 2, '2023-03-20 16:00:00', 2),
('Introduction to Computer Science', 'Beginner', 'cs_thumbnail.jpg', 'Basic computer science principles', '2023-02-10', 3000.00, 50, 3, 'Ideal for beginners', 'approved', '2023-02-08 11:00:00', 3, '2023-02-10 15:00:00', 3),
('Business Management Fundamentals', 'Intermediate', 'business_thumbnail.jpg', 'Understand the basics of business management', '2023-04-05', 4000.00, 45, 4, 'Highly recommended', 'approved', '2023-04-03 13:00:00', 4, '2023-04-05 16:30:00', 4),
('Organic Chemistry', 'Advanced', 'chemistry_thumbnail.jpg', 'Deep dive into organic chemistry', '2023-05-12', 5000.00, 70, 5, 'Great for chemistry students', 'pending', '2023-05-10 14:00:00', 5, '2023-05-12 17:00:00', 5);

INSERT INTO lesson (course_id, video_url, title, description) VALUES 
(1, 'https://www.youtube.com/embed/6pAG3BHurdM', 'Introduction to Numbers', 'Basic concepts of numbers'),
(1, 'https://www.youtube.com/embed/2yplBzPCghA', 'Algebra Fundamentals', 'Learn the basics of algebra'),
(2, 'https://www.youtube.com/embed/cUBz04LlLVk', 'Introduction to Quantum Mechanics', 'Basics of quantum mechanics'),
(3, 'https://www.youtube.com/embed/QyGwxz9R0Ik', 'Introduction to Programming', 'Learn the basics of programming languages'),
(4, 'https://www.youtube.com/embed/b_WGoPaNPMY', 'Introduction to Business Management', 'Fundamentals of business management');

INSERT INTO payment (user_id, course_id, method, amount, paid_time) VALUES 
(1, 1, 'Credit Card', 2500.00, '2023-01-16 12:00:00'),
(2, 2, 'Bank Transfer', 4500.00, '2023-03-21 13:30:00'),
(3, 3, 'Credit Card', 3000.00, '2023-02-11 15:00:00'),
(4, 4, 'Credit Card', 4000.00, '2023-04-06 17:30:00'),
(5, 5, 'Mobile Payment', 5000.00, '2023-05-13 14:45:00');

INSERT INTO user_course (user_id, course_id, completed_at, start_date) VALUES 
(1, 1, '2023-02-10 12:00:00', '2023-01-16'),
(2, 2, '2023-05-10 15:00:00', '2023-03-21'),
(3, 3, NULL, '2023-02-11'),
(4, 4, NULL, '2023-04-06'),
(5, 5, NULL, '2023-05-13');

INSERT INTO user_lesson (user_id, lesson_id, completed_at) VALUES 
(1, 1, '2023-01-17 12:00:00'),
(2, 3, '2023-03-22 12:30:00'),
(3, 4, NULL),
(4, 5, NULL),
(5, 2, '2023-01-20 14:00:00');

INSERT INTO user_contact (user_id, contact_no) VALUES 
(1, '0771234567'),
(2, '0719876543'),
(3, '0724567890'),
(4, '0766543210'),
(5, '0754321098');

INSERT INTO support_ticket (message, email, first_name, last_name, address, inquiry_type, agent_id) VALUES 
('I need help with my course enrollment', 'student1@academix.lk', 'Kamal', 'Perera', '123 Main St, Colombo', 'Course Enrollment', 1),
('My payment failed, please assist', 'student2@academix.lk', 'Nimal', 'Silva', '45 Galle Road, Galle', 'Payment Issue', 2),
('How do I reset my password?', 'student3@academix.lk', 'Amali', 'Fernando', '78 Kandy Road, Kandy', 'Account Issue', 3),
('I cannot access the lessons I paid for', 'student4@academix.lk', 'Shanika', 'Wijesinghe', '12 Lake Road, Nuwara Eliya', 'Technical Issue', 4),
('Need help with course completion', 'student5@academix.lk', 'Ruwan', 'Jayasinghe', '56 Hill Street, Kurunegala', 'Course Issue', 5);

INSERT INTO support_ticket_contact (ticket_id, contact_no) VALUES 
(1, '0771234567'),
(2, '0719876543'),
(3, '0724567890'),
(4, '0766543210'),
(5, '0754321098');
