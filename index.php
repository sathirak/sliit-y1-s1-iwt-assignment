<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Academix</title>

    <?php include "components/html.php";  ?>
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/components.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>

    <?php
    include "components/header.php";
    ?>

    <main>
        <div class="main-container">
            <div>
                <h1 class="heading">
                    Find Your Perfect <br> Course And Improve <br> Your Skills
                </h1>
                <p class="main-para">Unlock your potential with expertly designed courses tailored for teachers of all
                    levels. Learn innovative strategies, master new technologies, and enhance your teaching techniques
                    with guidance from top educators and industry professionals.</p>
                    <br>
                <a href="/courses"><button class="button">Get Started</button></a>
            </div>
            <img class="main-banner" src="assets/images/mb.png" alt="Main Banner of Academix">
        </div>

    </main>



    <?php
    include "components/footer.php";
    ?>

</body>

</html>