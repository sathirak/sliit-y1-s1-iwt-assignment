<!DOCTYPE html>

<head>
    <title>AcademiX | All Courses</title>
    <link rel="stylesheet" href="styles.css">
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

    <?php
    include "../components/layout/footer.php";
    ?>

</body>

</html>