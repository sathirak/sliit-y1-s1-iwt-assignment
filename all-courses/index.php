<!DOCTYPE html>

<head>

    <?php
    include "../components/layout/html.php";
    ?>
    <title>AcademiX | All Courses</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/all-courses.css">
    <link rel="stylesheet" href="../styles/components/search-bar.css">

</head>

<body>


    <?php
    include "../components/layout/header.php";
    ?>


    <main>
        <h1 class="heading">
            Browse all of our courses
        </h1>

        <div class="search-bar search-bar-margin">
            <input type="text" placeholder="Search Courses...">
            <button id="search-button">Search</button>
        </div>

        <div class="courses-list">
            <div class="course-item">
                <div class="course-container">
                    <div>
                        <p class="course-title">Physics with Samitha Rathnayake</p>
                        <p class="course-subject">Subject Name</p>
                    </div>

                    <button class="go-to-course">Go to Course</button>
                </div>

                <img class="course-thumbnail" src="../assets/images/physics.jpg" alt="">
            </div>

            <div class="course-item">
                <div class="course-container">
                    <div>
                        <p class="course-title">Introductory Mathematics for A/Ls</p>
                        <p class="course-subject">Mathematics</p>
                    </div>

                    <button class="go-to-course">Go to Course</button>
                </div>

                <img class="course-thumbnail" src="../assets/images/maths.jpg" alt="">
            </div>

        </div>
    </main>

    <?php
    include "../components/layout/footer.php";
    ?>

</body>

</html>