<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../components/html.php";
    ?>

    <title>About-Us</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/about-us.css">

</head>

<body>

    <?php
    include "../components/header.php";
    ?>

    <main>
        <div class="main-section">
            <h1>"Every great teacher was once a learner. We're here to support that journey."</h1>
        </div>

        <div class="section">
            <div class="section-content">
                <div class="section-p">
                    <h2>About Us</h2>
                    <p>
                        Academix is a new online space designed to promote the professional development for educators regardless of the phase of their career. The goal is to equip teachers with relevant skills, tools, and confidence to effectively assist and motivate their students in the context of today’s challenges in education. In order to help teachers remain up to date and their classrooms active learning environments, we provide various expert courses, workshops and community driven learning.
                    </p>
                </div>
                <div class="i">
                    <img src="../assets/images/aboutus.jpg" alt="about us image">
                </div>
            </div>
        </div>

        <div class="section" style="background-color: #cce4fc;">
            <div class="section-content">
                <div class="i">
                    <img src="../assets/images/ourmission.jpg" alt="our mission image">
                </div>
                <div class="section-p">
                    <h2>Our Mission</h2>
                    <p>We gladly extend every effort to help the teachers by providing them with easy access to training materials of the highest standard squared on continuous learning and skill progression. We are determined to demolish the bridge that separates pedestrian ways from Ways How to Teaching and give everyone any teacher aid for them to make proper lessons meaningful and enjoyable for every student.
                    </p>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-content">
                <div class="section-p">
                    <h2>Our Values</h2>
                    <p>Our Values To hear the voice of the students
                        <br><br>
                        Excellence: The educational materials we produce are of the highest quality and focus on a range of today`s teachers' requirements.
                        <br><br>
                        Collaboration: We strive to build relationships among professionals so that they share an understanding of each other and develop professionally.
                        <br><br>
                        Innovation: When we face new educational problems we find ways to solve them which includes the up-to-date approaches and devices.
                    </p>
                </div>
                <div class="i">
                    <img src="../assets/images/ourvalues.jpg" alt="our values image">
                </div>
            </div>
        </div>

    </main>



    <?php
    include "../components/footer.php";
    ?>

</body>

</html>