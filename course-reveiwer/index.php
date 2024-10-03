<!DOCTYPE html>

<head>

    <?php
    include "../components/layout/html.php";
    ?>
    <title>AcademiX | All Courses</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/course-reviewer.css">


</head>

<body>


    <?php
    include "../components/layout/header.php";
    ?>
    

<body>
    <div class="container">
        <nav class="sidebar">
            <ul>
                <li><a href="#">Review</a></li>
                <li><a href="#">Watch Courses</a></li>
                <li><a href="#">Approved Courses</a></li>
            </ul>
        </nav>

        <main>
            <section class="review-section">
                <h1>Review in Progress</h1>
                <div class="course-card">
                    <div class="course-icon">
                        <img src="cloud_icon.png" alt="Course">
                    </div>
                    <div class="course-details">
                        <p>Mathematics</p>
                        <p>Course description goes here...</p>
                        <button class="btn-details">View Details</button>
                        <button class="btn-reject">Reject</button>
                        <button class="btn-approve">Approve</button>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-icon">
                        <img src="cloud_icon.png" alt="Course">
                    </div>
                    <div class="course-details">
                        <p>Physics</p>
                        <p>Course description goes here...</p>
                        <button class="btn-details">View Details</button>
                        <button class="btn-reject">Reject</button>
                        <button class="btn-approve">Approve</button>
                    </div>
                </div>

                <div class="course-card">
                    <div class="course-icon">
                        <img src="cloud_icon.png" alt="Course">
                    </div>
                    <div class="course-details">
                        <p>Inforation Technology</p>
                        <p>Course description goes here...</p>
                        <button class="btn-details">View Details</button>
                        <button class="btn-reject">Reject</button>
                        <button class="btn-approve">Approve</button>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <?php
    include "../components/layout/footer.php";
    ?>

</body>

</html>