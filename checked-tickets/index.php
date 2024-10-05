<?php
session_start();

include '../utils/db.php';

// SQL query to fetch tickets with status 'New'
$sql = "SELECT id, inquiry_type, full_name, contact_no, email, address, message, status FROM inquiries WHERE status = 'Checked' OR status = 'Rejected'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "../components/layout/html.php"; ?>
    <title>Pending Tickets</title>
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/components.css">
    <link rel="stylesheet" href="../styles/pending-tickets.css">
</head>

<body>

    <?php include "../components/layout/header.php"; ?>

    <main>
        <div class="container">
            <nav1>
                <ul>
                    <li><a href="/pending-tickets">Pending Tickets</a></li>
                    <li><a class="active"  href="/checked-tickets">Checked Tickets</a></li>
                </ul>
            </nav1>

            <main-section>
                <h2>New Support Tickets</h2>
                <div class="ticket-grid">
                    <?php
                    // Check if there are records
                    if ($result->num_rows > 0) {
                        // Loop through each ticket and display
                        while ($ticket = $result->fetch_assoc()) {
                    ?>
                        <div class="ticket">
                            <h3><?php echo $ticket['inquiry_type']; ?></h3>
                            <p><strong>Name:</strong> <?php echo $ticket['full_name']; ?></p>
                            <p><strong>Contact Number:</strong> <?php echo $ticket['contact_no']; ?></p>
                            <p><strong>Email:</strong> <?php echo $ticket['email']; ?></p>
                            <p><strong>Address:</strong> <?php echo $ticket['address']; ?></p>
                            <p><strong>Status:</strong>                                 
                            <?php                                 
                            if ($ticket['status'] == 'Checked') {                
                                                    echo '<button class="status-checked">Checked</button>';                     
                                                               } elseif ($ticket['status'] == 'Rejected') {      
                                                                                              echo '<button class="status-rejected">Rejected</button>';                
                                                                                                              }                                ?>                            </p>
                            <div class="ticket-actions">
                            <button class="view-btn"  data-id="<?php echo $ticket['id']; ?>" 
                                        data-inquiry-type="<?php echo $ticket['inquiry_type']; ?>" 
                                        data-full-name="<?php echo $ticket['full_name']; ?>" 
                                        data-contact-no="<?php echo $ticket['contact_no']; ?>" 
                                        data-email="<?php echo $ticket['email']; ?>" 
                                        data-address="<?php echo $ticket['address']; ?>" 
                                        data-message="<?php echo $ticket['message']; ?>">
                                    View
                                </button>
                                
                     
                            </div>
                        </div>
                    <?php
                        }
                    } else {
                        echo "<p>No new tickets available.</p>";
                    }

                    // Close connection
                    $conn->close();
                    ?>
                </div>
            </main-section>

        </div>
    </main>

    <!-- Modal Structure -->
    <div id="ticketModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h3 id="modal-inquiry-type"></h3>
            <p><strong>Name:</strong> <span id="modal-full-name"></span></p>
            <p><strong>Contact Number:</strong> <span id="modal-contact-no"></span></p>
            <p><strong>Email:</strong> <span id="modal-email"></span></p>
            <p><strong>Address:</strong> <span id="modal-address"></span></p>
            <p><strong>Message:</strong> <span id="modal-message"></span></p>
        </div>
    </div>

    <?php include "../components/layout/footer.php"; ?>

    <!-- Include the external JavaScript file -->
    <script src="../scripts/tickets.js"></script>

</body>

</html>
