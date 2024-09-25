<?php
// Database connection
include "../utils/db.php";

// Fetch all courses without search filtering
$courses_sql = "SELECT Courses.course_id, Courses.title, Courses.description, Courses.price, Subjects.name as subject_name, Courses.duration 
                FROM Courses 
                JOIN Subjects ON Courses.subject_id = Subjects.subject_id";

$courses_result = $conn->query($courses_sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "../components/layout/html.php"; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Courses</title>
    <link rel="stylesheet" href="../styles/course/view.css">

    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/components.css" />
    <link rel="stylesheet" href="../styles/all-courses.css" />
    <link rel="stylesheet" href="../styles/components/search-bar.css" /> 

</head>
<body>

<?php include "../components/layout/header.php"; ?>
    <main class="container">
        <h1>Available Courses</h1>

        <!-- Search bar -->
         <div class="search-box-wrapper">
            <input type="text" id="search-box" placeholder="Search for courses or subjects..." onkeyup="searchCourses()">
         </div>
       
        <!-- Display courses in a grid -->
        <div class="courses-grid">
            <?php
            if ($courses_result->num_rows > 0) {
                // Loop through all courses and display them
                while ($course = $courses_result->fetch_assoc()) {
                    $course_id = $course['course_id'];
                    ?>
                    <div class="course-card">
                        <a href="/course/view.php?course_id=<?php echo $course['course_id']; ?>">
                            <h2><?php echo $course['title']; ?></h2>
                        </a>
                        
                        <p><strong>Subject:</strong> <?php echo $course['subject_name']; ?></p>
                        <p><strong>Description:</strong> <?php echo $course['description']; ?></p>
                        <p><strong>Price:</strong> $<?php echo $course['price']; ?></p>
                        <p><strong>Duration:</strong> <?php echo $course['duration']; ?> hours</p>

                        <!-- Fetch lessons for the current course -->
                        <h3>Lessons</h3>
                        <?php
                        $lessons_sql = "SELECT title, content FROM Lessons WHERE course_id = $course_id";
                        $lessons_result = $conn->query($lessons_sql);
                        if ($lessons_result->num_rows > 0) {
                            echo "<ul>";
                            while ($lesson = $lessons_result->fetch_assoc()) {
                                echo "<li><strong>Video URL:</strong> " . $lesson['title'] . " - <strong>Description:</strong> " . $lesson['content'] . "</li>";
                            }
                            echo "</ul>";
                        } else {
                            echo "<p>No lessons available for this course.</p>";
                        }
                        ?>
                    </div>
                    <?php
                }
            } else {
                echo "<p>No courses available at the moment.</p>";
            }

            $conn->close();
            ?>
        </div>
        </main>
 
    <?php
    include "../components/layout/footer.php";
    ?>


    <script>
        function searchCourses() {
            // Get the search input value and convert to lowercase
            const searchInput = document.getElementById('search-box').value.toLowerCase();
            
            // Get all course cards
            const courseCards = document.querySelectorAll('.course-card');
            
            // Loop through each course card and check if it matches the search query
            courseCards.forEach(function(card) {
                // Get the course title and subject name inside each course card
                const courseTitle = card.querySelector('h2').textContent.toLowerCase();
                const courseSubject = card.querySelector('p strong').textContent.toLowerCase();
                
                // Check if the search input matches the title or subject
                if (courseTitle.includes(searchInput) || courseSubject.includes(searchInput)) {
                    card.style.display = 'block'; // Show the course if it matches
                } else {
                    card.style.display = 'none'; // Hide the course if it doesn't match
                }
            });
        }
    </script>
</body>
</html>
