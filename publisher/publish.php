<?php
session_start();
if (!isset($_SESSION['user_id']) && !isset($_SESSION['role']) && $_SESSION['role'] != 'publisher') {
    header("Location: ../sign-in");
}


include "../utils/db.php";

$sql = "SELECT * from subject;";

$subjectResults = $conn->query($sql);
if ($_POST) {
    try {

        $course_name = $_POST['course_name'];
        $description = $_POST['description'];
        $level = $_POST['level'];
        $price = $_POST['price'];
        $duration = $_POST['duration'];
        $subject = $_POST['subject'];

        $sql = "INSERT INTO course (course_name, description, level, price, duration, subject_id, status) 
        VALUES ('$course_name', '$description', '$level', '$price', '$duration', $subject, 'pending');";

        if ($conn->query($sql) === TRUE) {

            $course_id = $conn->insert_id;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        if (isset($_POST['lessons']) && is_array($_POST['lessons'])) {
            $values = array();
            foreach ($_POST['lessons'] as $lesson) {
                $lesson_title = $lesson['title'];
                $lesson_description = $lesson['description'];
                $lesson_video_url = $lesson['video_url'];
                array_push($values, "($course_id, '$lesson_title', '$lesson_description', '$lesson_video_url')");
            }
            $sql = "INSERT INTO lesson (course_id, title, description, video_url) VALUES " . join(',', $values) . ";";
            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        echo "New course created successfully.";
    } catch (Exception $e) {
        echo "Course creation failed! Please try again." . $e;
    }
    $conn->close();
}