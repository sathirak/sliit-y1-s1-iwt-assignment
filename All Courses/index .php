<!DOCTYPE html>
<head>
    <title>Academix</title>

    <?php
    include "../components/html.php";
    ?>

    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <main>
        <h2>Browse all of our courses</h2>
        <div class="search-bar">
            <input type="text" placeholder="Search Courses...">
            <button id="searchBtn">🔍</button>
        </div>
        
        <div class="courses-list">
            <div class="course-item">
                <p>Course Title 1</p>
                <div class="course-thumbnail">Course</div>
                <div class="course-details">
                    <button class="go-to-course">Go to Course</button>
                    <p>Subject Name</p>
                </div>
            </div>

            <div class="course-item">
                <p>Course Title 2</p>
                <div class="course-thumbnail">Course</div>
                <div class="course-details">
                    <button class="go-to-course">Go to Course</button>
                    <p>Subject Name</p>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <div class="contact-info">
            <p>Contact Us</p>
            <p>Email: support@academix.co.uk</p>
            <p>Phone: +941234567</p>
        </div>
        <div class="about-info">
            <p>About Us</p>
            <a href="#">Careers</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Journey</a>
            <a href="#">Terms and Conditions</a>
        </div>
        <div class="social-links">
            <p>Get in touch</p>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">YouTube</a>
            <a href="#">Twitter</a>
        </div>
    </footer>

</body>
</html>