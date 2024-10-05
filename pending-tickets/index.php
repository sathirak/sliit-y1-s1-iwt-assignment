<?php
session_start();
if (!isset($_SESSION['user_id']) && !isset($_SESSION['role']) && $_SESSION['role'] != 'support') {
    header("Location: ../sign-in");
}
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
    <link rel="stylesheet" href="../styles/pending-tickets.css">

</head>

<body>

    <?php
    include "../components/layout/header.php";
    ?>

    <main>
        <div class="container">
            <nav class="tabs">
                <ul>
                    <li><a class="active" href="#">Pending Tickets</a></li>
                    <li><a href="#">Checked Tickets</a></li>
                </ul>
            </nav>

            <section>
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
            </section>
        </div>

    </main>



    <?php
    include "../components/layout/footer.php";
    ?>

</body>

</html>