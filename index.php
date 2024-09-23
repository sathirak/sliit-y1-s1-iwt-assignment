<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Academix</title>

    <?php
    include "components/layout/html.php";
    ?>
    <link rel="stylesheet" href="styles/global.css">
    <link rel="stylesheet" href="styles/components.css">
</head>

<body>

    <?php
    include "components/layout/header.php";
    ?>

    <main>
        <div class="main-container">
            <div>
                <h1 class="heading">
                    Empowering Educators, Shaping Futures
                </h1>
                <p class="main-para">Learn from hundreds of educational courses made by seasoned professionals to improve your teaching skills</p>
            </div>


            <img class="main-banner" src="/assets/images/main.jpg" alt="Main Banner of Academix">
        </div>

    </main>



    <?php
    include "components/layout/footer.php";
    ?>

</body>

</html>