<?php
include "../utils/db.php";

// Get lesson ID from the query
$lesson_id = isset($_GET['lesson_id']) ? $_GET['lesson_id'] : null;

if (!$lesson_id) {
    die("Lesson ID not provided.");
}

// Fetch lesson details
$lesson_sql = "SELECT title, content FROM Lessons WHERE lesson_id = $lesson_id";
$lesson_result = $conn->query($lesson_sql);

// Check if lesson exists
if ($lesson_result->num_rows == 0) {
    die("Lesson not found.");
}

$lesson = $lesson_result->fetch_assoc();
?>

<!-- Return lesson content (e.g., embedded video or link) -->
<h3><?php echo $lesson['title']; ?></h3>
<p><?php echo $lesson['content']; ?></p>

<!-- Assuming lesson['title'] is a video URL -->
 
<iframe width="100%" height="400" 
        src="<?php echo getYouTubeID($lesson['title']); ?>" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
</iframe>