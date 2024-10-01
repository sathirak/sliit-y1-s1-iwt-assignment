<!DOCTYPE html>

<head>

    <?php
    include "../components/layout/html.php";
    ?>
    <title>AcademiX | All Courses</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/approved-course.css">


</head>

<body>


    <?php
    include "../components/layout/header.php";
    ?>
    

<body>
    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="index.php">Review</a></li>
                <li><a href="#">Watch Courses</a></li>
                <li><a href="index.php">Approved Courses</a></li>
            </ul>
        </nav>

        <main>
        </h1>
        <div class="courses-list">
            <div class="course-box">
            <div class="course-item">
                <div class="course-container">
                    <div>
                        <p class="course-title">Physics with Samitha Rathnayake</p>
                        <p class="course-subject">Physics</p>
                    </div>

                    <button class="view-details">View Details</button>
                </div>

                <img class="course-thumbnail" src="../assets/images/physics.jpg" alt="">
            </div>
            </div>

            <div class="course-box">
            <div class="course-item">
                <div class="course-container">
                    <div>
                        <p class="course-title">Introductory Mathematics for A/Ls</p>
                        <p class="course-subject">Mathematics</p>
                    </div>

                    <button class="view-details">View Details</button>               
                </div>

                <img class="course-thumbnail" src="../assets/images/maths.jpg" alt="">
            </div>
            </div>

            <div class="course-box">
            <div class="course-item">
                <div class="course-container">
                    <div>
                        <p class="course-title">Economics for A/Ls</p>
                        <p class="course-subject">Economics</p>
                    </div>

                    <button class="view-details">View Details</button>  
                </div>

                <img class="course-thumbnail" src="../assets/images/econ.jpeg" alt="">
            </div>
            </div>

            <div class="course-box">
            <div class="course-item">
                <div class="course-container">
                    <div>
                        <p class="course-title">Chemistry fot A/Ls</p>
                        <p class="course-subject">Chemistry</p>
                    </div>

                    <button class="view-details">View Details</button>  
                </div>

                <img class="course-thumbnail" src="../assets/images/chem.jpeg" alt="">
            </div>
            </div>

        </div>
    </main>

    </div>

    <?php
    include "../components/layout/footer.php";
    ?>

</body>

</html>