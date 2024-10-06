<?php
    include "../utils/db.php";

    $courseId = $_GET['course_id'] ?? null;
    $lessonId = $_GET['lesson_id'] ?? null;

    if (!is_numeric($courseId)) {
        header('Location: /courses');
        exit;
    }


    if (!is_numeric($courseId)) {
        header('Location: /');
    } 

    $sql = "SELECT course.*, subject.name as subject_name
                FROM course
                JOIN subject ON course.subject_id = subject.subject_id
                WHERE course.course_id = $courseId;
                ";

    $courseResult = $conn->query($sql);

    $course = $courseResult->fetch_assoc();

    $sql = "SELECT * FROM lesson WHERE course_id = $courseId";

    $lessonResults = $conn->query($sql);

    if (!$courseResult) {
        die("Invalid query: " . $conn->error);
    }

    $conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Course</title> 
    <link rel="stylesheet" href="../styles/global.css" />
    <link rel="stylesheet" href="../styles/components.css" /> 
    <link rel="stylesheet" href="../styles/course/watch.css" /> 
</head>

<body>

<?php include "../components/layout/header.php"; ?>

    <div class="container">
        <div class="course-header">
            <h1 class="course-title" id="courseTitle"><?php echo ($course['course_name']); ?></h1>
            <div class="course-info" id="courseInfo">
                Level: <span id="courseLevel"><?php echo ($course['level']); ?></span> | 
                Duration: <span id="courseDuration"><?php echo ($course['duration']); ?></span> hours | 
                Subject: <span id="courseSubject"><?php echo ($course['subject_name']); ?></span>
            </div>
        </div>
        <div class="course-content">
            <div class="lesson-list" id="lessonList">
            <?php
                $index = 0;

                while ($row = $lessonResults->fetch_assoc()) {
                    $index++;
                   
                    if ($row['lesson_id'] == $lessonId) {
                        $selectedLesson = $row;
                    } else if ($index == 1) {
                        $selectedLesson = $row;
                    }

                    echo "<a href='/courses/watch.php?course_id=" . $courseId . "&lesson_id=" . $row['lesson_id'] . "' class='lesson-item'>Lesson " . $index . " : " . $row['title'] . " </a>";
                }
            ?> 
            
            </div>
            <div class="video-container">
              
                    <iframe class="video-player" id="videoPlayer" width="420" height="345" src="<?php echo $selectedLesson['video_url']; ?>">
                    </iframe>
               
                <h2 class="lesson-title" id="lessonTitle"><?php echo $selectedLesson['title']; ?></h2>
                <p class="lesson-description" id="lessonDescription"><?php echo $selectedLesson['description']; ?></p>
            </div>
        </div>
    </div>

    <?php include "../components/layout/footer.php"; ?>
</body>
</html>