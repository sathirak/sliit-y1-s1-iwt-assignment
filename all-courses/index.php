<!DOCTYPE html>

<head>
    <title>AcademiX | All Courses</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/all-courses.css">

    <?php
    include "../components/layout/html.php";
    ?>
</head>

<body>


    <?php
    include "../components/layout/header.php";
    ?>


    <main>
        <h1 class="heading">
            Browse all of our courses
        </h1>

        <div class="search-bar">
            <input type="text" placeholder="Search Courses...">
            <button id="search-button">Search</button>
        </div>

        <div class="courses-list">
            <div class="course-item">
                <p>Physics with Samitha Rathnayake</p>
                <img class="course-thumbnail" src="../assets/images/physics.jpg" alt="">
                <div class="course-details">
                    <button class="go-to-course">Go to Course</button>
                    <p>Subject Name</p>
                </div>
            </div>

            <div class="course-item">
                <p>Introductory Mathematics for A/Ls</p>
                <img class="course-thumbnail" src="../assets/images/maths.jpg" alt="">
                <div class="course-details">
                    <button class="go-to-course">Go to Course</button>
                    <p>Subject Name</p>
                </div>
            </div>
        </div>
    </main>

    <?php
    include "../components/layout/footer.php";
    ?>

</body>

</html>