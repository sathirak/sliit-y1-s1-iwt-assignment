<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>About-Us</title>
    <link rel="stylesheet" href="styles.css">

    <?php
    include "components/layout/html.php";
    ?>

</head>

<body>

    <?php
    include "components/layout/header.php";
    ?>

    <main>
        <div class="main-section">
            <h1>"Every great teacher was once a learner. We're here to support that journey."</h1>
        </div>

        <div class="section">
            <div class="section-content">
                <div class="section-p">
                    <h2>About Us</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="i">
                    <img src="assests/images/aboutus.jpg" alt="about us image">
                </div>
            </div>
        </div>

        <div class="section" style="background-color: #ffb1b1;">
            <div class="section-content">
                <div class="i">
                    <img src="assests/images/ourmission.jpg" alt="our mission image">
                </div>
                <div class="section-p">
                    <h2>Our Mission</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="section-content">
                <div class="section-p">
                    <h2>Our Values</h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                </div>
                <div class="i">
                    <img src="assests/images/ourvalues.jpg" alt="our values image">
                </div>
            </div>
        </div>

    </main>



    <?php
    include "components/layout/footer.php";
    ?>

</body>

</html>