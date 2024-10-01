<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include "../components/layout/html.php";
    ?>

    <title>About-Us</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="pending-tickets.css">

</head>

<body>

    <?php
    include "../components/layout/header.php";
    ?>

    <main>
    <div class="container">
        <nav1>
            <ul>
                <li><a class="active" href="#">Pending Tickets</a></li>
                <li><a href="#">Checked Tickets</a></li>
            </ul>
        </nav1>

        <main-section>
            <h2>New Support Tickets</h2>
            <div class="ticket">
                <p class="ticket-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor.</p>
                <div class="ticket-actions">
                    <button class="view-details">View Details</button>
                    <button class="checked">Checked</button>
                </div>
            </div>
            <div class="ticket">
                <p class="ticket-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor.</p>
                <div class="ticket-actions">
                    <button class="view-details">View Details</button>
                    <button class="checked">Checked</button>
                </div>
            </div>
            <div class="ticket">
                <p class="ticket-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor.</p>
                <div class="ticket-actions">
                    <button class="view-details">View Details</button>
                    <button class="checked">Checked</button>
                </div>
            </div>
            <div class="ticket">
                <p class="ticket-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor.</p>
                <div class="ticket-actions">
                    <button class="view-details">View Details</button>
                    <button class="checked">Checked</button>
                </div>
            </div>
            <div class="ticket">
                <p class="ticket-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor.</p>
                <div class="ticket-actions">
                    <button class="view-details">View Details</button>
                    <button class="checked">Checked</button>
                </div>
            </div>
            <div class="ticket">
                <p class="ticket-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque auctor.</p>
                <div class="ticket-actions">
                    <button class="view-details">View Details</button>
                    <button class="checked">Checked</button>
                </div>
            </div>
        </main-section>
    </div>

    </main>



    <?php
    include "../components/layout/footer.php";
    ?>

</body>

</html>